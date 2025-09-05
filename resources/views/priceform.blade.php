<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Booking Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    body {
      background: linear-gradient(to bottom right, #f0f7ff, #eef2ff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
      font-family: Arial, Helvetica, sans-serif;
    }

    .form-container {
      max-width: 800px;
      width: 100%;
      background-color: white;
      border-radius: 0.75rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border: 1px solid #e6f0ff;
    }

    .form-header {
      height: 0.5rem;
      background: linear-gradient(90deg, #ef4444 0%, #f97316 100%);
    }

    .form-body {
      padding: 1.5rem;
      background: linear-gradient(to bottom, white, #f8faff);
    }

    .form-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .form-title-bar {
      display: inline-block;
      width: 0.375rem;
      height: 1.5rem;
      background:linear-gradient(90deg, #ef4444 0%, #f97316 100%);
      border-radius: 9999px;
    }

    .form-section {
      background-color: white;
      border-radius: 0.5rem;
      padding: 1rem;
      margin-bottom: 1.5rem;
      border: 1px solid rgba(59, 130, 246, 0.1);
      transition: all 0.2s;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }

    .form-section:hover {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
    }

    .section-label {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 500;
      color: #4b5563;
      min-width: 110px;
    }

    .icon-circle {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 28px;
      height: 28px;
      background-color: #e6f0ff;
      border-radius: 50%;
      color: #0d6efd;
    }

    .room-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.75rem;
    }

    .room-title {
      font-weight: 500;
      color: #4b5563;
      display: flex;
      align-items: center;
    }

    .room-number {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      background:linear-gradient(90deg, #ef4444 0%, #f97316 100%);
      color: white;
      border-radius: 50%;
      font-size: 0.75rem;
      margin-right: 0.5rem;
    }

    .counter-container {
      display: flex;
      overflow-x: auto;
      gap: 0.75rem;
      padding-bottom: 0.5rem;
      scrollbar-width: none; /* Firefox */
    }

    .counter-container::-webkit-scrollbar {
      display: none; /* Chrome, Safari, Edge */
    }

    .counter-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: #f9fafb;
      padding: 0.5rem;
      border-radius: 0.5rem;
      min-width: 90px;
      flex-shrink: 0;
    }

    .counter-label {
      font-size: 0.875rem;
      font-weight: 500;
      color: #4b5563;
      margin-bottom: 0.25rem;
      text-align: center;
    }

    .counter-sublabel {
      font-size: 0.75rem;
      color: #6b7280;
    }

    .counter-controls {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin: 0.25rem 0;
    }

    .counter-btn {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      border: 1px solid #d1d5db;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: #4b5563;
      cursor: pointer;
      transition: all 0.2s;
    }

    .counter-btn:hover {
      background-color: #e6f0ff;
      color: #0d6efd;
      border-color: #0d6efd;
    }

    .counter-value {
      width: 20px;
      text-align: center;
      font-weight: 600;
    }

    .counter-age {
      font-size: 0.75rem;
      color: #6b7280;
      background-color: white;
      padding: 0.125rem 0.5rem;
      border-radius: 9999px;
      margin-top: 0.25rem;
    }

    .add-room-btn {
      display: flex;
      align-items: center;
      color: #0d6efd;
      background: none;
      border: none;
      padding: 0;
      font-size: 0.875rem;
      cursor: pointer;
    }

    .add-room-btn:hover {
      text-decoration: underline;
    }

    .add-room-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      background:linear-gradient(90deg, #ef4444 0%, #f97316 100%);
      color: white;
      border-radius: 50%;
      font-size: 0.75rem;
      margin-right: 0.25rem;
    }

    .remove-room-btn {
      color: #ef4444;
      background: none;
      border: none;
      font-size: 0.875rem;
      display: flex;
      align-items: center;
      gap: 0.25rem;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
      transition: all 0.2s;
    }

    .remove-room-btn:hover {
      background-color: #fee2e2;
    }

    .input-with-icon {
      position: relative;
    }

    .input-with-icon .form-control {
      padding-left: 2.25rem;
    }

    .input-with-icon i {
      position: absolute;
      left: 0.75rem;
      top: 50%;
      transform: translateY(-50%);
      color: #9ca3af;
    }

    .form-text {
      font-size: 0.875rem;
      color: #6b7280;
      font-style: italic;
    }

    .calculate-btn {
      background:linear-gradient(90deg, #ef4444 0%, #f97316 100%);
      color: white;
      border: none;
      padding: 1rem;
      font-size: 1.125rem;
      font-weight: 500;
      border-radius: 0.5rem;
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      display: block;
      box-shadow: 0 4px 6px rgba(13, 110, 253, 0.25);
      transition: all 0.3s;
    }

    .calculate-btn:hover {
      background:linear-gradient(90deg, #ef4444 0%, #f97316 100%);
      box-shadow: 0 6px 8px rgba(13, 110, 253, 0.3);
    }

    /* Animation for new rooms */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .room-animation {
      animation: fadeIn 0.3s ease-out forwards;
    }

    /* Animation for removing rooms */
    @keyframes fadeOut {
      from {
        opacity: 1;
        transform: translateY(0);
      }
      to {
        opacity: 0;
        transform: translateY(-10px);
      }
    }

    .room-removing {
      animation: fadeOut 0.3s ease-in forwards;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .section-flex {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .section-label {
        margin-bottom: 0.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="">
    <div class="form-header"></div>
    <div class="form-body">
      <h1 class="form-title">
        <span class="form-title-bar"></span>
        Fill in your details.
      </h1>

      <form id="travelBookingForm">
        <!-- Tour Type -->
        <div class="form-section">
          <div class="d-flex section-flex gap-3 align-items-center">
            <div class="section-label">
              <div class="icon-circle">
                <i class="bi bi-star"></i>
              </div>
              <span>Tour Type</span>
            </div>
            <select class="form-select" style="max-width: 300px;">
              <option selected>Standard</option>
              <option>Premium</option>
              <option>Luxury</option>
            </select>
          </div>
        </div>

        <!-- Travellers -->
        <div class="form-section">
          <div class="d-flex section-flex gap-3">
            <div class="section-label mt-1">
              <div class="icon-circle">
                <i class="bi bi-person"></i>
              </div>
              <span>Travellers</span>
            </div>
            <div class="w-100 border-top border-light-subtle pt-3">
              <div id="roomsContainer">
                <!-- Room 1 will be added by JavaScript -->
              </div>
              <button type="button" class="add-room-btn" id="addRoomBtn">
                <span class="add-room-icon">+</span>
                Add Room
              </button>
            </div>
          </div>
        </div>

        <!-- Date of Travel -->
        <div class="form-section">
          <div class="d-flex section-flex gap-3 align-items-center">
            <div class="section-label">
              <div class="icon-circle">
                <i class="bi bi-calendar"></i>
              </div>
              <span>Date of Travel</span>
            </div>
            <input type="text" class="form-control" value="15 May 2025" style="max-width: 300px;">
          </div>
        </div>

        <!-- Contact Details -->
        <div class="form-section">
          <div class="d-flex section-flex gap-3">
            <div class="section-label mt-1">
              <div class="icon-circle">
                <i class="bi bi-telephone"></i>
              </div>
              <span>Contact Details</span>
            </div>
            <div class="w-100">
              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <div class="input-with-icon">
                    <i class="bi bi-phone"></i>
                    <input type="text" class="form-control" placeholder="Mobile">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-with-icon">
                    <i class="bi bi-envelope"></i>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <p class="form-text mb-3">Your booking details will be sent on these contact details.</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="termsCheck" checked>
                <label class="form-check-label" for="termsCheck">
                  I accept the <a href="#" class="text-primary">Privacy Policy</a> & <a href="#" class="text-primary">Terms & Conditions</a>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Calculate Button -->
        <div class="text-center mt-4">
          <button type="submit" class="calculate-btn">Calculate Package Price</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initial room data
      const rooms = [
        {
          adults: 2,
          childWithBed: 1,
          childWithoutBed: 1,
          infant: 0
        }
      ];

      // Function to render all rooms
      function renderRooms() {
        const roomsContainer = document.getElementById('roomsContainer');
        roomsContainer.innerHTML = '';
        
        rooms.forEach((room, index) => {
          const roomElement = document.createElement('div');
          roomElement.className = 'mb-4 room-animation';
          roomElement.id = `room-${index}`;
          
          // Create room header with title and remove button
          const showRemoveButton = rooms.length > 1; // Only show remove button if there's more than one room
          
          roomElement.innerHTML = `
            <div class="room-header">
              <div class="room-title">
                <span class="room-number">${index + 1}</span>
                Room ${index + 1}
              </div>
              ${showRemoveButton ? 
                `<button type="button" class="remove-room-btn" onclick="removeRoom(${index})">
                  <i class="bi bi-trash"></i> Remove
                </button>` : 
                ''}
            </div>
            <div class="counter-container">
              <!-- Adult -->
              <div class="counter-item">
                <div class="counter-label">Adult</div>
                <div class="counter-controls">
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'adults', -1)">−</button>
                  <span class="counter-value">${room.adults}</span>
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'adults', 1)">+</button>
                </div>
                <div class="counter-age">12+ yrs</div>
              </div>
              
              <!-- Child with bed -->
              <div class="counter-item">
                <div class="counter-label">Child <span class="counter-sublabel">(With bed)</span></div>
                <div class="counter-controls">
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'childWithBed', -1)">−</button>
                  <span class="counter-value">${room.childWithBed}</span>
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'childWithBed', 1)">+</button>
                </div>
                <div class="counter-age">Below 12 yrs</div>
              </div>
              
              <!-- Child without bed -->
              <div class="counter-item">
                <div class="counter-label">Child <span class="counter-sublabel">(Without bed)</span></div>
                <div class="counter-controls">
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'childWithoutBed', -1)">−</button>
                  <span class="counter-value">${room.childWithoutBed}</span>
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'childWithoutBed', 1)">+</button>
                </div>
                <div class="counter-age">Below 12 yrs</div>
              </div>
              
              <!-- Infant -->
              <div class="counter-item">
                <div class="counter-label">Infant</div>
                <div class="counter-controls">
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'infant', -1)">−</button>
                  <span class="counter-value">${room.infant}</span>
                  <button type="button" class="counter-btn" onclick="updateCounter(${index}, 'infant', 1)">+</button>
                </div>
                <div class="counter-age">0-2 yrs</div>
              </div>
            </div>
          `;
          
          roomsContainer.appendChild(roomElement);
        });
      }
      
      // Function to update counter values
      window.updateCounter = function(roomIndex, type, value) {
        const newValue = Math.max(0, rooms[roomIndex][type] + value);
        rooms[roomIndex][type] = newValue;
        renderRooms();
      };
      
      // Function to remove a room
      window.removeRoom = function(roomIndex) {
        // Add animation before removing
        const roomElement = document.getElementById(`room-${roomIndex}`);
        roomElement.classList.remove('room-animation');
        roomElement.classList.add('room-removing');
        
        // Wait for animation to complete before removing from array
        setTimeout(() => {
          rooms.splice(roomIndex, 1);
          renderRooms();
        }, 300); // Match the animation duration
      };
      
      // Function to add a new room
      document.getElementById('addRoomBtn').addEventListener('click', function() {
        rooms.push({
          adults: 1,
          childWithBed: 0,
          childWithoutBed: 0,
          infant: 0
        });
        renderRooms();
      });
      
      // Form submission
      document.getElementById('travelBookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Form submitted! Package price calculation would happen here.');
      });
      
      // Initial render
      renderRooms();
    });
  </script>
</body>
</html>