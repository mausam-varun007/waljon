
  <section id="wrapper">
    <div class="container">
      <section id="content">
        <div class="row">
          <div class="col-md-8">
            <section  id= "checkout-personal-information-step" class = "checkout-step -reachable -complete -clickable">
              <h1 class="step-title h3">
                <i class="material-icons rtl-no-flip done">&#xE876;</i>
                <span class="step-number">1</span>
                Personal Information
                <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> Edit</span>
              </h1>
              <div class="content">
                <ul class="nav nav-inline my-2" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#checkout-guest-form" role="tab" aria-controls="checkout-guest-form" aria-selected="true">
                      Order as a guest
                    </a>
                  </li>
                  <li class="nav-item">
                    <span href="nav-separator"> | </span>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " data-link-action="show-login-form" data-toggle="tab" href="#checkout-login-form" role="tab" aria-controls="checkout-login-form">
                      Sign in
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="checkout-guest-form" role="tabpanel" >
                    <form action="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/order" id="customer-form" class="js-customer-form" method="post">
                      <section>
                        <input type="hidden" name="id_customer" value="">
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label">Social title</label>
                          <div class="col-md-6 form-control-valign">
                            <label class="radio-inline">
                              <span class="custom-radio">
                                <input name="id_gender" type="radio" value="1">
                              </span> Mr.
                            </label>
                            <label class="radio-inline">
                              <span class="custom-radio">
                                <input name="id_gender" type="radio" value="2">
                              </span> Mrs.
                            </label>
                          </div>
                          <div class="col-md-3 form-control-comment"> </div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label required">
                            First name
                          </label>
                          <div class="col-md-6">
                            <input class="form-control" name="firstname" type="text"  value=""  required>
                          </div>
                          <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label required">
                            Last name
                          </label>
                          <div class="col-md-6">
                            <input class="form-control" name="lastname" type="text" value=""  required>
                          </div>
                          <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label required">
                            Email
                          </label>
                          <div class="col-md-6">
                            <input class="form-control" name="email" type="email" value="" required >
                          </div>
                          <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <p>
                          <span class="font-weight-bold">Create an account</span> <span class="font-italic">(optional)</span>
                          <br>
                          <span class="text-muted">And save time on your next order!</span>
                        </p>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label">
                            Password
                          </label>
                          <div class="col-md-6">
                            <div class="input-group js-parent-focus">
                              <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}">
                              <span class="input-group-btn">
                                <button class="btn" type="button" data-action="show-password"  data-text-show="Show" data-text-hide="Hide">
                                  Show
                                </button>
                              </span>
                            </div>
                          </div>
                          <div class="col-md-3 form-control-comment">
                            Optional
                          </div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label">
                            Birthdate
                          </label>
                          <div class="col-md-6">
                            <input class="form-control" name="birthday" type="text" value=""
                             placeholder="MM/DD/YYYY">
                            <span class="form-control-comment">(E.g.: 05/31/1970)</span>
                          </div>
                          <div class="col-md-3 form-control-comment">
                            Optional          
                          </div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label"></label>
                          <div class="col-md-6">
                            <span class="custom-checkbox">
                              <label>
                                <input name="optin" type="checkbox" value="1">
                                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                Receive offers from our partners
                              </label>
                            </span>
                          </div>
                          <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label"></label>
                          <div class="col-md-6">
                            <span class="custom-checkbox">
                              <label>
                                <input name="newsletter" type="checkbox" value="1"  >
                                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em>
                              </label>
                            </span>
                          </div>
                          <div class="col-md-3 form-control-comment"> </div>
                        </div>        
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label required"> </label>
                          <div class="col-md-6">
                            <span class="custom-checkbox">
                              <label>
                                <input name="psgdpr" type="checkbox" value="1"  required>
                                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                                I agree to the terms and conditions and the privacy policy
                              </label>
                            </span> 
                          </div>
                          <div class="col-md-3 form-control-comment"> </div>
                        </div>
                      </section>
                      <footer class="form-footer clearfix">
                        <input type="hidden" name="submitCreate" value="1">      
                        <button class="continue btn btn-primary float-xs-right" name="continue"
                          data-link-action="register-new-customer" type="submit" value="1">
                            Continue
                        </button>
                      </footer>
                    </form>
                  </div>
                  <div class="tab-pane " id="checkout-login-form" role="tabpanel" aria-hidden="true">
                    <form id="login-form" action="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/order" method="post">
                      <section>
                        <input type="hidden" name="back" value="">
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label required"> Email</label>
                          <div class="col-md-6">
                            <input class="form-control" name="email" type="email"  value=""
                            required>
                          </div>
                          <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row ">
                          <label class="col-md-3 form-control-label required">
                            Password
                          </label>
                          <div class="col-md-6">
                            <div class="input-group js-parent-focus">
                              <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required>
                              <span class="input-group-btn">
                                <button class="btn" type="button" data-action="show-password"
                                  data-text-show="Show" data-text-hide="Hide">Show</button>
                              </span>
                            </div>
                          </div>
                          <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="forgot-password">
                          <a href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/password-recovery" rel="nofollow">
                            Forgot your password?
                          </a>
                        </div>
                      </section>
                      <footer class="form-footer text-sm-center clearfix">
                        <input type="hidden" name="submitLogin" value="1">        
                        <button class="continue btn btn-primary float-xs-right" name="continue"
                          data-link-action="sign-in" type="submit" value="1">
                          Continue
                        </button>
                      </footer>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <section class="checkout-step -current -reachable js-current-step -clickable" id="checkout-addresses-step">
              <h1 class="step-title h3">
                <span class="step-number">2</span> Addresses
              </h1>
              <div class="content">      
                <div class="js-address-form">
                  <form method="POST" action="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/order" data-refresh-url="//demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/order?ajax=1&amp;action=addressForm">
                    <p>The selected address will be used both as your personal address (for invoice) and as your delivery address.</p>
                    <div id="delivery-address">          
                      <div class="js-address-form">
                        <section class="form-fields">
                          <input type="hidden" name="id_address" value="">
                          <input type="hidden" name="id_customer" value="">
                          <input type="hidden" name="back" value="">
                          <input type="hidden" name="token" value="34c5d4669938a1543c239252724a91c2">
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              First name
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="firstname" type="text" value="diksha" maxlength="255" required="">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>               
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              Last name
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="lastname" type="text" value="pandey" maxlength="255" required="">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label">
                              Company
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="company" type="text" value="" maxlength="255">
                            </div>
                            <div class="col-md-3 form-control-comment">
                              Optional              
                            </div>
                          </div>               
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              Address
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="address1" type="text" value="" maxlength="128" required="">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>              
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label">
                              Address Complement
                            </label>
                            <div class="col-md-6">  
                              <input class="form-control" name="address2" type="text" value="" maxlength="128"> 
                            </div>
                            <div class="col-md-3 form-control-comment">
                              Optional
                            </div>
                          </div>
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              City
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="city" type="text" value="" maxlength="64" required="">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>               
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              State
                            </label>
                            <div class="col-md-6">
                              <select class="form-control form-control-select" name="id_state" required="">
                                <option value="" disabled="" selected="">-- please choose --</option>
                                <option value="1">AA</option>
                                <option value="2">AE</option>
                                <option value="3">AP</option>
                                <option value="4">Alabama</option>
                                <option value="5">Alaska</option>
                                <option value="6">Arizona</option>
                                <option value="7">Arkansas</option>
                                <option value="8">California</option>
                                <option value="9">Colorado</option>
                                <option value="10">Connecticut</option>
                                <option value="11">Delaware</option>
                                <option value="12">Florida</option>
                                <option value="13">Georgia</option>
                                <option value="14">Hawaii</option>
                                <option value="15">Idaho</option>
                                <option value="16">Illinois</option>
                                <option value="17">Indiana</option>
                                <option value="18">Iowa</option>
                                <option value="19">Kansas</option>
                                <option value="20">Kentucky</option>
                                <option value="21">Louisiana</option>
                                <option value="22">Maine</option>
                                <option value="23">Maryland</option>
                                <option value="24">Massachusetts</option>
                                <option value="25">Michigan</option>
                                <option value="26">Minnesota</option>
                                <option value="27">Mississippi</option>
                                <option value="28">Missouri</option>
                                <option value="29">Montana</option>
                                <option value="30">Nebraska</option>
                                <option value="31">Nevada</option>
                                <option value="32">New Hampshire</option>
                                <option value="33">New Jersey</option>
                                <option value="34">New Mexico</option>
                                <option value="35">New York</option>
                                <option value="36">North Carolina</option>
                                <option value="37">North Dakota</option>
                                <option value="38">Ohio</option>
                                <option value="39">Oklahoma</option>
                                <option value="40">Oregon</option>
                                <option value="41">Pennsylvania</option>
                                <option value="42">Rhode Island</option>
                                <option value="43">South Carolina</option>
                                <option value="44">South Dakota</option>
                                <option value="45">Tennessee</option>
                                <option value="46">Texas</option>
                                <option value="47">Utah</option>
                                <option value="48">Vermont</option>
                                <option value="49">Virginia</option>
                                <option value="50">Washington</option>
                                <option value="51">West Virginia</option>
                                <option value="52">Wisconsin</option>
                                <option value="53">Wyoming</option>
                                <option value="54">Puerto Rico</option>
                                <option value="55">US Virgin Islands</option>
                                <option value="56">District of Columbia</option>
                              </select>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              Zip/Postal Code
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="postcode" type="text" value="" maxlength="12" required="">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label required">
                              Country
                            </label>
                            <div class="col-md-6">
                              <select class="form-control form-control-select js-country" name="id_country" required="">
                                <option value="" disabled="" selected="">-- please choose --</option>
                                <option value="21" selected="">United States</option>
                              </select>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                          </div>
                          <div class="form-group row ">
                            <label class="col-md-3 form-control-label">
                              Phone
                            </label>
                            <div class="col-md-6">
                              <input class="form-control" name="phone" type="tel" value="" maxlength="32">  
                            </div>
                            <div class="col-md-3 form-control-comment"> Optional</div>
                          </div>
                          <input type="hidden" name="saveAddress" value="delivery">
                          <div class="form-group row">
                            <div class="col-md-9 col-md-offset-3">
                              <input name="use_same_address" id="use_same_address" type="checkbox" value="1" checked="">
                              <label for="use_same_address">Use this address for invoice too</label>
                            </div>
                          </div>
                        </section>
                        <footer class="form-footer clearfix">
                          <input type="hidden" name="submitAddress" value="1">
                          <button type="submit" class="continue btn btn-primary float-xs-right" name="confirm-addresses" value="1">
                            Continue
                          </button>
                        </footer>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>  
            <section class="checkout-step -unreachable" id="checkout-delivery-step">
              <h1 class="step-title h3">
                <span class="step-number">3</span> Shipping Method
              </h1>
              <div class="content">
                <div id="hook-display-before-carrier"></div>
                <div class="delivery-options-list">
                  <form class="clearfix" id="js-delivery" data-url-update="//demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/order?ajax=1&amp;action=selectDeliveryOption" method="post">
                    <div class="form-fields">
                      <div class="delivery-options">
                        <div class="row delivery-option">
                          <div class="col-sm-1">
                            <span class="custom-radio float-xs-left">
                              <input type="radio" name="delivery_option[17]" id="delivery_option_2" value="2," checked="">
                              <span></span>
                            </span>
                          </div>
                          <label for="delivery_option_2" class="col-sm-11 delivery-option-2">
                            <div class="row">
                              <div class="col-sm-5 col-xs-12">
                                <div class="row">
                                  <div class="col-xs-3">
                                    <img src="<?php echo base_url(); ?>assets/img/2.jpg" alt="My carrier">
                                  </div>
                                  <div class="col-xs-9">
                                    <span class="h6 carrier-name">My carrier</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 col-xs-12">
                                <span class="carrier-delay">Delivery next day!</span>
                              </div>
                              <div class="col-sm-3 col-xs-12">
                                <span class="carrier-price"><i class="fa fa-rupee"></i>7.00 tax excl.</span>
                              </div>
                            </div>
                          </label>
                        </div>
                        <div class="row carrier-extra-content"></div>
                        <div class="clearfix"></div>
                      </div>         
                      <div class="order-options">
                        <div id="delivery">
                          <label for="delivery_message">If you would like to add a comment about your order, please write it in the field below.</label>
                          <textarea rows="2" cols="120" id="delivery_message" name="delivery_message"></textarea>
                        </div> 
                      </div>
                    </div>
                    <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption" value="1">
                      Continue
                    </button>
                  </form>
                </div>
                <div id="hook-display-after-carrier"></div>
                <div id="extra_carrier"></div>
              </div>
            </section>
            <section class="checkout-step -current -reachable js-current-step -clickable" id="checkout-payment-step">
              <h1 class="step-title h3">
                <span class="step-number">4</span> Payment
              </h1>
              <div class="content">
                <div style="display:none" class="js-cart-payment-step-refresh"></div>
                <div class="payment-options ">
                  <div>
                    <div id="payment-option-1-container" class="payment-option clearfix">
                      <span class="custom-radio float-xs-left">
                        <input class="ps-shown-by-js " id="payment-option-1" data-module-name="ps_cashondelivery" name="payment-option" type="radio" required="">
                      </span>
                      <form method="GET" class="ps-hidden-by-js" style="display: none;">
                        <button class="ps-hidden-by-js" type="submit" name="select_payment_option" value="payment-option-1" style="display: none;">
                          Choose
                        </button>
                      </form>
                      <label for="payment-option-1">
                        <span>Pay by Cash on Delivery</span>
                      </label>
                    </div>
                  </div>
                  <div id="payment-option-1-additional-information" class="js-additional-information definition-list additional-information ps-hidden " style="display: block;">
                    <section>
                      <p>
                        You pay for the merchandise upon delivery
                      </p>
                    </section>
                  </div>  
                  <div id="pay-with-payment-option-1-form" class="js-payment-option-form  ps-hidden " style="display: block;">
                    <form id="payment-form" method="POST" action="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/module/ps_cashondelivery/validation">
                      <button style="display:none" id="pay-with-payment-option-1" type="submit"></button>
                    </form>
                  </div>
                </div>
                <p class="ps-hidden-by-js" style="display: none;">
                  By confirming the order, you certify that you have read and agree with all of the conditions below:
                </p>
                <form id="conditions-to-approve" method="GET">
                  <ul>
                    <li>
                      <div class="float-xs-left">
                        <span class="custom-checkbox">
                          <input id="conditions_to_approve[terms-and-conditions]" name="conditions_to_approve[terms-and-conditions]" required="" type="checkbox" value="1" class="ps-shown-by-js">
                          <span><i class="material-icons rtl-no-flip checkbox-checked"></i></span>
                        </span>
                      </div>
                      <div class="condition-label">
                        <label class="js-terms" for="conditions_to_approve[terms-and-conditions]">
                          I agree to the <a href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/content/3-terms-and-conditions-of-use" id="cta-terms-and-conditions-0">terms of service</a> and will adhere to them unconditionally.
                        </label>
                      </div>
                    </li>
                  </ul>
                </form>  
                <div id="payment-confirmation">
                  <div class="ps-shown-by-js">
                    <button type="submit" disabled="disabled" class="btn btn-primary center-block">Order with an obligation to pay
                  </div>
                  <div class="ps-hidden-by-js" style="display: none;"></div>
                </div>
                <div class="modal fade" id="modal">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <div class="js-modal-content"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-4">
            <section id="js-checkout-summary" class="card js-cart" data-refresh-url="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/cart?ajax=1&action=refresh">
              <div class="card-block">
                <div class="cart-summary-products">
                  <p>2 items</p>
                  <p>
                    <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
                      show details
                    </a>
                  </p>
                  <div class="collapse" id="cart-summary-product-list">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/beauty-health/6-madden-by-steve-madden-cale-6.html" title="Madden by Steve Madden Cale 6">
                            <img class="media-object" src="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/141-small_default/madden-by-steve-madden-cale-6.jpg" alt="Madden by Steve Madden Cale 6">
                          </a>
                        </div>
                        <div class="media-body">
                          <span class="product-name">Madden by Steve Madden Cale 6</span>
                          <span class="product-quantity">x1</span>
                          <span class="product-price float-xs-right"><i class="fa fa-rupee"></i>10.12</span>
                          <br/>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/beauty-health/3-13-brixton-patrol-all-terrain-anorak-jacket.html#/19-dimension-40x60cm" title="Brixton Patrol All Terrain Anorak Jacket">
                            <img class="media-object" src="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/152-small_default/brixton-patrol-all-terrain-anorak-jacket.jpg" alt="Brixton Patrol All Terrain Anorak Jacket">
                          </a>
                        </div>
                        <div class="media-body">
                          <span class="product-name">Brixton Patrol All Terrain Anorak Jacket</span>
                          <span class="product-quantity">x1</span>
                          <span class="product-price float-xs-right"><i class="fa fa-rupee"></i>29.00</span>
                          <div class="product-line-info product-line-info-secondary text-muted">
                            <span class="label">Dimension:</span>
                            <span class="value">40x60cm</span>
                          </div>
                          <br/>
                        </div>
                      </li>
                    </ul>
                  </div>        
                </div>
                <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">
                  <span class="label">Subtotal</span>
                  <span class="value">$39.12</span>
                </div>
                <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-shipping">
                  <span class="label">Shipping</span>
                  <span class="value">$7.00</span>
                </div>
              </div>
              <hr class="separator">
              <div class="card-block cart-summary-totals">
                <div class="cart-summary-line cart-total">
                  <span class="label">Total (tax excl.)</span>
                  <span class="value">$46.12</span>
                </div>
                <div class="cart-summary-line">
                  <span class="label sub">Taxes</span>
                  <span class="value sub">$0.00</span>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section> 
    </div>
  </section>

    

  