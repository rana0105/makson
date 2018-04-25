@extends('frontend.layouts.main1')
@section('content')
    <section class="page-title-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-title overflow-fix">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="con-slider-main-area overflow-fix">
      <div class="con-slider-main overflow-fix">
        <div class="con-slider owl-carousel owl-theme overflow-fix">
          <div class="con-slider-single overflow-fix"><img src="{{ asset('makson/images/kon-1.png') }}"></div>
          <div class="con-slider-single overflow-fix"><img src="{{ asset('makson/images/kon-2.png') }}"></div>
          <div class="con-slider-single overflow-fix"><img src="{{ asset('makson/images/kon-3.png') }}"></div>
          <div class="con-slider-single overflow-fix"><img src="{{ asset('makson/images/kon-1.png') }}"></div>
          <div class="con-slider-single overflow-fix"><img src="{{ asset('makson/images/kon-2.png') }}"></div>
        </div>
      </div>
    </section>
    <section class="kontact-text-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="kontact-text-single overflow-fix">
              <h2 class="title">Corporate Office</h2>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Location</h3>
                  <p>House # 17, Road # 6, Sector # 1,Uttara Model Town, Dhaka 1230, Bangladesh</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Phone</h3>
                  <p>+8802 8933612, 8933613, 8933767, 8933739, 8933740</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-print"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Fax</h3>
                  <p>+8802 8933656</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Email</h3>
                  <p>info@maksonsgroup.com.bd</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kontact-text-single overflow-fix">
              <h2 class="title">Registered Office</h2>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Location</h3>
                  <p>Dilkusha Centre, 28 Dilkusha C/A, Suite # 401, Dhaka 1000, Bangladesh</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Phone</h3>
                  <p>+880 2 7168613-4, 9559349, 9566470, 9564543</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-print"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Fax</h3>
                  <p>+880 2 9564503</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kontact-text-single overflow-fix">
              <h2 class="title">Investor’s Relation Department</h2>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Noor Mohammad, DGM</h3>
                  <p><span>Email:</span>noor@maksonsgroup.com.bd</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Mrs. Farhana Haque, Sr. Manager </h3>
                  <p><span>Email:</span>noor@maksonsgroup.com.bd</p>
                  <p><span>Tel:</span>+880 2 8933612, 8933613, 8933767, 8933739, 8933740</p>
                  <p><span>Fax:</span> +880 2 8933656</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="concat-page-area-main overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="concat-right-area-new overflow-fix">
              <div class="thanjks-u overflow-fix d-flex justify-content-center align-items-center">
                  <h2>Your message have <br> been sent successfully !</h2>
              </div>
              <h2>Send Message</h2>
              <form action="" method="POST" class="form-box-area overflow-fix contact-form">
                {{ csrf_field() }}
                <div class="form-group">
                  <input name="name" class="form-control"  type="text" required="required" placeholder="Name">
                </div>
                <div class="form-group">
                  <input name="email" class="form-control" required="required" type="email" placeholder="Email">
                </div>
                <div class="form-box-single overflow-fix">
                  <textarea name="message" placeholder="Say Something"></textarea>
                </div>
                <button class="submit-button" type="submit"><span>Submit</span><i class="fas fa-circle-notch fa-spin"></i><i class="fas fa-check"></i></button>
              </form>
            </div>
          </div>
          <div class="col-md-7">
            <div class="map-right-area overflow-fix">
              <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.9298177541123!2d90.39929901498337!3d23.85662578453713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c69d6b770659%3A0xdfdbd8e1f203350b!2sMaksons+Group!5e0!3m2!1sen!2sbd!4v1524122991401"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="subpage-footer-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="border-full-wdith overflow-fix"></div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer-copy overflow-fix">
              <p>Maksons Group &copy 2018</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer overflow-fix d-flex">
              <h2>Follow us on</h2>
              <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('makson/plugin/OwlCarouse//owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('makson/plugin/OwlCarouse/owl.theme.default.min.css') }}">
<style>
  .concat-right-area-new .thanjks-u {
      position: absolute;
      top: 0;
      left: 0;
      background-image: -moz-linear-gradient( 90deg, rgb(224, 6, 66) 0%, rgb(220,20,60) 100%);
    background-image: -webkit-linear-gradient( 90deg, rgb(224, 6, 66) 0%, rgb(220,20,60) 100%);
    background-image: -ms-linear-gradient( 90deg, rgb(224, 6, 66) 0%, rgb(220,20,60) 100%);
      width: 100%;
      height: 100%;
      border: 6px solid #fff;
      transform: scale(0);
      transition: 0.5s;
    }
    .submit-button svg {
      color: #fff;
    }
    .concat-right-area-new .thanjks-u h2 {
      padding: 10px;
      text-align: center;
    }
  .thanks-u.thanjks-u {transform: scale(1); z-index: 9; transition: 0.5s;}
    .concat-main-area .concat-right-area-new:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: transparent;
      border: 6px solid #ebebeb;
      transform: scale(0);
    }
    .concat-main-area .concat-right-area .form-box-area .submit-button.loading {
        width: 30px;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
        height: 30px;
        border-radius: 50%;
        border: 0px;
        color: #fff;
        background: #e21838;
        padding-left: 8px; }
        .concat-main-area .concat-right-area .form-box-area .submit-button:focus {
          outline: none; }
        .concat-main-area .concat-right-area .form-box-area .submit-button:hover {
          color: #fff;
          background: #e21838; }
        .concat-main-area .concat-right-area .form-box-area .submit-button .fa-check {
          display: none; }
        .concat-main-area .concat-right-area .form-box-area .submit-button .fa-circle-notch {
          display: none; }
        .concat-main-area .concat-right-area .form-box-area .submit-button.loading span {
          display: none;
          -webkit-transition: .5s;
          -o-transition: .5s;
          transition: .5s; }
        .concat-main-area .concat-right-area .form-box-area .submit-button.loading .fa-check {
          display: none; }
        .concat-main-area .concat-right-area .form-box-area .submit-button.loading .fa-circle-notch {
          display: block; }
      .concat-main-area .concat-right-area .form-box-area .submit-button.hide-loading {
        width: 30px;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
        height: 30px;
        border-radius: 50%;
        border: 0px;
        color: #fff;
        background: #e21838;
        padding-left: 8px; }
        .concat-main-area .concat-right-area .form-box-area .submit-button.hide-loading span {
          display: none;
          -webkit-transition: .5s;
          -o-transition: .5s;
          transition: .5s; }
        .concat-main-area .concat-right-area .form-box-area .submit-button.hide-loading .fa-circle-notch {
          display: none; }
        .concat-main-area .concat-right-area .form-box-area .submit-button.hide-loading .fa-check {
          display: block; }
</style>

@endsection
@section('script')
  <script src="{{ asset('makson/plugin/OwlCarouse/owl.carousel.min.js')}}"></script>
 <script>
   $('.con-slider').owlCarousel({
    stagePadding: 290,
    loop:true,
    margin:35,
    nav:false,
    responsive:{
        0:{
            items:1,
      stagePadding: 50
        },
        500:{
      items:1,
      stagePadding: 50
        },
        1000:{
            items:1
        }
    }
});

   $(document).ready(function(){
        $(".contact-form").submit(function(e) {
            var self = $(this);
            e.preventDefault();
            if(self[0].checkValidity()){
                $('.submit-button').addClass("loading");
                $.ajax({
                    url:'{{ URL::to('/contactPage') }}',
                    type: "post",
                    data:$(this).serialize(),
                    success: function(data) {
                        if(data){
                            setTimeout(function() {
                              $(".submit-button").addClass("hide-loading");
                              $(".thanjks-u").addClass("thanks-u");
                              // For failed icon just replace ".done" with ".failed"
                              $(".done").addClass("finish");
                            }, 4000);
                            setTimeout(function() {
                              $(".submit-button").removeClass("loading");
                              $(".submit-button").removeClass("hide-loading");
                              $(".thanjks-u").removeClass("thanks-u");
                              $(".done").removeClass("finish");
                              $(".failed").removeClass("finish");
                            }, 8000);
                            self[0].reset();
                        }else{
                        
                        }
                    }
                });
            }
        });
    });
 </script>
 
@endsection