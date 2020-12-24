@extends('Frontend.layouts.Master')

@section('main_section')
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">Sign Up</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="index.html">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Sign Up</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START SIGN UP AREA
================================= -->
<section class="sign-up section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-box-shared">
                    <div class="card-box-shared-title text-center">
                        <h3 class="widget-title font-size-25">Create an Account and <br> Start Learning!</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-4 column-td-half">
                                        <div class="form-group">
                                            <button class="theme-btn w-100" type="submit">
                                                <i class="fa fa-google mr-2"></i>Google
                                            </button>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-td-half">
                                        <div class="form-group">
                                            <button class="theme-btn w-100" type="submit">
                                                <i class="fa fa-facebook mr-2"></i>Facebook
                                            </button>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-td-half">
                                        <div class="form-group">
                                            <button class="theme-btn w-100" type="submit">
                                                <i class="fa fa-twitter mr-2"></i>Twitter
                                            </button>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-12">
                                        <div class="account-assist mt-3 margin-bottom-35px text-center">
                                            <p class="account__desc">or</p>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">First Name<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="text" placeholder="First name">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Last Name<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="text" placeholder="Last name">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                     <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Username<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="text" placeholder="Username">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Email Address<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="text" placeholder="Email address">
                                                <span class="la la-envelope input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Password<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="text" placeholder="Password">
                                                <span class="la la-lock input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Confirm Password<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="text" placeholder="Confirm password">
                                                <span class="la la-lock input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="chb1">
                                                <label for="chb1"><span class="line-height-24 d-block">Yes! I want to get the most out of Aduca by receiving emails with exclusive deals, personal recommendations and learning tips!</span></label>
                                            </div>
                                              <div class="custom-checkbox">
                                                <input type="checkbox" id="chb2">
                                                <label for="chb2">By signing up, you agree to our <a href="#">Terms of Use</a> and
                                                    <a href="#">Privacy Policy</a>.
                                                </label>
                                            </div>

                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12 ">
                                        <div class="btn-box">
                                            <button class="theme-btn" type="submit">register account</button>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <p class="mt-4">Already have an account? <a href="login.html" class="primary-color-2">Log in</a></p>
                                    </div><!-- end col-md-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form -->
                    </div>
                </div>
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end sign-up -->
<!-- ================================
       START SIGN UP AREA
================================= -->
@endsection