<div id="wrapper">
  <div class="container">
    <div class="row">
      <div id="content-wrapper" class="col-xs-12">
        <section id="main">
          <header class="page-header">
            <h1>
              Log in to your account
            </h1>
          </header>
          <section id="content" class="page-content card card-block">
            <section class="login-form">
              <form ng-submit="submitForm(loginForm.$valid)" name="loginForm" id="customer-form" class="js-customer-form" method="post">
                <section>
                  <input type="hidden" name="back" value="my-account">
                  <div class="form-group row ">
                    <label class="col-md-3 form-control-label required">
                    Email
                    </label>
                    <div class="col-md-6">
                      <input class="form-control" name="email" ng-model="userData.email" type="email" value="" required="">
                    </div>
                    <div class="col-md-3 form-control-comment">
                      <span ng-show="loginForm.email.$dirty && loginForm.email.$invalid ">
                        <span class="input-error" ng-show="loginForm.email.$error.required" >Email is required</span>
                        <span class="input-error" ng-show="loginForm.email.$error.email">Enter valid email</span>
                        <span class="input-error" ng-if="!loginForm.email.$error.required && !loginForm.email.$error.email" ng-show="loginForm.email.$error.validEmail">This email address already exists.</span>
                        <span class="input-error" ng-if="!loginForm.email.$error.required && !loginForm.email.$error.email " ng-show="loginForm.email.$error.validEmailValid">Enter valid email</span>
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
                      <span class="help-block-error" ng-show="loginForm.password.$dirty && loginForm.password.$invalid">
                        <span  ng-show="loginForm.password.$error.required">Enter a valid password</span>
                        <span ng-show="loginForm.password.$error.minlength">Password must be of minimum 8 characters</span>
                      </span>
                    </div>
                  </div>
                  <div class="forgot-password">
                    <a href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/en/password-recovery" rel="nofollow">
                    Forgot your password?
                    </a>
                  </div>
                </section>
                <footer class="form-footer text-sm-center clearfix">
                  <input type="hidden" name="submitLogin" value="1">
                  <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit">
                  Sign in
                  </button>
                </footer>
              </form>
            </section>
            <hr>
            <div class="no-account">
              <a ui-sref="Signup">
              No account? Create one here
              </a>
            </div>
          </section>
          <footer class="page-footer">
            <!-- Footer content -->
          </footer>
        </section>
      </div>
    </div>
  </div>
</div>