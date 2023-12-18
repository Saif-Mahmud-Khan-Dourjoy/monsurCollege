@extends('layout.app')
@section('main_content')
    <div class="single_notice">
        <div class="container">
            <div class="single_notice_top_div" style="background: #1B1B1B;">
                <div class="single-notice-title" style="color: #AF8F3F">
                    Department of Science
                </div>
                <div class="notice-divider-timing-div">
                    <div class="single-notice-divider-div" style="margin:10px 0px">
                        <div class="single-notice-divider">

                        </div>
                    </div>
                    <div class="department-title">
                        Our college's science department offers a stimulating learning environment combining cutting-edge
                        research, a multidisciplinary approach, student-centered learning, collaborative opportunities, and
                        a supportive faculty. These aspects provide students with a rich educational experience and equip
                        them with the necessary skills and knowledge to excel in scientific fields.


                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <div class="see-more-div">
                        <span>Admission &nbsp; <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                    </div>
                </div>

            </div>
            <div class="dep-2nd-div row justify-content-center g-2 common-dep-pad"
                style="border-radius: 60px 0px;
                background: #BF83FF;margin-top:30px">
                <div class="dep-2nd-left col-lg-8 col-sm-10 col-12 order-lg-0 order-1 my-auto">
                    <div class="common-dep-header">
                        State-of-the-art research
                    </div>
                    <div class="common-dep-para ">
                        Our college's science department is at the forefront of scientific exploration, consistently pushing
                        the frontiers of knowledge through groundbreaking research. With dedicated faculty members and
                        state-of-the-art facilities, students have the opportunity to engage in cutting-edge research
                        projects, contributing to advancements in various scientific disciplines.
                    </div>
                </div>
                <div class="dep-2nd-right col-lg-4 col-sm-10 col-12 order-lg-1 order-0">
                    <div class="" style="display: flex;justify-content:center">
                        <img src="{{ asset('images/gallery1.png') }}" style="height: 200px; width:auto" alt="">
                    </div>

                </div>
            </div>
            <div class="dep-3rd-div row justify-content-center g-2 common-dep-pad"
                style="border-radius: 0px 60px;
            background: #FF8282;margin-top:30px">
                <div class="dep-3rd-right col-lg-4 col-sm-10 col-12 ">
                    <div class="" style="display: flex;justify-content:center">
                        <img src="{{ asset('images/gallery1.png') }}" style="height: 200px; width:auto" alt="">
                    </div>

                </div>
                <div class="dep-3rd-left col-lg-8 col-sm-10 col-12  my-auto">
                    <div class="common-dep-header">
                        Shown from different angles
                    </div>
                    <div class="common-dep-para ">
                        Our college's science department adopts a multidisciplinary approach, which encourages students to
                        explore connections between different scientific fields. By integrating knowledge from different
                        disciplines, students gain a broad understanding of complex scientific phenomena and develop
                        multifaceted problem-solving skills that are essential for addressing real-world challenges.
                    </div>
                </div>

            </div>
            <div class="dep-4th-div" style="margin-top: 30px">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12 display-flex-align-center order-lg-0 order-1">
                        <div class="clothing-right">
                            <div class="college-title-top-div display-flex-align-center" style="column-gap: 15px">

                                <div style="height: 1px;background:#302870;margin:15px 0px;width:70px"></div>
                                <div style="color: #302870;display:inline-block;font-weight:bold">Library</div>

                            </div>
                            <div class="clothing-para-div">
                                Our mission is to acquire and impart knowledge through cutting edge research, productive
                                teaching, intensive training, extensive collaboration and engaging dialogues in a highly
                                motivated environment through the adoption of innovative approaches for intellectual
                                enlightenment of the stakeholders of the University including the nation and the global
                                community. of the University including the nation and the global community. the global
                                community. of the University including the nation and the global community.
                            </div>
                        </div>

                    </div>
                    <div
                        class="col-lg-6 col-sm-10 col-12 order-lg-1 order-0 clothing-left-img-div row gx-2 justify-content-center">

                        <div class="clothing-left-img col-sm-6 col-5">

                            <img class="dep-4th-div-img" style="height:100%" src="{{ asset('images/gallery1.png') }}"
                                alt="">

                        </div>
                        <div class="clothing-left-img col-sm-6 col-5" style="">

                            <img class="dep-4th-div-img" style="height:100%" src="{{ asset('images/gallery1.png') }}"
                                alt="">

                        </div>
                    </div>
                </div>
            </div>

            <div class="dep-5th-div row justify-content-center g-2 common-dep-pad"
                style="border-radius: 60px 0px;
                    background: #1EBFC1;;margin-top:30px">
                <div class="dep-5th-right col-lg-4 col-sm-10 col-12 ">
                    <div class="" style="display: flex;justify-content:center">
                        <img src="{{ asset('images/gallery1.png') }}" style="height: 200px; width:auto" alt="">
                    </div>

                </div>
                <div class="dep-5th-left col-lg-8 col-sm-10 col-12  my-auto">
                    <div class="common-dep-header">
                        Learner-centered learning
                    </div>
                    <div class="common-dep-para ">
                        The Science Department prioritizes student-centered learning, creating an environment that nurtures
                        curiosity and encourages active participation. Through hands-on laboratory experiments, fieldwork
                        and interactive classroom sessions, students have the opportunity to apply theoretical knowledge to
                        practical situations, enhancing their critical thinking and analytical skills.
                    </div>
                </div>

            </div>

            <div class="dep-6th-div row justify-content-center g-2 common-dep-pad"
                style="border-radius: 0px 60px;
                background: #FFC147;margin-top:30px">
                <div class="dep-6th-left col-lg-8 col-sm-10 col-12 order-lg-0 order-1 my-auto">
                    <div class="common-dep-header">
                        Cooperative Education System
                    </div>
                    <div class="common-dep-para ">
                        Our college's science department is at the forefront of scientific exploration, consistently pushing the frontiers of knowledge through groundbreaking research. With dedicated faculty members and state-of-the-art facilities, students have the opportunity to engage in cutting-edge research projects, contributing to advancements in various scientific disciplines.
                    </div>
                </div>
                <div class="dep-6th-right col-lg-4 col-sm-10 col-12 order-lg-1 order-0">
                    <div class="" style="display: flex;justify-content:center">
                        <img src="{{ asset('images/gallery1.png') }}" style="height: 200px; width:auto" alt="">
                    </div>

                </div>
            </div>

            <div class="dep-7th-div" style="margin-top:30px">
                <div class="college-title-top-div display-flex-align-center" style="column-gap: 15px">
    
                    <div style="height: 1px;background:#025464;;margin:15px 0px;width:70px"></div>
                    <div style="color:#025464;display:inline-block;font-weight:bold">Admission</div>
    
                </div>
                <div class="dep-admission-header">
                    Science Admission Notice
                </div>
                <div class="dep-admission-img row justify-content-center" style="margin-top: 15px">
                    <div class="col-md-8 col-sm-10 col-11">
                        <img src="{{asset('images/academic/admission.png')}}" style="height:100%;width:100%" alt="">
                    </div>
                   
                </div>
            </div>
        </div>

        
        <div class="home-footer-div" style="margin-top:30px">
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
