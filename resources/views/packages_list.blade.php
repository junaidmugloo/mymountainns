<style>
    /* Example: Custom Pagination Styling */

/* Change the background and text color of the active page link */
.page-link{
    
    font-size: 1rem;
    padding: 0.6rem;
}
.active>.page-link, .page-link.active{
    background: linear-gradient(90deg, #ef4444 0%, #f97316 100%) !important;
}
</style>

@forelse ($packages as $p)
    {{-- Your existing HTML structure for a single package card goes here --}}
    {{-- Example: --}}
    <div class="package-card">
        <div class="row g-0">
            <div class="col-md-4 position-relative">
                <img src="/package_images/{{$p->image}}" class="package-image w-100 h-100" alt="Amritsar">
                <div class="badge-group">
                    <span class="badge-custom badge-blue"> {{$p->tag_line}}</span>
                </div>
                <i class="far fa-heart heart-icon"></i>
            </div>
            <div class="col-md-8">
                <div class="package-details">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="package-title">{{$p->name}}</h5>
                        <div></div> <!-- Placeholder for rating if any -->
                    </div>
                    
                    <div class="all-inclusive position-relative" 
                         data-bs-toggle="tooltip" 
                         data-bs-placement="bottom" 
                         title="✓ Hotel Accommodation
✓ Daily Breakfast
✓ Sightseeing Tours
✓ Airport Transfers
✓ Local Guide
✓ All Taxes Included">
                        <i class="fas fa-gift"></i>
                        Holiday Includes
                        <i class="fas fa-info-circle ms-1"></i>
                    </div>

                    {{-- Initialize tooltips --}}
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                                return new bootstrap.Tooltip(tooltipTriggerEl, {
                                    html: true
                                })
                            })
                        });
                    </script>

                    <div class="info-grid">
                        <div class="info-item">
                            <div>Days</div>
                            <div>{{$p->day}}</div>
                        </div>
                        <div class="info-item">
                          <div>Nights</div>
                          <div>{{$p->night}}</div>
                      </div>
                        <div class="info-item">
                            <div>Destinations</div>
                            <div>{{$p->D1}}, {{$p->D2}}, {{$p->D3}}</div>
                        </div>
                       
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="tour-highlights mb-3">
                                <div class="info-label">
<div class="d-flex gap-3 text-center">
    <div><i class="fas fa-hotel"></i> Hotel</div>
    <div><i class="fas fa-utensils"></i> Meal</div>
    <div><i class="fas fa-bus"></i> Transfer</div>
    <div><i class="fas fa-camera"></i> Sightseeing</div>
    <div><i class="fas fa-hiking"></i> Activities</div>
</div>
                                </div>
                                <!-- Placeholder for more info -->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="price-section">
                                <div class="price-label">Starts from</div>
                                <div class="price-amount">₹{{$p->discount}}</div>
                                <div class="price-label">per person</div>
                                <div class="emi-text">
                                    Original Price <span class="emi-amount">₹<del>{{$p->price}}</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                         <div class="col-md-7 action-buttons">
                            <button class="btn btn-details" onclick="window.location.href='/details/{{$p->id}}'">View Tour Details</button>
                        </div>
                        <div class="col-md-5 action-buttons">
                            <button class="btn btn-dates-prices" data-bs-toggle="modal" data-bs-target="#requestModal">Book Now</button>
                        </div>
                    </div>
                    {{-- <div class="compare-enquire">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="compare2">
                            <label class="form-check-label" for="compare2">Compare</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="enquire2">
                            <label class="form-check-label" for="enquire2">Enquire Now</label>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="text-center p-5">
        <i class="fas fa-box-open fa-3x mb-3 text-muted"></i>
        <p class="lead">No packages found matching your criteria.</p>
        <p>Try adjusting your filters or <a href="#" class="clear-link-inline">clear all filters</a>.</p>
    </div>
@endforelse

<div class="mt-5 d-flex justify-content-center ">
    @if ($packages->hasPages())
        <nav aria-label="Package navigation" class="w-100">
            <ul class="pagination pagination-lg flex-wrap justify-content-center">
                {{-- Previous Page Link --}}
                @if ($packages->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $packages->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @php
                    $window = 2; // Number of links to show on each side of current page
                    $current = $packages->currentPage();
                    $last = $packages->lastPage();
                    $start = max(1, $current - $window);
                    $end = min($last, $current + $window);
                @endphp

                @if($start > 1)
                    <li class="page-item"><a class="page-link" href="{{ $packages->url(1) }}">1</a></li>
                    @if($start > 2)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif
                @endif

                @for($i = $start; $i <= $end; $i++)
                    @if($i == $current)
                        <li class="page-item active">
                            <span class="page-link">{{ $i }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $packages->url($i) }}">{{ $i }}</a>
                        </li>
                    @endif
                @endfor

                @if($end < $last)
                    @if($end < $last - 1)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif
                    <li class="page-item"><a class="page-link" href="{{ $packages->url($last) }}">{{ $last }}</a></li>
                @endif

                {{-- Next Page Link --}}
                @if ($packages->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $packages->nextPageUrl() }}" rel="next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&raquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>


{{-- This script updates the package count in the main page's subheader --}}
<script>
(function() {
    $('#package-count-current').text('{{ $packages->firstItem() ?: 0 }}');
    $('#package-count-last').text('{{ $packages->lastItem() ?: 0 }}');
    $('#package-count-total').text('{{ $packages->total() }}');
})();
</script>