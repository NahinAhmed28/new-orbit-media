@include('frontend.layout.header')
<body>

<!-- ==================== Start Loading ==================== -->

<div class="loading">

</div>

<div id="preloader">
</div>

<!-- ==================== End Loading ==================== -->





<div class="container-fluid ">
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>

    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
    <div class='star'></div>
</div>














<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<!-- ==================== Start cursor ==================== -->

<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- ==================== End cursor ==================== -->





<!-- ==================== Start Navbar ==================== -->

@include('frontend.layout.navbar')

<!-- ==================== End Navbar ==================== -->



<!-- ==================== Start header ==================== -->



<!-- ==================== End header ==================== -->


<!-- ==================== Start main-content ==================== -->

<div class="main-content mt-3">

    <!-- ==================== Start Contact ==================== -->

    <section class="contact section-padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form md-mb50">
                        <h4 class="fw-700 color-font mb-50">Get In Touch.</h4>

                        <form method="post" action="{{ route('usercontact.store') }}">
                                <!-- CROSS Site Request Forgery Protection -->
                                @csrf
                                <div class="messages"></div>
                                <div class="controls">

                                    <div class="form-group {{ $errors->has('form_first_name') ? 'has-danger' : '' }}">

                                        <input id="form_first_name" type="text" name="form_first_name" placeholder="First Name *">
                                        @if ($errors->has('form_first_name'))
                                            <small class="form-control-feedback text-white">{{ $errors->first('form_first_name') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('form_last_name') ? 'has-danger' : '' }}">
                                        <input id="form_last_name" type="text" name="form_last_name" placeholder="Last Name *">
                                        @if ($errors->has('form_last_name'))
                                            <div class="form-control-feedback text-white">{{ $errors->first('form_last_name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('form_email') ? 'has-danger' : '' }}">
                                        <input id="form_email" type="email" name="form_email" placeholder="Email *">
                                        @if ($errors->has('form_email'))
                                            <div class="form-control-feedback text-white">{{ $errors->first('form_email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('form_phone') ? 'has-danger' : '' }}">
                                        <input type="text" data-js="input" id="phone" name="form_phone" placeholder="(XXX) XXX-XXXX" />
                                        @if ($errors->has('form_phone'))
                                            <div class="form-control-feedback text-white">{{ $errors->first('form_phone') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('form_message') ? 'has-danger' : '' }}">
                                        <textarea id="form_message" name="form_message" placeholder="Company" rows="4"></textarea>
                                        @if ($errors->has('form_message'))
                                            <div class="form-control-feedback text-white">{{ $errors->first('form_message') }}</div>
                                        @endif
                                    </div>

                                    <button type="submit" class="butn dark"><p>Send Message</p></button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cont-info">
                        <h4 class="fw-700 color-font mb-50">Contact Info.</h4>
                        <h3 class="wow" >Let's Talk.
                        </h3>
                        <div class="item mb-40">
                            <h5><a href="#0">Email@example.com</a></h5>
                            <h5>+4.930.705.5448</h5>
                        </div>
                        <h3 class="wow" >Visit Us.
                        </h3>
                        <div class="item">
                            <h6>295 Witting Streets Suite 666,
                                <br>Melbourne, Australia
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->


    <!-- ==================== Start Map ==================== -->



    <!-- ==================== End Map ==================== -->


    <!-- ==================== Start Footer ==================== -->



    <!-- ==================== End Footer ==================== -->


</div>

<!-- ==================== End main-content ==================== -->
<!-- ==================== Start Footer ==================== -->

@include('frontend.layout.footer')
