         <div class="home-banner">
             <!-- Full Page Image Background Carousel Header -->
              <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner banner-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../waljon/assets/img/6639812e7c57490b96d3117cf8d6991421a0fbd6_1_3.jpg');"></div>
                            <div class="carousel-caption">
                                 <div class="info">                                               
                                    <h5 data-animation="animated fadeInDown " class="transition_slide_0">iconic Makeup collections</h5>   
                                    <h2 data-animation="animated fadeInLeft " class="transition_slide_1">Makeup Which Enhance Your Natural Beauty</h2>
                                    <a href="http://www.posthemes.com" data-animation="animated zoomIn" class="readmore transition_slide_3">Shop Now</a>
                                 </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the second background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../waljon/assets/img/banner_2.jpg');"></div>
                            <div class="carousel-caption">
                                 <div class="info">                                  
                                    <h5 data-animation="animated fadeInRight " class="transition_slide_0 animated fadeInRight">Anti-Agring Wrinkle Cream</h5>                                
                                    <h2 data-animation="animated fadeInUp " class="transition_slide_1 animated fadeInUp">Collagen Renewal For Ageless Skin</h2>
                                    <a href="http://www.posthemes.com" data-animation="animated zoomIn" class="readmore transition_slide_3 animated zoomIn">Shop Now</a>
                                 </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

                </div>
         </div>
         <div id="wrapper"  class="home_page_sec">
            <div class="container">
               <div class="row">
                  <div id="content-wrapper" class="col-xs-12">
                     <section id="content" class="page-home">
                        <div class="pos_bestsellers_product  product_block_container">
                           <div class="pos_title">
                              <h2>
                                 Best Sellers
                              </h2>
                              <div class="desc_title">
                                 Add bestselling products to weekly line up 
                              </div>
                           </div>
                           <div class="row pos_content">
                              <data-owl-carousel class="owl-carousel" data-options='{navigation: false, pagination: false, rewindNav : false,dots:false,"responsive": {0:{"items":1},768:{"items":2},992:{"items":5}}}'>
                                 <div owl-carousel-item="" data-ng-repeat="item in products.best_sellers" class="item">
                                   <article class="style_product_default product-miniature mediam-size-product js-product-miniature item_in" >
                                       <div class="img_block">
                                          <a ui-sref="ProductView({id:item.product_id})" class="thumbnail product-thumbnail">
                                             <img class="first-image "
                                             src="assets/img/{{item.product_image}}" 
                                             data-full-size-image-url = "assets/img/{{item.product_image}}"
                                             >
                                          </a>
                                          <div class="quick-view">
                                             <a class="quick_view" href="" data-link-action="quickview" title="Quick view">
                                             <span>Quick view</span>
                                             </a>
                                          </div>
                                          <ul class="product-flag">
                                             <li class="new"><span>New</span></li>
                                          </ul>
                                       </div>
                                       <div class="product_desc">
                                          <div class="inner_desc">
                                             <div class="manufacturer"><a ui-sref="ProductView({id:item.product_id})">{{item.name}}</a></div>
                                             <h3 itemprop="name"><a ui-sref="ProductView({id:item.product_id})" class="product_name one_line" title="Water and Wind Resistant Insulated Jacket">{{item.description}}</a></h3>
                                             <div class="hook-reviews">
                                                <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                   <div class="star_content clearfix">
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <div class="star"></div>
                                                      <meta itemprop="worstRating" content = "0" />
                                                      <meta itemprop="ratingValue" content = "4" />
                                                      <meta itemprop="bestRating" content = "5" />
                                                   </div>
                                                   <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                </div>
                                             </div>
                                             <div class="product-price-and-shipping">
                                                <span class="sr-only">Price</span>
                                                <span itemprop="price" class="price "><i class="fa fa-rupee"></i> {{item.price}}</span>
                                             </div>
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                              </data-owl-carousel>
                           </div>
                        </div>
                        <div class="pos-special-products ">
                           <div class="pos_title">
                              <h2>
                                 Hot Deals
                              </h2>
                              <div class="desc_title">
                                 Add hot products to weekly line up 
                              </div>
                           </div>
                           <div class="row pos_content">
                              <data-owl-carousel class="special-item owl-carousel" data-options='{navigation: false, pagination: false, rewindNav : false,dots:false,"responsive": {0:{"items":1},768:{"items":1},992:{"items":2}}}'>
                                 <div owl-carousel-item="" class="item-product" data-ng-repeat="item in products.hot_deals">
                                    <!-- style products default -->
                                    <article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="17" data-id-product-attribute="109" itemscope itemtype="http://schema.org/Product">
                                       <div class="img_block">
                                          <a ui-sref="ProductView({id:item.product_id})" class="thumbnail product-thumbnail">
                                          <img class="first-image "
                                             src="assets/img/{{item.product_image}}" 
                                             data-full-size-image-url = "assets/img/{{item.product_image}}"
                                             >
                                          </a>
                                          <div class="quick-view">
                                             <a class="quick_view" href="#" data-link-action="quickview" title="Quick view">
                                             <span>Quick view</span>
                                             </a>
                                          </div>
                                          <ul class="product-flag">
                                             <li class="discount"><span>-10%</span></li>
                                             <li class="new"><span>New</span></li>
                                          </ul>
                                       </div>
                                       <div class="product_desc">
                                          <div class="inner_desc">
                                             <div class="manufacturer"><a ui-sref="ProductView({id:item.product_id})">{{item.name}}</a></div>
                                             <h3 itemprop="name"><a ui-sref="ProductView({id:item.product_id})" class="product_name one_line">{{item.description}}..</a></h3>
                                             <div class="hook-reviews">
                                                <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                   <div class="star_content clearfix">
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <div class="star star_on"></div>
                                                      <meta itemprop="worstRating" content = "0" />
                                                      <meta itemprop="ratingValue" content = "5" />
                                                      <meta itemprop="bestRating" content = "5" />
                                                   </div>
                                                   <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                </div>
                                             </div>
                                             <div class="product-price-and-shipping">
                                                <span class="sr-only">Regular price</span>
                                                <span class="regular-price">₹23.90</span>
                                                <span class="sr-only">Price</span>
                                                <span itemprop="price" class="price price-sale">₹21.51</span>
                                                <span class="discount-percentage discount-product">-10%</span>
                                             </div>
                                             <ul class="add-to-links">
                                                <li class="cart">
                                                   <div class="product-add-to-cart">
                                                      <form action="cart" method="post" class="add-to-cart-or-refresh">
                                                         <input type="hidden" name="token" value="203b2fb46b107eabda9dd64ae8ebc173">
                                                         <input type="hidden" name="id_product" value="17" class="product_page_product_id">
                                                         <input type="hidden" name="qty" value="1">
                                                         <button class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" type="submit" >
                                                         <i class="fa fa-shopping-cart"></i> Add to cart
                                                         </button>
                                                      </form>
                                                   </div>
                                                </li>
                                                <li>
                                                   <a class="addToWishlist wishlistProd_17" title="Add to wishlist" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
                                                   Add to wishlist
                                                   </a>
                                                </li>
                                                <li class="compare"> 
                                                   <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="17"   onclick="posCompare.addCompare($(this),17); return false;" title="Add to compare"><span>Add to compare</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="availability">
                                             <div class="availability-list in-stock">Availability: <span>200 In Stock</span></div>
                                          </div>
                                          <div class="countdown" >
                                             <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                             <div class='time_count_down' 
                                                data-years="Years"
                                                data-year="Year"
                                                data-months="Months"
                                                data-month="Month"
                                                data-weeks="Weeks"
                                                data-week="Week"
                                                data-days="Days"
                                                data-day="Day"
                                                data-hours="Hours"
                                                data-hour="Hour"
                                                data-minutes="Mins"
                                                data-minute="Min"
                                                data-seconds="Secs"
                                                data-second="Sec"
                                                >
                                                <span class="future_date_111_17 time_countdown"  data-date-y ='2025' data-date-m ='02' data-date-d='19' data-date-h = '00' data-date-mi = '00' data-date-s= '00' >  </span>
                                             </div>
                                          </div>
                                          <span id="future_date_111_17"
                                             class="id_countdown"></span>
                                          <div class="clearfix"></div>
                                          <div class="product-desc" itemprop="description">
                                             <ul>
                                                <li>
                                                   <div>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</div>
                                                </li>
                                                <li>
                                                   <div><em>Part of the Kaval Collection.</em></div>
                                                </li>
                                                <li>
                                                   <div>Regular fit is eased, but not sloppy, and perfect for any activity.</div>
                                                </li>
                                                <li>
                                                   <div>Plain-woven jacket specifically constructed for freedom of movement.</div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="variant-links">
                                             <div class="variant-links">
                                                <a href="beauty-health/17-103-originals-kaval-windbreaker-winter-jacket-2.html#/2-size-m/8-color-white"
                                                   class="color"
                                                   title="White"
                                                   style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
                                                <a href="beauty-health/17-102-originals-kaval-windbreaker-winter-jacket-2.html#/1-size-s/11-color-black"
                                                   class="color"
                                                   title="Black"
                                                   style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
                                                <span class="js-count count"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </article>
                                    <!-- end style products default --> 
                                    <!-- style products default type 1 -->
                                    <!-- end style products default type 3 -->  
                                 </div>
                                 
                              </data-owl-carousel>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <div class="pos-featured-products">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <img class="img-responsive" src="<?php echo base_url('assets/images/hot-deal-left.png'); ?>" alt="" title=""/>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="pos_title">
                           <h2>
                              Featured products 
                           </h2>
                           <div class="desc_title">
                              Add featured products to weekly line up   
                           </div>
                        </div>
                        <div class="pos_content row">
                           <data-owl-carousel class="feature-item owl-carousel" data-options='{navigation: false, pagination: false, rewindNav : false,dots:false,"responsive": {0:{"items":1},768:{"items":1},992:{"items":2}}}'>
                              <div owl-carousel-item="" class="item-product" data-ng-repeat="item in products.feature_product">
                                 <article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="16" data-id-product-attribute="101" itemscope itemtype="http://schema.org/Product">
                                    <div class="img_block">
                                       <a ui-sref="ProductView({id:item.product_id})" class="thumbnail product-thumbnail">
                                       <img class="first-image "
                                          src="assets/img/{{item.product_image}}" 
                                          data-full-size-image-url = "assets/img/{{item.product_image}}"
                                          >
                                       </a> 
                                       <div class="quick-view">
                                          <a class="quick_view" href="#" data-link-action="quickview" title="Quick view">
                                          <span>Quick view</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="product_desc">
                                       <div class="manufacturer"><a ui-sref="ProductView({id:item.product_id})">{{item.name}}</a></div>
                                       <h3 itemprop="name"><a ui-sref="ProductView({id:item.product_id})" class="product_name one_line" title="Juicy Couture Juicy Quilted Terry Track Jacket 2">{{item.description}}</a></h3>
                                       <div class="hook-reviews">
                                          <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                             <div class="star_content clearfix">
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <meta itemprop="worstRating" content = "0" />
                                                <meta itemprop="ratingValue" content = "5" />
                                                <meta itemprop="bestRating" content = "5" />
                                             </div>
                                             <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                          </div>
                                       </div>
                                       <div class="product-price-and-shipping">
                                          <span class="sr-only">Regular price</span>
                                          <span class="regular-price">₹35.90</span>
                                          <span class="sr-only">Price</span>
                                          <span itemprop="price" class="price price-sale">₹34.11</span>
                                          <span class="discount-percentage discount-product">-5%</span>
                                       </div>
                                    </div>
                                 </article>
                                 <article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="12" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                    <div class="img_block">
                                       <a href="beauty-health/12-juicy-couture-tricot-logo-stripe-jacket.html" class="thumbnail product-thumbnail">
                                       <img class="first-image "
                                          src="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/116-home_default/juicy-couture-tricot-logo-stripe-jacket.jpg" 
                                          alt = "Juicy Couture Tricot Logo..."
                                          data-full-size-image-url = "http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/116-large_default/juicy-couture-tricot-logo-stripe-jacket.jpg"
                                          >
                                       </a> 
                                       <div class="quick-view">
                                          <a class="quick_view" href="#" data-link-action="quickview" title="Quick view">
                                          <span>Quick view</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="product_desc">
                                       <div class="manufacturer"><a href="//demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/brands?id_manufacturer=2">Graphic Corner</a></div>
                                       <h3 itemprop="name"><a href="beauty-health/12-juicy-couture-tricot-logo-stripe-jacket.html" class="product_name one_line" title="Juicy Couture Tricot Logo Stripe Jacket">Juicy Couture Tricot Logo Stripe Jacket</a></h3>
                                       <div class="hook-reviews">
                                          <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                             <div class="star_content clearfix">
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <meta itemprop="worstRating" content = "0" />
                                                <meta itemprop="ratingValue" content = "5" />
                                                <meta itemprop="bestRating" content = "5" />
                                             </div>
                                             <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                          </div>
                                       </div>
                                       <div class="product-price-and-shipping">
                                          <span class="sr-only">Price</span>
                                          <span itemprop="price" class="price ">₹9.00</span>
                                       </div>
                                    </div>
                                 </article>
                              </div>                              
                           </data-owl-carousel>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="pos_new_product  product_block_container">
                     <h2>
                        New Arrivals
                     </h2>
                     <div class="desc_title">
                        Add new products to weekly line up 
                     </div>
                  </div>
                  <div class="row pos_content">
                     <data-owl-carousel class="owl-carousel" data-options='{navigation: false, pagination: false, rewindNav : false,dots:false,"responsive": {0:{"items":1},768:{"items":2},992:{"items":6}}}'>
                        <div owl-carousel-item="" data-ng-repeat="item in products.new_arrivals" class="item">
                          <article class="style_product_default product-miniature mediam-size-product js-product-miniature item_in" data-id-product="8" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                    <div class="img_block">
                                       <a ui-sref="ProductView({id:item.product_id})" class="thumbnail product-thumbnail">
                                       <img class="first-image "
                                          src="assets/img/{{item.product_image}}" 
                                          data-full-size-image-url = "assets/img/{{item.product_image}}"
                                          >
                                       </a>
                                       <div class="quick-view">
                                          <a class="quick_view" href="" data-link-action="quickview" title="Quick view">
                                          <span>Quick view</span>
                                          </a>
                                       </div>
                                       <ul class="product-flag">
                                          <li class="new"><span>New</span></li>
                                       </ul>
                                    </div>
                                    <div class="product_desc">
                                       <div class="inner_desc">
                                          <div class="manufacturer"><a ui-sref="ProductView({id:item.product_id})">{{item.name}}</a></div>
                                          <h3 itemprop="name"><a ui-sref="ProductView({id:item.product_id})" class="product_name one_line" title="Water and Wind Resistant Insulated Jacket">{{item.description}}</a></h3>
                                          <div class="hook-reviews">
                                             <div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                <div class="star_content clearfix">
                                                   <div class="star star_on"></div>
                                                   <div class="star star_on"></div>
                                                   <div class="star star_on"></div>
                                                   <div class="star star_on"></div>
                                                   <div class="star"></div>
                                                   <meta itemprop="worstRating" content = "0" />
                                                   <meta itemprop="ratingValue" content = "4" />
                                                   <meta itemprop="bestRating" content = "5" />
                                                </div>
                                                <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                             </div>
                                          </div>
                                          <div class="product-price-and-shipping">
                                             <span class="sr-only">Price</span>
                                             <span itemprop="price" class="price "> <i class="fa fa-rupee"></i> {{item.price}}</span>
                                          </div>
                                          <span class="nb-comments"><span itemprop="reviewCount">1</span> Review(s)</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </article>
                        </div>
                     </data-owl-carousel>
                  </div>
               </div>
               <div class="home-banner">
                  <div class="banner-box"><a href="#"><img src="<?php echo base_url('assets/images/7_1.jpg'); ?>" alt="" /></a></div>
               </div>
               
            </div>
            <div class="testimonials_container">
               <div class="container">
                  <div class="pos_title">
                     <h2>Client testimonials</h2>
                     <div class="desc_title">What our happy customers says !</div>
                  </div>
                  <div class=" row pos_content">
                     <div class="testimonialsSlide owl-carousel">
                        <div class="item-testimonials">
                           <div class="item">
                              <div class="content_author">
                                 <div class="img"><img src="<?php echo base_url() ?>assets/img/sample1.png" alt="Image Testimonial"></div>
                                 <div class="content_test">
                                    <div class="des_testimonial">All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</div>
                                    <div class="des_inner">
                                       <p class="des_namepost"><span>orando BLoom</span></p>
                                       <p class="des_email">demo@posthemes.com</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item-testimonials">
                           <div class="item">
                              <div class="content_author">
                                 <div class="img"><img src="<?php echo base_url() ?>assets/img/sample2.png" alt="Image Testimonial"></div>
                                 <div class="content_test">
                                    <div class="des_testimonial">All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</div>
                                    <div class="des_inner">
                                       <p class="des_namepost"><span>orando BLoom</span></p>
                                       <p class="des_email">demo@posthemes.com</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item-testimonials">
                           <div class="item">
                              <div class="content_author">
                                 <div class="img"><img src="<?php echo base_url() ?>assets/img/sample3.png" alt="Image Testimonial"></div>
                                 <div class="content_test">
                                    <div class="des_testimonial">All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</div>
                                    <div class="des_inner">
                                       <p class="des_namepost"><span>orando BLoom</span></p>
                                       <p class="des_email">demo@posthemes.com</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="pos_logo product_block_container">
                  <div class="row pos_content">
                     <data-owl-carousel class="logo-slider owl-carousel owl-loaded owl-drag" data-options='{navigation: false, pagination: false, rewindNav : false,dots:false,"responsive": {0:{"items":1},768:{"items":2},992:{"items":5}}}'>
                        <div class="logo-slider-inner">
                           <div owl-carousel-item="" class="item item-banklogo">
                              <a href ="">
                                 <img class="replace-2x img-responsive" src ="<?php echo base_url() ?>assets/img/1.jpg" alt ="Logo" />
                              </a>
                           </div>
                           <div owl-carousel-item="" class="item item-banklogo">
                              <a href ="">
                                 <img class="replace-2x img-responsive" src ="<?php echo base_url() ?>assets/img/2cm.jpg" alt ="Logo" />
                              </a>
                           </div>
                           <div owl-carousel-item="" class="item item-banklogo">
                              <a href ="">
                                 <img class="replace-2x img-responsive" src ="<?php echo base_url() ?>assets/img/3.jpg" alt ="Logo" />
                              </a>
                           </div>
                           <div owl-carousel-item="" class="item item-banklogo">
                              <a href ="">
                                 <img class="replace-2x img-responsive" src ="<?php echo base_url() ?>assets/img/4.jpg" alt ="Logo" />
                              </a>
                           </div>
                           <div owl-carousel-item="" class="item item-banklogo">
                              <a href ="">
                                 <img class="replace-2x img-responsive" src ="<?php echo base_url() ?>assets/img/5.jpg" alt ="Logo" />
                              </a>
                           </div>
                           <div owl-carousel-item="" class="item item-banklogo">
                              <a href ="">
                                 <img class="replace-2x img-responsive" src ="<?php echo base_url() ?>assets/img/6.jpg" alt ="Logo" />
                              </a>
                           </div>
                        </div>   
                     </data-owl-carousel>
                  </div>
               </div>
            </div>
         </div>
         

          <script type="text/javascript">
               $(document).ready(function() {
                  var testi = $(".testimonialsSlide");
                  testi.owlCarousel({
                     autoplay :false,
                     autoplayHoverPause: true,
                     smartSpeed : 1000,
                     nav :false,
                     dots : true, 
                     responsiveClass:true,
                     responsive : {
                       0 : {
                            items: 1,
                        }, 
                       360 : {
                            items: 1,
                        },
                        576 : {
                            items: 1,
                        },
                        768 : {
                            items: 1,
                        },
                        992 : {
                            items:2,
                        },
                       1200 : {
                            items: 2,
                        }
                     }
                  });
               });
            </script>
