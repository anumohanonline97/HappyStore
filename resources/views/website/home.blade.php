@include('website.header')
<body class="font">

<div class="modal fade notify_modal" id="notify-addss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      
      <div class="modal-body p-0">
        <div class="nofification_body">
            <button type="button" class="btn-closes close_circle" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
          <img src="images/n_banner.jpg" class="img-fluid">
          <div class="shop_now_btn"><button>Shop Now</button></div> 
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-login-form">
    <div class="modal-body1 login-pop-modal-body p-0">
            <div class="login-banner">
                <button type="button" class="btn-close mobile_btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <img src="images/s1.jpg" class="img-fluid" alt="">
            </div>
            <!-- -----------login body------------------- -->
            <div class="login-body">
                <div class="mobil-login-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#mob-login-tab" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#mob-signup-tab" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sign Up</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="mob-login-tab" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="log-heading text-center">
                            <h4 class="fw-700">Login to THAT</h4>
                            <p>Enter your email address to access app</p>
                        </div>
                        <div class="social-media-login">
                                <div class="or"><p>Login With</p></div>
                                <div class="social_media_login-form">
                                    <ul>
                                        <li>
                                            <a href=""><svg height="56.6934px" id="Layer_1" style="enable-background:new 0 0 56.6934 56.6934;" version="1.1" viewBox="0 0 56.6934 56.6934" width="56.6934px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M51.981,24.4812c-7.7173-0.0038-15.4346-0.0019-23.1518-0.001c0.001,3.2009-0.0038,6.4018,0.0019,9.6017  c4.4693-0.001,8.9386-0.0019,13.407,0c-0.5179,3.0673-2.3408,5.8723-4.9258,7.5991c-1.625,1.0926-3.492,1.8018-5.4168,2.139  c-1.9372,0.3306-3.9389,0.3729-5.8713-0.0183c-1.9651-0.3921-3.8409-1.2108-5.4773-2.3649  c-2.6166-1.8383-4.6135-4.5279-5.6388-7.5549c-1.0484-3.0788-1.0561-6.5046,0.0048-9.5805  c0.7361-2.1679,1.9613-4.1705,3.5708-5.8002c1.9853-2.0324,4.5664-3.4853,7.3473-4.0811c2.3812-0.5083,4.8921-0.4113,7.2234,0.294  c1.9815,0.6016,3.8082,1.6874,5.3044,3.1163c1.5125-1.5039,3.0173-3.0164,4.527-4.5231c0.7918-0.811,1.624-1.5865,2.3908-2.4196  c-2.2928-2.1218-4.9805-3.8274-7.9172-4.9056C32.0723,4.0363,26.1097,3.995,20.7871,5.8372  C14.7889,7.8907,9.6815,12.3763,6.8497,18.0459c-0.9859,1.9536-1.7057,4.0388-2.1381,6.1836  C3.6238,29.5732,4.382,35.2707,6.8468,40.1378c1.6019,3.1768,3.8985,6.001,6.6843,8.215c2.6282,2.0958,5.6916,3.6439,8.9396,4.5078  c4.0984,1.0993,8.461,1.0743,12.5864,0.1355c3.7284-0.8581,7.256-2.6397,10.0725-5.24c2.977-2.7358,5.1006-6.3403,6.2249-10.2138  C52.5807,33.3171,52.7498,28.8064,51.981,24.4812z"/></svg></a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          <div class="form-credintial">
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Enter Email or Mobile Number">
                            </div>
                            <div class="form-row forgot_password">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="remember-container">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            <span class="check_mark_icon"></span>Remeber Me 
                                        </label>
                                    </div>  
                                    <div class="forgot-container">
                                        <a href="">Forgot Password?</a>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-row">
                                <button class="login-form-btn" onclick="location.href='otp.html'">Login</button>
                            </div>
                            <div class="form-row dnt_Accnt">
                                <p>Don't have an account? <a href="#" class="reg_link">Register</a></p>
                            </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="mob-signup-tab" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <div class="log-heading text-center">
                            <h4 class="fw-700">Sign Up to THAT</h4>
                            <p>Enter your email address to access app</p>
                        </div>
                          <div class="form-credintial">
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email ID">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-12">
                                    <input type="date" class="form-control" placeholder="Enter Your Birthday*">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="form-row Gender">
                                <div class="d-flex align-items-center">
                                    <p>Gender</p>
                                    <div class="gender-flex">
                                        <div class="gen-block">
                                            <div class="gender-container">
                                                <input type="radio" id="male1">
                                                <label for="male1">
                                                    <span class="check_mark_icon"></span>Male 
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="gen-block">
                                            <div class="gender-container">
                                                <input type="radio" id="female1">
                                                <label for="female1">
                                                    <span class="check_mark_icon"></span>Female 
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="gen-block">
                                            <div class="gender-container">
                                                <input type="radio" id="others1">
                                                <label for="others1">
                                                    <span class="check_mark_icon"></span>Others 
                                                </label>
                                            </div>  
                                        </div>
                                    </div>
                                    
                                     
                                </div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-row">
                                <button class="login-form-btn">Sign Up</button>
                            </div>
                            <div class="social-media-login">
                                <div class="or"><p>Or Continue With</p></div>
                                <div class="social_media_login-form">
                                    <ul>
                                        <li>
                                            <a href=""><svg height="56.6934px" id="Layer_1" style="enable-background:new 0 0 56.6934 56.6934;" version="1.1" viewBox="0 0 56.6934 56.6934" width="56.6934px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M51.981,24.4812c-7.7173-0.0038-15.4346-0.0019-23.1518-0.001c0.001,3.2009-0.0038,6.4018,0.0019,9.6017  c4.4693-0.001,8.9386-0.0019,13.407,0c-0.5179,3.0673-2.3408,5.8723-4.9258,7.5991c-1.625,1.0926-3.492,1.8018-5.4168,2.139  c-1.9372,0.3306-3.9389,0.3729-5.8713-0.0183c-1.9651-0.3921-3.8409-1.2108-5.4773-2.3649  c-2.6166-1.8383-4.6135-4.5279-5.6388-7.5549c-1.0484-3.0788-1.0561-6.5046,0.0048-9.5805  c0.7361-2.1679,1.9613-4.1705,3.5708-5.8002c1.9853-2.0324,4.5664-3.4853,7.3473-4.0811c2.3812-0.5083,4.8921-0.4113,7.2234,0.294  c1.9815,0.6016,3.8082,1.6874,5.3044,3.1163c1.5125-1.5039,3.0173-3.0164,4.527-4.5231c0.7918-0.811,1.624-1.5865,2.3908-2.4196  c-2.2928-2.1218-4.9805-3.8274-7.9172-4.9056C32.0723,4.0363,26.1097,3.995,20.7871,5.8372  C14.7889,7.8907,9.6815,12.3763,6.8497,18.0459c-0.9859,1.9536-1.7057,4.0388-2.1381,6.1836  C3.6238,29.5732,4.382,35.2707,6.8468,40.1378c1.6019,3.1768,3.8985,6.001,6.6843,8.215c2.6282,2.0958,5.6916,3.6439,8.9396,4.5078  c4.0984,1.0993,8.461,1.0743,12.5864,0.1355c3.7284-0.8581,7.256-2.6397,10.0725-5.24c2.977-2.7358,5.1006-6.3403,6.2249-10.2138  C52.5807,33.3171,52.7498,28.8064,51.981,24.4812z"/></svg></a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
      </div>
</div>

<div class="overflow-black"></div>


<!-- ---------Sliding menu Code--------------- -->
<div class="slide-nav">
    <div class="flex_menu">
        <div class="top_bar">
            <div class="d-flex justify-content-between align-items-center">
                <div class="acc_dtl">
                    <h5>Hi <span>John Doe</span></h5>
                    <p><a href="">Login</a><span class="slash">/</span><a href="">Signup</a></p>
                </div>
                <div class="slide_close">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M16.3394 9.32245C16.7434 8.94589 16.7657 8.31312 16.3891 7.90911C16.0126 7.50509 15.3798 7.48283 14.9758 7.85938L12.0497 10.5866L9.32245 7.66048C8.94589 7.25647 8.31312 7.23421 7.90911 7.61076C7.50509 7.98731 7.48283 8.62008 7.85938 9.0241L10.5866 11.9502L7.66048 14.6775C7.25647 15.054 7.23421 15.6868 7.61076 16.0908C7.98731 16.4948 8.62008 16.5171 9.0241 16.1405L11.9502 13.4133L14.6775 16.3394C15.054 16.7434 15.6868 16.7657 16.0908 16.3891C16.4948 16.0126 16.5171 15.3798 16.1405 14.9758L13.4133 12.0497L16.3394 9.32245Z" fill="currentColor"/><path clip-rule="evenodd" d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z" fill="currentColor" fill-rule="evenodd"/></svg>
                </div>
            </div>
        </div>
        <div class="middle_menu sl_cat_link">
            <h5>Categories</h5>
            <ul>
                <li class="dr">
                    <a href="#">
                        <span class="sl_lnk_flex">
                            <span class="link_title">Men</span> <span class="dwn_sl_icon"><i class="fa fa-angle-down"></i></span>
                        </span>
                        <ul class="slide_inner_menu">
                            <li><a href="">Topwear</a></li>
                            <li><a href="">Innerwear</a></li>
                            <li><a href="">T-shirt</a></li>
                            <li><a href="">Shoe</a></li>
                            <li><a href="">Jeans</a></li>
                        </ul>
                    </a>
                </li>
                <li class="dr">
                    <a href="#">
                        <span class="sl_lnk_flex">
                            <span class="link_title">Women</span> <span class="dwn_sl_icon"><i class="fa fa-angle-down"></i></span>
                        </span>
                        <ul class="slide_inner_menu">
                            <li><a href="">Topwear</a></li>
                            <li><a href="">Innerwear</a></li>
                            <li><a href="">T-shirt</a></li>
                            <li><a href="">Shoe</a></li>
                            <li><a href="">Jeans</a></li>
                        </ul>
                    </a>
                </li>
                <li class="dr">
                    <a href="#">
                        <span class="sl_lnk_flex">
                            <span class="link_title">Women</span> <span class="dwn_sl_icon"><i class="fa fa-angle-down"></i></span>
                        </span>
                        <ul class="slide_inner_menu">
                            <li><a href="">Topwear</a></li>
                            <li><a href="">Innerwear</a></li>
                            <li><a href="">T-shirt</a></li>
                            <li><a href="">Shoe</a></li>
                            <li><a href="">Jeans</a></li>
                        </ul>
                    </a>
                </li>
                <li><a href="#">Accessories</a></li>
                <li><a href="">Hot Deals</a></li>
                <li><a href="">Winter Sale</a></li>
                <li><a href=""></span>Accessories</a></li>
            </ul>
        </div>
        <div class="middle_menu account_slide">
            <h5>My Profile</h5>
            <ul>
                <li><a href="">My Account</a></li>
                <li><a href="">My Orders</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Accessories</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Feedback & Suggestions</a></li>
            </ul>
        </div>
    </div>   
</div>
<div class="bg_slide"></div>

<!-- ---------Sliding menu Code--------------- -->


<div class="main-header stricky-fixed">
    <header>
        <div class="container">
            <div class="header-nav d-flex font align-items-center justify-content-between">
                <div class="logo">
                    <div class="menu_sliding_icon">
                       <svg height="18px" version="1.1" viewBox="0 0 18 12" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#000000" id="Core" transform="translate(-87.000000, -342.000000)"><g id="menu" transform="translate(87.000000, 342.000000)"><path d="M0,12 L18,12 L18,10 L0,10 L0,12 L0,12 Z M0,7 L18,7 L18,5 L0,5 L0,7 L0,7 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z" id="Shape"/></g></g></g></svg>
                    </div>
                    <a href="index.html"><img src="images/logo.svg" class="img-fluid" alt=""></a>
                </div>
                <div class="header-nav-middle hide-mobile">
                    <ul class="d-flex align-items-center select-part-desk hide-mobile">
                        <li><a href="#" class="active-link">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Kids</a></li>
                    </ul>

                    <div class="dropdown mobile-select-part hidden-large">
                      <button class="btn  bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Women
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Men</a></li>
                        <li><a class="dropdown-item" href="#">Kids</a></li>
                      </ul>
                    </div>
                </div>

                <div class="nav-search">
                    <div class="search-box">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="icon-search_i"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>

                <div class="right-side-nav d-flex">
                    <div class="header-nav-last">
                        <ul class="d-flex align-items-center">

                            <li><a href="blog.html">Blog</a></li>
                            <li class="hide-mobile"><a href="coin.html"><span><img src="images/coin.svg" style="width: 22px;" alt=""></span></a></li>
                        </ul>
                    </div>
                    <div class="nav-profile-cart d-flex align-items-center">
                        <div class="profile-cart-icon profile-section-container">
                            <a href="notify.html" >
                                <img src="images/bell.svg" width="28" alt="">
                                <span class="badge-count-dot"></span>
                            </a>
                        </div>
                        <div class="hide-mobile profile-cart-icon profile-section-container">
                            <a href="login.html">
                                <img src="images/user.svg" width="28" alt="">
                            </a>
                            <div class="desktop-userActions" data-reactid="857">
                                <div class="desktop-userActionsArrow" data-reactid="858"></div>
                                <div class="desktop-userActionsContent" data-reactid="859">
                                    
                                    <div data-reactid="863">
                                        <div class="desktop-getInLinks">
                                            <a href="profile.html" data-track="coupons" class="desktop-info">
                                                <div class="desktop-infoSection">
                                                    <div class="drp_icon">
                                                        <img src="images/user_p.svg" width="19" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="drp_link">My Profile</div>
                                                </div>
                                            </a>
                                            <a href="coin.html" data-track="coupons" class="desktop-info">
                                                <div class="desktop-infoSection">
                                                    <div class="drp_icon">
                                                        <img src="images/rupee.svg" width="19" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="drp_link">E-Coin</div>
                                                </div>
                                            </a>
                                            <a href="order.html" data-track="coupons" class="desktop-info">
                                                <div class="desktop-infoSection">
                                                    <div class="drp_icon">
                                                        <img src="images/bag.svg" width="19" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="drp_link">Orders</div>
                                                </div>
                                            </a>
                                            <a href="voucher.html" data-track="coupons" class="desktop-info">
                                                <div class="desktop-infoSection">
                                                    <div class="drp_icon">
                                                        <img src="images/voucher.svg" width="19" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="drp_link">Gift Vouchers</div>
                                                </div>
                                            </a>
                                            <a href="refer.html" data-track="coupons" class="desktop-info">
                                                <div class="desktop-infoSection">
                                                    <div class="drp_icon">
                                                        <img src="images/money-in.svg" width="19" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="drp_link">Refer & Earn</div>
                                                </div>
                                            </a>
                                            <a href="#" data-track="coupons" class="desktop-info">
                                                <div class="desktop-infoSection">
                                                    <div class="drp_icon">
                                                        <img src="images/logout.svg" width="19" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="drp_link">Logout</div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=" profile-cart-icon wishlist-section-container hide-mobile">
                            <a href="wishlist.html" >
                                <img src="images/wishlist.svg" width="28" alt="">
                                <span class="badge-count">3</span>
                            </a>
                        </div>
                        <div class="profile-cart-icon cart-section-container">
                            <a href="cart.html" >
                                <img src="images/cart.svg" width="28" alt="">
                                <span class="badge-count">6</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="mobile-search hidden-large">
                    <div class="search-box-mobile">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="icon-search_i"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
        </div>
    </header>
    <div class="mobile-gender-cat hidden-large">
        <div class="container">
            <ul class="d-flex justify-content-between">
                <li><button class="active-cate">Mens</button></li>
                <li><button class="">Womens</button></li>
                <li><button class="">Kids</button></li>
            </ul>
        </div>
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="product.html">New In</a></li>
            <li>
                <a href="">Designs <span class="icon_nav"><i class="fa-solid fa-chevron-down"></i></span></a>
                <div class="main-mega-menu">
                    <div class="container">
                        <div class="d-flex">
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                                <div class="column-mega-menu mtop_21">
                                    <h6 class="mega-menu-heading">Bottom Wear</h6>
                                    <a class="Menu_main_links" href="#">Jeans</a>
                                    <a class="Menu_main_links" href="#">Casual Trousers</a>
                                    <a class="Menu_main_links" href="#">Formal Trousers</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                                <div class="column-mega-menu mtop_21">
                                    <h6 class="mega-menu-heading">Bottom Wear</h6>
                                    <a class="Menu_main_links" href="#">Jeans</a>
                                    <a class="Menu_main_links" href="#">Casual Trousers</a>
                                    <a class="Menu_main_links" href="#">Formal Trousers</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <a href="">Clothings</a>
            </li>

            <li>
                <a href="">Shoes <span class="icon_nav"><i class="fa-solid fa-chevron-down"></i></span></a>
                <div class="main-mega-menu">
                    <div class="container">
                        <div class="d-flex">
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                                <div class="column-mega-menu mtop_21">
                                    <h6 class="mega-menu-heading">Bottom Wear</h6>
                                    <a class="Menu_main_links" href="#">Jeans</a>
                                    <a class="Menu_main_links" href="#">Casual Trousers</a>
                                    <a class="Menu_main_links" href="#">Formal Trousers</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                            </div>
                            <div class="col-memu-mega">
                                <div class="column-mega-menu">
                                    <h6 class="mega-menu-heading">Top Wear</h6>
                                    <a class="Menu_main_links" href="#">T-Shirts</a>
                                    <a class="Menu_main_links" href="#">Casual Shirts</a>
                                    <a class="Menu_main_links" href="#">Formal Shirts</a>
                                    <a class="Menu_main_links" href="#">Sweetheart</a>
                                    <a class="Menu_main_links" href="#">Jackets</a>
                                    <a class="Menu_main_links" href="#">Sweaters</a>
                                    <a class="Menu_main_links" href="#">Blazers & Coats</a>
                                </div>
                                <div class="column-mega-menu mtop_21">
                                    <h6 class="mega-menu-heading">Bottom Wear</h6>
                                    <a class="Menu_main_links" href="#">Jeans</a>
                                    <a class="Menu_main_links" href="#">Casual Trousers</a>
                                    <a class="Menu_main_links" href="#">Formal Trousers</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="">Bags</a></li>
            <li><a href="">Accessories</a></li>
            <li><a href="">Grooming</a></li>
            <li><a href="">Shop By</a></li>
            <li><a href="deals.html" class="clr-text">Sale</a></li>
        </ul>
    </nav>
</div>

<main class="main--wrapper">

<div class="highlated-sale top-highlated">
    <div class="container">
        <div class="row owl-carousel" id="top-carousel-off">
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 60% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 50% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 30% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
        </div>
    </div>
</div>

<!-- -----------------floating Menu Mobile----------------- -->
<div class="floating-menu hidden-large">
    <ul class="mobile-footer-menu d-flex justify-content-around">
        <li>
            <a href="" class="active-footer-link">
                <span class="mobile-icon"><img src="images/home.svg"  alt=""></span>
                <span class="mob-link-label">Home</span>
            </a>
        </li>
        <li>
            <a href="category.html">
                <span class="mobile-icon"><img src="images/grid.svg" alt=""></span>
                <span class="mob-link-label">Categories</span>
            </a>
        </li>
        <li>
            <a href="">
                <span class="mobile-icon"><img src="images/rupee.png" alt=""></span>
                <span class="mob-link-label"><strong>FM</strong></span>
            </a>
        </li>
        <li>
            <a href="wishlist.html">
                <span class="mobile-icon"><img src="images/fav.svg" alt=""></span>
                <span class="mob-link-label">Wishlist</span>
            </a>
        </li>
        <li class="login-mobiles">
            <a href="mobil_account.html">
                <span class="mobile-icon"><img src="images/mob-user.svg" alt=""></span>
                <span class="mob-link-label">Profile</span>
            </a>
        </li>
    </ul>
</div>
<!-- -----------------floating Menu Mobile----------------- -->


<section class="slider-banner">
    <div class="banner-container">
        <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"  onclick="location.href='product.html'">
                        <img src="images/b1.jpg" class="img-fluid desktop-slide" alt="">
                        <img src="images/mb1.jpg" class="img-fluid mobile-slide" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='product.html'">
                        <img src="images/b2.jpg" class="img-fluid desktop-slide" alt="">
                        <img src="images/mb2.jpg" class="img-fluid mobile-slide" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='product.html'">
                        <img src="images/b3.jpg" class="img-fluid desktop-slide" alt="">
                        <img src="images/mb3.jpg" class="img-fluid mobile-slide" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='product.html'">
                        <img src="images/b4.jpg" class="img-fluid desktop-slide" alt="">
                        <img src="images/mb4.jpg" class="img-fluid mobile-slide" alt="">
                    </div>
                        
                </div>
                <div class="swiper-pagination" style="display: none;"></div>
                <div class="swiper_nav">
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
</section>

<section class="new-arrivals section-block p-contain mob-padding">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-between mb-20 text-left">
            <h3 class="fw-700 text-uppercase">New Arrivals</h3>
            <a href="" class="see_all">See All</a>
        </div>
        <div class="post-row">
            <div class="row carousel1" id="new-arrival1">
                <div class="col-md-4">
                    <a href="product.html">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/erhWknKJC8nOXn0698wxGDKlRVOmWVc3eDyuZilP.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="product.html">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <img src="images/i1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="product.html">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <img src="images/i2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                    </a>    
                </div>
                <div class="col-md-4">
                    <a href="product.html">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="product.html">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <img src="images/i4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="categories section-block p-contain pt-0 mob-padding">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-center mb-20 text-left">
            <h3 class="fw-700 text-uppercase">Categories</h3>
        </div>
        <div class="category-row">

      <!--       <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="images/c2.webp" class="img-fluid" alt="">
                  </div>
                  <div class="swiper-slide"></div>
                  <div class="swiper-slide"></div>
                  <div class="swiper-slide">Slide 4</div>
                  <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>


 -->


            <div class="row carousel1" id="category-slider">
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c2.webp" class="img-fluid" alt="">
                            <div class="category-content">
                               <div class="category-name fw-700">
                            <p>New Collection</p>
                            <h3 class="text-uppercase fw-700">Belt</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c1.webp" class="img-fluid" alt="">
                            <div class="category-content">
                                <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Formal Shirt</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c2.webp" class="img-fluid" alt="">
                            <div class="category-content">
                               <div class="category-name fw-700">
                            <p>New Collection</p>
                            <h3 class="text-uppercase fw-700">Belt</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c3.webp" class="img-fluid" alt="">
                            <div class="category-content">
                            <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Sneakers</h3></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mobile-crs-width">
                <div class="col-md-3 col-lg-3">
                    <div class="category-item sec-cat-sec">
                        <div class="category-image">
                            <img src="images/c4.webp" class="img-fluid" alt="">
                        </div>
                        <div class="category-content">
                            <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Pant</h3></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="category-item sec-cat-sec">
                        <div class="category-image">
                            <img src="images/c5.jpg" class="img-fluid" alt="">
                           <!--  <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                            </video> -->
                        </div>
                        <div class="category-content">
                            <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Polos</h3></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="category-item sec-cat-sec">
                        <div class="category-image">
                            <img src="images/c5.webp" class="img-fluid" alt="">
                        </div>
                        <div class="category-content">

                            <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Formal Shirt</h3></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="category-item sec-cat-sec">
                        <div class="category-image">
                            <img src="images/c4.webp" class="img-fluid" alt="">
                            <!-- <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/udG7fuDRh0MgfYly7J8GMsyebucR3GalSce7cGG2.mp4" type="video/mp4"> -->
                        </div>
                        <div class="category-content">
                            <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Shoes</h3></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row carousel1" id="category-slider1">
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c2.webp" class="img-fluid" alt="">
                            <div class="category-content">
                               <div class="category-name fw-700">
                            <p>New Collection</p>
                            <h3 class="text-uppercase fw-700">Belt</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c1.webp" class="img-fluid" alt="">
                            <div class="category-content">
                                <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Formal Shirt</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c2.webp" class="img-fluid" alt="">
                            <div class="category-content">
                               <div class="category-name fw-700">
                            <p>New Collection</p>
                            <h3 class="text-uppercase fw-700">Belt</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="images/c3.webp" class="img-fluid" alt="">
                        </div>
                        <div class="category-content">
                            <div class="category-name fw-700">
                            <p style="">New Collection</p>
                            <h3 class="text-uppercase fw-700" style="">Sneakers</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-collection section-block mob-padding p-contain pt-0">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-between mb-20 text-left">
            <h3 class="fw-700 text-uppercase">Latest Collection</h3>
            <a href="" class="see_all">See All</a>
        </div>
        <div class="latest-collection-row">
            <div class="row carousel1" id="carousel-latest">
                <div class="col-md-4 col-lg-4">
                    <div class="Latest-item">
                        <img src="images/l1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="Latest-item">
                        <img src="images/l2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="Latest-item">
                        <img src="images/l3.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="Latest-item">
                        <img src="images/l4.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="Latest-item">
                        <img src="images/l1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="Latest-item">
                        <img src="images/l2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="highlated-sale  mid-heighlated">
    <div class="container">
        <div class="row owl-carousel" id="mid-top-carousel-off">
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 60% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 50% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 30% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
        </div>
    </div>
</section>

<section class="top-sailing section-block p-contain mob-padding pt-0">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-between mb-20 text-left">
            <h3 class="fw-700 text-uppercase">Top Sailing</h3>
            <a href="" class="see_all">See All</a>
        </div>
        <div class="post-row">
            <div class="row carousel1" id="top-sailing">
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image">
                            <img src="images/l1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image">
                            <img src="images/l2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image">
                            <img src="images/l3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image">
                            <img src="images/l4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image">
                            <img src="images/l1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image">
                            <img src="images/l2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trending-items mob-padding section-block p-contain p-0">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-between mb-20 text-left">
            <h3 class="fw-700 text-uppercase">Trending Now</h3>
            <a href="" class="see_all">See All</a>
        </div>
        <div class="post-row">
            <div class="row carousel1" id="trending-items">
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                             <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/XxxdiHknNMSPjUj0h7CVbn9uRmT6grs2IhwO31Nr.mp4" type="video/mp4"></video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <img src="images/i2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <img src="images/i4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                             <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/udG7fuDRh0MgfYly7J8GMsyebucR3GalSce7cGG2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                             <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/BOpbn3INagK7qg4qXISUEryL901ER0E0HmbqfKu5.mp4"></video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/lBtvd2EYBeNJjhVL7VqYnnamiEmNW7FIzo3Ooh2y.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-post">
                        <div class="product-image round-corner">
                            <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/qxqz7h6ur9LJjapNvuNAiKPouRwCb0QgJyJIHUNi.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="product-detail">
                            <h3 class="product-titile fw-700">TSS Originals: Blue Bonnet Ombre (Utility)</h3>
                            <div class="product-features">
                                <p class="item-name">T-Shirt</p>
                                <p class="item-name-sub">Oversized T-shirts</p>
                                <p class="item-price">
                                    <span class="price_number">₹ 1999</span>
                                </p>
                                <p class="inclusive"><span class="item-sm-para">MRP incl. of all taxes</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sub-banner section-block p-contain">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-between mb-20 text-left">
            <h3 class="fw-700 text-uppercase"></h3>
            <a href="login.html" class="see_all">See All</a>
        </div>
        <div class="row owl-carousel" id="sub-banner">
            <div class="col-md-sm">
                <div class="sub-banner-block round-corner">
                    <img src="images/s1.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-sm">
                <div class="sub-banner-block round-corner">
                    <img src="images/s2.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-sm">
                <div class="sub-banner-block round-corner">
                    <img src="images/s1.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-sm">
                <div class="sub-banner-block round-corner">
                    <img src="images/s2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trends-items mob-padding section-block p-contain pt-0">
    <div class="container">
        <div class="heading-txt d-flex align-items-center justify-content-between mb-20 text-left">
            <h3 class="fw-700 text-uppercase">Trends</h3>
            <a href="" class="see_all">See All</a>
        </div>
        <div class="post-row">
            <div class="row carousel1" id="trends">
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/qxqz7h6ur9LJjapNvuNAiKPouRwCb0QgJyJIHUNi.mp4">
                            </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                        <img src="images/t2.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                        <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/IKt603jRWCDXvpMPXQqjFbSl4uQ2RtP6fb0sRLNY.mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                        <img src="images/t4.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                         <video muted="" autoplay="" loop="" playsinline="" class="main-video rounded-lg" >
                            <source src="https://happenstance.com/storage/media/BOpbn3INagK7qg4qXISUEryL901ER0E0HmbqfKu5.mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                        <img src="images/t6.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trends-item-box round-corner">
                        <img src="images/t1.webp" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="membership section-block p-contain5 pt-0">
    <div class="container">
        <div class="member-ship_container row">
            <div class="col-md-3">
                <div class="member-ship-item">
                    <div class="icon_memb">
                        <img src="images/mem1.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-content">
                        <h5 class="fw-700">Free Shipping</h5>
                        <p>Free shipping on orders over ₹ 1850</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member-ship-item">
                    <div class="icon_memb">
                        <img src="images/mem2.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-content">
                        <h5 class="fw-700">Free Returns</h5>
                        <p>30-days free return polic</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member-ship-item">
                    <div class="icon_memb">
                        <img src="images/mem3.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-content">
                        <h5 class="fw-700">Secured Payments</h5>
                        <p>We accept all major credit card</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="member-ship-item item-2">
                    <div class="icon_memb">
                        <img src="images/mem4.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-content">
                        <h5 class="fw-700">Customer Service</h5>
                        <p>Top notch customer service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="highlated-sale bottom-heighlated">
    <div class="container">
        <div class="row owl-carousel" id="bottom-top-carousel-off">
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 60% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 50% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
            <div class="sale-content d-flex align-items-center justify-content-center">
                <p>SALE</p>
                <div class="discount text-uppercase">Up to 30% off</div>
                <a href="" class="text-uppercase">Shop Now</a>
            </div>
        </div>
    </div>
</section>

<footer>
      <div class="container">
        <div class="footer-site-links">
            <div class="footer-column">
                <h4 class="SiteLinks_heading__VAIYr">TOP CATEGORIES</h4>
                <ul class="footer-menu">
                    <li><a href="">Women's Clothing</a></li>
                    <li><a href="">Men's Clothing</a></li>
                    <li><a href="">Men's Sneakers</a></li>
                    <li><a href="">Women's Sneakers</a></li>
                    <li><a href="">T-Shirts</a></li>
                    <li><a href="">Makeup</a></li>
                </ul>
            </div>
            <div class="footer-column p_left">
                <h4 class="SiteLinks_heading__VAIYr">About Us</h4>
                <ul class="footer-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="terms_condition.html">Terms &amp; Conditions</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="clearfix1"></div>
            <div class="footer-column">
                <h4 class="SiteLinks_heading__VAIYr">Help &amp; FAQs</h4>
                <ul class="footer-menu">
                    <li><a href="profile.html">Your Account</a></li>
                    <li><a href="order.html">Orders</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="refer.html">Refer a Friend</a></li>
                    <li><a href="return.html">Returns</a></li>
                    <li><a href="track.html">Track Orders</a></li>
                    <li><a href="delivery.html">Delivery</a></li>
                </ul>
            </div>
            <div class="footer-column p_left">
                <h4 class="SiteLinks_heading__VAIYr">TOP CATEGORIES</h4>
                <ul class="footer-menu">
                    <li><a href="">Women's Clothing</a></li>
                    <li><a href="">Men's Clothing</a></li>
                    <li><a href="">Men's Sneakers</a></li>
                    <li><a href="">Women's Sneakers</a></li>
                    <li><a href="">T-Shirts</a></li>
                    <li><a href="">Makeup</a></li>
                    <li><a href="">Women's Shoes</a></li>
                </ul>
            </div>
            <div class="clearfix1"></div>
            <div class="footer-column">
                <h4 class="SiteLinks_heading__VAIYr">TOP BRANDS</h4>
                <ul class="footer-menu">
                    <li><a href="">Adidas</a></li>
                    <li><a href="">Ginger</a></li>
                    <li><a href="">Nike</a></li>
                    <li><a href="">Seventy Five</a></li>
                    <li><a href="">Lacoste</a></li>
                    <li><a href="">All Store</a></li>
                </ul>
            </div>
            <div class="clearfix1"></div>
        </div>
     <div class="container1">
            <div class="subscribe_news_block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="subscribe_left">
                            <div class="icon_subscribe">
                                <!--?xml version="1.0" ?--><svg id="레이어_1" style="enable-background:new 0 0 40 40;" version="1.1" viewBox="0 0 40 40" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M38,37.37c0-0.16,0-0.32,0-0.47c0-0.43,0-0.87,0-1.3c0-0.65,0-1.3,0-1.95c0-0.8,0-1.61,0-2.41c0-0.9,0-1.8,0-2.7  c0-0.94,0-1.87,0-2.81c0-0.91,0-1.82,0-2.73c0-0.83,0-1.65,0-2.48c0-0.68,0-1.37,0-2.05c0-0.48,0-0.96,0-1.44  c0-0.34,0.06-0.73-0.05-1.06c-0.03-0.06-0.06-0.12-0.1-0.17c-0.04-0.06-0.08-0.11-0.13-0.16l-5-4.15V8.38  c0.06-2.15-1.64-3.94-3.79-4h-4.78L21,1.75c-0.33-0.28-0.82-0.28-1.15,0l-3.34,2.63h-5.39c-2.15,0.07-3.84,1.85-3.78,4  c0,0,0,3.3,0,3.3c-0.64,0.51-1.27,1.01-1.91,1.52c-0.5,0.4-1,0.79-1.49,1.19c-0.42,0.33-0.86,0.63-1.28,0.96  c-0.9,0.71-0.63,1.57-0.63,2.45c0,0.87,0,1.74,0,2.61c0.01,2.38-0.01,4.76,0,7.14c0.01,2.27-0.01,4.54,0,6.82  c0,1.01,0.03,2.02,0.04,3.02c0,0.05,0,0.08,0,0.12c0.01,0.08,0.02,0.16,0.05,0.23c0,0.03,0,0.06,0,0.09  c0.09,0.21,0.24,0.38,0.44,0.49c0.13,0.06,0.27,0.1,0.41,0.1h0.12h33.97c0.41-0.02,0.77-0.29,0.9-0.68  C37.96,37.63,38,37.38,38,37.37z M32.33,21.37L32.33,21.37l3.76-3v17.09L25.3,27L32.33,21.37z M32.71,18.57V14l2.79,2.32  L32.71,18.57z M20.39,3.8l0.7,0.58h-1.43L20.39,3.8z M11.12,6.38h17.81C30,6.41,30.85,7.3,30.82,8.37c0,0,0,0.01,0,0.01V12l0,0v8.11  l-7.11,5.65L21,23.63c-0.86-0.7-2.09-0.7-2.95,0l-2.39,2l-6.43-5.37V8.38C9.23,7.32,10.06,6.44,11.12,6.38z M3.9,18.38l10.26,8.56  L4,35.41L3.9,18.38z M7.34,18.7l-2.76-2.3l2.76-2.2V18.7z M5.77,36.44l10.5-8.73l0,0l3-2.47c0.19-0.15,0.47-0.15,0.66,0l3.26,2.56  l11.06,8.61L5.77,36.44z"></path><path d="M13.42,13.39H20c0.55,0,1-0.45,1-1s-0.45-1-1-1h-6.58c-0.55,0-1,0.45-1,1S12.87,13.39,13.42,13.39z"></path><path d="M13.42,18.75H27.5c0.55,0,1-0.45,1-1s-0.45-1-1-1H13.42c-0.55,0-1,0.45-1,1S12.87,18.75,13.42,18.75z"></path></svg>
                            </div>
                            <div class="subscribe_text_block">
                                <h3 class="fw-700">Subscribe to Our Newsletter</h3>
                                <p>Be the first to hear about newest arrivals, promotions &amp; in-store events</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d_news">
                        <div class="subscribe_right">
                            <div class="subscribe_news_form">
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <button class="subscribe">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-sec-row">
            <div class="row">
                <div class="col-md-6">
                    <div class="column-footer-left">
                        <p class="text-uppercase">Shop on the go</p>
                        <div class="apps-icon">
                            <div class=""><img src="images/android.svg" alt=""></div>
                            <div class=""><img src="images/apple.svg" alt=""></div>
                            <div class=""><img src="images/appgall.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="column-footer-right">
                        <p class="text-uppercase">Follow Us</p>
                        <div class="social-media">
                            <a href=""><img src="images/fb.svg" class="w_100" alt=""></a>
                            <a href=""><img src="images/x.svg" class="w_100" alt=""></a>
                            <a href=""><img src="images/linkdin.svg" class="w_100" alt=""></a>
                            <a href=""><img src="images/insta.svg" class="w_100" alt=""></a>
                            <a href=""><img src="images/youtube.svg" class="w_100" alt=""></a>
                            <a href=""><img src="images/snap.svg" class="w_100" alt=""></a>
                            <a href=""><img src="images/pinterest.svg" class="w_100" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 bottom-footer-row">
                <div class="bot-column bot-column-fst j-first">
                    <img src="images/visa.jpg" class="w_100" alt="">
                </div>
            </div>
            <div class="col-md-4 bottom-footer-row j-center">
                <div class="bot-column bot-column-sec text-center">
                    <p>Â© 2024 NAMSHI. ALL RIGHTS RESERVED</p>
                </div>
            </div>
            <div class="col-md-4 bottom-footer-row j-end">
                <div class="bot-column bot-column-third">
                    <p>Namshi Holding Limited</p>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
@include('website.footer')