<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBiz Modal</title>
    <style>
        /* MyBiz Modal Design System */
        :root {
            --modal-background: hsl(240, 15%, 95%);
            --modal-card: hsl(0, 0%, 100%);
            --brand-orange: hsl(16, 95%, 64%);
            --brand-orange-light: hsl(16, 95%, 94%);
            --text-primary: hsl(240, 10%, 12%);
            --text-secondary: hsl(240, 4%, 45%);
            --text-muted: hsl(240, 4%, 60%);
            --button-muted: hsl(240, 4%, 70%);
            --button-muted-foreground: hsl(0, 0%, 100%);
            --border: hsl(240, 6%, 90%);
            --gradient-orange: linear-gradient(135deg, hsl(16, 95%, 64%), hsl(20, 95%, 58%));
            --gradient-decorative: linear-gradient(135deg, hsl(16, 95%, 64%, 0.1), hsl(20, 95%, 58%, 0.05));
            --shadow-modal: 0 25px 50px -12px hsl(240, 10%, 12%, 0.25);
            --shadow-soft: 0 1px 3px 0 hsl(240, 10%, 12%, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            line-height: 1.5;
            color: var(--text-primary);
        }

        .mybiz-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mybiz-modal.show {
            opacity: 1;
            visibility: visible;
        }

        .mybiz-modal-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }

        .mybiz-modal-dialog {
            position: relative;
            width: 100%;
            max-width: 448px;
            margin: 1rem;
            background: var(--modal-card);
            border-radius: 1rem;
            box-shadow: var(--shadow-modal);
            overflow: hidden;
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        .mybiz-modal.show .mybiz-modal-dialog {
            transform: scale(1);
        }

        .mybiz-close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            z-index: 10;
            padding: 0.5rem;
            color: var(--brand-orange);
            background: none;
            border: none;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .mybiz-close-btn:hover {
            color: var(--brand-orange);
            opacity: 0.8;
        }

        .mybiz-decorative {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            background: var(--gradient-decorative);
        }

        .mybiz-decorative::before,
        .mybiz-decorative::after {
            content: '';
            position: absolute;
            background: var(--gradient-orange);
            border-radius: 0.5rem;
            opacity: 0.2;
        }

        .mybiz-decorative::before {
            width: 4rem;
            height: 4rem;
            bottom: 2rem;
            right: 1rem;
            transform: rotate(45deg);
            border-radius: 1rem;
        }

        .mybiz-decorative::after {
            width: 2rem;
            height: 2rem;
            top: 8rem;
            right: 1.5rem;
            transform: rotate(12deg);
            opacity: 0.3;
        }

        .mybiz-content {
            position: relative;
            padding: 2rem;
            padding-bottom: 1.5rem;
        }

        .mybiz-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .mybiz-logo-icon {
            background: var(--gradient-orange);
            padding: 0.5rem;
            border-radius: 0.5rem;
            margin-right: 0.75rem;
        }

        .mybiz-logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-primary);
        }

        .mybiz-headline {
            font-size: 1.125rem;
            color: var(--text-primary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .mybiz-brand-highlight {
            color: var(--brand-orange);
            font-weight: 500;
        }

        .mybiz-features {
            margin-bottom: 2rem;
        }

        .mybiz-feature {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
        }

        .mybiz-feature-dot {
            width: 0.5rem;
            height: 0.5rem;
            background: var(--brand-orange);
            border-radius: 50%;
            margin-top: 0.5rem;
            margin-right: 0.75rem;
            flex-shrink: 0;
        }

        .mybiz-feature-text {
            color: var(--text-primary);
        }

        .mybiz-section-title {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .mybiz-section-title h2 {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin: 0;
        }

        .mybiz-form {
            margin-bottom: 1.5rem;
        }

        .mybiz-form-group {
            margin-bottom: 1rem;
        }

        .mybiz-form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .mybiz-form-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-primary);
        }

        .mybiz-forgot-link {
            font-size: 0.875rem;
            color: var(--brand-orange);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .mybiz-forgot-link:hover {
            color: var(--brand-orange);
            opacity: 0.8;
        }

        .mybiz-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            background: white;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .mybiz-input::placeholder {
            color: var(--text-muted);
        }

        .mybiz-input:focus {
            outline: none;
            border-color: var(--brand-orange);
            box-shadow: 0 0 0 2px hsla(16, 95%, 64%, 0.2);
        }

        .mybiz-btn {
            width: 100%;
            padding: 0.75rem 1rem;
            font-weight: 500;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 1rem;
        }

        .mybiz-btn-primary {
            background: var(--button-muted);
            color: var(--button-muted-foreground);
        }

        .mybiz-btn-primary:hover:not(:disabled) {
            background: var(--button-muted);
            opacity: 0.9;
        }

        .mybiz-btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .mybiz-btn-outline {
            background: white;
            color: var(--text-primary);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .mybiz-btn-outline:hover {
            background: var(--modal-background);
        }

        .mybiz-divider {
            position: relative;
            margin: 1.5rem 0;
        }

        .mybiz-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: var(--border);
        }

        .mybiz-divider-text {
            position: relative;
            display: block;
            background: var(--modal-card);
            padding: 0 1rem;
            font-size: 0.875rem;
            color: var(--text-secondary);
            text-align: center;
            width: fit-content;
            margin: 0 auto;
        }

        .mybiz-google-icon {
            width: 1.25rem;
            height: 1.25rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-soft);
            font-size: 0.75rem;
            font-weight: bold;
        }

        .mybiz-terms {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-align: center;
            margin-top: 1.5rem;
            line-height: 1.6;
        }

        .mybiz-terms a {
            color: var(--brand-orange);
            text-decoration: none;
        }

        .mybiz-terms a:hover {
            color: var(--brand-orange);
            opacity: 0.8;
        }

        /* Stars decoration */
        .mybiz-star {
            position: absolute;
            color: var(--brand-orange);
            opacity: 0.6;
        }

        .mybiz-star-1 {
            top: 3rem;
            right: 2rem;
            width: 0.75rem;
            height: 0.75rem;
        }

        .mybiz-star-2 {
            top: 5rem;
            right: 3rem;
            width: 0.5rem;
            height: 0.5rem;
        }

        .mybiz-star-3 {
            top: 10rem;
            right: 4rem;
            width: 0.5rem;
            height: 0.5rem;
            opacity: 0.5;
        }

        .demo-page {
            padding: 2rem;
            text-align: center;
            background: var(--modal-background);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .demo-btn {
            background: var(--brand-orange);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .demo-btn:hover {
            opacity: 0.9;
        }

        @media (max-width: 640px) {
            .mybiz-modal-dialog {
                margin: 0.5rem;
            }
            
            .mybiz-content {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="demo-page">
        <h1 style="margin-bottom: 2rem; color: var(--text-primary);">MyBiz Modal Demo</h1>
        <button class="demo-btn" onclick="showModal()">Open MyBiz Modal</button>
    </div>

    <!-- MyBiz Modal -->
    <div id="mybizModal" class="mybiz-modal">
        <div class="mybiz-modal-backdrop" onclick="hideModal()"></div>
        
        <div class="mybiz-modal-dialog">
            <button class="mybiz-close-btn" onclick="hideModal()" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>

            <!-- Decorative Elements -->
            <div class="mybiz-decorative">
                <!-- Stars -->
                <div class="mybiz-star mybiz-star-1">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
                <div class="mybiz-star mybiz-star-2">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
                <div class="mybiz-star mybiz-star-3">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
            </div>

            <div class="mybiz-content">
                <!-- Logo -->
                

                <!-- Main Headline -->
                <
                <!-- Feature Points -->
                

                <!-- Login Section -->
                <div class="mybiz-section-title">
                    <h2>LOGIN/SIGN UP</h2>
                </div>

                <h5 class="mx-3" style="font-weight:300;">Save up to <x style="color:#20c997;">50% OFF</x></h5>
          <h6 class="mx-3 mb-4" style="font-size:0.8rem;">We'll be needing some of your basic details to help you better with your trip</h6>
          <form action="" id="tform" style=" justify-content: center;
            display: flex !important;">
            @csrf
            <div class="row w-100 h-100">
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="hidden" name="package" id="packagename" value="" class="form-control" >
                  <input type="text" name="name" required class="form-control" placeholder="Enter Full Name">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <input type="tel" name="contact" required class="form-control" placeholder="Your Phone">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mb-3">
                  <input type="date"  id="myDate2"  name="date"  class="form-control" placeholder="Travel Data">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mb-3">
                  <input type="number" name="persons"  class="form-control" placeholder="Travel Count">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group mb-3">
                  <textarea type="text" name="message"  class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-3">
                  <button  style="background:#20c997;" class="btn text-light d-block w-100">Connect with and
                    Experts</button>
                </div>
              </div>
            </div>
          </form>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('mybizModal');
        const continueBtn = document.getElementById('continueBtn');
        const emailInput = document.querySelector('input[name="work_email"]');

        // Show modal function
        function showModal() {
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        // Hide modal function
        function hideModal() {
            modal.classList.remove('show');
            document.body.style.overflow = '';
        }

        // Enable/disable continue button based on email input
        function toggleContinueButton() {
            const hasEmail = emailInput.value.trim().length > 0;
            continueBtn.disabled = !hasEmail;
        }

        // Handle form submission
        function handleSubmit(event) {
            event.preventDefault();
            const email = emailInput.value;
            alert(`Form submitted with email: ${email}`);
            // Here you would typically send the data to your server
        }

        // Event listeners
        emailInput.addEventListener('input', toggleContinueButton);

        // Close on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('show')) {
                hideModal();
            }
        });

        // Initial state
        toggleContinueButton();
    </script>
</body>
</html>