@include('frontend.layout.head')
@include('frontend.layout.quickview')
@include('frontend.layout.header')
@include('frontend.layout.mobile')
<main class="main pages">
    <div class="page-content pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Become Vendor</h1>
                                        <p class="mb-30">Already have an Vendor account? <a
                                                href="{{ route('vendor.login') }}">Vendor Login</a></p>
                                    </div>
                                    <form method="POST" action="{{ route('vendor.register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" id="name" name="name"
                                                placeholder="Shop Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="username" name="username"
                                                placeholder="User Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" placeholder="Phone" />
                                        </div>
                                        <div class="form-group">
                                            <select name="vendor_join" class="form-select mb-3"
                                                aria-label="Default select example">
                                                <option selected="">Open this select Join Date</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password"
                                                placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <input id="password_confirmation" type="password"
                                                name="password_confirmation" placeholder="Confirm password" />
                                        </div>
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="exampleCheckbox12" value="" />
                                                    <label class="form-check-label" for="exampleCheckbox12"><span>I
                                                            agree to terms &amp; Policy.</span></label>
                                                </div>
                                            </div>
                                            <a href="page-privacy-policy.html"><i
                                                    class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                        </div>
                                        <div class="form-group mb-30">
                                            <button type="submit"
                                                class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                name="login">Submit &amp; Register</button>
                                        </div>
                                        <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be
                                            used to support your experience throughout this website, to manage access to
                                            your account, and for other purposes described in our privacy policy</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <div class="card-login mt-115">
                                <a href="#" class="social-login facebook-login">
                                    <img src="{{ asset('frontendAssets/images/theme/icons/logo-facebook.svg') }}"
                                        alt="" />
                                    <span>Continue with Facebook</span>
                                </a>
                                <a href="#" class="social-login google-login">
                                    <img src="{{ asset('frontendAssets/images/theme/icons/logo-google.svg') }}"
                                        alt="" />
                                    <span>Continue with Google</span>
                                </a>
                                <a href="#" class="social-login apple-login">
                                    <img src="{{ asset('frontendAssets/images/theme/icons/logo-apple.svg') }}"
                                        alt="" />
                                    <span>Continue with Apple</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@include('frontend.layout.footer');
