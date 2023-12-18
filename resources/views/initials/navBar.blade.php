<nav class="navbar navbar-expand-lg  sticky-top" style="padding-bottom: 0px !important; padding-top:0px !important">
    <div style="width: 100%">
        <div style="background: white" class="top-nav">
            <div class="container" style="width:100%;padding:5px 0px">
                <div style="" class="row">
                    <div class="col-4 d-flex align-items-center justify-content-start">
                        <div style="display: flex;justify-content:center;align-items:center;column-gap:5px">
                            <div>
                                <img style="height: 70px" src="{{ asset('images/titleLogo.svg') }}" alt="">
                            </div>
                            <div class="titleLogoText">
                                শিক্ষা নিয়ে গরব দেশ
                                শেখ হাসিনার বাংলাদেশ
                            </div>
                        </div>

                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <div style="display: flex;justify-content:center;align-items:center">
                            <div>
                                <img style="height: 80px" src="{{ asset('images/clgLogo.svg') }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <div style="display: flex;justify-content:center;align-items:center;column-gap:5px">
                            <div class="mujibLogoText">
                                মানুষ হওয়ার জন্য শিক্ষা
                            </div>
                            <div>
                                <img style="height: 70px" src="{{ asset('images/mujibLogo.svg') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div style="background: #14213d;width:100%">
            <div class="container py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation" style="height:62px">

                        <img src="{{ asset('images/menuCollapse.svg') }}" alt="">
                    </button>

                    <div class=" d-lg-none d-sm-inline-block d-xs-inline-block">
                        <div class="d-flex justify-content-center align-items-center"
                            style="background: white;border-radius:20px;padding:4px;margin-right:20px;cursor: pointer;">
                            @unless (session()->has('locale'))
                                <span style="padding:5px 15px;border:none; border-radius:20px;back" class="ban_lang"
                                    onclick="changeLanguage(event,'bn')">Ban</span>
                                <span style="padding:5px 15px;border:none; border-radius:20px"
                                    class="eng_lang language_active" onclick="changeLanguage(event,'en')">Eng</span>
                            @else
                                <span style="padding:5px 15px;border:none; border-radius:20px;back"
                                    class="ban_lang {{ session()->get('locale') == 'bn' || app()->getLocale() == 'bn' ? 'language_active' : '' }}"
                                    onclick="changeLanguage(event,'bn')">Ban</span>
                                <span style="padding:5px 15px;border:none; border-radius:20px"
                                    class="eng_lang {{ session()->get('locale') == 'en' || app()->getLocale() == 'en' ? 'language_active' : '' }}"
                                    onclick="changeLanguage(event,'en')">Eng</span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class=" collapse navbar-collapse " id="navbarNavDropdown" style="padding: 10px 0px">

                        <ul class="navbar-nav  ">
                            <li class="nav-item">
                                <a class="nav-link mx-2 {{ url()->current() == route('home') ? 'nav_item_active' : '' }} " aria-current="page" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 {{ url()->current() == route('admission') ? 'nav_item_active' : '' }} " href="{{route('admission')}}">Admission</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn dropdown-toggle {{ Request::is('academic*') ? 'nav_item_active' : '' }}" style="color: white; border:none !important"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Academic
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item {{ Request::is('academic/department*') ? 'sub-item-active' : '' }}" href="#">Department &raquo;</a>
                                       
                                        <ul class="dropdown-menu submenu" >
                                            <li><a class="dropdown-item {{url()->current() == route('academic.department.science') ? 'sub-item-active' : ''}} " href="{{route('academic.department.science')}}">Science</a></li>
                                            <li><a class="dropdown-item {{url()->current() == route('academic.department.commerce') ? 'sub-item-active' : ''}} " href="{{route('academic.department.commerce')}}">Commerce</a></li>
                                            <li><a class="dropdown-item {{url()->current() == route('academic.department.arts') ? 'sub-item-active' : ''}} " href="{{route('academic.department.arts')}}">Humanities</a></li>
                                        </ul>
                                    
                                    </li>
                                    <li><a class="dropdown-item {{url()->current() == route('academic.rules') ? 'sub-item-active' : ''}} " href="{{route('academic.rules')}}">Rules and Regulations</a></li>
                                    <li><a class="dropdown-item {{url()->current() == route('academic.calender') ? 'sub-item-active' : ''}} " href="{{route('academic.calender')}}">Academic Calender</a></li>
                                    <li><a class="dropdown-item {{url()->current() == route('academic.result') ? 'sub-item-active' : ''}}" href="{{route('academic.result')}}">Result</a></li>
                                    <li><a class="dropdown-item" href="#">Syllabus</a></li>
                                    <li><a class="dropdown-item" href="#">Extra Curricular Activities</a></li>
                                    <li><a class="dropdown-item" href="#">Final Megazine</a></li>
                                    <li><a class="dropdown-item" href="#">HSC Application</a></li>
                                    <li><a class="dropdown-item" href="#">Our Achievement</a></li>


                        
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 {{ url()->current() == route('gallery') ? 'nav_item_active' : '' }}" href="{{route('gallery')}}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 notice" href="#" onclick="openNotice()">Notice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 {{ url()->current() == route('directors') ? 'nav_item_active' : '' }}" href="{{route('directors')}}">Board of Directors</a>
                            </li>
                            {{-- <li class="nav-item d-sm-block d-lg-none">
                                <a class="nav-link mx-2 " href="{{route('about_us')}}"> <button class=""
                                        style="background-color: #af8f3f;border:none;padding:5px 20px;border-radius:5px;color:white">Contact</button></a>
                            </li> --}}
                            <a href="{{route('about_us')}}" class="mt-2" style="margin-left: 8px;text-decoration:none"><button class="d-sm-block d-lg-none"
                                style="background-color: #af8f3f;border:none;padding:5px 20px;border-radius:5px;color:white">Contact</button></a>
                        </ul>

                        <div class="ms-auto d-none d-lg-block">
                            <div class="input-group">
                                <div class="d-flex justify-content-center align-items-center"
                                    style="background: white;border-radius:20px;padding:4px;margin-right:20px;cursor: pointer;">

                                    @unless (session()->has('locale'))
                                        <span style="padding:5px 15px;border:none; border-radius:20px;back" class="ban_lang"
                                            onclick="changeLanguage(event,'bn')">Ban</span>
                                        <span style="padding:5px 15px;border:none; border-radius:20px"
                                            class="eng_lang language_active" onclick="changeLanguage(event,'en')">Eng</span>
                                    @else
                                        <span style="padding:5px 15px;border:none; border-radius:20px;back"
                                            class="ban_lang {{ session()->get('locale') == 'bn' || app()->getLocale() == 'bn' ? 'language_active' : '' }}"
                                            onclick="changeLanguage(event,'bn')">Ban</span>
                                        <span style="padding:5px 15px;border:none; border-radius:20px"
                                            class="eng_lang {{ session()->get('locale') == 'en' || app()->getLocale() == 'en' ? 'language_active' : '' }}"
                                            onclick="changeLanguage(event,'en')">Eng</span>
                                        @endif

                                    </div>
                                   <a href="{{route('about_us')}}" style="">
                                    <button class=""
                                        style="background-color: #af8f3f;border:none;padding:5px 20px;border-radius:5px;color:white;text-decoration:none;height: 40px">Contact</button>
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
