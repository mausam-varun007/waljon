<div id="wrapper">
   <div class="container">
      <div class="row">
         <div id="content-wrapper" class="col-xs-12">
            <section id="main" class="main-sec">
               <header class="page-header">
                  <h1>
                     Create an account
                  </h1>
               </header>
               <section id="content" class="page-content card card-block">
                  <section class="register-form">
                     <p>Already have an account? <a ui-sref="Login">Log in instead!</a></p>
                     <form ng-submit="submitForm(signUpForm.$valid)" name="signUpForm" id="customer-form" class="js-customer-form" method="post">
                        <section>
                           <input type="hidden" name="id_customer" value="">
                           <!-- <div class="form-group row ">
                              <label class="col-md-3 form-control-label">
                              Social title
                              </label>
                              <div class="col-md-6 form-control-valign">
                                 <label class="radio-inline">
                                 <span class="custom-radio">
                                 <input name="id_gender" type="radio" value="1">
                                 <span></span>
                                 </span>
                                 Mr.
                                 </label>
                                 <label class="radio-inline">
                                 <span class="custom-radio">
                                 <input name="id_gender" type="radio" value="2">
                                 <span></span>
                                 </span>
                                 Mrs.
                                 </label>
                              </div>
                              <div class="col-md-3 form-control-comment">
                              </div>
                           </div> -->
                           <div class="form-group row ">
                              <label class="col-md-3 form-control-label required">
                              First name
                              </label>
                              <div class="col-md-6">
                                <input class="form-control" name="firstName" type="text" ng-model="userData.firstname"  ng-minlength="3" maxlength="25" ng-pattern="/^[a-zA-Z ]+$/" required>                                
                              </div>
                              <div class="col-md-3 form-control-comment">
                                <span ng-show="signUpForm.firstName.$dirty && signUpForm.firstName.$invalid">
                                  <span class="input-error"  ng-show="signUpForm.firstName.$error.required">Enter first Name</span>
                                  <span class="input-error" ng-show="signUpForm.firstName.$error.pattern">Enter Valid Name</span>
                                  <span class="input-error" ng-if="!signUpForm.firstName.$error.pattern" ng-show="signUpForm.firstName.$error.minlength">first name must be of minimum 3 Letters</span>                            
                                </span>
                              </div>
                           </div>
                           <div class="form-group row ">
                              <label class="col-md-3 form-control-label required">
                              Last name
                              </label>
                              <div class="col-md-6">
                                <input class="form-control" name="lastname" type="text" ng-model="userData.lastname"  ng-minlength="3" maxlength="25" ng-pattern="/^[a-zA-Z ]+$/" required> 
                              </div>
                              <div class="col-md-3 form-control-comment">
                                <span ng-show="signUpForm.lastname.$dirty && signUpForm.lastname.$invalid">
                                  <span class="input-error"  ng-show="signUpForm.lastname.$error.required">Enter last Name</span>
                                  <span class="input-error" ng-show="signUpForm.lastname.$error.pattern">Enter Valid Name</span>
                                  <span class="input-error" ng-if="!signUpForm.lastname.$error.pattern" ng-show="signUpForm.lastname.$error.minlength">last name must be of minimum 3 Letters</span>                            
                                </span>
                              </div>
                           </div>
                           <div class="form-group row ">
                              <label class="col-md-3 form-control-label required">
                              Email
                              </label>
                              <div class="col-md-6">
                                 <input class="form-control" name="email" ng-model="userData.email" type="email" required>
                              </div>
                              <div class="col-md-3 form-control-comment">
                                <span ng-show="signUpForm.email.$dirty && signUpForm.email.$invalid ">
                                  <span class="input-error" ng-show="signUpForm.email.$error.required" >Email is required</span>
                                  <span class="input-error" ng-show="signUpForm.email.$error.email">Enter valid email</span>
                                  <span class="input-error" ng-if="!signUpForm.email.$error.required && !signUpForm.email.$error.email" ng-show="signUpForm.email.$error.validEmail">This email address already exists.</span>
                                  <span class="input-error" ng-if="!signUpForm.email.$error.required && !signUpForm.email.$error.email " ng-show="signUpForm.email.$error.validEmailValid">Enter valid email</span>
                                </span> 
                              </div>
                           </div>
                           <div class="form-group row ">
                              <label class="col-md-3 form-control-label required">
                              Password
                              </label>
                              <div class="col-md-6">
                                 <div class="input-group js-parent-focus">
                                    <input class="form-control js-child-focus js-visible-password" ng-model="userData.password" type="password" name="password"  pattern=".{5,}" required="" ng-minlength="8">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                    Show
                                    </button>
                                    </span>
                                 </div>
                              </div>
                              <div class="col-md-3 form-control-comment">
                                <span class="help-block-error" ng-show="signUpForm.password.$dirty && signUpForm.password.$invalid">
                                  <span  ng-show="signUpForm.password.$error.required">Enter a valid password</span>
                                  <span ng-show="signUpForm.password.$error.minlength">Password must be of minimum 8 characters</span>
                                </span>
                              </div>
                           </div>
                           <!-- <div class="form-group row ">
                              <label class="col-md-3 form-control-label">
                              Birthdate
                              </label>
                              <div class="col-md-6">
                                 <input class="form-control" name="birthday" type="text" value="" placeholder="MM/DD/YYYY">
                                 <span class="form-control-comment">
                                 (E.g.: 05/31/1970)
                                 </span>
                              </div>
                              <div class="col-md-3 form-control-comment">
                                 Optional
                              </div>
                           </div> -->
                           <!-- <div class="form-group row ">
                              <label class="col-md-3 form-control-label">
                              </label>
                              <div class="col-md-6">
                                 <span class="custom-checkbox">
                                 <label>
                                 <input name="optin" type="checkbox" value="1">
                                 <span><i class="material-icons rtl-no-flip checkbox-checked"></i></span>
                                 Receive offers from our partners
                                 </label>
                                 </span>
                              </div>
                              <div class="col-md-3 form-control-comment">
                              </div>
                           </div> -->
                           <!-- <div class="form-group row ">
                              <label class="col-md-3 form-control-label">
                              </label>
                              <div class="col-md-6">
                                 <span class="custom-checkbox">
                                 <label>
                                 <input name="newsletter" type="checkbox" value="1">
                                 <span><i class="material-icons rtl-no-flip checkbox-checked"></i></span>
                                 Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em>
                                 </label>
                                 </span>
                              </div>
                              <div class="col-md-3 form-control-comment">
                              </div>
                           </div> -->
                           <div class="form-group row ">
                              <label class="col-md-3 form-control-label required">
                              </label>
                              <div class="col-md-6">
                                 <span class="custom-checkbox">
                                 <label>
                                 <input name="psgdpr" type="checkbox" value="1" required="">
                                 <span><i class="material-icons rtl-no-flip checkbox-checked"></i></span>
                                 I agree to the terms and conditions and the privacy policy
                                 </label>
                                 </span>
                              </div>
                              <div class="col-md-3 form-control-comment">
                              </div>
                           </div>
                        </section>
                        <footer class="form-footer clearfix">
                           <button class="btn btn-primary form-control-submit" type="submit">
                           Save
                           </button>
                        </footer>
                     </form>
                  </section>
               </section>
               <footer class="page-footer">
                  <!-- Footer content -->
               </footer>
            </section>
         </div>
      </div>
   </div>
</div>