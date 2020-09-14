<script type="text/javascript" src="<?php echo base_url('assets/cache/bottom-16c3cf16.js');?>" ></script>
<header id="header">
  <div class="header-banner">
  </div>
  <nav class="header-nav">
     <div class="container">
        <div class="nav-inner hidden-md-down">
           <div id="_desktop_user_info">
              <div class="user-info-block selector-block">
                 <div class="currency-selector localiz_block dropdown js-dropdown">
                    <button data-target="#" data-toggle="dropdown" class=" btn-unstyle hidden-md-down">
                    <span class="expand-more">Setting</span>
                    <i class="material-icons">expand_more</i>
                    </button>
                    <button data-target="#" data-toggle="dropdown" class=" btn-unstyle hidden-lg-up">
                    <i class="fa fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                       <li>
                          <a ui-sref="Login" rel="nofollow" class="dropdown-item"><i class="fa fa-sign-in" aria-hidden="true"></i> SignUp/SignIn</a>
                       </li>
                       <!-- <li>
                          <a
                             href="<?php echo base_url('home/Sign'); ?>"
                             title="Log in to your customer account"
                             rel="nofollow" class="dropdown-item"
                             >
                          <span><i class="fa fa-sign-in" aria-hidden="true"></i>Sign in</span>
                          </a>
                       </li> -->
                    </ul>
                 </div>
              </div>
           </div>
           <div id="_desktop_wishtlist">
              <div class="wishtlist_top">
                 <a class="" href="<?php echo base_url('home/Wishlist'); ?>">
                 <i class="ion-android-favorite-outline"></i>
                 <span class="txt_wishlist">Wishlist</span>
                 (<span class="cart-wishlist-number">0</span>)
                 </a>
              </div>
           </div>
          <!--  <div id="_desktop_compare">
              <div class="compare_top">
                 <a href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/module/poscompare/comparePage">
                 <i class="ion-ios-shuffle-strong"></i> <span>Compare (<span
                    id="poscompare-nb"></span>)</span>
                 </a>
              </div>
           </div> -->
           <div id="_desktop_static">
              <div class="static-nav">Welcome to Waljon</div>
           </div>
        </div>
     </div>
     <div class="container">
        <div class="hidden-lg-up  mobile">
           <div id="_mobile_static"></div>
           <div class="row row-mobile">
              <div class="col-mobile col-md-4 col-xs-4">
                 <div class="float-xs-left" id="menu-icon">
                    <i class="fa fa-bars"></i>
                 </div>
                 <div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
                    <div class="top-header-mobile">
                       <div id="_mobile_compare"></div>
                       <div id="_mobile_wishtlist"></div>
                    </div>
                    <div id="_mobile_currency_selector"></div>
                    <div id="_mobile_language_selector"></div>
                    <div class="menu-close"> 
                       menu <i class="material-icons float-xs-right">arrow_back</i>
                    </div>
                    <div class="menu-tabs">
                       <div class="js-top-menu-bottom">
                          <div id="_mobile_megamenu"></div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-mobile col-md-4 col-xs-4 mobile-center">
                 <div class="top-logo" id="_mobile_logo"></div>
              </div>
              <div class="col-mobile col-md-4 col-xs-4 mobile-right">
                 <div id="_mobile_cart_block"></div>
                 <div id="_mobile_user_info"></div>
              </div>
           </div>
           <div id="_mobile_search_category"></div>
        </div>
     </div>
  </nav>
  <div class="header-top hidden-md-down">
     <div class="container">
        <div class="container-inner">
           <div class="row">
              <div class="col col col-md-2" id="_desktop_logo">
                 <a href="<?php echo base_url('home'); ?>">
                 <img class="logo img-responsive" src="http://waljon.com/waljon/img/logo.png" alt="Waljon">
                 </a>
              </div>
              <div class=" col col-md-8 col-sm-12 position-center">
                 <div id="_desktop_megamenu" class="use-sticky megamenu_center">
                    <div class="pos-menu-horizontal">
                       <ul class="menu-content">
                          <li class=" menu-item menu-item6   ">
                             <a href="<?php echo base_url('home/Contact'); ?>" >
                             <span>Home</span>
                             </a>
                          </li>
                          <li class=" menu-item menu-item3  hasChild ">
                             <a class="tt-upercase">
                             <span> Category </span>
                             <i class="fa fa-caret-down"></i></a>
                             <span class="icon-drop-mobile"><i class="material-icons add">add </i><i class="material-icons remove">remove </i></span>
                             <div class="pos-sub-menu menu-dropdown col-xs-12 col-sm-12  menu_slidedown" style="width: 100%">
                                <div class="pos-sub-inner header-md">
                                   <div class="pos-menu-row row ">
                                      <div class="pos-menu-col sub-category" data-ng-repeat="parentitem in headerMenuList">
                                         <ul class="ul-column">
                                            <li class="menu-item menu-item3 hasChild hasSubChild submenu-item">
                                              <a>
                                               <span> {{parentitem.parent_category}} </span>
                                              </a>
                                              <span class="icon-drop-mobile"><i class="material-icons add">add </i><i class="material-icons remove">remove </i></span>
                                              <div class="pos-sub-menu menu-dropdown col-xs-12 col-sm-12 menu_slidedown inner-menu" ng-if="parentitem.category.length >= 2" style="width: 100%"
                                                >
                                                <div class="pos-sub-inner">
                                                   <div class="pos-menu-row row ">
                                                      <div class="pos-menu-col col-xs-6 col-sm-3 " data-ng-repeat="category in parentitem.category">
                                                         <ul class="ul-column ">
                                                            <li class="submenu-item ">
                                                               <a href="<?php echo base_url('home/filter'); ?>">{{category.category}}</a>
                                                               <ul class="category-sub-menu" >
                                                                  <li data-ng-repeat="subcategory in category.subcategory" class="subcategory-li">
                                                                     <a href="javascript:void(0)" data-ng-click="redirectToProductPage(subcategory.subcategory)">{{subcategory.subcategory}}</a>
                                                                  </li>
                                                               </ul>
                                                            </li>
                                                         </ul>
                                                      </div>

                                                   </div>
                                                   <div class="pos-menu-row row ">
                                                      <div class="pos-menu-col col-xs-12 col-sm-12  ">
                                                         <ul class="ul-column ">
                                                            <li class="submenu-item ">
                                                               <a href="<?php echo base_url('home/filter'); ?>"><img src="/pos_ecolife_cosmetic/cosmetic3/img/cms/banner-menu.jpg" alt="" /></a>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                              </div>
                                              <div class="menu-dropdown cat-drop-menu menu_slidedown" ng-if="parentitem.category.length < 2">
                                                  <div data-ng-repeat="category in parentitem.category">   
                                                     <ul class="pos-sub-inner">
                                                        <li>
                                                           <a href="<?php echo base_url('home/filter'); ?>" class="fw-600">{{category.category}}</a>
                                                        </li>
                                                        <li data-ng-repeat="subcategory in category.subcategory" class="subcategory-li">
                                                           <a href="<?php echo base_url('home/filter'); ?>">{{subcategory.subcategory}}</a>
                                                        </li>
                                                     </ul>
                                                  </div>
                                              </div> 
                                        
                                            </li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                                <div class="pos-sub-inner header-xs">
                                    <div class="pos-menu-row row ">
                                      <div class="pos-menu-col sub-category" data-ng-repeat="parentitem in headerMenuList">  
                                        <label class="dropdown">
                                          <div class="dd-button">
                                            {{parentitem.parent_category}}
                                          </div>
                                          <input type="checkbox" class="dd-input" id="test">
                                          <ul class="dd-menu">
                                            <li data-ng-repeat="category in parentitem.category">
                                              <label class="dropdown category">
                                                <div class="dd-button">
                                                  {{category.category}}
                                                </div>
                                                <input type="checkbox" class="dd-input" id="test">
                                                <ul class="dd-menu subcategory">
                                                  <li data-ng-repeat="subcategory in category.subcategory">{{subcategory.subcategory}}
                                                  </li>
                                                </ul> 
                                              </label>
                                            </li>
                                          </ul> 
                                        </label>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </li>
                          
                          <!-- <li class=" menu-item menu-item4  hasChild ">
                             <a href="<?php echo base_url('home/filter'); ?>" >
                             <span>Health Care</span>
                             <i class="hidden-md-down ion-ios-arrow-down"></i>              </a>
                             <span class="icon-drop-mobile"><i class="material-icons add">add</i><i class="material-icons remove">remove </i></span>
                             <div class="menu-dropdown cat-drop-menu menu_slidedown">
                                <ul class="pos-sub-inner">
                                   <li><a href="<?php echo base_url('home/filter'); ?>" class=""><span>Massage & Relaxation</span></a></li>
                                   <li><a href="<?php echo base_url('home/filter'); ?>" class=""><span>Household Health Monitors</span></a></li>
                                   <li><a href="<?php echo base_url('home/filter'); ?>" class=""><span>Chinese Medicine</span></a></li>
                                   <li><a href="<?php echo base_url('home/filter'); ?>" class=""><span>Personal Health Care Items</span></a></li>
                                </ul>
                             </div>
                          </li> -->
                          <!-- <li class=" menu-item menu-item5   ">
                             <a href="prices-drop" >
                             <span>Prices drop</span>
                             </a>
                          </li> -->
                          <li class=" menu-item menu-item6   ">
                             <a href="<?php echo base_url('home/Contact'); ?>" >
                             <span>Contact us</span>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col col col-md-2 position-static">
                 <div id="_desktop_cart_block">
                    <div class="blockcart cart-preview" data-refresh-url="" data-cartitems="0">
                       <div class="button_cart">
                          <a rel="nofollow" href="" class="desktop hidden-md-down">
                          <span class="item_count">0</span>
                          <span class="item_total">₹0.00</span>
                          </a>
                          <a rel="nofollow" href="" class="mobile hidden-lg-up">
                          <span class="item_count">0</span>
                          </a>
                       </div>
                       <div class="popup_cart">
                          <div class="content-cart">
                             <div class="mini_cart_arrow"></div>
                             <ul>
                             </ul>
                             <div class="price_content">
                                <div class="cart-subtotals">
                                   <div class="products price_inline">
                                      <span class="label">Subtotal</span>
                                      <span class="value">₹0.00</span>
                                   </div>
                                   <div class=" price_inline">
                                      <span class="label"></span>
                                      <span class="value"></span>
                                   </div>
                                   <div class="shipping price_inline">
                                      <span class="label">Shipping</span>
                                      <span class="value">Free</span>
                                   </div>
                                   <div class="tax price_inline">
                                      <span class="label">Taxes</span>
                                      <span class="value">₹0.00</span>
                                   </div>
                                </div>
                                <div class="cart-total price_inline">
                                   <span class="label">Total</span>
                                   <span class="value">₹0.00</span>
                                </div>
                             </div>
                             <div class="checkout">
                                <a href="" class="btn btn-primary">Checkout</a> 
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- pos search module TOP -->
                 
                 <!-- /pos search module TOP -->
              </div>
           </div>
        </div>
     </div>
  </div>
</header>