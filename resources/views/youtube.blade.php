<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Send Joy Travels Itinerary</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef2f7;
      padding: 40px;
    }

    .container {
      background: #fff;
      padding: 25px 30px;
      border-radius: 10px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    label {
      margin-top: 15px;
      display: block;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      margin-top: 25px;
      background: #28a745;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #218838;
    }

    .response {
      margin-top: 20px;
      white-space: pre-wrap;
      background: #f8f9fa;
      padding: 15px;
      border-radius: 5px;
      font-size: 14px;
      color: #333;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Send Joy Travels Itinerary via WhatsApp</h2>

  <label for="phone">Phone Number (e.g. +91...):</label>
  <input type="text" id="phone" value="+917006730307">

  <label for="name">Name ({{1}}):</label>
  <input type="text" id="name" value="test message">

  <label for="trip">Trip Title ({{2}}):</label>
  <input type="text" id="trip" value="Kashmir Adventure">

  <label for="date">Departure Date ({{3}}):</label>
  <input type="text" id="date" value="20th April 2025">

  <button id="send">Send Itinerary</button>

  <div class="response" id="response"></div>
</div>

<script>
  $('#send').on('click', function () {
    const phone =$('#phone').val();
    const name = $('#name').val();
    const trip = $('#trip').val();
    const date = $('#date').val();

    $.ajax({
      url: 'https://backend.aisensy.com/campaign/t1/api/v2',
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify({
        apiKey: "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjY3NTAzMWI1NjE1YjAxMGMyNDZkNmJhNCIsIm5hbWUiOiJKb3kgVG91ciAmIFRyYXZlbHMiLCJhcHBOYW1lIjoiQWlTZW5zeSIsImNsaWVudElkIjoiNjc1MDMxYjQ2MTViMDEwYzI0NmQ2YjhmIiwiYWN0aXZlUGxhbiI6IlBST19NT05USExZIiwiaWF0IjoxNzQzODM5NTY0fQ.QALGSnYVUOvs72GP9KrgyGbJjqllIzZLaLmYL1SB9Bs", // 🔑 Replace this with your actual API key
        campaignName: "joyAPI",
        destination: phone,
        userName: name,
        templateParams: [name, trip, date],
        media: {
         url: "https://test.joytourandtravels.com/assets/img/it.pdf", // Laravel will render full URL here
         filename: "JoyTravels_Itinerary.pdf"
}

      }),
      success: function (response) {
        $('#response').text("✅ Success:\n" + JSON.stringify(response, null, 2));
      },
      error: function (xhr) {
        $('#response').text("❌ Error:\n" + xhr.responseText);
      }
    });
  });
</script>

</body>
</html>
