<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Customer Data</title>
</head>
<body>
  <h5>Customer Data</h5>
  <table border="2px" width="100%" style="border-collapse: collapse; font-family: Arial;">
    <tr>
      <th>Customer Name</th>
      <th>Customer Number</th>
      <th>Travel Date</th>
    </tr>
    <tr>
      <td>{{ $name }}</td>
      <td>{{ $number }}</td>
      <td>{{ $date }}</td>
    </tr>
  </table>

  <br />

  <!-- WhatsApp Share Button -->
  <a href="https://wa.me/?text=Customer%20Details%0AName:%20{{ urlencode($name) }}%0ANumber:%20{{ urlencode($number) }}%0ADate:%20{{ urlencode($date) }}"
     target="_blank"
     style="background-color: #25D366; 
            color: white; 
            padding: 10px 20px; 
            text-decoration: none; 
            border-radius: 5px; 
            display: inline-block; 
            margin-top: 10px;
            font-family: Arial, sans-serif;">
    Share on WhatsApp
  </a>
</body>
</html>
