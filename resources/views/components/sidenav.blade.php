<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
   

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    <ul>
        @if (Session::has('admin'))
            
       
  <li class="active" id="dashboard">
    <a href="{{ url('/admin') }}">
        <img src="{{ asset('assets/img/icons/dashboard.svg') }}" alt="img">
        <span> Dashboard</span>
    </a>
</li>

    <li class="submenu" id="banners">
    <a href="javascript:void(0);"><i  class='text-muted jx bx bx-slideshow'></i><span>Banners</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="/viewbanner">View Banners</a></li>
    <li><a href="/addbanner">Add Banners</a></li>
   
    </ul>
    </li>
    <li class="submenu" id="category">
    <a href="javascript:void(0);"><i class='text-muted jx bx bx-category' ></i><span> Category</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="/addcategory">Add Category</a></li>
    <li><a href="/viewcategory">View Category</a></li>
    </ul>
    </li>
    <li class="submenu" id="packages">
    <a href="javascript:void(0);"><i class='text-muted jx bx bxs-backpack' ></i><span> Packages</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="/addpackages">Add Packages</a></li>
    <li><a href="/viewpackages">View Packages</a></li>
    </ul>
    </li>
    <li class="submenu" id="offers">
    <a href="javascript:void(0);"><i class='text-muted jx bx bxs-offer'></i><span>Offers</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="addoffer">Add Offer</a></li>
    <li><a href="viewoffer">View Offer</a></li>
    </ul>
    </li>

    <li class="submenu" id="gallery">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-photo-album'></i><span>Gallery</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="addgallery">Add Gallery</a></li>
        <li><a href="viewgallery">View Gallery</a></li>
        </ul>
    </li>

    <li class="submenu" id="faq">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-comment-add'></i><span>FAQ</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="addfaq">Add FAQ</a></li>
        <li><a href="viewfaq">View FAQ</a></li>
        </ul>
    </li>

    <li class="submenu" id="faqx">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-user'></i><span>Customers</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/customer">Add Client</a></li>
        <li><a href="/viewcustomer">View Client</a></li>
        </ul>
    </li>

    <li class="submenu" id="faqxx">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-user-check'></i><span>Staff</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/staff">Add Staff</a></li>
        <li><a href="/viewstaff">View Staff</a></li>
        </ul>
    </li>

    <li class="submenu" id="hotel">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-building-house'></i><span>Hotels</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/addhotel">Add Hotel</a></li>
        {{-- <li><a href="/addmeal">Add Meal</a></li> --}}
        </ul>
    </li>


    <li class="submenu" id="vehicle">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-car'></i><span>Vehicle</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/addvehicles">Add Vehicle</a></li>
        {{-- <li><a href="/addmeal">Add Meal</a></li> --}}
        </ul>
    </li>

    <li class="submenu" id="blogs">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxl-blogger'></i><span>blogs</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/addblog">Add Blog</a></li>
        <li><a href="/viewblog">View Blogs</a></li>
        </ul>
    </li>


</ul>

    
    @else
    <li class="submenu" id="packages">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-backpack' ></i><span> Packages</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/addpackages">Add Packages</a></li>
        <li><a href="/viewpackages">View Packages</a></li>
        </ul>
    </li>

    <li class="submenu" id="vehicle">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-car'></i><span>Vehicle</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/addvehicles">Add Vehicle</a></li>
        {{-- <li><a href="/addmeal">Add Meal</a></li> --}}
        </ul>
    </li>

    <li class="submenu" id="hotel">
        <a href="javascript:void(0);"><i class='text-muted jx bx bxs-building-house'></i><span>Hotels</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/addhotel">Add Hotel</a></li>
        {{-- <li><a href="/addmeal">Add Meal</a></li> --}}
        </ul>
    </li>

<li class="submenu" id="faqx">
    <a href="javascript:void(0);"><i class='text-muted jx bx bxs-user'></i><span>Customers</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="/customer">Add Client</a></li>
    <li><a href="/viewcustomer">View Client</a></li>
    </ul>
</li>
</ul>
    @endif
   
    </div>
    </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
   