 <!-- Sidebar Start -->
 <aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div>
         <div class="brand-logo d-flex align-items-center justify-content-between">
             <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                 <img src="{{ asset('assets/images/logo.png') }}" class="dark-logo" style="max-height:40px;" />
             </a>
             <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                 <i class="fa-solid fa-arrow-left"></i>
             </div>
         </div>
         <!-- Sidebar navigation-->
         <nav class="sidebar-nav scroll-sidebar" data-simplebar>
             <ul id="sidebarnav">
                 <!-- ============================= -->
                 <!-- Home -->
                 <!-- ============================= -->
                 <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Sayfalar</span>
                 </li>
                 <!-- =================== -->
                 <!-- Dashboard -->
                 <!-- =================== -->
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['users', 'users/create']) ? ' active' : '' }}"
                         href="{{ route('users.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-user"></i>
                         </span>
                         <span class="hide-menu">Kullanıcılar</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['internship-posts', 'internship-posts/create']) ? ' active' : '' }}"
                         href="{{ route('internship-posts.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-signs-post"></i>
                         </span>
                         <span class="hide-menu">Staj İlanları</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['scholarship-posts', 'scholarship-posts/create']) ? ' active' : '' }}"
                         href="{{ route('scholarship-posts.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-award"></i>
                         </span>
                         <span class="hide-menu">Burs İlanları</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['job-posts', 'job-posts/create']) ? ' active' : '' }}"
                         href="{{ route('job-posts.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-user-tie"></i>
                         </span>
                         <span class="hide-menu">İş İlanları</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['talent-programs', 'talent-programs/create']) ? ' active' : '' }}"
                         href="{{ route('talent-programs.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-star"></i>
                         </span>
                         <span class="hide-menu">Yetenek Programları</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['activities-posts', 'activities-posts/create']) ? ' active' : '' }}"
                         href="{{ route('activities-posts.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-chart-line"></i>
                         </span>
                         <span class="hide-menu">Etkinlikler</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['young-university', 'young-university/create']) ? ' active' : '' }}"
                         href="{{ route('young-university.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-graduation-cap"></i>
                         </span>
                         <span class="hide-menu">Genç Üniversiteliler</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link{{ request()->is(['student-clubs', 'student-clubs/create']) ? ' active' : '' }}"
                         href="{{ route('student-clubs.index') }}" aria-expanded="false">
                         <span>
                             <i class="fa-solid fa-school"></i>
                         </span>
                         <span class="hide-menu">Öğrenci Kulüpleri</span>
                     </a>
                 </li>
                 {{--  <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index2.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-shopping-cart"></i>
                         </span>
                         <span class="hide-menu">eCommerce</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index3.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-currency-dollar"></i>
                         </span>
                         <span class="hide-menu">NFT</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index4.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-cpu"></i>
                         </span>
                         <span class="hide-menu">Crypto</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index5.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-activity-heartbeat"></i>
                         </span>
                         <span class="hide-menu">General</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index6.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-playlist"></i>
                         </span>
                         <span class="hide-menu">Music</span>
                     </a>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- Apps -->
                 <!-- ============================= -->
                 {{--  <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Apps</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-calendar.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-calendar"></i>
                         </span>
                         <span class="hide-menu">Calendar</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-chat.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-message-dots"></i>
                         </span>
                         <span class="hide-menu">Chat</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-email.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-mail"></i>
                         </span>
                         <span class="hide-menu">Email</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-notes.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-notes"></i>
                         </span>
                         <span class="hide-menu">Notes</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-contact.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-phone"></i>
                         </span>
                         <span class="hide-menu">Contact Table</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-contact2.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-list-details"></i>
                         </span>
                         <span class="hide-menu">Contact List</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/app-invoice.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-file-text"></i>
                         </span>
                         <span class="hide-menu">Invoice</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-user-profile.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-user-circle"></i>
                         </span>
                         <span class="hide-menu">User Profile</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-chart-donut-3"></i>
                         </span>
                         <span class="hide-menu">Blog</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/blog-posts.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Posts</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/blog-detail.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Details</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-basket"></i>
                         </span>
                         <span class="hide-menu">Ecommerce</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/eco-shop.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Shop</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/eco-shop-detail.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Details</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/eco-product-list.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">List</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/eco-checkout.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Checkout</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- PAGES -->
                 <!-- ============================= -->
                 {{-- <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">PAGES</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-pricing.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-currency-dollar"></i>
                         </span>
                         <span class="hide-menu">Pricing</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-faq.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-help"></i>
                         </span>
                         <span class="hide-menu">FAQ</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/page-account-settings.html"
                         aria-expanded="false">
                         <span>
                             <i class="ti ti-user-circle"></i>
                         </span>
                         <span class="hide-menu">Account Setting</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-layout"></i>
                         </span>
                         <span class="hide-menu">Widgets</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/widgets-cards.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Cards</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/widgets-banners.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Banner</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/widgets-charts.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Charts</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- UI -->
                 <!-- ============================= -->
                 {{-- <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">UI</span>
                 </li> --}}
                 <!-- =================== -->
                 <!-- UI Elements -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-layout-grid"></i>
                         </span>
                         <span class="hide-menu">UI Elements</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-accordian.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Accordian</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-badge.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Badge</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-buttons.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Buttons</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-dropdowns.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Dropdowns</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-modals.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Modals</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-tab.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Tab</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-tooltip-popover.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Tooltip & Popover</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-notification.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Notification</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-progressbar.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Progressbar</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-pagination.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Pagination</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-typography.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Typography</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-bootstrap-ui.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Bootstrap UI</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-breadcrumb.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Breadcrumb</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-offcanvas.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Offcanvas</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-lists.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Lists</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-grid.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Grid</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-carousel.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Carousel</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-scrollspy.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Scrollspy</span>
                             </a>
                         </li>
                         <li class="sidebar-item mb-3">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ui-spinner.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Spinner</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- Forms -->
                 <!-- ============================= -->
                 {{--  <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Forms</span>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Form Elements -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-file-text"></i>
                         </span>
                         <span class="hide-menu">Form Elements</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-inputs.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Forms Input</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-input-groups.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Input Groups</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-input-grid.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Input Grid</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-checkbox-radio.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Checkbox & Radios</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-bootstrap-touchspin.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Bootstrap Touchspin</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-bootstrap-switch.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Bootstrap Switch</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-select2.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Select2</span>
                             </a>
                         </li>
                         <li class="sidebar-item mb-3">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-dual-listbox.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Dual Listbox</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Form Input -->
                 <!-- =================== -->
                 {{--   <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-basic.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-archive"></i>
                         </span>
                         <span class="hide-menu">Basic Form</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-vertical.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-box-align-left"></i>
                         </span>
                         <span class="hide-menu">Form Vertical</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-horizontal.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-box-align-bottom"></i>
                         </span>
                         <span class="hide-menu">Form Horizontal</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-actions.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-file-export"></i>
                         </span>
                         <span class="hide-menu">Form Actions</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-row-separator.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-separator-horizontal"></i>
                         </span>
                         <span class="hide-menu">Row Separator</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-bordered.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-border-outer"></i>
                         </span>
                         <span class="hide-menu">Form Bordered</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-detail.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-file-description"></i>
                         </span>
                         <span class="hide-menu">Form Detail</span>
                     </a>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Form Wizard -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-wizard.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-files"></i>
                         </span>
                         <span class="hide-menu">Form Wizard</span>
                     </a>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Quill Editor -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-editor-quill.html"
                         aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-edit"></i>
                         </span>
                         <span class="hide-menu">Quill Editor</span>
                     </a>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- Tables -->
                 <!-- ============================= -->
                 {{--  <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Tables</span>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Bootstrap Table -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-layout-sidebar"></i>
                         </span>
                         <span class="hide-menu">Bootstrap Table</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-basic.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Basic Table</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-dark-basic.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Dark Basic Table</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-sizing.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Sizing Table</span>
                             </a>
                         </li>
                         <li class="sidebar-item mb-3">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-layout-coloured.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Coloured Table</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Datatable -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-air-conditioning-disabled"></i>
                         </span>
                         <span class="hide-menu">Datatables</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-datatable-basic.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Basic Initialisation</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-datatable-api.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">API</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/table-datatable-advanced.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Advanced Initialisation</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- Charts -->
                 <!-- ============================= -->
                 {{-- <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Charts</span>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Apex Chart -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-chart-pie"></i>
                         </span>
                         <span class="hide-menu">Apex Charts</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-line.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Line Chart</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-area.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Area Chart</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-bar.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Bar Chart</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-pie.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Pie Chart</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-radial.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Radial Chart</span>
                             </a>
                         </li>
                         <li class="sidebar-item mb-3">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-radar.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Radar Chart</span>
                             </a>
                         </li>
                     </ul>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- Icons -->
                 <!-- ============================= -->
                 {{-- <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Icons</span>
                 </li> --}}
                 <!-- =================== -->
                 <!-- Tabler Icon -->
                 <!-- =================== -->
                 {{-- <li class="sidebar-item">
                     <a class="sidebar-link sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/icon-tabler.html"
                         aria-expanded="false">
                         <span class="rounded-3">
                             <i class="ti ti-archive"></i>
                         </span>
                         <span class="hide-menu">Tabler Icon</span>
                     </a>
                 </li> --}}
                 <!-- =================== -->
                 <!-- AUTH -->
                 <!-- =================== -->
                 {{-- <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">AUTH</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-error.html"
                         aria-expanded="false">
                         <span class="rounded-3">
                             <i class="ti ti-alert-circle"></i>
                         </span>
                         <span class="hide-menu">Error</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-login"></i>
                         </span>
                         <span class="hide-menu">Login</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Side Login</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Boxed Login</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-user-plus"></i>
                         </span>
                         <span class="hide-menu">Register</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Side Register</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register2.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Boxed Register</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-rotate"></i>
                         </span>
                         <span class="hide-menu">Forgot Password</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-forgot-password.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Side Forgot Password</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-forgot-password2.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Boxed Forgot Password</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-zoom-code"></i>
                         </span>
                         <span class="hide-menu">Two Steps</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-two-steps.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Side Two Steps</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-two-steps2.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Boxed Two Steps</span>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link sidebar-link"
                         href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-maintenance.html"
                         aria-expanded="false">
                         <span class="rounded-3">
                             <i class="ti ti-settings"></i>
                         </span>
                         <span class="hide-menu">Maintenance</span>
                     </a>
                 </li> --}}
                 <!-- ============================= -->
                 <!-- OTHER -->
                 <!-- ============================= -->
                 {{-- <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">OTHER</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-box-multiple"></i>
                         </span>
                         <span class="hide-menu">Menu Level</span>
                     </a>
                     <ul aria-expanded="false" class="collapse first-level">
                         <li class="sidebar-item">
                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-line.html"
                                 class="sidebar-link">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Level 1</span>
                             </a>
                         </li>
                         <li class="sidebar-item">
                             <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                                 <div class="round-16 d-flex align-items-center justify-content-center">
                                     <i class="ti ti-circle"></i>
                                 </div>
                                 <span class="hide-menu">Level 1.1</span>
                             </a>
                             <ul aria-expanded="false" class="collapse two-level">
                                 <li class="sidebar-item">
                                     <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-line.html"
                                         class="sidebar-link">
                                         <div class="round-16 d-flex align-items-center justify-content-center">
                                             <i class="ti ti-circle"></i>
                                         </div>
                                         <span class="hide-menu">Level 2</span>
                                     </a>
                                 </li>
                                 <li class="sidebar-item">
                                     <a class="sidebar-link has-arrow" href="index.html#" aria-expanded="false">
                                         <div class="round-16 d-flex align-items-center justify-content-center">
                                             <i class="ti ti-circle"></i>
                                         </div>
                                         <span class="hide-menu">Level 2.1</span>
                                     </a>
                                     <ul aria-expanded="false" class="collapse three-level">
                                         <li class="sidebar-item">
                                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-line.html"
                                                 class="sidebar-link">
                                                 <div
                                                     class="round-16 d-flex align-items-center justify-content-center">
                                                     <i class="ti ti-circle"></i>
                                                 </div>
                                                 <span class="hide-menu">Level 3</span>
                                             </a>
                                         </li>
                                         <li class="sidebar-item">
                                             <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/chart-apex-area.html"
                                                 class="sidebar-link">
                                                 <div
                                                     class="round-16 d-flex align-items-center justify-content-center">
                                                     <i class="ti ti-circle"></i>
                                                 </div>
                                                 <span class="hide-menu">Level 3.1</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link link-disabled" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-ban"></i>
                         </span>
                         <span class="hide-menu">Disabled</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="index.html#" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-star"></i>
                         </span>
                         <div class="lh-base">
                             <span class="hide-menu">SubCaption</span>
                             <span class="hide-menu fs-2">This is the sutitle</span>
                         </div>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link justify-content-between" href="index.html#" aria-expanded="false">
                         <div class="d-flex align-items-center gap-3">
                             <span class="d-flex">
                                 <i class="ti ti-award"></i>
                             </span>
                             <span class="hide-menu">Chip</span>
                         </div>
                         <div class="hide-menu">
                             <span
                                 class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center round-20 p-0">9</span>
                         </div>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link justify-content-between" href="index.html#" aria-expanded="false">
                         <div class="d-flex align-items-center gap-3">
                             <span class="d-flex">
                                 <i class="ti ti-mood-smile"></i>
                             </span>
                             <span class="hide-menu">Outlined</span>
                         </div>
                         <span
                             class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="https://google.com" aria-expanded="false">
                         <span class="d-flex">
                             <i class="ti ti-star"></i>
                         </span>
                         <span class="hide-menu">External Link</span>
                     </a>
                 </li> --}}
             </ul>
         </nav>
         {{-- <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
             <div class="hstack gap-3">
                 <div class="john-img">
                     <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-1.jpg"
                         class="rounded-circle" width="40" height="40" alt="">
                 </div>
                 <div class="john-title">
                     <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                     <span class="fs-2 text-dark">Designer</span>
                 </div>
                 <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                     aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                     <i class="ti ti-power fs-6"></i>
                 </button>
             </div>
         </div> --}}
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
 <!--  Sidebar End -->
