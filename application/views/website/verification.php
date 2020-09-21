<div id="wrapper">
   <div class="container">
      <div class="row">
         <div id="content-wrapper" class="col-xs-12">
            <section id="main" class="main-sec mobile-page">
               <header class="page-header">
                  <h1>
                    Please enter your mobile number
                  </h1>
               </header>
               <section id="content" class="page-content card card-block">
                  <section class="register-form">
                     <p>We will send a 6 digit code to your mobile</p>
                     <form ng-submit="submitForm(signUpForm.$valid)" name="signUpForm" id="customer-form" class="js-customer-form" method="post">
                        <section>
                           <div class="form-group">
                              <div class="mobile-input">
                                <input class="form-control" name="firstName" type="text" ng-model="userData.firstname"  ng-minlength="3" maxlength="25" ng-pattern="/^[a-zA-Z ]+$/" required>                                
                              </div>
                           </div>
                        </section>
                        <footer class="form-footer clearfix">
                           <button class="btn btn-primary form-control-submit" type="submit">
                           Send Code
                           </button>
                        </footer>
                     </form>
                  </section>
               </section>
            </section>
            <section id="main" class="main-sec mobile-page">
               <header class="page-header">
                  <h1>
                    (+1) 2015554789
                  </h1>
               </header>
               <section id="content" class="page-content card card-block">
                  <section class="register-form">
                     <p>Is this OK or would you like to edit your number? <a>Change number </a></p>
                     <form ng-submit="submitForm(signUpForm.$valid)" name="signUpForm" id="customer-form" class="js-customer-form" method="post">
                        <section>
                           <div class="form-group">
                              <div class="verify-input">
                                <input type="text" id="partitioned" maxlength="6" class="form-control custom-input" ng-model="otp" placeholder="******" aria-invalid="false" style="">                               
                              </div>
                              <p>Did you not receive Verification Code? <a>Resend Code</a></p>
                           </div>
                        </section>
                        <footer class="form-footer clearfix">
                           <button class="btn btn-primary form-control-submit" type="submit">
                           Verify
                           </button>
                        </footer>
                     </form>
                  </section>
               </section>
            </section>
         </div>
      </div>
   </div>
</div>