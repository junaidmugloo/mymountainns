<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Booking Form</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      height: 100vh;
    }

    /* Custom alignment for room fields */
    .room-field {
      display: flex;
      gap: 8px;
      margin-bottom: 12px;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .room-label {
      min-width: 80px;
      font-size: 12px;
      color: #555;
      text-align: center;
    }

    .room-counter {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 4px;
    }

    .counter-button {
      width: 28px;
      height: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ccc;
      border-radius: 4px;
      background: #f9f9f9;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.2s;
    }

    .counter-button:hover {
      background: #e5e5e5;
    }

    .counter-input {
      width: 40px;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 4px;
      font-size: 12px;
    }

    .field-info {
      font-size: 10px;
      color: #777;
    }

    .room-container {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    /* Make sure room container items don't overflow */
    .room-item {
      flex: 1 1 calc(25% - 12px);
      min-width: 120px;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .remove-room-button {
      background-color: #e57373;
      color: white;
      padding: 4px 10px;
      font-size: 12px;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.2s;
    }

    .remove-room-button:hover {
      background-color: #f44336;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center">

<div class="bg-white shadow-lg rounded-lg p-4 w-100 h-[95vh] overflow-y-auto">
  <h2 class="text-lg font-semibold text-center mb-4 text-gray-800">Fill in Your Details</h2>
  
  <form id="bookingForm" class="space-y-4">
    <!-- Departure City -->
    <div>
      <label for="departureCity" class="block text-xs text-gray-600 font-medium">Departure City</label>
      <select id="departureCity" class="w-full mt-1 px-3 py-2 border rounded-lg text-xs focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option selected>Delhi</option>
        <option>Mumbai</option>
        <option>Bangalore</option>
      </select>
    </div>

    <!-- Tour Type -->
    <div>
      <label for="tourType" class="block text-xs text-gray-600 font-medium">Tour Type</label>
      <select id="tourType" class="w-full mt-1 px-3 py-2 border rounded-lg text-xs focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option selected>Standard</option>
        <option>Deluxe</option>
        <option>Luxury</option>
      </select>
    </div>

    <!-- Rooms Section -->
    <div id="roomsContainer">
      <!-- Room 1 -->
      <div class="p-2 bg-gray-50 rounded-lg mb-3 room" id="room1">
        <h3 class="font-semibold text-xs text-gray-700 mb-2">Room 1</h3>
        <div class="room-container">
          <!-- Adults -->
          <div class="room-item">
            <span class="room-label">Adults (12+ yrs)</span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="adults[]" value="2" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>

          <!-- Children with bed -->
          <div class="room-item">
            <span class="room-label">Children <span class="field-info">(with bed)</span></span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="childWithBed[]" value="1" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>

          <!-- Children without bed -->
          <div class="room-item">
            <span class="room-label">Children <span class="field-info">(without bed)</span></span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="childWithoutBed[]" value="1" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>

          <!-- Infants -->
          <div class="room-item">
            <span class="room-label">Infants (0-2 yrs)</span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="infants[]" value="0" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Room Button -->
    <button type="button" id="addRoomBtn" class="w-full bg-gray-200 hover:bg-gray-300 text-xs text-gray-800 font-medium py-2 rounded-lg transition duration-150">
      + Add Room
    </button>

    <!-- Date of Travel -->
    <div>
      <label for="travelDate" class="block text-xs text-gray-600 font-medium">Date of Travel</label>
      <input type="date" id="travelDate" value="2024-12-28" class="w-full mt-1 px-3 py-2 border rounded-lg text-xs focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Contact Details -->
    <div>
      <label class="block text-xs text-gray-600 font-medium">Contact Details</label>
      <div class="grid grid-cols-2 gap-2 mt-1">
        <input type="tel" placeholder="Mobile" class="w-full px-3 py-2 border rounded-lg text-xs focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="email" placeholder="Email" class="w-full px-3 py-2 border rounded-lg text-xs focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
    </div>

    <!-- Privacy Policy -->
    <div class="flex items-start">
      <input id="terms" type="checkbox" required class="mt-1 h-4 w-4 text-blue-500 border-gray-300 rounded">
      <label for="terms" class="ml-2 text-xs text-gray-600">
        I accept the <a href="#" class="text-blue-500 underline">Privacy Policy</a> &amp; <a href="#" class="text-blue-500 underline">Terms & Conditions</a>.
      </label>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-lg text-xs mt-4 transition duration-200">
      Submit
    </button>
  </form>
</div>

<script>
  let roomCount = 1;

  function updateCounter(button, increment) {
    const input = button.closest('.room-counter').querySelector('input');
    let currentValue = parseInt(input.value);
    currentValue = Math.max(0, currentValue + increment);
    input.value = currentValue;
  }

  function removeRoom(roomId) {
    const roomElement = document.getElementById(`room${roomId}`);
    roomElement.remove();
  }

  // Add room functionality
  document.getElementById('addRoomBtn').addEventListener('click', () => {
    roomCount++;

    const roomContainer = document.getElementById('roomsContainer');
    const roomHTML = `
      <div class="p-2 bg-gray-50 rounded-lg mb-3 room" id="room${roomCount}">
        <h3 class="font-semibold text-xs text-gray-700 mb-2">Room ${roomCount}</h3>
        <div class="room-container">
          <!-- Adults -->
          <div class="room-item">
            <span class="room-label">Adults (12+ yrs)</span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="adults[]" value="2" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>

          <!-- Children with bed -->
          <div class="room-item">
            <span class="room-label">Children <span class="field-info">(with bed)</span></span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="childWithBed[]" value="1" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>

          <!-- Children without bed -->
          <div class="room-item">
            <span class="room-label">Children <span class="field-info">(without bed)</span></span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="childWithoutBed[]" value="1" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>

          <!-- Infants -->
          <div class="room-item">
            <span class="room-label">Infants (0-2 yrs)</span>
            <div class="room-counter">
              <button type="button" class="counter-button" onclick="updateCounter(this, -1)">-</button>
              <input type="number" name="infants[]" value="0" min="0" max="10" required class="counter-input">
              <button type="button" class="counter-button" onclick="updateCounter(this, 1)">+</button>
            </div>
          </div>
        </div>
        <button type="button" class="remove-room-button" onclick="removeRoom(${roomCount})">Remove Room</button>
      </div>
    `;

    roomContainer.insertAdjacentHTML('beforeend', roomHTML);
  });
</script>

</body>
</html>
