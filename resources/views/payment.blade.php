<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <h1>Make a Payment</h1>
    <form method="POST" action="/payment/initiate">
        @csrf
        <label for="amount">Amount (in Paise):</label>
        <input type="number" name="amount" required>

        <label for="callbackUrl">Callback URL:</label>
        <input type="url" name="callbackUrl" value="{{ url('/payment/callback') }}" required>

        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
