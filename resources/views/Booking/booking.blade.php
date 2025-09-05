<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #f47625;
            --primary-hover: #e06417;
            --primary-light: rgba(244, 118, 37, 0.1);
            --primary-lighter: rgba(244, 118, 37, 0.05);
        }

        body {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        .profile-sidebar {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 24px;
            transition: all 0.3s ease;
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .profile-image:hover {
            transform: scale(1.05);
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin-top: 24px;
        }
        
        .sidebar-menu li {
            margin-bottom: 8px;
        }
        
        .sidebar-menu li a {
            padding: 10px 14px;
            transition: all 0.3s ease;
            border-radius: 8px;
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: 0.9375rem;
        }
        
        .sidebar-menu li a:hover {
            background-color: var(--primary-lighter);
            transform: translateX(4px);
        }
        
        .sidebar-menu li a.active {
            color: var(--primary-color) !important;
            background-color: var(--primary-light);
            font-weight: 600;
        }
        
        .sidebar-menu li a i {
            width: 20px;
            font-size: 1rem;
            margin-right: 12px;
        }
        
        .profile-content {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 24px;
            transition: all 0.3s ease;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            width: 100%;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        }

        .btn {
            border-radius: 8px;
            padding: 6px 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 0.875rem;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            box-shadow: 0 4px 15px rgba(244, 118, 37, 0.2);
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: var(--primary-hover) !important;
            border-color: var(--primary-hover) !important;
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover,
        .btn-outline-primary:focus,
        .btn-outline-primary:active {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        .badge {
            padding: 4px 8px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.75rem;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
        }

        h4 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
        }

        h5 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .text-muted {
            color: #64748b !important;
            font-size: 0.875rem;
        }

        /* Mobile menu animations */
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        @keyframes slideOut {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }

        .profile-sidebar.active {
            left: 0;
        }

        .profile-sidebar:not(.active) {
            left: -100%;
        }

        .sidebar-overlay.active {
            display: block;
        }

        .sidebar-overlay:not(.active) {
            display: none;
        }

        /* Tab content transitions */
        .tab-pane {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .tab-pane.show.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Menu icon transition */
        #menuIcon {
            transition: transform 0.3s ease;
        }

        #sidebarToggle:hover #menuIcon {
            transform: rotate(90deg);
        }

        /* List group animations */
        .list-group-item {
            transition: all 0.3s ease;
            border: none;
            margin-bottom: 8px;
            border-radius: 8px !important;
            font-size: 0.875rem;
            padding: 10px 14px;
        }

        .list-group-item:hover {
            background-color: #f8fafc;
            transform: translateX(4px);
        }

        /* Accordion customization */
        .accordion-button {
            border-radius: 8px;
            font-weight: 500;
            padding: 12px 16px;
            font-size: 0.9375rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .accordion-button:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px var(--primary-lighter);
        }

        /* Form controls */
        .form-control {
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            padding: 8px 12px;
            transition: all 0.3s ease;
            font-size: 0.875rem;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px var(--primary-lighter);
        }

        /* Dropdown menu */
        .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            animation: fadeIn 0.2s ease;
            font-size: 0.875rem;
        }

        .dropdown-item {
            padding: 8px 14px;
            transition: all 0.2s ease;
            border-radius: 6px;
        }

        .dropdown-item:hover {
            background-color: rgba(13, 110, 253, 0.05);
            transform: translateX(4px);
        }

        .dropdown-item:active,
        .dropdown-item.active {
            background-color: var(--primary-color);
        }

        /* Scrollbar customization */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-lighter);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-light);
        }

        @media (max-width: 768px) {
            .profile-sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 280px;
                height: 100vh;
                z-index: 1001;
                border-radius: 0;
                margin: 0;
                overflow-y: auto;
                transition: left 0.3s ease;
                padding-top: 48px; /* Make space for close button */
            }

            .profile-sidebar.active {
                left: 0;
            }

            .sidebar-overlay.active {
                display: block;
            }

            .profile-content {
                padding: 16px;
                margin-top: 60px;
                border-radius: 0;
            }

            body {
                font-size: 13px;
            }

            h3 {
                font-size: 1.35rem;
            }

            h4 {
                font-size: 1.15rem;
            }

            h5 {
                font-size: 1rem;
            }

            .card {
                margin-bottom: 16px;
                border-radius: 8px;
            }

            /* Adjust grid columns for full width */
            .col-md-6 {
                width: 100%;
                padding-left: 0;
                padding-right: 0;
            }

            /* Adjust row margins */
            .row {
                margin-left: 0;
                margin-right: 0;
            }

            /* Make cards take full width */
            .card-body {
                padding: 16px;
            }

            /* Adjust button groups in cards */
            .card .btn-group,
            .card .d-flex {
                width: 100%;
                justify-content: space-between;
                margin-top: 12px;
            }

            /* Adjust spacing in cards */
            .card .mb-3 {
                margin-bottom: 12px !important;
            }

            .card .mb-4 {
                margin-bottom: 16px !important;
            }

            /* Improve text wrapping */
            .card-title {
                word-break: break-word;
            }

            /* Adjust list groups */
            .list-group-item {
                padding: 12px;
            }

            /* Improve button layout in cards */
            .card .btn {
                margin: 4px;
                flex: 1;
                text-align: center;
                white-space: nowrap;
            }

            /* Adjust form elements in cards */
            .card .form-control {
                width: 100%;
            }

            /* Improve accordion layout */
            .accordion-button {
                padding: 12px;
            }

            .accordion-body {
                padding: 12px;
            }

            /* Adjust wallet section */
            #wallet .card {
                margin-bottom: 16px;
            }

            /* Adjust quotation section */
            #quotation .card .d-md-end {
                text-align: left !important;
                margin-top: 12px;
            }

            /* Adjust bookings section */
            #bookings .card .text-md-end {
                text-align: left !important;
                margin-top: 12px;
            }

            /* Adjust support section */
            #support .d-flex.gap-3 {
                flex-wrap: wrap;
            }

            #support .btn {
                flex: 1 1 calc(50% - 8px);
                margin: 4px;
            }

            /* Adjust passengers section */
            #passengers .d-flex.justify-content-between {
                flex-direction: column;
            }

            #passengers .btn-group {
                margin-top: 12px;
            }

            /* Profile section adjustments */
            #profile .col-md-6 {
                margin-bottom: 16px;
            }

            /* Address form adjustments */
            #addressForm .row {
                margin-left: -8px;
                margin-right: -8px;
            }

            #addressForm .col-12,
            #addressForm .col-md-6 {
                padding-left: 8px;
                padding-right: 8px;
            }
        }

        /* Additional small screen optimizations */
        @media (max-width: 576px) {
            .profile-content {
                padding: 12px;
            }

            .card-body {
                padding: 12px;
            }

            /* Adjust button groups for very small screens */
            .btn-group {
                flex-direction: column;
                width: 100%;
            }

            .btn-group .btn {
                width: 100%;
                margin: 4px 0;
            }

            /* Improve spacing for stacked elements */
            .d-flex {
                gap: 8px;
            }
        }

        /* Sidebar adjustments */
        .profile-sidebar h4 {
            font-size: 1.2rem;
            margin-top: 1rem;
        }

        .profile-sidebar p {
            font-size: 0.875rem;
        }

        /* Card adjustments */
        .card-title {
            font-size: 1.1rem;
        }

        .card-body {
            font-size: 0.9375rem;
        }

        /* Button adjustments */
        .btn-sm {
            font-size: 0.8125rem;
            padding: 4px 10px;
        }

        /* Accordion adjustments */
        .accordion-body {
            font-size: 0.875rem;
        }

        /* Form adjustments */
        .form-label {
            font-size: 0.875rem;
        }

        /* Address form transitions */
        #addressForm, #addressDisplay {
            transition: all 0.3s ease;
        }

        .form-floating {
            margin-bottom: 1rem;
        }

        .form-floating > .form-control {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating > label {
            padding: 1rem 0.75rem;
        }

        /* Update color styles */
        .sidebar-menu li a.active {
            color: var(--primary-color) !important;
            background-color: var(--primary-light);
        }

        .sidebar-menu li a:hover {
            background-color: var(--primary-lighter);
            transform: translateX(4px);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            box-shadow: 0 4px 15px rgba(244, 118, 37, 0.2);
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: var(--primary-hover) !important;
            border-color: var(--primary-hover) !important;
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover,
        .btn-outline-primary:focus,
        .btn-outline-primary:active {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        a {
            color: var(--primary-color);
        }

        a:hover {
            color: var(--primary-hover);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px var(--primary-lighter);
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        .accordion-button:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px var(--primary-lighter);
        }

        .dropdown-item:active,
        .dropdown-item.active {
            background-color: var(--primary-color);
        }

        .nav-link {
            color: var(--primary-color);
        }

        .nav-link:hover,
        .nav-link:focus {
            color: var(--primary-hover);
        }

        .badge.bg-primary {
            background-color: var(--primary-color) !important;
        }

        /* Progress bars if any */
        .progress-bar {
            background-color: var(--primary-color);
        }

        /* Custom checkbox and radio if any */
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        /* Pagination if any */
        .page-link {
            color: var(--primary-color);
        }

        .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        /* Loading spinners if any */
        .spinner-border.text-primary {
            color: var(--primary-color) !important;
        }

        /* Selection color */
        ::selection {
            background-color: var(--primary-light);
            color: var(--primary-color);
        }

        /* Links in cards */
        .card a {
            color: var(--primary-color);
        }

        .card a:hover {
            color: var(--primary-hover);
        }

        /* Active states in lists */
        .list-group-item.active {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        /* Hover effects */
        .hover-primary:hover {
            color: var(--primary-color) !important;
        }

        /* Border colors */
        .border-primary {
            border-color: var(--primary-color) !important;
        }

        /* Add/Update these styles */
        #sidebarToggle {
            width: 40px;
            height: 40px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        #menuIcon {
            font-size: 1.5rem;
            line-height: 1;
            transition: all 0.3s ease;
        }

        #menuIcon.bi-x-lg {
            color: var(--primary-color);
            transform: rotate(90deg);
        }

        @media (max-width: 768px) {
            #sidebarToggle {
                position: fixed;
                top: 16px;
                left: 16px;
                z-index: 1002;
            }

            .profile-sidebar.active ~ #sidebarToggle #menuIcon {
                transform: rotate(0deg);
                color: var(--primary-color);
            }

            #menuIcon.bi-x-lg {
                transform: rotate(180deg);
            }
        }

        /* Mobile Adjustments */
        @media (max-width: 576px) {
            .profile-content {
                padding: 12px;
            }

            .card {
                margin-bottom: 0.75rem;
            }

            .row {
                margin-left: -8px;
                margin-right: -8px;
            }

            .col, [class*="col-"] {
                padding-left: 8px;
                padding-right: 8px;
            }
        }

        /* Add/Update these styles */
        .sidebar-close {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 1003;
        }

        .btn-close {
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-close::before {
            content: '\00d7';
            font-size: 24px;
            line-height: 1;
            color: var(--primary-color);
        }

        .btn-close:hover {
            transform: rotate(90deg);
        }

        @media (max-width: 768px) {
            .sidebar-close {
                display: block;
            }

            .btn-close {
                width: 32px;
                height: 32px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: var(--primary-lighter);
                border-radius: 8px;
            }

            .btn-close:hover {
                background-color: var(--primary-light);
            }
        }

        /* Add/Update these styles */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(3px);
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Update sidebar transition */
        .profile-sidebar {
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .profile-content {
                transition: all 0.3s ease;
            }

            .profile-sidebar {
                transform: translateX(-100%);
                opacity: 0;
            }

            .profile-sidebar.active {
                transform: translateX(0);
                opacity: 1;
            }

            /* Add blur and dim effect to main content when sidebar is active */
            .profile-content.dim {
                filter: blur(3px);
                opacity: 0.5;
            }

            body.sidebar-open {
                overflow: hidden;
            }
        }

        /* Large screen styles */
        @media (min-width: 769px) {
            .profile-sidebar {
                position: sticky;
                top: 24px;
                height: calc(100vh - 48px);
                overflow-y: auto;
                transform: none !important; /* Prevent transform on large screens */
                opacity: 1 !important; /* Always visible on large screens */
                left: auto !important; /* Reset left position */
            }

            .sidebar-overlay {
                display: none !important; /* Never show overlay on large screens */
            }

            .profile-content {
                opacity: 1 !important; /* Always visible on large screens */
                filter: none !important; /* Remove blur effect on large screens */
            }
        }

        /* Mobile styles */
        @media (max-width: 768px) {
            .profile-sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 280px;
                height: 100vh;
                z-index: 1001;
                border-radius: 0;
                margin: 0;
                overflow-y: auto;
            }

            .profile-sidebar.active {
                left: 0;
            }

            .sidebar-overlay {
                display: block;
            }

            .sidebar-overlay.active {
                opacity: 1;
                visibility: visible;
            }

            .profile-content {
                transition: all 0.3s ease;
            }

            .profile-content.dim {
                filter: blur(3px);
                opacity: 0.5;
            }

            body.sidebar-open {
                overflow: hidden;
            }
        }

        /* Scrollbar styles for sidebar */
        .profile-sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .profile-sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .profile-sidebar::-webkit-scrollbar-thumb {
            background-color: var(--primary-lighter);
            border-radius: 3px;
        }

        .profile-sidebar {
            scrollbar-width: thin;
            scrollbar-color: var(--primary-lighter) transparent;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Mobile Menu Toggle -->
    <div class="d-md-none position-fixed top-0 start-0 p-3" style="z-index: 1001;">
        <button class="btn btn-light shadow-sm" id="sidebarToggle">
            <i class="bi bi-list fs-4" id="menuIcon"></i>
        </button>
    </div>
    
    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    
    <div class="container py-5">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-4 mb-4">
                <div class="profile-sidebar">
                    <!-- Add close button for mobile -->
                    <div class="sidebar-close d-md-none">
                        <button class="btn-close" type="button" aria-label="Close"></button>
                    </div>

                    <div class="text-center mb-4">
                        <img src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d" alt="Profile Image" class="profile-image mb-3">
                        <h4> {{ Auth::user()->name ?? 'No User' }} </h4>
                        <p class="text-muted"> {{ Auth::user()->email ?? 'No Email' }} </p>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li onclick="document.title='My Profile'"><a href="#profile" class="text-decoration-none text-dark d-flex align-items-center active" data-bs-toggle="tab" data-bs-target="#profile">
                            <i class="bi bi-person me-2"></i> My Profile
                        </a></li>
                        <li onclick="document.title='My Booking'"><a href="#bookings" class="text-decoration-none text-dark d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#bookings">
                            <i class="bi bi-calendar me-2"></i> My Bookings
                        </a></li>
                        <li onclick="document.title='My Quotation'"><a href="#quotation" class="text-decoration-none text-dark d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#quotation">
                            <i class="bi bi-file-text me-2"></i> My Quotation
                        </a></li>
                        <li onclick="document.title='My Wallet'" ><a href="#wallet" class="text-decoration-none text-dark d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#wallet">
                            <i class="bi bi-wallet me-2"></i> My Wallet
                        </a></li>
                        <li onclick="document.title='My Passengers'"><a href="#passengers" class="text-decoration-none text-dark d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#passengers">
                            <i class="bi bi-people me-2"></i> My Passengers
                        </a></li>
                        <li onclick="document.title='Support & FAQS'"><a href="#support" class="text-decoration-none text-dark d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#support">
                            <i class="bi bi-question-circle me-2"></i> Support & FAQS
                        </a></li>
                        <li onclick="window.location='/'"><a href="/" class="text-decoration-none text-dark d-flex align-items-center">
                            <i class="bi bi-house me-2"></i> Back
                        </a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="col-md-8">
                <div class="profile-content">
                    <!-- Tab Content -->
                    <div class="tab-content" id="profileTabsContent">
                        <!-- Profile Tab -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel">
                            <!-- Three Dots Menu - Only in Profile tab -->
                            <div class="d-flex justify-content-end mb-4">
                                <div class="dropdown">
                                    <button class="btn btn-link" type="button" id="profileMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenuButton">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-2"></i>Change Details</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Change Password</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-phone me-2"></i>Change Number</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Profile Content -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="text-muted">Name</label>
                                        <p class="mb-0">{{ Auth::user()->name ?? 'No User' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="text-muted">Email</label>
                                        <p class="mb-0">{{ Auth::user()->email ?? 'No Email' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="text-muted">Phone</label>
                                        <div class="d-flex align-items-center">
                                            <span>--</span>
                                            <a href="#" class="ms-2 text-primary">Click to Verify</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="address-section">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5>Address Details</h5>
                                    <button class="btn btn-link text-primary" id="editAddressBtn">Edit</button>
                                </div>
                                
                                <!-- Address Display Section -->
                                <div id="addressDisplay">
                                    <p class="mb-1"><strong>Address:</strong> <span id="displayAddress">Not set</span></p>
                                    <p class="mb-1"><strong>City:</strong> <span id="displayCity">Not set</span></p>
                                    <p class="mb-1"><strong>State:</strong> <span id="displayState">Not set</span></p>
                                    <p class="mb-0"><strong>Pincode:</strong> <span id="displayPincode">Not set</span></p>
                                </div>

                                <!-- Address Edit Form -->
                                <div id="addressForm" class="mt-3" style="display: none;">
                                    <form id="addressEditForm">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="address" style="height: 100px"></textarea>
                                                    <label for="address">Full Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="city">
                                                    <label for="city">City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="state">
                                                    <label for="state">State</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="pincode">
                                                    <label for="pincode">Pincode</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                                <button type="button" class="btn btn-light" id="cancelEdit">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Bookings Tab -->
                        <div class="tab-pane fade"  id="bookings" role="tabpanel">
                            <h3 class="mb-4">My Bookings</h3>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h5 class="card-title mb-1">Booking #12345</h5>
                                            <p class="text-muted mb-0">Booked on: 15 Mar 2024</p>
                                        </div>
                                        <span class="badge bg-success">Confirmed</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1"><strong>From:</strong> Delhi</p>
                                            <p class="mb-1"><strong>To:</strong> Mumbai</p>
                                            <p class="mb-0"><strong>Date:</strong> 20 Mar 2024</p>
                                        </div>
                                        <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                            <button class="btn btn-outline-primary btn-sm">View Details</button>
                                            <button class="btn btn-outline-danger btn-sm">Cancel Booking</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quotation Tab -->
                        <div class="tab-pane fade" id="quotation" role="tabpanel">
                            <h3 class="mb-4">My Quotation</h3>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h5 class="card-title mb-1">Quote #98765</h5>
                                            <p class="text-muted mb-0">Generated on: 14 Mar 2024</p>
                                        </div>
                                        <span class="badge bg-warning">Pending</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1"><strong>Service:</strong> Airport Transfer</p>
                                            <p class="mb-1"><strong>Amount:</strong> ₹2,500</p>
                                            <p class="mb-0"><strong>Valid till:</strong> 21 Mar 2024</p>
                                        </div>
                                        <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                            <button class="btn btn-primary btn-sm">Accept Quote</button>
                                            <button class="btn btn-outline-primary btn-sm">Download PDF</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wallet Tab -->
                        <div class="tab-pane fade" id="wallet" role="tabpanel">
                            <h3 class="mb-4">My Wallet</h3>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-muted mb-1">Available Balance</h6>
                                            <h3 class="mb-0">₹5,000</h3>
                                        </div>
                                        <button class="btn btn-primary">Add Money</button>
                                    </div>
                                </div>
                            </div>
                            
                            <h5 class="mb-3">Recent Transactions</h5>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Added Money</h6>
                                            <small class="text-muted">15 Mar 2024, 10:30 AM</small>
                                        </div>
                                        <span class="text-success">+₹1,000</span>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1">Booking Payment</h6>
                                            <small class="text-muted">14 Mar 2024, 2:15 PM</small>
                                        </div>
                                        <span class="text-danger">-₹2,500</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Passengers Tab -->
                        <div class="tab-pane fade" id="passengers" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3>My Passengers</h3>
                                <button class="btn btn-primary"><i class="bi bi-plus"></i> Add Passenger</button>
                            </div>
                            
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h5 class="card-title mb-1">John Doe</h5>
                                            <p class="text-muted mb-0">Adult • Male</p>
                                        </div>
                                        <div>
                                            <button class="btn btn-link text-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-link text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1"><strong>Email:</strong> john@example.com</p>
                                            <p class="mb-0"><strong>Phone:</strong> +1234567890</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Support Tab -->
                        <div class="tab-pane fade" id="support" role="tabpanel">
                            <h3 class="mb-4">Support & FAQs</h3>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="mb-3">Need Help?</h5>
                                    <div class="d-flex gap-3">
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bi bi-chat-dots me-2"></i>Live Chat
                                        </a>
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bi bi-telephone me-2"></i>Call Us
                                        </a>
                                        <a href="#" class="btn btn-outline-primary">
                                            <i class="bi bi-envelope me-2"></i>Email
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            How do I make a booking?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            To make a booking, simply follow these steps:
                                            <ol>
                                                <li>Select your destination and travel date</li>
                                                <li>Choose your preferred service</li>
                                                <li>Fill in passenger details</li>
                                                <li>Make payment</li>
                                                <li>Receive confirmation</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            What is your cancellation policy?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Our cancellation policy allows free cancellation up to 24 hours before the scheduled service. 
                                            Cancellations made within 24 hours may be subject to charges.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                            How can I add money to my wallet?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            You can add money to your wallet using any major credit/debit card or UPI. 
                                            Simply click on the "Add Money" button in the wallet section and follow the instructions.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.querySelector('.profile-sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const menuIcon = document.getElementById('menuIcon');
            const closeButton = document.querySelector('.btn-close');
            const mainContent = document.querySelector('.profile-content');
            const body = document.body;

            function toggleSidebar() {
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
                mainContent.classList.toggle('dim');
                body.classList.toggle('sidebar-open');
                
                // Toggle between hamburger and close icons
                if (menuIcon.classList.contains('bi-list')) {
                    menuIcon.classList.remove('bi-list');
                    menuIcon.classList.add('bi-x-lg');
                } else {
                    menuIcon.classList.remove('bi-x-lg');
                    menuIcon.classList.add('bi-list');
                }
            }

            if (sidebarToggle && overlay) {
                sidebarToggle.addEventListener('click', toggleSidebar);
                overlay.addEventListener('click', toggleSidebar);
            }

            // Add close button functionality
            if (closeButton) {
                closeButton.addEventListener('click', toggleSidebar);
            }

            // Handle tab switching and active state
            const tabLinks = document.querySelectorAll('.sidebar-menu a');
            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    tabLinks.forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Show the corresponding tab content
                    const targetId = this.getAttribute('data-bs-target');
                    const tabContents = document.querySelectorAll('.tab-pane');
                    tabContents.forEach(content => {
                        content.classList.remove('show', 'active');
                    });
                    document.querySelector(targetId).classList.add('show', 'active');
                    
                    // Close sidebar on mobile
                    if (window.innerWidth < 768) {
                        toggleSidebar();
                    }
                });
            });

            // Address form functionality
            const editAddressBtn = document.getElementById('editAddressBtn');
            const addressDisplay = document.getElementById('addressDisplay');
            const addressForm = document.getElementById('addressForm');
            const cancelEditBtn = document.getElementById('cancelEdit');
            const addressEditForm = document.getElementById('addressEditForm');

            // Edit button click handler
            if (editAddressBtn) {
                editAddressBtn.addEventListener('click', function() {
                    addressDisplay.style.display = 'none';
                    addressForm.style.display = 'block';
                    
                    // Populate form with current values
                    document.getElementById('address').value = document.getElementById('displayAddress').textContent;
                    document.getElementById('city').value = document.getElementById('displayCity').textContent;
                    document.getElementById('state').value = document.getElementById('displayState').textContent;
                    document.getElementById('pincode').value = document.getElementById('displayPincode').textContent;
                });
            }

            // Cancel button click handler
            if (cancelEditBtn) {
                cancelEditBtn.addEventListener('click', function() {
                    addressDisplay.style.display = 'block';
                    addressForm.style.display = 'none';
                });
            }

            // Form submit handler
            if (addressEditForm) {
                addressEditForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Update display values
                    document.getElementById('displayAddress').textContent = document.getElementById('address').value || 'Not set';
                    document.getElementById('displayCity').textContent = document.getElementById('city').value || 'Not set';
                    document.getElementById('displayState').textContent = document.getElementById('state').value || 'Not set';
                    document.getElementById('displayPincode').textContent = document.getElementById('pincode').value || 'Not set';
                    
                    // Hide form and show display
                    addressDisplay.style.display = 'block';
                    addressForm.style.display = 'none';
                });
            }
        });
    </script>
</body>
</html>