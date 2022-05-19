
<footer class="sub-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="item">
                    <div class="logo">
                        <img src="{{asset('frontend/img/logo-dark.png')}}" alt="">
                    </div>

                    <div class="copy-right">
                        <p>Desgined, Hosted & Maintained by <a href="#0">Orbital Media Hub</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="item md-mb50">
                    <div class="title-footer ms-2">
                        <h5>Follow Us On</h5>
                    </div>
                    <div class="social">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                        <a href="#0"><i class="fab fa-linkedin"></i></a>
                        <a href="#0"><i class="fab fa-youtube"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="title-footer ">
                    <h5>Quick Links</h5>
                </div>
                <div class="item ">

                    <ul class="">



                        <li class="">
                            <div class="sm-post ">
                                <span class="date">Refund Policy</span>
                            </div>
                        </li>
                        <li class="d-flex ">
                            <div class="sm-post d-flex ">
                                <span class="date">Privacy Policy</span>
                            </div>
                        </li>
                        <li class="d-flex ">
                            <div class="sm-post d-flex ">
                                <span class="date">Terms & Conditions</span>
                            </div>
                        </li>
                        <li class="d-flex ">
                            <div class="sm-post d-flex ">
                                <span class="date">Contact</span>
                            </div>
                        </li>


                    </ul>










                </div>
            </div>

        </div>
    </div>

</footer>
<!-- <iframe src="img/Ishq Wala Love Full Video - SOTY_Alia Bhatt,Sidharth Malhotra,Varun Dhawan_Neeti Mohan ( 128kbps ).mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>  -->
<audio  id="autoplay">
    <source src="{{asset('frontend/img/mix.mp3')}}" type="audio/ogg">
    <source src="{{asset('frontend/img/mix.mp3')}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<script>
    //    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    //     if (!isChrome){
    //         $('#iframeAudio').remove()
    //     }
    //     else {
    //         $('#autoplay').remove() // just to make sure that it will not have 2x audio in the background
    //     }




    window.onload = function(){
        document.getElementById("autoplay").play();
    }
</script>
<!-- ==================== End Footer ==================== -->






<!-- jQuery -->
<script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>

<!-- plugins -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/index.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

<!-- custom scripts -->
<script src="{{asset('frontend/js/scripts.js')}}"></script>

</body>
</html>
