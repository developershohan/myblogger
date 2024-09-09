<!-- header area start -->


<?php

$myblogger_header_email = get_theme_mod('myblogger_email', 'info@example.com');
$myblogger_header_phone = get_theme_mod('myblogger_phone', '+964 742 44 763');
$myblogger_header_time = get_theme_mod('myblogger_time', 'Sunday-Thures 10am-07pm');
$myblogger_header_logo = get_theme_mod('myblogger_logo', get_template_directory_uri() .  '/assets/img/logo/logo-black.svg');

?>
<header>
   <div class="header__area header__white-solid">

      <div class="header__bottom header__sticky" id="header-sticky">
         <div class="container">
            <div class="mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-5 col-8">
                     <div class="logo logo-border">
                        <?php myblogger_logo() ?>
                     </div>
                  </div>
                  <div class="col-xxl-7 col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="main-menu pl-55 main-menu-ff-space">
                        <nav id="mobile-menu">

                           <?php myblogger_menu(); ?>

                           <!-- <ul>
                                    <li class="has-dropdown">
                                       <a href="index.html">Home</a>
                                       <ul class="submenu">
                                          <li><a href="index.html">Main Demo</a></li>
                                          <li><a href="index-shop.html">Shop Demo</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="portfolio.html">Protfolio</a>
                                       <ul class="submenu">
                                          <li><a href="portfolio.html">Classic Style</a></li>
                                          <li><a href="portfolio-details-list.html">List With Details</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown ">
                                       <a href="#">Pages</a>
                                       <ul class="submenu">
                                          <li><a href="portfolio.html">Portfoilo</a></li>
                                          <li><a href="portfolio-details-list.html">Portfoilo Details</a></li>
                                          <li><a href="about-me.html">About Me</a></li>
                                          <li><a href="cart.html">Cart</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                          <li><a href="services.html">Services</a></li>
                                          <li><a href="services-details.html">Service Details</a></li>
                                          <li><a href="404.html">404 Page</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="blog.html">Blog</a>
                                       <ul class="submenu">
                                          <li><a href="blog.html">Blog Standard</a></li>
                                          <li><a href="blog-details.html">Blog Details</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="shop.html">Shop</a>
                                       <ul class="submenu">
                                          <li><a href="shop.html">Shop</a></li>
                                          <li><a href="product-details.html">Product Details</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="contact.html">Contact</a>
                                    </li>
                                 </ul> -->
                        </nav>
                        <!-- for wp -->
                        <div class="header__hamburger ml-50 d-none">
                           <button type="button" class="hamburger-btn offcanvas-open-btn">
                              <span></span>
                              <span></span>
                              <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                     <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                        <div class="header__action d-none d-xl-block">
                           <ul>
                              <!-- <li>
                                 <a href="javascript:void(0);" class="search-open-btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </li> -->
                              <li>
                                 <button type="button" class="hamburger-btn hamburger-btn-black offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </li>
                           </ul>
                        </div>
                        <div class="header__hamburger ml-50 d-xl-none">
                           <button type="button" class="hamburger-btn hamburger-btn-black offcanvas-open-btn">
                              <span></span>
                              <span></span>
                              <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- header area end -->


