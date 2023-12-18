@extends('layout.app')
@section('main_content')
    <div class="hero-section">
        <div class="container">
            <div class="hero-content-wrapper">

                <div class="hero-content">
                    <div style="height: 3px; width:100%;background:white;margin-top:40px;border-radius:10px"></div>
                    <div class="hero-title my-4">
                        Take admission today and move towards your desired goal
                    </div>
                    <div style="height: 3px; width:100%;background:white;margin-bottom:40px;border-radius:10px"></div>

                </div>

            </div>

        </div>
    </div>
    <div class="admission-content">
        <div class="container">
            <div class="application-procedure-div application-common">
                <div class="appication-procedure-top application-top-common">
                    Application Procedure
                </div>
                <div class=" application-procedure-hr-top-div-common ">
                    <div class="application-procedure-hr-div application-procedure-hr-div-common">
                         
                    </div>
                </div>
                <div class="appication-procedure-bottom-top-common ">
                    <div class="application-procedure-bottom application-bottom-common">
                        We accept applications and admit new students throughout the year. The academic year starts in August and ends in June. Check the school calendar for all important dates.
                    </div>
                </div>
                
            </div>
            
            <div class="fill-application-div all-common-top-for-application" style="margin-top: 30px">
                <div class="fill-application-div-top all-common-for-application-title">
                    1. Fill out an online application
                </div>
                <div class="fill-application-div-bottom all-common-for-application-para" >
                    <span>Required Documents:</span>
                    <span>Proof of identification (birth certificate or passport) for the applicant.</span>
                    <span>Proof of identification (passport or national identity card) for both parents.</span>
                    <span>Applicant's school report of last 2 years (including knock results of grade 11).</span>
                    <span>For students applying for grades 10, 11, or 12 in ISD, official transcript from previous school(s).</span>
                    <span>Applicant's vaccination record.</span>
                </div>
            </div>

            <div class="pay-application-div all-common-top-for-application" style="margin-top: 30px">
                <div class="pay-application-div-top  all-common-for-application-title">
                    2. Pay the application fee
                </div>
                <div class="pay-application-div-bottom application-procedure-common-rules all-common-for-application-para" >
                    <span style="display: block">Payments are accepted:</span>
                    <span> Dutch Bangla Bank (Gulshan, Banani or Bashundhara Branch) Account Number 116 120 400,SWIFT Code DBBLBDDH116.</span>
                    <span>Commercial Bank of Ceylon (All Locations) Account Number 180 400 7739, SWIFT Code CCEYBDDH, Branch Code 804.</span> 
                </div>
                <div class="application-last-span-common" style="margin-top: 20px">
                    <span style="display:block">For Bangladeshi national students, payment is to be made in Bangladeshi Taka (BDT) at the bank rate quoted on the day. For overseas students, payment is to be made in US Dollars (USD).</span>
                </div>
                
            </div>

            <div class="evaluation-application-div all-common-top-for-application" style="margin-top: 30px">
                <div class="evaluation-application-div-top all-common-for-application-title">
                    3. Evaluation schedule
                </div>
                <div class="evaluation-application-div-bottom application-last-span-common  all-common-for-application-para" >
                    <span>Depending on the applicant's prior experience and grade level, the Admissions Office will contact parents to schedule one or two days of standardized academic testing and/or student classroom observation for the applicant.</span>
                </div>
            </div>

            <div class="meet-principle-application-div all-common-top-for-application" style="margin-top: 30px">
                <div class="meet-principle-application-div-top all-common-for-application-title">
                    4. Meet the school principal
                </div>
                <div class="meet-principle-application-div-bottom application-last-span-common all-common-for-application-para" >
                    <span>Parents, applicants, and principals discuss academic goals and options available in the ISD.</span>
                </div>
            </div>
            <div class="delighted-div application-common" style="margin: 30px 0px 0px 0px">
                <div class="appication-procedure-top application-top-common">
                    We are delighted to have you visit our school
                </div>
                <div class=" application-procedure-hr-top-div-common ">
                    <div class="delighted-hr-div application-procedure-hr-div-common">
                         
                    </div>
                </div>
                <div class="appication-procedure-bottom-top-common ">
                    <div class="delighted-bottom application-bottom-common">
                        Please fill in the information below and choose a date and time that works for you. Please wait until you receive a confirmation email that your visit has been scheduled before coming to school.
                    </div>
                </div>
                
            </div>
            <div class="application-image-div" style="margin-top: 30px">
                <img src="{{asset('images/applicationImage.svg')}}" style="height: 100%;width: 100%" alt="">
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