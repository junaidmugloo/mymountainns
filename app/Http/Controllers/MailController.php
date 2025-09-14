<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

   public function index(Request $request) {
      $data =  array('name'=>$request->get('name'),
      'email'=>$request->get('email'),
      'number'=>$request->get('contact'),
      'date'=>$request->get('date'),
      'persons'=>$request->get('persons'),
      'package'=>$request->get('package'),
   
   );
      $data2 =  array('name'=>$request->get('name',''),
      'email'=>$request->get('email',''),
      'phone'=>$request->get('contact'),
      'checkin'=>$request->get('date',''),
      'destination' => $request->get('destination', ''), // Optional
      'checkout'=>'N/A',
      'package'=>$request->get('package',''),
      'totalpax'=>$request->get('persons',''),

   );
   $response = Http::get('https://crm.joytourandtravels.com/landingpageenquiry.sys', $data2);
 
      Mail::send('mail', $data, function($message) {
          $message->to('mymountainstourandtravel@gmail.com', 'My Mountains')->subject
          ('New Query');
          $message->from('bookings@mymountains.in','My Mountains');
      });
      echo "ok";
   }


   public function index2(Request $request) {
      $data =  array('name'=>$request->get('name'),
      // 'email'=>$request->get('email'),
      'number'=>$request->get('contact'),
      'date'=>$request->get('date'),
      // 'persons'=>$request->get('persons'),
   
   );
   $data2 =  array('name'=>$request->get('name',''),
      'email'=>$request->get('email',''),
      'phone'=>$request->get('contact'),
      'checkin'=>$request->get('date',''),
      'destination' => $request->get('destination', ''), // Optional
      'checkout'=>'N/A',
      'package'=>$request->get('package',''),
      'totalpax'=>$request->get('persons',''),

   );
   $response = Http::get('https://crm.joytourandtravels.com/landingpageenquiry.sys', $data2);
 
      Mail::send('mail2', $data, function($message) {
          $message->to('info@joytourandtravel.com', 'Joy Tour & Travels')->subject
          ('New Query');
          $message->from('leads@joytourandtravel.com','Joy Tour & Travels');
      });
      echo "ok";
   }

   public function index3(Request $request) {
      $data =  array('name'=>$request->get('name'),
      // 'email'=>$request->get('email'),
      'number'=>$request->get('contact'),
      'date'=>$request->get('date'),
      // 'persons'=>$request->get('persons'),
   
   );
   $data2 =  array('name'=>$request->get('name',''),
      'email'=>$request->get('email',''),
      'phone'=>$request->get('contact'),
      'checkin'=>$request->get('date',''),
      'destination' => $request->get('destination', ''), // Optional
      'checkout'=>'N/A',
      'package'=>$request->get('package',''),
      'totalpax'=>$request->get('persons',''),

   );
   $response = Http::get('https://crm.joytourandtravels.com/landingpageenquiry.sys', $data2);
 
      Mail::send('mail2', $data, function($message) {
          $message->to('info@joytourandtravel.com', 'Joy Tour & Travels')->subject
          ('New Query');
          $message->from('leads@joytourandtravel.com','Joy Tour & Travels');
      });
      echo "ok";
   }





    public function basic_email() {
        $data = array('name'=>"Joy Tour & Travels");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('junaidmugloo@gmail.com', 'Joy Tour & Travels')->subject
              ('Query Submit');
           $message->from('info@joytourandtravel.com','Joy Tour & Travels');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
     public function html_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('junaidmugloo@gmail.com', 'Jazza Grocery')->subject
            ('Order Placed');
            $message->from('verifiy@jazza.in','Jazza Grocery');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
    //  public function attachment_email() {
    //     $data = array('name'=>"Virat Gandhi");
    //     Mail::send('mail', $data, function($message) {
    //        $message->to('abc@gmail.com', 'Tutorials Point')->subject
    //           ('Laravel Testing Mail with Attachment');
    //        $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
    //        $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
    //        $message->from('xyz@gmail.com','Virat Gandhi');
    //     });
    //     echo "Email Sent with attachment. Check your inbox.";
    //  }
}
