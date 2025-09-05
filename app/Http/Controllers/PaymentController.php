<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class PaymentController extends Controller
{
    public function makePhonePePayment(Request $request)
    {
        // Get the amount from session or default to 100
        $amount = session()->get('phonepe_amount') ?? 100;
    
        // Prepare payment data
        $data = array (
          'merchantId' => 'PGTESTPAYUAT86',  // Ensure this is the correct merchant ID
          'merchantTransactionId' =>uniqid(),
          'merchantUserId' => 'MUID123',
          'amount' => $amount * 100,  // Ensure this is the correct amount format
          'redirectUrl' => route('phonepe.payment.callback'),
          'redirectMode' => 'POST',
          'callbackUrl' => route('phonepe.payment.callback'),
          'mobileNumber' => '9999999999',
          'paymentInstrument' => array (
            'type' => 'PAY_PAGE',
          ),
        );
    
        // Encode data to base64
        $encodedData = base64_encode(json_encode($data));
    
        // Set up the salt key and index
        $saltKey = '96434309-7796-489d-8924-ab56988a6076';  // Ensure this is correct
        $saltIndex = 1;  // Ensure this is correct
    
        // Prepare string to hash
        $stringToHash = $encodedData . '/pg/v1/pay' . $saltKey;
    
        // Generate SHA-256 hash
        $sha256Hash = hash('sha256', $stringToHash);
    
        // Construct final X-VERIFY header
        $finalXHeader = $sha256Hash . '###' . $saltIndex;
    
        // Log X-VERIFY for debugging
        Log::info('X-VERIFY Header: '.$finalXHeader);
    
        // Initialize cURL request
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,  // Set a reasonable timeout
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode(['request' => $encodedData]),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'X-VERIFY: '.$finalXHeader
          ),
        ));
    
        // Execute cURL request
        $response = curl_exec($curl);
    
        // Check if any cURL errors
        if (curl_errno($curl)) {
            $error = curl_error($curl);
            curl_close($curl);
            return response()->json(['error' => 'Curl error: ' . $error], 500);
        }
    
        // Close the cURL session
        curl_close($curl);
    
        // Decode the response from PhonePe API
        $rData = json_decode($response);
    
        // Log the response for debugging
        Log::info('PhonePe Response: ', (array) $rData);
    
        // Handle response errors
        if (!$rData || isset($rData->success) && !$rData->success) {
            return response()->json(['error' => 'Payment failed', 'response' => $rData], 500);
        }
    
        // If successful, proceed with redirection
        return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
    }
    

    public function phonePeCallback(Request $request)
    {
        $input = $request->all();

        $saltKey = '96434309-7796-489d-8924-ab56988a6076';
        $saltIndex = 1;

        $finalXHeader = hash('sha256','/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'].$saltKey).'###'.$saltIndex;

        // $response = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'])
        //         ->withHeader('Content-Type:application/json')
        //         ->withHeader('accept:application/json')
        //         ->withHeader('X-VERIFY:'.$finalXHeader)
        //         ->withHeader('X-MERCHANT-ID:'.$input['transactionId'])
        //         ->get();

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'],
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'accept: application/json',
            'X-VERIFY: '.$finalXHeader,
            'X-MERCHANT-ID: '.$input['transactionId']
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // dd(json_decode($response));
        $D_data=json_decode($response);
        if ($D_data->success) {
            $status = $D_data->data->responseCode;
            $transactionId = $D_data->data->merchantTransactionId;
            $amount = $D_data->data->amount / 100;
            $paymentMode = $D_data->data->paymentInstrument->type;

            // dd($D_data);
            if ($status == 'SUCCESS') {

                dd("payment done = ".$transactionId."payment amount = ".$amount."Payment MODE = ".$paymentMode);
                // Handle successful payment
                // return view('phonepe.success', compact('transactionId', 'amount', 'paymentMode'));
            } else {
                dd("payment Failed = ".$transactionId."payment amount = ".$amount."Payment MODE = ".$paymentMode);
               
                // Handle failed payment
                // return view('phonepe.failure', compact('transactionId', 'amount', 'paymentMode'));
            }
        } else {
            dd("unknown error in payments");
            // Handle error
            // return view('phonepe.error');
        }
        // flash(translate('Your order has been placed successfully. Please submit payment information from purchase history'))->success();
        // return redirect()->route('order_confirmed');
    }

    // Refund API from api
    public function phonePeRefundAPI(Request $request,$tra_id)
    {
        $amount = session()->get('refund_api') ?? 100;
        $payload = [
            'merchantId' => 'MERCHANTUAT',
            'merchantUserId' => 'MUID123',
            'merchantTransactionId' => ($tra_id),
            'originalTransactionId' => strrev($tra_id),
            'amount' => $amount * 100,
            'callbackUrl' => route('phonepe.payment.callback'),
        ];

        $encode = base64_encode(json_encode($payload));

        $saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        $saltIndex = 1;

        $string = $encode.'/pg/v1/refund'.$saltKey;
        $sha256 = hash('sha256',$string);

        $finalXHeader = $sha256.'###'.$saltIndex;

        // $response = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/refund')
        //         ->withHeader('Content-Type:application/json')
        //         ->withHeader('X-VERIFY:'.$finalXHeader)
        //         ->withData(json_encode(['request' => $encode]))
        //         ->post();
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/refund',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode(['request' => $encode]),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'X-VERIFY: '.$finalXHeader
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $rData = json_decode($response);



        $finalXHeader1 = hash('sha256','/pg/v1/status/'.'MERCHANTUAT'.'/'.$tra_id.$saltKey).'###'.$saltIndex;

        // $responsestatus = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.'MERCHANTUAT'.'/'.$tra_id)
        //         ->withHeader('Content-Type:application/json')
        //         ->withHeader('accept:application/json')
        //         ->withHeader('X-VERIFY:'.$finalXHeader1)
        //         ->withHeader('X-MERCHANT-ID:'.$tra_id)
        //         ->get();

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.'MERCHANTUAT'.'/'.$tra_id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'accept: application/json',
            'X-VERIFY: '.$finalXHeader1,
            'X-MERCHANT-ID: '.$tra_id
          ),
        ));

        $responsestatus = curl_exec($curl);
        $suceess_data = json_decode($responsestatus);
        curl_close($curl);

        dd(json_decode($response),$suceess_data, $suceess_data->data->transactionId);
     // dd($rData);
    }
}
