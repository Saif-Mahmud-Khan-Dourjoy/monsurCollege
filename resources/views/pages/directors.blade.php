@extends('layout.app')
@section('main_content')
    <div class="hero-section">
        <div class="container">
            <div class="hero-content-wrapper">

                <div class="hero-content">
                    <div style="height: 3px; width:100%;background:white;margin-top:40px;border-radius:10px"></div>
                    <div class="hero-title my-4">
                        With the help of experienced teachers, you too will reach the pinnacle of success
                    </div>
                    <div style="height: 3px; width:100%;background:white;margin-bottom:40px;border-radius:10px"></div>

                </div>

            </div>

        </div>
    </div>
    <div class="director-main-content">
        <div class="container">
            <div class="founder-div row">
                <div class="col-lg-3 col-5 founder-left-div display-flex-align-center">
                    <div class="founder-left-div-image">
                        <img style="border: 20px solid rgba(0, 0, 0, 0.20);width:100%"
                            src="{{ asset('images/founder.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-12 founder-right-div">
                    <div class="founder-name">
                        Md. Mansoor Ahmad
                    </div>
                    <div class="founder-designation">
                        Founder
                    </div>
                    <div class="founder-details">
                        <div>
                            Educational Qualification:
                        </div>
                        <div>
                            Contact:
                        </div>
                        <div>
                            Address:
                        </div>
                    </div>
                    <div class="founder-speech">
                        Humans are the most complete of living beings. But he is born as the most imperfect. The tiger bear
                        derives its livelihood from the storehouse of nature. People come to Jivarangbhoomi with two empty
                        hands clenched into fists.
                    </div>
                </div>

            </div>
            <div class="board-of-directors-title">
                Board of Directors
            </div>
            <div class="board-of-directors-main-div row justify-content-center">
                <div class="col-lg-5 col-md-8 col-10 board-of-directors-main-div-left ">
                    <div class="directors-img-div row">
                        <div class="col-lg-5 director-image-top-div">
                            <div class="director-div">
                                <img class="director-main-image"
                                    style="border-radius: 8px;
                          border: 10px solid rgba(0, 0, 0, 0.20);"
                                    src="{{ asset('images/founder.svg') }}" alt="">
                            </div>

                        </div>
                        <div class="col-lg-3 directors-icon-main-div">
                            <div class="directors-icon-div">
                                <div>
                                    <img class="directors-icon" src="{{ asset('images/directorInsta.svg') }}"
                                        alt="">
                                </div>
                                <div>
                                    <img class="directors-icon" src="{{ asset('images/directorFb.svg') }}" alt="">
                                </div>
                                <div>
                                    <img class="directors-icon" src="{{ asset('images/directorTwitter.svg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="com-lg-2">

                        </div>
                    </div>
                    <div class="director-details-div mt-2">
                        <div class="founder-name" style="color: #E8AA42;">
                            Md. Mansoor Ahmad
                        </div>
                        <div class="founder-designation" style="color: white;font-size:17px">
                            Founder and Chairman, Mansoor Ahmad Women's College
                        </div>
                        <div class="directors-qualification">
                            <div class="directors-qualification-top row">
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <div>
                                        <img style="width: 100%"
                                            src="{{ asset('images/director_qualification_image.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-10 director-para" style="color: white;">
                                    Chartered Financial Analyst, Royal Holloway University of London
                                </div>

                            </div>
                            <div class="directors-qualification-bottom row mt-2">
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <div>
                                        <img style="width: 100%"
                                            src="{{ asset('images/director_qualification_image.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-10 director-para" style="color:white;">
                                    Postgraduate Teacher Training Program in Mathematics, Business Management, Cardiff
                                    University
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-2">

                </div>

                <div class="col-lg-5 col-md-8 col-10 board-of-directors-main-div-left margin-top-for-director">
                    <div class="board-of-directors-main-div-left-inner">
                        <div class="directors-img-div row">
                            <div class="col-lg-5 director-image-top-div">
                                <div class="director-div">
                                    <img class="director-main-image"
                                        style="border-radius: 8px;
                          border: 10px solid rgba(0, 0, 0, 0.20);"
                                        src="{{ asset('images/founder.svg') }}" alt="">
                                </div>

                            </div>
                            <div class="col-lg-3 directors-icon-main-div">
                                <div class="directors-icon-div">
                                    <div>
                                        <img class="directors-icon" src="{{ asset('images/directorInsta.svg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img class="directors-icon" src="{{ asset('images/directorFb.svg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img class="directors-icon" src="{{ asset('images/directorTwitter.svg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="com-lg-2">

                            </div>
                        </div>
                        <div class="director-details-div mt-2">
                            <div class="founder-name" style="color: #E8AA42;">
                                Md. Mansoor Ahmad
                            </div>
                            <div class="founder-designation" style="color: white;font-size:17px">
                                Founder and Chairman, Mansoor Ahmad Women's College
                            </div>
                            <div class="directors-qualification">
                                <div class="directors-qualification-top row">
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <div>
                                            <img style="width: 100%"
                                                src="{{ asset('images/director_qualification_image.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 director-para" style="color: white;">
                                        Chartered Financial Analyst, Royal Holloway University of London
                                    </div>

                                </div>
                                <div class="directors-qualification-bottom row mt-2">
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <div>
                                            <img style="width: 100%"
                                                src="{{ asset('images/director_qualification_image.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 director-para" style="color:white;">
                                        Postgraduate Teacher Training Program in Mathematics, Business Management, Cardiff
                                        University
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="board-of-directors-title">
                Teachers
            </div>
            <div class="teachers-div row  g-lg-5 g-3">
                <div class=" col-sm-4 col-6">
                    <div class="teacher-top-div">
                        <div>
                            <img style="width:100%;height:200px" src="{{ asset('images/founder.svg') }}" alt="">
                        </div>
                        <div class="teacher-info-div" style="">
                            <div class="teacher-name">
                                Mohammad Rahman
                            </div>
                            <div class="teacher-department-div">
                                Bangla
                            </div>
                            <div class="teacher-university-name">
                                BRACU
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 col-6">
                    <div class="teacher-top-div">
                        <div>
                            <img style="width:100%;height:200px" src="{{ asset('images/founder.svg') }}" alt="">
                        </div>
                        <div class="teacher-info-div" style="">
                            <div class="teacher-name">
                                Mohammad Rahman
                            </div>
                            <div class="teacher-department-div">
                                Bangla
                            </div>
                            <div class="teacher-university-name">
                                BRACU
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 col-6">
                    <div class="teacher-top-div">
                        <div>
                            <img style="width:100%;height:200px" src="{{ asset('images/founder.svg') }}" alt="">
                        </div>
                        <div class="teacher-info-div" style="">
                            <div class="teacher-name">
                                Mohammad Rahman
                            </div>
                            <div class="teacher-department-div">
                                Bangla
                            </div>
                            <div class="teacher-university-name">
                                BRACU
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-4 col-6">
                    <div class="teacher-top-div">
                        <div>
                            <img style="width:100%;height:200px" src="{{ asset('images/founder.svg') }}" alt="">
                        </div>
                        <div class="teacher-info-div" style="">
                            <div class="teacher-name">
                                Mohammad Rahman
                            </div>
                            <div class="teacher-department-div">
                                Bangla
                            </div>
                            <div class="teacher-university-name">
                                BRACU
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection
