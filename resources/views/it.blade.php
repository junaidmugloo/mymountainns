<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Itinerary - Women's Special Ladakh Kargil</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f6f8;
            color: #2d3436;
            line-height: 1.6;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 20px 15px;
        }

        /* Tour Type Badge */
        .tour-badge {
            background: #ff385c;
            color: white;
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(255, 56, 92, 0.2);
        }

        /* Header Section */
        .tour-header {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .tour-title {
            font-size: 32px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .tour-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 24px;
        }

        /* Tour Highlights */
        .tour-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 24px;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .highlight-icon {
            width: 40px;
            height: 40px;
            background: #ff385c;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Day Cards */
        .day-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .day-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #eee;
        }

        .day-number {
            background: #ff385c;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
        }

        .day-content {
            padding-left: 66px;
        }

        .activity-item {
            position: relative;
            padding-bottom: 20px;
            padding-left: 24px;
            border-left: 2px dashed #ddd;
        }

        .activity-item:last-child {
            border-left: none;
        }

        .activity-item::before {
            content: '';
            position: absolute;
            left: -7px;
            top: 0;
            width: 12px;
            height: 12px;
            background: #ff385c;
            border-radius: 50%;
        }

        .activity-time {
            font-size: 14px;
            color: #666;
            margin-bottom: 4px;
        }

        .activity-title {
            font-weight: 500;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .activity-details {
            color: #666;
            font-size: 14px;
        }

        .meal-info {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            padding: 8px 16px;
            background: #f8f9fa;
            border-radius: 6px;
            font-size: 14px;
            color: #666;
        }

        .meal-info i {
            color: #ff385c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .tour-highlights {
                grid-template-columns: 1fr;
            }

            .day-content {
                padding-left: 20px;
            }

            .tour-title {
                font-size: 24px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="tour-header">
            <div class="tour-badge">Women's Special</div>
            <h1 class="tour-title">Ladakh Kargil Adventure</h1>
            <p class="tour-subtitle">Experience the breathtaking beauty of the Himalayas</p>

            <div class="tour-highlights">
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <strong>Duration</strong>
                        <p>7 Days / 6 Nights</p>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <strong>Destinations</strong>
                        <p>Leh - Kargil - Pangong</p>
                    </div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <strong>Group Size</strong>
                        <p>15-20 Women</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Overview -->
        <div class="quick-overview">
            <div class="overview-grid">
                <div class="overview-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Destinations</h5>
                    <p>Leh - Kargil - Pangong - Nubra</p>
                </div>
                <div class="overview-item">
                    <i class="fas fa-plane-departure"></i>
                    <h5>Departure City</h5>
                    <p>Delhi</p>
                </div>
                <div class="overview-item">
                    <i class="fas fa-users"></i>
                    <h5>Group Type</h5>
                    <p>Women Only</p>
                </div>
                <div class="overview-item">
                    <i class="fas fa-star"></i>
                    <h5>Tour Category</h5>
                    <p>Premium</p>
                </div>
            </div>
        </div>

        <!-- Day Cards with Enhanced Styling -->
        <div class="day-card">
            <div class="day-header">
                <div class="day-number">01</div>
                <div>
                    <h2>Arrival in Leh</h2>
                    <p>Welcome to the Land of Lamas</p>
                </div>
            </div>
            <div class="day-content">
                <div class="activity-item">
                    <div class="activity-time">
                        <i class="far fa-clock"></i> 07:00 AM
                    </div>
                    <h3 class="activity-title">Arrival & Transfer</h3>
                    <p class="activity-details">
                        Arrive at Leh Airport. Meet and greet by our representative. 
                        Transfer to hotel for rest and acclimatization.
                    </p>
                </div>
                <div class="activity-item">
                    <div class="activity-time">
                        <i class="far fa-clock"></i> 02:00 PM
                    </div>
                    <h3 class="activity-title">Local Sightseeing</h3>
                    <p class="activity-details">
                        Visit to Leh Palace, Shanti Stupa, and local market.
                        Experience the local culture and architecture.
                    </p>
                </div>
                <div class="meal-info">
                    <i class="fas fa-utensils"></i>
                    <span>Meals: Breakfast, Lunch, Dinner</span>
                </div>
            </div>
        </div>

        <!-- Hotel Options Section -->
        <div class="hotel-options">
            <h3 class="section-title">Accommodation Options</h3>
            <div class="hotel-grid">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Luxury Hotel">
                        <div class="hotel-category">Premium</div>
                    </div>
                    <div class="hotel-content">
                        <h4>Luxury Resort & Spa</h4>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="hotel-features">
                            <li><i class="fas fa-wifi"></i> Free WiFi</li>
                            <li><i class="fas fa-swimming-pool"></i> Pool</li>
                            <li><i class="fas fa-spa"></i> Spa</li>
                        </ul>
                    </div>
                </div>

                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Deluxe Hotel">
                        <div class="hotel-category">Deluxe</div>
                    </div>
                    <div class="hotel-content">
                        <h4>Boutique Hotel</h4>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="hotel-features">
                            <li><i class="fas fa-wifi"></i> Free WiFi</li>
                            <li><i class="fas fa-utensils"></i> Restaurant</li>
                            <li><i class="fas fa-dumbbell"></i> Gym</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="included-services">
            <h3>Included Services</h3>
            <div class="service-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <span>Luxury Accommodation</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <span>Daily Breakfast</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <span>Private Transport</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <span>Professional Guide</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #f8f9fa;
        color: #2d3436;
        line-height: 1.6;
    }

    .container {
        max-width: 1140px;
        margin: 40px auto;
        padding: 0 15px;
    }

    .itinerary-header {
        background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);
        color: white;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 10px 20px rgba(239, 68, 68, 0.1);
    }

    .itinerary-header h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .trip-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .detail-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 15px;
        border-radius: 10px;
    }

    .detail-item h4 {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 5px;
    }

    .detail-item p {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .day-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
    }

    .day-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(to bottom, #ef4444, #f97316);
    }

    .day-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .day-number {
        font-size: 2rem;
        font-weight: 600;
        color: #ef4444;
        margin-right: 15px;
    }

    .day-title {
        font-size: 1.25rem;
        font-weight: 500;
    }

    .activity {
        padding: 15px;
        border-left: 2px solid #e2e8f0;
        margin-left: 20px;
        position: relative;
    }

    .activity::before {
        content: '';
        position: absolute;
        left: -6px;
        top: 24px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ef4444;
    }

    .activity-time {
        font-size: 0.9rem;
        color: #64748b;
        margin-bottom: 5px;
    }

    .activity-title {
        font-weight: 500;
        margin-bottom: 8px;
    }

    .activity-description {
        color: #64748b;
        font-size: 0.95rem;
    }

    .included-services {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-top: 30px;
    }

    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .service-icon {
        width: 40px;
        height: 40px;
        background: #fef2f2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ef4444;
    }

    /* Activity Images */
    .activity-images {
        margin-top: 15px;
        border-radius: 10px;
        overflow: hidden;
    }

    .activity-images img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .activity-images img:hover {
        transform: scale(1.05);
    }

    /* Hotel Section Styles */
    .hotel-options {
        margin-top: 40px;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #2d3436;
    }

    .hotel-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .hotel-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .hotel-card:hover {
        transform: translateY(-5px);
    }

    .hotel-image {
        position: relative;
        height: 200px;
    }

    .hotel-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hotel-category {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(239, 68, 68, 0.9);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .hotel-content {
        padding: 20px;
    }

    .hotel-content h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .hotel-rating {
        color: #f97316;
        margin-bottom: 15px;
    }

    .hotel-features {
        list-style: none;
        padding: 0;
    }

    .hotel-features li {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #64748b;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .hotel-features i {
        color: #ef4444;
    }

    @media print {
        .hotel-card {
            break-inside: avoid;
        }
        
        .activity-images img {
            max-height: 150px;
        }
    }
    /* Add these print-specific styles to your existing CSS */
    @media print {
        body {
            background: white !important;
            color: black !important;
            font-size: 12pt;
        }

        .container {
            max-width: 100%;
            margin: 0;
            padding: 10px;
        }

        .tour-header {
            background: white !important;
            border: 1px solid #ddd;
            break-inside: avoid;
        }

        .tour-badge {
            border: 1px solid #ff385c;
            background: white !important;
            color: #ff385c !important;
        }

        .highlight-item {
            break-inside: avoid;
            border: 1px solid #ddd;
        }

        .highlight-icon {
            background: white !important;
            border: 1px solid #ff385c;
            color: #ff385c !important;
        }

        .day-card {
            break-inside: avoid;
            page-break-inside: avoid;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .activity-item {
            break-inside: avoid;
        }

        .hotel-card {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        .hotel-image img {
            max-height: 150px;
        }

        .hotel-category {
            border: 1px solid #ff385c;
            background: white !important;
            color: #ff385c !important;
        }

        .included-services {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        /* Hide elements not needed in print */
        button, 
        .action-buttons,
        .scroll-to-top {
            display: none !important;
        }

        /* Ensure proper page breaks */
        h1, h2, h3 {
            break-after: avoid;
        }

        img {
            break-inside: avoid;
        }

        /* Optimize colors for print */
        * {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
    }
</style>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Itinerary - Women's Special Ladakh Kargil</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f6f8;
            color: #2d3436;
            line-height: 1.6;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 20px 15px;
        }

        /* Tour Type Badge */
        .tour-badge {
            background: #ff385c;
            color: white;
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(255, 56, 92, 0.2);
        }

        /* Header Section */
        .tour-header {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .tour-title {
            font-size: 32px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .tour-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 24px;
        }

        /* Tour Highlights */
        .tour-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 24px;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .highlight-icon {
            width: 40px;
            height: 40px;
            background: #ff385c;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Day Cards */
        .day-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .day-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #eee;
        }

        .day-number {
            background: #ff385c;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
        }

        .day-content {
            padding-left: 66px;
        }

        .activity-item {
            position: relative;
            padding-bottom: 20px;
            padding-left: 24px;
            border-left: 2px dashed #ddd;
        }

        .activity-item:last-child {
            border-left: none;
        }

        .activity-item::before {
            content: '';
            position: absolute;
            left: -7px;
            top: 0;
            width: 12px;
            height: 12px;
            background: #ff385c;
            border-radius: 50%;
        }

        .activity-time {
            font-size: 14px;
            color: #666;
            margin-bottom: 4px;
        }

        .activity-title {
            font-weight: 500;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .activity-details {
            color: #666;
            font-size: 14px;
        }

        .meal-info {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            padding: 8px 16px;
            background: #f8f9fa;
            border-radius: 6px;
            font-size: 14px;
            color: #666;
        }

        .meal-info i {
            color: #ff385c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .tour-highlights {
                grid-template-columns: 1fr;
            }

            .day-content {
                padding-left: 20px;
            }

            .tour-title {
                font-size: 24px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="itinerary-header">
            <h1>Your Dream Vacation Itinerary</h1>
            <p>Experience the best of [Destination]</p>
            
            <div class="trip-details">
                <div class="detail-item">
                    <h4>Duration</h4>
                    <p>7 Days / 6 Nights</p>
                </div>
                <div class="detail-item">
                    <h4>Start Date</h4>
                    <p>May 15, 2024</p>
                </div>
                <div class="detail-item">
                    <h4>Group Size</h4>
                    <p>2 Adults, 1 Child</p>
                </div>
                <div class="detail-item">
                    <h4>Package Type</h4>
                    <p>Premium</p>
                </div>
            </div>
        </div>

        <div class="day-card">
            <div class="day-header">
                <div class="day-number">01</div>
                <div class="day-title">Arrival & Welcome</div>
            </div>
            
            <div class="activity">
                <div class="activity-time">09:00 AM</div>
                <div class="activity-title">Airport Pickup</div>
                <div class="activity-description">
                    Meet your guide at the airport and transfer to your luxury hotel. Enjoy welcome drinks upon arrival.
                </div>
                <div class="activity-images">
                    <img src="https://images.unsplash.com/photo-1542296332-2e4f23ed2ad1" alt="Airport Transfer">
                </div>
            </div>

            <div class="activity">
                <div class="activity-time">02:00 PM</div>
                <div class="activity-title">City Orientation Tour</div>
                <div class="activity-description">
                    Explore the city's main attractions with your expert guide. Visit historical landmarks and cultural sites.
                </div>
                <div class="activity-images">
                    <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b" alt="City Tour">
                </div>
            </div>
        </div>

        <!-- Hotel Options Section -->
        <div class="hotel-options">
            <h3 class="section-title">Accommodation Options</h3>
            <div class="hotel-grid">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Luxury Hotel">
                        <div class="hotel-category">Premium</div>
                    </div>
                    <div class="hotel-content">
                        <h4>Luxury Resort & Spa</h4>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="hotel-features">
                            <li><i class="fas fa-wifi"></i> Free WiFi</li>
                            <li><i class="fas fa-swimming-pool"></i> Pool</li>
                            <li><i class="fas fa-spa"></i> Spa</li>
                        </ul>
                    </div>
                </div>

                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Deluxe Hotel">
                        <div class="hotel-category">Deluxe</div>
                    </div>
                    <div class="hotel-content">
                        <h4>Boutique Hotel</h4>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="hotel-features">
                            <li><i class="fas fa-wifi"></i> Free WiFi</li>
                            <li><i class="fas fa-utensils"></i> Restaurant</li>
                            <li><i class="fas fa-dumbbell"></i> Gym</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="included-services">
            <h3>Included Services</h3>
            <div class="service-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <span>Luxury Accommodation</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <span>Daily Breakfast</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <span>Private Transport</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <span>Professional Guide</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #f8f9fa;
        color: #2d3436;
        line-height: 1.6;
    }

    .container {
        max-width: 1140px;
        margin: 40px auto;
        padding: 0 15px;
    }

    .itinerary-header {
        background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);
        color: white;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 10px 20px rgba(239, 68, 68, 0.1);
    }

    .itinerary-header h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .trip-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .detail-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 15px;
        border-radius: 10px;
    }

    .detail-item h4 {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 5px;
    }

    .detail-item p {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .day-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
    }

    .day-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(to bottom, #ef4444, #f97316);
    }

    .day-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .day-number {
        font-size: 2rem;
        font-weight: 600;
        color: #ef4444;
        margin-right: 15px;
    }

    .day-title {
        font-size: 1.25rem;
        font-weight: 500;
    }

    .activity {
        padding: 15px;
        border-left: 2px solid #e2e8f0;
        margin-left: 20px;
        position: relative;
    }

    .activity::before {
        content: '';
        position: absolute;
        left: -6px;
        top: 24px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ef4444;
    }

    .activity-time {
        font-size: 0.9rem;
        color: #64748b;
        margin-bottom: 5px;
    }

    .activity-title {
        font-weight: 500;
        margin-bottom: 8px;
    }

    .activity-description {
        color: #64748b;
        font-size: 0.95rem;
    }

    .included-services {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-top: 30px;
    }

    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .service-icon {
        width: 40px;
        height: 40px;
        background: #fef2f2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ef4444;
    }

    /* Activity Images */
    .activity-images {
        margin-top: 15px;
        border-radius: 10px;
        overflow: hidden;
    }

    .activity-images img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .activity-images img:hover {
        transform: scale(1.05);
    }

    /* Hotel Section Styles */
    .hotel-options {
        margin-top: 40px;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #2d3436;
    }

    .hotel-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .hotel-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .hotel-card:hover {
        transform: translateY(-5px);
    }

    .hotel-image {
        position: relative;
        height: 200px;
    }

    .hotel-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hotel-category {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(239, 68, 68, 0.9);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .hotel-content {
        padding: 20px;
    }

    .hotel-content h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .hotel-rating {
        color: #f97316;
        margin-bottom: 15px;
    }

    .hotel-features {
        list-style: none;
        padding: 0;
    }

    .hotel-features li {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #64748b;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .hotel-features i {
        color: #ef4444;
    }

    @media print {
        .hotel-card {
            break-inside: avoid;
        }
        
        .activity-images img {
            max-height: 150px;
        }
    }
    /* Add these print-specific styles to your existing CSS */
    @media print {
        body {
            background: white !important;
            color: black !important;
            font-size: 12pt;
        }

        .container {
            max-width: 100%;
            margin: 0;
            padding: 10px;
        }

        .tour-header {
            background: white !important;
            border: 1px solid #ddd;
            break-inside: avoid;
        }

        .tour-badge {
            border: 1px solid #ff385c;
            background: white !important;
            color: #ff385c !important;
        }

        .highlight-item {
            break-inside: avoid;
            border: 1px solid #ddd;
        }

        .highlight-icon {
            background: white !important;
            border: 1px solid #ff385c;
            color: #ff385c !important;
        }

        .day-card {
            break-inside: avoid;
            page-break-inside: avoid;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .activity-item {
            break-inside: avoid;
        }

        .hotel-card {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        .hotel-image img {
            max-height: 150px;
        }

        .hotel-category {
            border: 1px solid #ff385c;
            background: white !important;
            color: #ff385c !important;
        }

        .included-services {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        /* Hide elements not needed in print */
        button, 
        .action-buttons,
        .scroll-to-top {
            display: none !important;
        }

        /* Ensure proper page breaks */
        h1, h2, h3 {
            break-after: avoid;
        }

        img {
            break-inside: avoid;
        }

        /* Optimize colors for print */
        * {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
    }
</style>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Itinerary - Women's Special Ladakh Kargil</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f6f8;
            color: #2d3436;
            line-height: 1.6;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 20px 15px;
        }

        /* Tour Type Badge */
        .tour-badge {
            background: #ff385c;
            color: white;
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(255, 56, 92, 0.2);
        }

        /* Header Section */
        .tour-header {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .tour-title {
            font-size: 32px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .tour-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 24px;
        }

        /* Tour Highlights */
        .tour-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 24px;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .highlight-icon {
            width: 40px;
            height: 40px;
            background: #ff385c;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Day Cards */
        .day-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .day-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #eee;
        }

        .day-number {
            background: #ff385c;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
        }

        .day-content {
            padding-left: 66px;
        }

        .activity-item {
            position: relative;
            padding-bottom: 20px;
            padding-left: 24px;
            border-left: 2px dashed #ddd;
        }

        .activity-item:last-child {
            border-left: none;
        }

        .activity-item::before {
            content: '';
            position: absolute;
            left: -7px;
            top: 0;
            width: 12px;
            height: 12px;
            background: #ff385c;
            border-radius: 50%;
        }

        .activity-time {
            font-size: 14px;
            color: #666;
            margin-bottom: 4px;
        }

        .activity-title {
            font-weight: 500;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .activity-details {
            color: #666;
            font-size: 14px;
        }

        .meal-info {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            padding: 8px 16px;
            background: #f8f9fa;
            border-radius: 6px;
            font-size: 14px;
            color: #666;
        }

        .meal-info i {
            color: #ff385c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .tour-highlights {
                grid-template-columns: 1fr;
            }

            .day-content {
                padding-left: 20px;
            }

            .tour-title {
                font-size: 24px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="itinerary-header">
            <h1>Your Dream Vacation Itinerary</h1>
            <p>Experience the best of [Destination]</p>
            
            <div class="trip-details">
                <div class="detail-item">
                    <h4>Duration</h4>
                    <p>7 Days / 6 Nights</p>
                </div>
                <div class="detail-item">
                    <h4>Start Date</h4>
                    <p>May 15, 2024</p>
                </div>
                <div class="detail-item">
                    <h4>Group Size</h4>
                    <p>2 Adults, 1 Child</p>
                </div>
                <div class="detail-item">
                    <h4>Package Type</h4>
                    <p>Premium</p>
                </div>
            </div>
        </div>

        <div class="day-card">
            <div class="day-header">
                <div class="day-number">01</div>
                <div class="day-title">Arrival & Welcome</div>
            </div>
            
            <div class="activity">
                <div class="activity-time">09:00 AM</div>
                <div class="activity-title">Airport Pickup</div>
                <div class="activity-description">
                    Meet your guide at the airport and transfer to your luxury hotel. Enjoy welcome drinks upon arrival.
                </div>
                <div class="activity-images">
                    <img src="https://images.unsplash.com/photo-1542296332-2e4f23ed2ad1" alt="Airport Transfer">
                </div>
            </div>

            <div class="activity">
                <div class="activity-time">02:00 PM</div>
                <div class="activity-title">City Orientation Tour</div>
                <div class="activity-description">
                    Explore the city's main attractions with your expert guide. Visit historical landmarks and cultural sites.
                </div>
                <div class="activity-images">
                    <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b" alt="City Tour">
                </div>
            </div>
        </div>

        <!-- Hotel Options Section -->
        <div class="hotel-options">
            <h3 class="section-title">Accommodation Options</h3>
            <div class="hotel-grid">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Luxury Hotel">
                        <div class="hotel-category">Premium</div>
                    </div>
                    <div class="hotel-content">
                        <h4>Luxury Resort & Spa</h4>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="hotel-features">
                            <li><i class="fas fa-wifi"></i> Free WiFi</li>
                            <li><i class="fas fa-swimming-pool"></i> Pool</li>
                            <li><i class="fas fa-spa"></i> Spa</li>
                        </ul>
                    </div>
                </div>

                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Deluxe Hotel">
                        <div class="hotel-category">Deluxe</div>
                    </div>
                    <div class="hotel-content">
                        <h4>Boutique Hotel</h4>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <ul class="hotel-features">
                            <li><i class="fas fa-wifi"></i> Free WiFi</li>
                            <li><i class="fas fa-utensils"></i> Restaurant</li>
                            <li><i class="fas fa-dumbbell"></i> Gym</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="included-services">
            <h3>Included Services</h3>
            <div class="service-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <span>Luxury Accommodation</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <span>Daily Breakfast</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <span>Private Transport</span>
                </div>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <span>Professional Guide</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #f8f9fa;
        color: #2d3436;
        line-height: 1.6;
    }

    .container {
        max-width: 1140px;
        margin: 40px auto;
        padding: 0 15px;
    }

    .itinerary-header {
        background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);
        color: white;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 30px;
        box-shadow: 0 10px 20px rgba(239, 68, 68, 0.1);
    }

    .itinerary-header h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .trip-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .detail-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 15px;
        border-radius: 10px;
    }

    .detail-item h4 {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 5px;
    }

    .detail-item p {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .day-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
    }

    .day-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: linear-gradient(to bottom, #ef4444, #f97316);
    }

    .day-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .day-number {
        font-size: 2rem;
        font-weight: 600;
        color: #ef4444;
        margin-right: 15px;
    }

    .day-title {
        font-size: 1.25rem;
        font-weight: 500;
    }

    .activity {
        padding: 15px;
        border-left: 2px solid #e2e8f0;
        margin-left: 20px;
        position: relative;
    }

    .activity::before {
        content: '';
        position: absolute;
        left: -6px;
        top: 24px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ef4444;
    }

    .activity-time {
        font-size: 0.9rem;
        color: #64748b;
        margin-bottom: 5px;
    }

    .activity-title {
        font-weight: 500;
        margin-bottom: 8px;
    }

    .activity-description {
        color: #64748b;
        font-size: 0.95rem;
    }

    .included-services {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-top: 30px;
    }

    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .service-icon {
        width: 40px;
        height: 40px;
        background: #fef2f2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ef4444;
    }

    /* Activity Images */
    .activity-images {
        margin-top: 15px;
        border-radius: 10px;
        overflow: hidden;
    }

    .activity-images img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .activity-images img:hover {
        transform: scale(1.05);
    }

    /* Hotel Section Styles */
    .hotel-options {
        margin-top: 40px;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #2d3436;
    }

    .hotel-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .hotel-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .hotel-card:hover {
        transform: translateY(-5px);
    }

    .hotel-image {
        position: relative;
        height: 200px;
    }

    .hotel-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hotel-category {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(239, 68, 68, 0.9);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .hotel-content {
        padding: 20px;
    }

    .hotel-content h4 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .hotel-rating {
        color: #f97316;
        margin-bottom: 15px;
    }

    .hotel-features {
        list-style: none;
        padding: 0;
    }

    .hotel-features li {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #64748b;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .hotel-features i {
        color: #ef4444;
    }

    @media print {
        .hotel-card {
            break-inside: avoid;
        }
        
        .activity-images img {
            max-height: 150px;
        }
    }
    /* Add these print-specific styles to your existing CSS */
    @media print {
        body {
            background: white !important;
            color: black !important;
            font-size: 12pt;
        }

        .container {
            max-width: 100%;
            margin: 0;
            padding: 10px;
        }

        .tour-header {
            background: white !important;
            border: 1px solid #ddd;
            break-inside: avoid;
        }

        .tour-badge {
            border: 1px solid #ff385c;
            background: white !important;
            color: #ff385c !important;
        }

        .highlight-item {
            break-inside: avoid;
            border: 1px solid #ddd;
        }

        .highlight-icon {
            background: white !important;
            border: 1px solid #ff385c;
            color: #ff385c !important;
        }

        .day-card {
            break-inside: avoid;
            page-break-inside: avoid;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .activity-item {
            break-inside: avoid;
        }

        .hotel-card {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        .hotel-image img {
            max-height: 150px;
        }

        .hotel-category {
            border: 1px solid #ff385c;
            background: white !important;
            color: #ff385c !important;
        }

        .included-services {
            break-inside: avoid;
            page-break-inside: avoid;
        }

        /* Hide elements not needed in print */
        button, 
        .action-buttons,
        .scroll-to-top {
            display: none !important;
        }

        /* Ensure proper page breaks */
        h1, h2, h3 {
            break-after: avoid;
        }

        img {
            break-inside: avoid;
        }

        /* Optimize colors for print */
        * {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
    }
</style>
</html>

<style>
/* Add these new styles while keeping existing ones */
.tour-type-badge {
    background: #ff4757;
    color: white;
    display: inline-block;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 15px;
}

.quick-overview {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.overview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.overview-item {
    text-align: center;
    padding: 15px;
}

.overview-item i {
    font-size: 2rem;
    color: #ef4444;
    margin-bottom: 10px;
}

.overview-item h5 {
    font-size: 1rem;
    margin-bottom: 5px;
    color: #2d3436;
}

.overview-item p {
    color: #64748b;
    font-size: 0.9rem;
}

.day-title {
    display: flex;
    flex-direction: column;
}

.day-subtitle {
    font-size: 0.9rem;
    color: #64748b;
    margin-top: 3px;
}

.activity-highlights {
    list-style: none;
    padding: 0;
    margin: 10px 0;
}

.activity-highlights li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 5px;
}

.activity-highlights li::before {
    content: '•';
    color: #ef4444;
    position: absolute;
    left: 0;
    font-weight: bold;
}

.meal-info {
    margin-top: 15px;
    padding-top: 10px;
    border-top: 1px dashed #e2e8f0;
    color: #64748b;
    font-size: 0.9rem;
}

.meal-info i {
    color: #ef4444;
    margin-right: 5px;
}

/* Enhanced existing styles */
.detail-item i {
    margin-right: 8px;
    color: rgba(255, 255, 255, 0.8);
}

.day-number {
    background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 1.2rem;
}

@media (max-width: 768px) {
    .overview-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .day-title {
        margin-top: 10px;
    }
}
</style>
</body>
</html>