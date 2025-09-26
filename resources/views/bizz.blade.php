
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
    box-shadow: 0 0 0 2px var(--brand-orange), 0.2;
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
    display: inline-block;
    background: var(--modal-card);
    padding: 0 1rem;
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin: 0 auto;
    display: block;
    text-align: center;
    width: fit-content;
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

@media (max-width: 640px) {
    .mybiz-modal-dialog {
        margin: 0.5rem;
    }
    
    .mybiz-content {
        padding: 1.5rem;
    }
}
</style>

{{-- Modal HTML --}}
<div id="mybizModal" class="mybiz-modal" data-modal="mybiz">
    <div class="mybiz-modal-backdrop" data-dismiss="modal"></div>
    
    <div class="mybiz-modal-dialog">
        <button class="mybiz-close-btn" data-dismiss="modal" aria-label="Close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        {{-- Decorative Elements --}}
        <div class="mybiz-decorative">
            {{-- Stars --}}
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
            {{-- Logo --}}
            <div class="mybiz-logo">
                <div class="mybiz-logo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <path d="M16 10a4 4 0 0 1-8 0"/>
                    </svg>
                </div>
                <div class="mybiz-logo-text">Biz</div>
            </div>

            {{-- Main Headline --}}
            <div class="mybiz-headline">
                Preferred by 
                <span class="mybiz-brand-highlight">Netflix</span>, 
                <span class="mybiz-brand-highlight">Godrej</span>, 
                <span class="mybiz-brand-highlight">Vedanta</span>, 
                <span class="mybiz-brand-highlight">Bajaj</span> & 
                <span class="mybiz-brand-highlight">59,000+</span> 
                business. Join the big league!
            </div>

            {{-- Feature Points --}}
            <div class="mybiz-features">
                <div class="mybiz-feature">
                    <div class="mybiz-feature-dot"></div>
                    <div class="mybiz-feature-text">
                        <span class="mybiz-brand-highlight">GST Invoice</span> Assurance & Solutions
                    </div>
                </div>
                <div class="mybiz-feature">
                    <div class="mybiz-feature-dot"></div>
                    <div class="mybiz-feature-text">
                        <span class="mybiz-brand-highlight">Free Cancellation</span> On Flights
                    </div>
                </div>
                <div class="mybiz-feature">
                    <div class="mybiz-feature-dot"></div>
                    <div class="mybiz-feature-text">
                        <span class="mybiz-brand-highlight">Zero Subscription</span> Cost
                    </div>
                </div>
            </div>

            {{-- Login Section --}}
            <div class="mybiz-section-title">
                <h2>LOGIN/SIGN UP</h2>
            </div>

            {{-- Email Form --}}
            <form class="mybiz-form" method="POST" action="{{ $action ?? '#' }}">
                @csrf
                <div class="mybiz-form-group">
                    <div class="mybiz-form-header">
                        <label class="mybiz-form-label" for="work_email">Work Email</label>
                        <a href="#" class="mybiz-forgot-link">Forgot Login Id?</a>
                    </div>
                    <input 
                        type="email" 
                        id="work_email" 
                        name="work_email" 
                        class="mybiz-input" 
                        placeholder="Enter your work email id"
                        value="{{ old('work_email') }}"
                        required
                    >
                    @error('work_email')
                        <div style="color: var(--brand-orange); font-size: 0.875rem; margin-top: 0.25rem;">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="mybiz-btn mybiz-btn-primary" id="continueBtn">
                    CONTINUE
                </button>
            </form>

            {{-- Divider --}}
            <div class="mybiz-divider">
                <div class="mybiz-divider-text">
                    OR USE YOUR BUSINESS ACCOUNT WITH
                </div>
            </div>

            {{-- Google Sign In --}}
            <a href="{{ $googleUrl ?? '#' }}" class="mybiz-btn mybiz-btn-outline">
                <div class="mybiz-google-icon">G</div>
                <span>Google</span>
            </a>

            {{-- Terms --}}
            <div class="mybiz-terms">
                By proceeding, you agree to MakeMyTrip's 
                <a href="{{ $termsUrl ?? '#' }}">Terms of use</a>, 
                <a href="{{ $servicesUrl ?? '#' }}">Terms of services</a> 
                and 
                <a href="{{ $privacyUrl ?? '#' }}">Privacy</a>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('mybizModal');
    const continueBtn = document.getElementById('continueBtn');
    const emailInput = document.querySelector('input[name="work_email"]');

    // Show modal function
    window.showMyBizModal = function() {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    };

    // Hide modal function
    window.hideMyBizModal = function() {
        modal.classList.remove('show');
        document.body.style.overflow = '';
    };

    // Close modal on backdrop click and close button
    modal.addEventListener('click', function(e) {
        if (e.target.hasAttribute('data-dismiss') || e.target === modal.querySelector('.mybiz-modal-backdrop')) {
            hideMyBizModal();
        }
    });

    // Enable/disable continue button based on email input
    if (emailInput && continueBtn) {
        function toggleContinueButton() {
            const hasEmail = emailInput.value.trim().length > 0;
            continueBtn.disabled = !hasEmail;
        }

        emailInput.addEventListener('input', toggleContinueButton);
        toggleContinueButton(); // Initial check
    }

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            hideMyBizModal();
        }
    });
});

// Global functions for external trigger
window.MyBizModal = {
    show: function() {
        window.showMyBizModal();
    },
    hide: function() {
        window.hideMyBizModal();
    }
};
</script>

{{-- Usage Instructions in Comments --}}
{{--
USAGE INSTRUCTIONS:

1. Include this template in your Blade view:
   @include('mybiz-modal', [
       'action' => route('login'),
       'googleUrl' => route('auth.google'),
       'termsUrl' => route('terms'),
       'servicesUrl' => route('services'),
       'privacyUrl' => route('privacy')
   ])

2. Trigger the modal with JavaScript:
   <button onclick="MyBizModal.show()">Open Modal</button>
   
   Or:
   <button onclick="showMyBizModal()">Open Modal</button>

3. Handle form submission in your Laravel controller:
   public function login(Request $request)
   {
       $request->validate([
           'work_email' => 'required|email'
       ]);
       
       // Your login logic here
   }

4. Optional: Auto-show modal on page load:
   <script>
       window.addEventListener('load', function() {
           MyBizModal.show();
       });
   </script>
--}}