@extends('layout.app')
@section('main_content')
    <div class="hero-section">
        <div class="container">
            <div class="hero-content-wrapper">

                <div class="hero-content">
                    <div style="height: 3px; width:100%;background:white;margin-top:40px;border-radius:10px"></div>
                    <div class="hero-title my-4">
                        Take a look at some memorable moments from our college
                    </div>
                    <div style="height: 3px; width:100%;background:white;margin-bottom:40px;border-radius:10px"></div>

                </div>

            </div>

        </div>
    </div>
    <div class="gallery-content">
        <div class="container">
            <div class="highlight-div">
                <div class="highligh">
                    Highlight
                </div>
            </div>
            <div class="gallery-div">
                <div class="gallery-top-div">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <img src="{{asset('images/gallery_car_1.svg')}}"   class="d-block w-100 single-carousel-img" alt="...">
                                </div>
                            </div>
                            
                          </div>
                          <div class="carousel-item">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <img src="{{asset('images/gallery_car_1.svg')}}"   class="d-block w-100 single-carousel-img" alt="...">
                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="col-12 d-flex justify-content-center">
                                <div>
                                    <img src="{{asset('images/gallery_car_1.svg')}}"   class="d-block w-100 single-carousel-img" alt="...">
                                </div>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="gallery_middle_div">
                    <div class="gtco-testimonials">
                        <div class="owl-carousel owl-carousel1 owl-theme">
                          <div>
                            <img class="owl-carousel-img" src="{{asset('images/gallery2.png')}}" alt="">
                          </div>
                          <div>
                            <img class="owl-carousel-img"  src="{{asset('images/gallery3.png')}}" alt="">
                          </div>
                          <div>
                            <img class="owl-carousel-img" src="{{asset('images/gallery4.png')}}" alt="">
                          </div>
                          <div>
                            <img class="owl-carousel-img" src="{{asset('images/gallery5.png')}}" alt="">
                          </div>
                          <div>
                            <img class="owl-carousel-img" src="{{asset('images/gallery5.png')}}" alt="">
                          </div>
                          <div>
                            <img class="owl-carousel-img"  src="{{asset('images/gallery3.png')}}" alt="">
                          </div>
                          <div>
                            <img class="owl-carousel-img" src="{{asset('images/gallery2.png')}}" alt="">
                          </div>
                        </div>
                      </div>
                </div>
            </div>


            <div class="highlight-div all-photo-title-div ">
                <div class="highligh">
                    All pictures
                </div>
            </div>
            <div class="all-photo-div" style="width: 100%">
                <div style="width: 60%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width:38%;" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width:38%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"   src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width: 60%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width: 60%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width:38%;" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width:38%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"   src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width: 60%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width: 60%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width:38%;" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width:38%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"   src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                  <div style="width: 60%" class="main-gallery-top-div">
                      <img style="" class="main-gallery-img"  src="{{asset('images/gallery_car_1.svg')}}" alt="">
                  </div>
                
            </div>
            
        </div>
        <div class="home-footer-div" style="margin-top: 30px">
            <div class="container">
                <div class="long-footer  academic-footer" style="margin-bottom: 100px">
                    <div class="subject-title-top-div">
                        <div style="height: 1px;background:#ecb776;margin:15px 0px;width:70px"></div>
                        <div style="color: #ecb776;display:inline-block">COMUNICATION</div>
                    </div>
                    <div class="mt-2 mb-3 communication-contact" style="">
                        Contact us
                    </div>
                    <div class="contact-form-div row">
                        <div class="contact-form-left col-md-6 col-12">
                            <div class="phone-div">
                                <span style="padding: 3px 5px; background:#AF8F3F"><i class="fa-solid fa-phone"></i></span>
                                &nbsp;
                                <span style="color: #AF8F3F">01515287150</span>
                            </div>
                            <div class="email-div my-3
                      ">
                                <span style="padding: 3px 5px; background:#AF8F3F"><i
                                        class="fa-regular fa-envelope"></i></span>
                                &nbsp; <span style="color: #AF8F3F">monsurahmadmohillacollege@gmail.com</span>
    
                            </div>
                            <div class="map-div">
                                <img style="height:300px; width:100%" src="{{ asset('images/map.png') }}" alt="">
                            </div>
                        </div>
                        <div class="contact-form-right col-md-6 col-12">
                            <div>
                                <form action="">
                                    <input placeholder="Students Name *" type="text"
                                        class="form-control contact-common-input" name="" id="">
                                    <input placeholder="Guardians Name *" type="text"
                                        class="form-control contact-common-input" name="" id="">
                                    <input placeholder="Phone Number *" type="text"
                                        class="form-control contact-common-input" name="" id="">
                                    <input placeholder="Email" type="text" class="form-control contact-common-input"
                                        name="" id="">
                                    <textarea placeholder="Write a text" class="form-control contact-common-input" name="" id=""
                                        cols="30" rows="1" style="resize: none"></textarea>
                                    <div style="display: flex;justify-content:center;margin-top:15px">
                                        <div class="contact-submit-div">
                                            <span style="display: inline-block">Submit &nbsp; <i
                                                    class="fa-regular fa-paper-plane"></i></span>
                                        </div>
                                    </div>
    
                                </form>
    
    
                            </div>
    
                        </div>
                    </div>
                </div>
    
                <div class="basic-footer-div">
                    <div class="row">
                        <div class="col-md-4 footer-college-div">
                            <div class="footer-college-inner">
                                <div class="footer-college-name">Mansoor Ahmad Women's College </div>
                                <div class="footer-college-address">
                                    Barhatta, Netrakona
                                </div>
                            </div>
    
                        </div>
                        <div class="footer-email-div col-md-4">
                            <div class="footer-email-inner" style="">
                                <div class="footer-email">Email </div>
                                <div class="footer-email-address">
                                    monsurahmadmohillacollege@gmail.com
                                </div>
                            </div>
                        </div>
                        <div class="footer-mobile-div col-md-4">
                            <div class="footer-mobile-inner" style="">
                                <div class="footer-mobile">Mobile number </div>
                                <div class="footer-mobile-num">
                                    +8801234-567890
                                </div>
                            </div>
    
                        </div>
    
                    </div>
                    <hr style="color: #AF8F3F;height:2px;margin:15px 0px">
                    <div class="row" style="margin-top: 25px">
                        <div class="col-md-6 col-12">
                            <div class="all-rights-div">
                                <div class="all-rights">
                                    © 2023 - All rights reserved. Developed by Tech Solution Factory.
                                </div>
                            </div>
    
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="social-media-div" style="">
                                <div class="social-media-title">
                                    Social media
                                </div>
                                <div style="height: 1px; width:60px; background:#AF8F3F">
    
                                </div>
                                <div>
                                    <img src="{{ asset('images/insta.svg') }}" alt="">
                                </div>
                                <div>
                                    <img src="{{ asset('images/facebook.svg') }}" alt="">
                                </div>
                                <div>
                                    <img src="{{ asset('images/youtube.svg') }}" alt="">
                                </div>
                                <div>
                                    <img src="{{ asset('images/twitter.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
    
    
        </div>
    </div>
    
@endsection    