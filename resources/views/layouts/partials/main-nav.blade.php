<div class="main-nav">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="{{ route('second', ['dashboards', 'analytics'])}}" class="logo-dark">
               <img src="/images/logo-sm-dark.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-letter-only-dark.png" class="logo-lg" alt="logo dark">
          </a>

          <a href="{{ route('second', ['dashboards', 'analytics'])}}" class="logo-light">
               <img src="/images/logo-sm-light.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-letter-only.png" class="logo-lg" alt="logo light">
          </a>
     </div>

     <!-- Menu Toggle Button (sm-hover) -->
     <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
          <i class="ri-menu-2-line fs-24 button-sm-hover-icon"></i>
     </button>

     <div class="scrollbar" data-simplebar>

          <ul class="navbar-nav" id="navbar-nav">

               <li class="menu-title">Menu</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                         <span class="nav-icon">
                              <i class="ri-dashboard-2-line"></i>
                         </span>
                         <span class="nav-text"> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                         <ul class="nav sub-navbar-nav">
                            @if(auth()->user()->hasRole('super_admin'))
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['dashboards', 'analytics'])}}">Analytics</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['dashboards', 'agents'])}}">Agent</a>
                              </li>
                              @elseif(auth()->user()->hasRole('user'))
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['dashboards', 'customer'])}}">Customer</a>
                              </li>
                              @endif
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarProperty" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProperty">
                         <span class="nav-icon">
                              <i class="ri-community-line"></i>
                         </span>
                         <span class="nav-text"> Property </span>
                    </a>
                    <div class="collapse" id="sidebarProperty">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'grid'])}}">Property Grid</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'list'])}}">Property List</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'details'])}}">Property Details</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['property', 'add'])}}">Add Property</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Pages Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAgents" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgents">
                         <span class="nav-icon">
                              <i class="ri-group-line"></i>
                         </span>
                         <span class="nav-text"> Agents </span>
                    </a>
                    <div class="collapse" id="sidebarAgents">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'list'])}}">List View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'grid'])}}">Grid View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'details'])}}">Agent Details</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['agents', 'add'])}}">Add Agent</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Pages Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                         <span class="nav-icon">
                              <i class="ri-contacts-book-3-line"></i>
                         </span>
                         <span class="nav-text"> Customers </span>
                    </a>
                    <div class="collapse" id="sidebarCustomers">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'list'])}}">List View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'grid'])}}">Grid View</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'details'])}}">Customer Details</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['customers', 'add'])}}">Add Customer</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Pages Menu -->

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'orders')}}">
                         <span class="nav-icon">
                              <i class="ri-home-office-line"></i>
                         </span>
                         <span class="nav-text">Orders</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'transactions')}}">
                         <span class="nav-icon">
                              <i class="ri-arrow-left-right-line"></i>
                         </span>
                         <span class="nav-text">Transactions</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'reviews')}}">
                         <span class="nav-icon">
                              <i class="ri-chat-quote-line"></i>
                         </span>
                         <span class="nav-text">Reviews</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'messages')}}">
                         <span class="nav-icon">
                              <i class="ri-discuss-line"></i>
                         </span>
                         <span class="nav-text">Messages</span>
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'inbox')}}">
                         <span class="nav-icon">
                              <i class="ri-inbox-line"></i>
                         </span>
                         <span class="nav-text">Inbox</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarBlog" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBlog">
                         <span class="nav-icon">
                              <i class="ri-news-line"></i>
                         </span>
                         <span class="nav-text">Post </span>
                    </a>
                    <div class="collapse" id="sidebarBlog">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['post', 'post'])}}">Post</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['post', 'details'])}}">Post Details</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['post', 'create-post'])}}">Create Post</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Pages Menu -->

               <li class="menu-title">Custom</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                         <span class="nav-icon">
                              <i class="ri-pages-line"></i>
                         </span>
                         <span class="nav-text"> Pages </span>
                    </a>
                    <div class="collapse" id="sidebarPages">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'starter'])}}">Welcome</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'calendar'])}}">Calendar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'invoice'])}}">Invoice</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'faqs'])}}">FAQs</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'coming-soon'])}}">Coming Soon</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'timeline'])}}">Timeline</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'pricing'])}}">Pricing</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'maintenance'])}}">Maintenance</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'error-404'])}}">404 Error</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['pages', 'error-404-alt'])}}">404 Error (alt)</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Pages Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                         <span class="nav-icon">
                              <i class="ri-lock-password-line"></i>
                         </span>
                         <span class="nav-text"> Authentication </span>
                    </a>
                    <div class="collapse" id="sidebarAuthentication">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['auth', 'login'])}}">Sign In</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['auth', 'signup'])}}">Sign Up</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['auth', 'password'])}}">Reset Password</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['auth', 'lock-screen'])}}">Lock Screen</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('second', ['widgets', 'widgets'])}}">
                         <span class="nav-icon">
                              <i class="ri-shapes-line"></i>
                         </span>
                         <span class="nav-text">Widgets</span>
                         <span class="badge bg-danger badge-pill text-end">Hot</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                         <span class="nav-icon">
                              <i class="ri-layout-line"></i>
                         </span>
                         <span class="nav-text"> Layouts </span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'dark-sidenav'])}}" target="_blank">Dark Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'dark-topnav'])}}" target="_blank">Dark Topnav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'simple-sidenav'])}}" target="_blank">Simple Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'small-sidenav'])}}" target="_blank">Small Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'small-hover'])}}" target="_blank">Small Hover</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'small-hover-active'])}}" target="_blank">Small Hover Active</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['layouts-eg', 'hidden-sidenav'])}}" target="_blank">Hidden Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" target="_blank" href="{{ route('second', ['layouts-eg', 'layout-dark'])}}">
                                        <span class="nav-text">Dark Mode</span>
                                        <span class="badge badge-soft-danger badge-pill text-end">Hot</span>
                                   </a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-title">Components</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBaseUI">
                         <span class="nav-icon"><i class="ri-contrast-drop-line"></i></span>
                         <span class="nav-text"> Base UI </span>
                    </a>
                    <div class="collapse" id="sidebarBaseUI">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'accordion'])}}">Accordion</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'alerts'])}}">Alerts</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'avatar'])}}">Avatar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'badge'])}}">Badge</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'breadcrumb'])}}">Breadcrumb</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'buttons'])}}">Buttons</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'cards'])}}">Card</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'carousel'])}}">Carousel</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'collapse'])}}">Collapse</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'dropdown'])}}">Dropdown</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'list-group'])}}">List Group</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'modal'])}}">Modal</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'tabs'])}}">Tabs</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'offcanvas'])}}">Offcanvas</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'pagination'])}}">Pagination</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'placeholders'])}}">Placeholders</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'popovers'])}}">Popovers</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'progress'])}}">Progress</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'scrollspy'])}}">Scrollspy</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'spinners'])}}">Spinners</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'toasts'])}}">Toasts</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['ui', 'tooltips'])}}">Tooltips</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Base UI Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarExtendedUI">
                         <span class="nav-icon"><i class="ri-briefcase-line"></i></span>
                         <span class="nav-text"> Advanced UI </span>
                    </a>
                    <div class="collapse" id="sidebarExtendedUI">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['extended', 'ratings'])}}">Ratings</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['extended', 'sweetalerts'])}}">Sweet Alert</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['extended', 'swiper-slider'])}}">Swiper Slider</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['extended', 'scrollbar'])}}">Scrollbar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['extended', 'toastify'])}}">Toastify</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Extended UI Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                         <span class="nav-icon">
                              <i class="ri-bar-chart-line"></i>
                         </span>
                         <span class="nav-text"> Charts </span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-area'])}}">Area</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-bar'])}}">Bar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-bubble'])}}">Bubble</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-candlestick'])}}">Candlestick</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-column'])}}">Column</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-heatmap'])}}">Heatmap</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-line'])}}">Line</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-mixed'])}}">Mixed</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-timeline'])}}">Timeline</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-boxplot'])}}">Boxplot</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-treemap'])}}">Treemap</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-pie'])}}">Pie</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-radar'])}}">Radar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-radialbar'])}}">RadialBar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-scatter'])}}">Scatter</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['charts', 'apex-polar-area'])}}">Polar Area</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Chart library Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                         <span class="nav-icon">
                              <i class="ri-survey-line"></i>
                         </span>
                         <span class="nav-text"> Forms </span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'basic'])}}">Basic Elements</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'checkbox-radio'])}}">Checkbox &amp; Radio</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'choice'])}}">Choice Select</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'clipboard'])}}">Clipboard</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'flatepicker'])}}">Flatepicker</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'validation'])}}">Validation</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'wizard'])}}">Wizard</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'fileuploads'])}}">File Upload</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'editors'])}}">Editors</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'input-mask'])}}">Input Mask</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['forms', 'range-slider'])}}">Slider</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Form Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                         <span class="nav-icon">
                              <i class="ri-table-line"></i>
                         </span>
                         <span class="nav-text"> Tables </span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['tables', 'basic'])}}">Basic Tables</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['tables', 'gridjs'])}}">Grid Js</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Table Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                         <span class="nav-icon">
                              <i class="ri-pencil-ruler-2-line"></i>
                         </span>
                         <span class="nav-text"> Icons </span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['icons', 'remix'])}}">Remix Icons</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['icons', 'solar'])}}">Solar Icons</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Icons library Menu -->

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                         <span class="nav-icon">
                              <i class="ri-road-map-line"></i>
                         </span>
                         <span class="nav-text"> Maps </span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['maps', 'google'])}}">Google Maps</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="{{ route('second', ['maps', 'vector'])}}">Vector Maps</a>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Map Menu -->

               <li class="menu-title">Style</li>

               <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">
                         <span class="nav-icon">
                              <i class="ri-shield-star-line"></i>
                         </span>
                         <span class="nav-text">Badge Menu</span>
                         <span class="badge bg-primary badge-pill text-end">1</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarMultiLevelDemo" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultiLevelDemo">
                         <span class="nav-icon">
                              <i class="ri-share-line"></i>
                         </span>
                         <span class="nav-text"> Menu Items </span>
                    </a>
                    <div class="collapse" id="sidebarMultiLevelDemo">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="javascript:void(0);">Menu Item 1</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link  menu-arrow" href="#sidebarItemDemoSubItem" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarItemDemoSubItem">
                                        <span> Menu Item 2 </span>
                                   </a>
                                   <div class="collapse" id="sidebarItemDemoSubItem">
                                        <ul class="nav sub-navbar-nav">
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="javascript:void(0);">Menu Sub item</a>
                                             </li>
                                        </ul>
                                   </div>
                              </li>
                         </ul>
                    </div>
               </li> <!-- end Demo Menu Item -->

               <li class="nav-item">
                    <a class="nav-link disabled" href="javascript:void(0);">
                         <span class="nav-icon">
                              <i class="ri-prohibited-2-line"></i>
                         </span>
                         <span class="nav-text"> Disable Item </span>
                    </a>
               </li> <!-- end Demo Menu Item -->
          </ul>
     </div>
</div>
