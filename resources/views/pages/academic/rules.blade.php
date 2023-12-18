@extends('layout.app')
@section('main_content')
    <div class="hero-section">
        <div class="container">
            <div class="hero-content-wrapper">

                <div class="hero-content">
                    <div style="height: 3px; width:100%;background:white;margin-top:40px;border-radius:10px"></div>
                    <div class="hero-title my-4">
                        Start your studies by following all the rules
                    </div>
                    <div style="height: 3px; width:100%;background:white;margin-bottom:40px;border-radius:10px"></div>

                </div>

            </div>

        </div>
    </div>
    <div class="college-rules-div">
        <div class="container">
            <div class="college-rules-inner-div row">
                <div class="col-xl-6 col-12 display-flex-align-center">
                    <div class="college-rules-left ">
                        <div class="college-title-top-div display-flex-align-center" style="column-gap: 15px">

                            <div style="height: 1px;background:#302870;margin:15px 0px;width:70px"></div>
                            <div style="color: #302870;display:inline-block">The rules are the rules</div>

                        </div>
                        <div class="college-rules-title">
                            College Rules and Regulations: Guidelines for Student Conduct
                        </div>
                        <div class="college-rules-para">
                            College is not just about academics; It is a place where students learn valuable life skills
                            including proper etiquette and social behavior. By practicing good college etiquette, you will
                            create a positive environment for yourself and those around you. These behaviors contribute to a
                            respectful and traditional college community, enhancing your overall college experience. Create
                            a positive environment for those around you. These behaviors contribute to a respectful and
                            traditional college community, enhancing your overall college experience.
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-12 display-flex-align-center college-rules-right-top">
                    <div class="college-rules-right" style="position: relative">
                        <div class="college-rules-right-img-div college-rules-right-common">
                            <img class="college-rules-right-img" src="{{ asset('images/academic/collegeRulesImage1.svg') }}"
                                alt="">
                        </div>
                        <div class="college-rules-right-img-2-div college-rules-right-common">
                            <img class="college-rules-right-img" src="{{ asset('images/academic/collegeRulesImage2.svg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="resident-rule-div">
        <div class="container">
            <div class="resident-rule-div-inner row justify-content-center">
                <div class="col-xl-5 col-8 display-flex-align-center resident-rule-div-inner-left">
                    <div class="resident-rule-div-left" style="width: 100%;height:100%">
                        <img style="width: 100%;height:100%" src="{{ asset('images/academic/residentRuleImage.svg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-12 display-flex-align-center resident-rule-div-inner-right"
                    style="background: #f1f4ea">
                    <div class="resident-rule-div-left" style="padding: 10px">
                        <div class="college-title-top-div display-flex-align-center" style="column-gap: 15px">

                            <div style="height: 1px;background:#302870;margin:15px 0px;width:70px"></div>
                            <div style="color: #302870;display:inline-block">Rules of Residence</div>

                        </div>
                        <div class="resident-rules-para-div">
                            <span style="display: block">
                                a<span>&#41;</span> No resident student shall bring valuables such as radio, TV, computer,
                                mobile phone, gold rings, expensive watches or cash while coming to the house.
                            </span>
                            <span style="display: block;margin-top:5px">
                                b<span>&#41;</span> Can't bring any colored clothes except those approved by the college.
                                Use of lungi is not allowed, instead sleepwear can be used.
                            </span>
                            <span style="display: block;margin-top:5px">
                                c<span>&#41;</span> Cotton or Tetron clothes should be brought. But silk or similar
                                expensive clothes cannot be brought.
                            </span>
                            <span style="display: block;margin-top:5px">
                                d<span>&#41;</span> The waistband of the pants cannot be inconsistent. The permissible girth
                                for adults is 2'0''. Pants should be straight cut. Fancy designs cannot be used.
                            </span>
                            <span style="display: block;margin-top:5px">
                                e<span>&#41;</span> Half-sleeve or full-sleeve shirts shall be made as specified in the
                                dress list. The shirt will have one chest pocket without a flap.
                            </span>
                            <span style="display: block;margin-top:5px">
                                f<span>&#41;</span> Black color shoes (Oxford shoes) with low heels should be provided to
                                the students.
                            </span>
                            <span style="display: block;margin-top:5px">
                                g<span>&#41;</span> Blue pullover/sweater may be given instead of blazer/coat in winter. But
                                it cannot have colorful artwork.
                            </span>
                            <span style="display: block;margin-top:5px">
                                h<span>&#41;</span> At the beginning of each term, 6 months worth of toilet material should
                                be provided to the students. Students are not allowed to purchase these outside and parents
                                are not allowed to bring them to the college/house except on the appointed date of meeting.
                            </span>
                            <span style="display: block;margin-top:5px">
                                i<span>&#41;</span> Before coming to the house, students should cut their hair short.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clothing-div">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-12 display-flex-align-center order-xl-0 order-1">
                    <div class="clothing-right">
                        <div class="college-title-top-div display-flex-align-center" style="column-gap: 15px">

                            <div style="height: 1px;background:#302870;margin:15px 0px;width:70px"></div>
                            <div style="color: #302870;display:inline-block">Clothing list</div>

                        </div>
                        <div class="clothing-para-div">
                            <span style="display: block">
                                a<span>&#41;</span> Summer clothes:
                            </span>
                            <span style="display: block;margin-top:5px">
                                (1) White half shirt: 6 pcs
                            </span>
                            <span style="display: block;margin-top:5px">
                                (2) Navy Blue Half Pants: 6 (3 for Class 6 and above students)
                            </span>
                            <span style="display: block;margin-top:5px">
                                (3) Half Sleeve White Genji without Collar: 4 pcs
                            </span>
                            <span style="display: block;margin-top:5px">
                                (4) White full sleeve shirts: 6 pcs
                            </span>
                            <span style="display: block;margin-top:5px">
                                (5) White flower pants: 4
                            </span>
                            <span style="display: block;margin-top:5px">
                                (6) Sleeping Suit (of any colour) : 3 nos
                            </span>
                            <span style="display: block;margin-top:5px">
                                (7) White Sando Genji : 6
                            </span>
                            <span style="display: block;margin-top:5px">
                                (8) White Handkerchief : 2 pcs
                            </span>
                            <span style="display: block;margin-top:5px">
                                (9) Face towel : 2 pcs
                            </span>
                            <span style="display: block;margin-top:5px">
                                (10) White canvas shoes (one new pair per episode) : 1 pair
                            </span>
                            <span style="display: block;margin-top:5px">
                                (11) Black shoes (Oxford) : 1 pair
                            </span>
                            <span style="display: block;margin-top:5px">
                                (12) Bath towels: 2
                            </span>
                            <span style="display: block;margin-top:5px">
                                (13) White socks : 6 pairs
                            </span>
                        </div>
                    </div>

                </div>
                <div class="col-xl-7 col-8 display-flex-align-center order-xl-1 order-0 clothing-left-img-div">
                    <div class="clothing-left-img" style="width: 100%;height:100%">

                        <img style="width: 100%;height:100%" src="{{ asset('images/academic/clothingImage.svg') }}"
                            alt="">

                    </div>
                </div>
            </div>
            <div class="instruction-div" style="margin-top: 20px">
                <div class="college-title-top-div display-flex-align-center" style="column-gap: 15px">

                    <div style="height: 1px;background:#302870;margin:15px 0px;width:70px"></div>
                    <div style="color: #302870;display:inline-block">Necessary instructions</div>

                </div>
                <div style="margin-top: 10px">
                    Short name and college number should be printed on the uniform of residential students. College authorities will not be responsible for loss of such unmarked clothing. Parents should prepare triplicate list of clothing of their son/guardian. Parents will keep one copy with themselves and submit two copies to the college authorities. A student will not be admitted to the house if he/she brings less than the prescribed dress code. If a student is sent home for lack of clothing, the parent will be held responsible. No clothing outside the prescribed list shall be issued to the students.
                </div>

            </div>


        </div>


    </div>
    <div class="home-footer-div">
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
