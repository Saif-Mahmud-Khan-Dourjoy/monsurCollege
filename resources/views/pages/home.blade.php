@extends('layout.app')
@section('main_content')
    <div class="hero-section">
        <div class="container">
            <div class="hero-content-wrapper">

                <div class="hero-content">
                    <div style="height: 3px; width:100%;background:white;margin-top:15px;border-radius:10px"></div>
                    <div class="hero-title">
                        Let’s have your best experience of campus life with us
                    </div>
                    <div style="height: 3px; width:100%;background:white;margin-top:15px;border-radius:10px"></div>
                    <div class="hero-para">
                        Our college in Bangladesh is a leading institution of higher education, providing students with all
                        the
                        knowledge, skills and experience to enable them to penetrate life in today's changing world. Located
                        in
                        a prime location, our college has a supportive history education that continues to develop and
                        advance.
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="text-center slider-section">

        <div class="row mx-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="container">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">

                            <div class=" col-sm-4 col-6 d-flex justify-content-center">
                                <div class="">
                                    <div class="card-img slider-caption">
                                        <div>
                                            <img style="height: 60px;width:60px" src="{{ asset('images/award.svg') }}"
                                                class="">
                                        </div>
                                        <div class="slider-caption-para">
                                            Best Innovative Project Award
                                            2022
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" col-sm-4 col-6 d-flex justify-content-center">
                                <div class="">
                                    <div class="card-img slider-caption">
                                        <div>
                                            <img style="height: 60px;width:60px" src="{{ asset('images/award.svg') }}"
                                                class="">
                                        </div>
                                        <div class="slider-caption-para">
                                            Social Program Award, Bangladesh
                                            2022
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" col-sm-4 col-6 d-flex justify-content-center">
                                <div class="">
                                    <div class="card-img slider-caption">
                                        <div>
                                            <img style="height: 60px;width:60px" src="{{ asset('images/award.svg') }}"
                                                class="">
                                        </div>
                                        <div class="slider-caption-para">
                                            Best University Architecture Award, Bangladesh
                                            2021
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" col-sm-4 col-6 d-flex justify-content-center">
                                <div class="">
                                    <div class="card-img slider-caption">
                                        <div>
                                            <img style="height: 60px;width:60px" src="{{ asset('images/award.svg') }}"
                                                class="">
                                        </div>
                                        <div class="slider-caption-para">
                                            Best Innovative Project Award
                                            2022
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class=" col-sm-4 col-6 d-flex justify-content-center">
                                <div class="">
                                    <div class="card-img slider-caption">
                                        <div>
                                            <img style="height: 60px;width:60px" src="{{ asset('images/award.svg') }}"
                                                class="">
                                        </div>
                                        <div class="slider-caption-para">
                                            Best Innovative Project Award
                                            2022
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>


    </div>
    <div class="help-div ">
        <div class="help-inner-div container">
            <div style="display: flex; justify-content:center">
                <div class="help-tile-div">
                    We help college girls to develop as responsible citizens of the world.
                </div>
            </div>
            <div style="display: flex; justify-content:center">
                <div class="help-devider" style="height: 2px;background:#AF8F3F;margin:15px 0px;border-radius:10px"></div>
            </div>

            <div class="help-para-div">
                Our college in Bangladesh is a leading institution of higher education, providing students with all the
                knowledge, skills and experience to enable them to penetrate life in today's changing world. Located in a
                prime location, our college has a supportive history education that continues to develop and advance.
            </div>
        </div>
    </div>
    <div class="subject-div">
        <div class="container">
            <div class="subject-inner-div row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="subject-title-div">
                        <div class="subject-title-top-div">
                            <div style="height: 1px;background:#AF8F3F;margin:15px 0px;width:70px"></div>
                            <div style="color: white;display:inline-block">Our Subjects</div>
                        </div>
                        <div class="subject-title-middle-div">
                            Our HSC program are organized with the best subjects in the world
                        </div>
                        <div class="subject-title-end-div">
                            <div class="see-more-div">
                                <span>See More &nbsp; <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="science-div common-grp-div row">
                        <div class="col-8">
                            <div class="group-title">Science</div>
                            <div class="group-sub">Mathematics</div>
                            <div class="group-sub">Physics</div>
                            <div class="group-sub">Chemistry</div>
                            <div class="group-sub">Statistics</div>
                            <div class="group-sub">Botany</div>
                            <div class="group-sub">Zoology</div>
                            <div class="group-sub">Computer Science</div>
                        </div>
                        <div class="col-3">
                            <img style="height: 50px" src="{{ asset('images/science.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="humanity-div common-grp-div row">
                        <div class="col-8">
                            <div class="group-title">Humanities</div>
                            <div class="group-sub">Mathematics</div>
                            <div class="group-sub">Physics</div>
                            <div class="group-sub">Chemistry</div>
                            <div class="group-sub">Statistics</div>
                            <div class="group-sub">Botany</div>
                            <div class="group-sub">Zoology</div>
                            <div class="group-sub">Computer Science</div>
                        </div>
                        <div class="col-3">
                            <img style="height: 50px" src="{{ asset('images/humanity.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="commerce-div common-grp-div row">
                        <div class="col-8">
                            <div class="group-title">Commerce</div>
                            <div class="group-sub">Mathematics</div>
                            <div class="group-sub">Physics</div>
                            <div class="group-sub">Chemistry</div>
                            <div class="group-sub">Statistics</div>
                            <div class="group-sub">Botany</div>
                            <div class="group-sub">Zoology</div>
                            <div class="group-sub">Computer Science</div>
                        </div>
                        <div class="col-3">
                            <img style="height: 50px" src="{{ asset('images/commerce.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="board-div">
        <div class="container">
            <div class="board-inner-div row gy-5">
                <div class="board-title-div col-lg-6 col-12">
                    <div class="subject-title-top-div">
                        <div style="height: 1px;background:#2C2C2C;margin:15px 0px;width:70px"></div>
                        <div style="color: #242424;display:inline-block">Board of Directors</div>
                    </div>
                    <div class="board-title-middle-div">
                        Our Honorable Board of Directors
                    </div>
                    <div class="subject-title-end-div">
                        <div class="see-more-div">
                            <span>See everyone &nbsp; <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </div>
                    </div>
                </div>
                <div class=" common-board-div1 col-lg-6 col-12">
                    <div>
                        <img class="common-board-div1-img" style="border:5px solid #ecb776;"
                            src="{{ asset('images/director.png') }}" alt="">
                    </div>
                    <div>

                        <div style="padding: 10px 10px;background:#14213d;height:fit-content">
                            <div class="common-board-div1-top" style="">
                                Md. Mansoor Ahmad</div>
                            <div class="common-board-div1-bottom" style="">
                                Chairman</div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top:40px;" class="row ">
                <div class=" common-board-div col-md-4 col-6 ">
                    <div>
                        <img class=" common-board-div-img" style="border:5px solid #ecb776"
                            src="{{ asset('images/director.png') }}" alt="">
                    </div>
                    <div>

                        <div class="image-caption-div" style="background:#14213d;height:fit-content">
                            <div class="common-board-div-top" style="">
                                Md. Mansoor Ahmad</div>
                            <div class="common-board-div-bottom" style="">
                                Vice Chairman</div>
                        </div>
                    </div>
                </div>

                <div class=" common-board-div col-md-4 col-6 ">
                    <div>
                        <img class=" common-board-div-img" style="border:5px solid #ecb776"
                            src="{{ asset('images/director.png') }}" alt="">
                    </div>
                    <div>

                        <div class="image-caption-div" style="background:#14213d;height:fit-content">
                            <div class="common-board-div-top" style="">
                                Md. Mansoor Ahmad</div>
                            <div class="common-board-div-bottom" style="">
                                Principal</div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none d-sm-block col-3">

                </div>
                <div class=" common-board-div col-md-4 col-6 ">
                    <div>
                        <img class=" common-board-div-img" style="border:5px solid #ecb776"
                            src="{{ asset('images/director.png') }}" alt="">
                    </div>
                    <div>

                        <div class="image-caption-div" style="background:#14213d;height:fit-content">
                            <div class="common-board-div-top" style="">
                                Md. Mansoor Ahmad</div>
                            <div class="common-board-div-bottom" style="">
                                Chairman</div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none d-sm-block col-3">

                </div>
            </div>
        </div>

    </div>

    <div class="home-experience-div">
        <div class="container">
            <div class="home-experience-div-pad" style="padding: 0px 20px">
                <div class=" row g-2">
                    <div class="col-6 col-lg-3 home-common-experience ">
                        <div style="display: flex;align-items:center;justify-content:center;column-gap:10px">
                            <div class="experience-number-div">
                                99%
                            </div>
                            <div class="experience-title-div">
                                Of success
                                experience
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 home-common-experience">
                        <div style="display: flex;align-items:center;justify-content:center;column-gap:10px">
                            <div class="experience-number-div">
                                70+
                            </div>
                            <div class="experience-title-div">
                                Experienced
                                teachers
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 home-common-experience">
                        <div style="display: flex;align-items:center;justify-content:center;column-gap:10px">
                            <div class="experience-number-div">
                                600+
                            </div>
                            <div class="experience-title-div">
                                University
                                Studying student
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 home-common-experience">
                        <div style="display: flex;align-items:center;justify-content:center;column-gap:10px">
                            <div class="experience-number-div">
                                02
                            </div>
                            <div class="experience-title-div">
                                Years of
                                experience
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class="home-gallery-section">
        <div class="container">
            <div class="subject-title-top-div">
                <div style="height: 1px;background:#ecb776;margin:15px 0px;width:70px"></div>
                <div style="color: #ecb776;display:inline-block">PHOTO GALLERY</div>
            </div>
            <div class="home-gallery-title-div">
                <div class="home-gallery-title-left">
                    Some snapshots of college
                </div>
                <div class="see-more-div">
                    <span>See More &nbsp; <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </div>
            </div>
            <div class="home-main-photo-gallery-div row">
                <div class="home-main-photo-gallery-left col-md-6">
                    <div class="home-main-photo-gallery-right-common">
                        <img style="height: 100%;width:100%" src="{{ asset('images/gallery1.png') }}" alt="">
                    </div>
                </div>
                <div class="home-main-photo-gallery-right col-md-6">
                    <div class="home-main-photo-gallery-right-common">
                        <div>
                            <img style="height: 100%;width:100%" src="{{ asset('images/gallery2.png') }}"
                                alt="">
                        </div>
                        <div>
                            <img style="height: 100%;width:100%" src="{{ asset('images/gallery3.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="home-main-photo-gallery-right-common">
                        <div>
                            <img style="height: 100%;width:100%" src="{{ asset('images/gallery4.png') }}"
                                alt="">
                        </div>
                        <div>
                            <img style="height: 100%;width:100%" src="{{ asset('images/gallery5.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-footer-div">
        <div class="container">
            <div class="long-footer" style="margin-bottom: 100px">
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
