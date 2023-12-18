<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academic/calender.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academic/result.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academic/rules.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academic/rules_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academic/department.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admission_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/directors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/directors_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact_us.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notice.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Monsur College</title>
    <style>
        * {
            font-family: Hind Siliguri;
            padding: 0px;
            margin: 0px;
            box-sizing: border-box
        }
    </style>
</head>

<body>

    @php

        use Carbon\Carbon;

    @endphp
    <div class="main-notice-popup-div">
        <div class="popup-overlay-notice-div">

        </div>
        <div class="notice-div">
            <div class="notice-cross-icon-div">
                <i class="fa-regular fa-circle-xmark" onclick="closeNotice()" style="color: red;cursor:pointer"></i>
            </div>
            <div class="popup-notice-div">
                <div class="tab-top-div">
                    <div class="tab-div">
                        <div data-tab-target="#academic_tab" class="active-tab">
                            Academic
                        </div>
                        <div data-tab-target="#exam_tab">
                            Exam/Result
                        </div>
                        <div data-tab-target="#administration_tab">
                            Administration
                        </div>
                    </div>
                </div>

                <div class="tab-content-div">
                    <div id="academic_tab" data-tab-content class="active-content">
                        <div>

                            <a href="{{ route('single.notice') }}" style="text-decoration: none">
                                <div>
                                    <div class="notice-title-div">
                                        Facebook line in SSC exam hall , 2 students expelled
                                    </div>
                                    <div class="notice-para-div">
                                        The authorities have expelled 2 candidates for allegedly doing Facebook live on
                                        mobile
                                        phone in the SSC examination room in Sreepur, Gazipur...
                                    </div>
                                    <div class="notice-time-div">
                                        <div class="notice-time-left-div">
                                            @php
                                                $dateTimeString = '2023-08-30 12:18:53';

                                                $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);

                                                $formattedTime = $dateTime->format('h:i A');
                                            @endphp
                                            {{ $formattedTime }}
                                        </div>
                                        <div class="notice-time-right-div">
                                            @php
                                                $formattedDate = $dateTime->format('F d, Y');
                                            @endphp
                                            {{ $formattedDate }}
                                        </div>

                                    </div>
                                </div>
                            </a>



                        </div>
                        <div>

                            <a href="{{ route('single.notice') }}" style="text-decoration: none">
                                <div>
                                    <div class="notice-title-div">
                                        Facebook line in SSC exam hall , 2 students expelled
                                    </div>
                                    <div class="notice-para-div">
                                        The authorities have expelled 2 candidates for allegedly doing Facebook live on
                                        mobile
                                        phone in the SSC examination room in Sreepur, Gazipur...
                                    </div>
                                    <div class="notice-time-div">
                                        <div class="notice-time-left-div">
                                            @php
                                                $dateTimeString = '2023-08-30 12:18:53';

                                                $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);

                                                $formattedTime = $dateTime->format('h:i A');
                                            @endphp
                                            {{ $formattedTime }}
                                        </div>
                                        <div class="notice-time-right-div">
                                            @php
                                                $formattedDate = $dateTime->format('F d, Y');
                                            @endphp
                                            {{ $formattedDate }}
                                        </div>

                                    </div>
                                </div>
                            </a>



                        </div>
                        <div>

                            <a href="{{ route('single.notice') }}" style="text-decoration: none">
                                <div>
                                    <div class="notice-title-div">
                                        Facebook line in SSC exam hall , 2 students expelled
                                    </div>
                                    <div class="notice-para-div">
                                        The authorities have expelled 2 candidates for allegedly doing Facebook live on
                                        mobile
                                        phone in the SSC examination room in Sreepur, Gazipur...
                                    </div>
                                    <div class="notice-time-div">
                                        <div class="notice-time-left-div">
                                            @php
                                                $dateTimeString = '2023-08-30 12:18:53';

                                                $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);

                                                $formattedTime = $dateTime->format('h:i A');
                                            @endphp
                                            {{ $formattedTime }}
                                        </div>
                                        <div class="notice-time-right-div">
                                            @php
                                                $formattedDate = $dateTime->format('F d, Y');
                                            @endphp
                                            {{ $formattedDate }}
                                        </div>

                                    </div>
                                </div>
                            </a>



                        </div>
                        <div>

                            <a href="{{ route('single.notice') }}" style="text-decoration: none">
                                <div>
                                    <div class="notice-title-div">
                                        Facebook line in SSC exam hall , 2 students expelled
                                    </div>
                                    <div class="notice-para-div">
                                        The authorities have expelled 2 candidates for allegedly doing Facebook live on
                                        mobile
                                        phone in the SSC examination room in Sreepur, Gazipur...
                                    </div>
                                    <div class="notice-time-div">
                                        <div class="notice-time-left-div">
                                            @php
                                                $dateTimeString = '2023-08-30 12:18:53';

                                                $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);

                                                $formattedTime = $dateTime->format('h:i A');
                                            @endphp
                                            {{ $formattedTime }}
                                        </div>
                                        <div class="notice-time-right-div">
                                            @php
                                                $formattedDate = $dateTime->format('F d, Y');
                                            @endphp
                                            {{ $formattedDate }}
                                        </div>

                                    </div>
                                </div>
                            </a>



                        </div>
                        <div>

                            <a href="{{ route('single.notice') }}" style="text-decoration: none">
                                <div>
                                    <div class="notice-title-div">
                                        Facebook line in SSC exam hall , 2 students expelled
                                    </div>
                                    <div class="notice-para-div">
                                        The authorities have expelled 2 candidates for allegedly doing Facebook live on
                                        mobile
                                        phone in the SSC examination room in Sreepur, Gazipur...
                                    </div>
                                    <div class="notice-time-div">
                                        <div class="notice-time-left-div">
                                            @php
                                                $dateTimeString = '2023-08-30 12:18:53';

                                                $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);

                                                $formattedTime = $dateTime->format('h:i A');
                                            @endphp
                                            {{ $formattedTime }}
                                        </div>
                                        <div class="notice-time-right-div">
                                            @php
                                                $formattedDate = $dateTime->format('F d, Y');
                                            @endphp
                                            {{ $formattedDate }}
                                        </div>

                                    </div>
                                </div>
                            </a>



                        </div>
                    </div>
                    <div id="exam_tab" data-tab-content>
                        <div>

                            <a href="{{ route('single.notice') }}" style="text-decoration: none">
                                <div>
                                    <div class="notice-title-div">
                                        Facebook line in SSC exam hall , 2 students expelled
                                    </div>
                                    <div class="notice-para-div">
                                        The authorities have expelled 2 candidates for allegedly doing Facebook live on
                                        mobile
                                        phone in the SSC examination room in Sreepur, Gazipur...
                                    </div>
                                    <div class="notice-time-div">
                                        <div class="notice-time-left-div">
                                            @php
                                                $dateTimeString = '2023-08-30 12:18:53';

                                                $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);

                                                $formattedTime = $dateTime->format('h:i A');
                                            @endphp
                                            {{ $formattedTime }}
                                        </div>
                                        <div class="notice-time-right-div">
                                            @php
                                                $formattedDate = $dateTime->format('F d, Y');
                                            @endphp
                                            {{ $formattedDate }}
                                        </div>

                                    </div>
                                </div>
                            </a>



                        </div>
                    </div>
                    <div id="administration_tab" data-tab-content>
                        <div>

                            <a href="{{route('single.notice')}}" style="text-decoration: none">
                              <div>
                                  <div class="notice-title-div">
                                      Facebook line in SSC exam hall , 2 students expelled
                                  </div>
                                  <div class="notice-para-div">
                                      The authorities have expelled 2 candidates for allegedly doing Facebook live on mobile
                                      phone in the SSC examination room in Sreepur, Gazipur...
                                  </div>
                                  <div class="notice-time-div">
                                      <div class="notice-time-left-div">
                                          @php
                                              $dateTimeString = '2023-08-30 12:18:53';
      
                                              $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
      
                                              $formattedTime = $dateTime->format('h:i A');
                                          @endphp
                                          {{ $formattedTime }}
                                      </div>
                                      <div class="notice-time-right-div">
                                          @php
                                              $formattedDate = $dateTime->format('F d, Y');
                                          @endphp
                                          {{ $formattedDate }}
                                      </div>
      
                                  </div>
                              </div>
                            </a>
                             
  
                              
                          </div>
                          <div>

                            <a href="{{route('single.notice')}}" style="text-decoration: none">
                              <div>
                                  <div class="notice-title-div">
                                      Facebook line in SSC exam hall , 2 students expelled
                                  </div>
                                  <div class="notice-para-div">
                                      The authorities have expelled 2 candidates for allegedly doing Facebook live on mobile
                                      phone in the SSC examination room in Sreepur, Gazipur...
                                  </div>
                                  <div class="notice-time-div">
                                      <div class="notice-time-left-div">
                                          @php
                                              $dateTimeString = '2023-08-30 12:18:53';
      
                                              $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
      
                                              $formattedTime = $dateTime->format('h:i A');
                                          @endphp
                                          {{ $formattedTime }}
                                      </div>
                                      <div class="notice-time-right-div">
                                          @php
                                              $formattedDate = $dateTime->format('F d, Y');
                                          @endphp
                                          {{ $formattedDate }}
                                      </div>
      
                                  </div>
                              </div>
                            </a>
                             
  
                              
                          </div>
                          <div>

                            <a href="{{route('single.notice')}}" style="text-decoration: none">
                              <div>
                                  <div class="notice-title-div">
                                      Facebook line in SSC exam hall , 2 students expelled
                                  </div>
                                  <div class="notice-para-div">
                                      The authorities have expelled 2 candidates for allegedly doing Facebook live on mobile
                                      phone in the SSC examination room in Sreepur, Gazipur...
                                  </div>
                                  <div class="notice-time-div">
                                      <div class="notice-time-left-div">
                                          @php
                                              $dateTimeString = '2023-08-30 12:18:53';
      
                                              $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
      
                                              $formattedTime = $dateTime->format('h:i A');
                                          @endphp
                                          {{ $formattedTime }}
                                      </div>
                                      <div class="notice-time-right-div">
                                          @php
                                              $formattedDate = $dateTime->format('F d, Y');
                                          @endphp
                                          {{ $formattedDate }}
                                      </div>
      
                                  </div>
                              </div>
                            </a>
                             
  
                              
                          </div>
                          <div>

                            <a href="{{route('single.notice')}}" style="text-decoration: none">
                              <div>
                                  <div class="notice-title-div">
                                      Facebook line in SSC exam hall , 2 students expelled
                                  </div>
                                  <div class="notice-para-div">
                                      The authorities have expelled 2 candidates for allegedly doing Facebook live on mobile
                                      phone in the SSC examination room in Sreepur, Gazipur...
                                  </div>
                                  <div class="notice-time-div">
                                      <div class="notice-time-left-div">
                                          @php
                                              $dateTimeString = '2023-08-30 12:18:53';
      
                                              $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
      
                                              $formattedTime = $dateTime->format('h:i A');
                                          @endphp
                                          {{ $formattedTime }}
                                      </div>
                                      <div class="notice-time-right-div">
                                          @php
                                              $formattedDate = $dateTime->format('F d, Y');
                                          @endphp
                                          {{ $formattedDate }}
                                      </div>
      
                                  </div>
                              </div>
                            </a>
                             
  
                              
                          </div>
                          <div>

                            <a href="{{route('single.notice')}}" style="text-decoration: none">
                              <div>
                                  <div class="notice-title-div">
                                      Facebook line in SSC exam hall , 2 students expelled
                                  </div>
                                  <div class="notice-para-div">
                                      The authorities have expelled 2 candidates for allegedly doing Facebook live on mobile
                                      phone in the SSC examination room in Sreepur, Gazipur...
                                  </div>
                                  <div class="notice-time-div">
                                      <div class="notice-time-left-div">
                                          @php
                                              $dateTimeString = '2023-08-30 12:18:53';
      
                                              $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
      
                                              $formattedTime = $dateTime->format('h:i A');
                                          @endphp
                                          {{ $formattedTime }}
                                      </div>
                                      <div class="notice-time-right-div">
                                          @php
                                              $formattedDate = $dateTime->format('F d, Y');
                                          @endphp
                                          {{ $formattedDate }}
                                      </div>
      
                                  </div>
                              </div>
                            </a>
                             
  
                              
                          </div>
                          <div>

                            <a href="{{route('single.notice')}}" style="text-decoration: none">
                              <div>
                                  <div class="notice-title-div">
                                      Facebook line in SSC exam hall , 2 students expelled
                                  </div>
                                  <div class="notice-para-div">
                                      The authorities have expelled 2 candidates for allegedly doing Facebook live on mobile
                                      phone in the SSC examination room in Sreepur, Gazipur...
                                  </div>
                                  <div class="notice-time-div">
                                      <div class="notice-time-left-div">
                                          @php
                                              $dateTimeString = '2023-08-30 12:18:53';
      
                                              $dateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString);
      
                                              $formattedTime = $dateTime->format('h:i A');
                                          @endphp
                                          {{ $formattedTime }}
                                      </div>
                                      <div class="notice-time-right-div">
                                          @php
                                              $formattedDate = $dateTime->format('F d, Y');
                                          @endphp
                                          {{ $formattedDate }}
                                      </div>
      
                                  </div>
                              </div>
                            </a>
                             
  
                              
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('initials.navBar')

    <div style="overflow-x: hidden">
        @yield('main_content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- language change script --}}
    <script>
        function changeLanguage(e, lang) {
            $('.ban_lang').removeClass('language_active')
            $('.eng_lang').removeClass('language_active')
            e.target.classList.add('language_active')
            let url = "{{ route('lang.change') }}";
            window.location.href = url + "?lang=" + lang
        }
    </script>

    {{-- carousel script --}}
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>

    {{-- owl carousel script --}}
    <script>
        (function() {
            "use strict";

            var carousels = function() {
                $(".owl-carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    margin: 0,
                    responsiveClass: true,
                    nav: false,
                    responsive: {
                        0: {
                            items: 3,
                            nav: false
                        },
                        680: {
                            items: 3,
                            nav: false,
                            loop: false
                        },
                        1000: {
                            items: 4,
                            nav: true
                        }
                    }
                });
            };

            (function($) {
                carousels();
            })(jQuery);
        })();
    </script>

    {{-- open close notice script   --}}
    <script>
        function openNotice() {
            $('.main-notice-popup-div').css("display", "flex");
            $('.nav-item .notice').addClass('active_notice')

        }

        function closeNotice() {
            $('.main-notice-popup-div').css("display", "none")
            $('.nav-item .notice').removeClass('active_notice')
        }
    </script>

    {{-- close nav on item click script --}}
    <script>
        $('.navbar-nav>li:not(.dropdown)>a').on('click', function() {
            if ($(window).width() < 992) { // Check for mobile viewport width (adjust breakpoint if needed)
                $('.navbar-collapse').collapse('hide');
            }
        });
    </script>

    {{-- tab content script --}}
    <script>
        const tabs = $('[data-tab-target]')
        const tabContents = $('[data-tab-content]')



        const tabsArray = Array.from(tabs);

        console.log(tabsArray)
        const tabContentsArray = Array.from(tabContents);
        tabsArray.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = $(tab.dataset.tabTarget);
                tabsArray.forEach(all_tab => {
                    $(all_tab).removeClass('active-tab')
                })

                $(tab).addClass('active-tab')
                tabContentsArray.forEach(tabContent => {
                    $(tabContent).removeClass('active-content')
                })
                console.log(target)
                $(target).addClass('active-content');
            })



        });
    </script>



</body>

</html>
