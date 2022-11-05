<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boostem</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/welcome.css') }}">
</head>

<body>
    <!-- navigation bar start -->
    
    <nav>
        <div class="max-width navbar">
            <div class="logo">
                <a href="">
                    <img src="{{ URL::asset('public/img/logo.png') }}" alt="Boostem" />
                </a>
            </div>
            <div class="menu">
                <div class="menu-item"><a class="menu-item-a" href="#home-section">Home</a></div>
                <div class="menu-item"><a class="menu-item-a" href="#about-section">About</a></div>
                <div class="menu-item">
                    <a class="menu-item-a" href="#services-section">Services</a>
                </div>
            </div>
            <div class="community-register-btn">
                {{-- <a href="{{ route('community.register') }}"> --}}
                <a href="">
                    <button class="register-btn-simp">
                        Register Community
                    </button>
                </a>
            </div>
            <div class="hamburger">
                <img class="hamburgerwhite" src="{{ URL::asset('public/icons/hamburgerwhite.png') }}" alt="menu" />
                <img class="hamburgerblack" src="{{ URL::asset('public/icons/hamburger.png') }}" alt="menu" />
            </div>
        </div>
    </nav>
    <div class="black-cover"></div>
    <div class="mobilemenu">
        <div class="mobile-menu-item"><a href="#home-section">Home</a></div>
        <div class="mobile-menu-item"><a href="#about-section">About</a></div>
        <div class="mobile-menu-item"><a href="#services-section">Services</a></div>
    </div>
    <!-- navigation bar end  -->
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
    </div>
    <!-- header starts heair -->
    <div class="header" id="home-section">
        <img src="{{ URL::asset('public/img/background.png') }}" alt="" />
        <div class="header-content max-width">
            <h1>Boost your Community</h1>
            <h1>Empower the World</h1>
            <p>
                Boostem is an online platform which offer critical features that enables integration of service providers (Communities &
Societies) Individuals (Exploring Users) and acquisitors (Companies & Startups) 
            </p>
            <a href="{{ route('user.register') }}">
                <button>Join now</button>
            </a>
        </div>
    </div>
    <!-- header eng heair -->
    <!-- learn more start heair -->
    <div class="learn-more">
        <div class="learn-more-content max-width">
            <h1>
                register your great communiy <br />
                with us!
            </h1>
            <p>
                Boostem is an one stop solution for communities to manage their events projects and workflow , indivisuals , learn through various communities and resources and aquisitors to publicizxe their organization and hire skilled indivisuals respectively.
            </p>
            <div class="button-wraper">
                {{-- <a href="{{ route('community.register') }}"> --}}
                <a href="">
                    <button>Register Now</button>
                </a>
            </div>
        </div>
    </div>
    <!-- learn more ends heair -->
    <!-- intro video section starts heair -->
    <div class="intro-video" id="about-section">
        <div class="video-player display-none">
            
        </div>
        <button type="button" onclick="playVideo()" class="video-close-btn display-none">close</button>
        <div class="max-width">
            <div class="intro-video-left">
                <h2>Why with us ?</h2>
                <p>
                    We are prepared to support you with every one of your needs!
                </p>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Compass.png') }}" alt="" />
                    <p>
                        provides you with a hollistic platform for societies.
                    </p>
                </div>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Connect.png') }}" alt="" />
                    <p>
                        endeavours to connect various communities.
                    </p>
                </div>
                <div class="intro-video-content">
                    <img src="{{ URL::asset('public/icons/Teaching.png') }}" alt="" />
                    <p>
                        gives a great opportunity to learners to ehance their skills. 
                    </p>
                </div>
            </div>
            <div class="intro-video-right">
                <img type="button" onclick="playVideo()" src="{{ URL::asset('public/img/lep.png') }}" alt="" />
                {{-- <div class="inner">
                    <p>Play</p>
                  </div> --}}
                {{-- <video width="400" controls>
                    <source src="https://drive.google.com/file/d/1akQ-yJFyURhfkDVECRPzlJWbxzsYM2gr/view" type="video/mp4">
                  </video> --}}
                  {{-- <video width="400" controls>
                    <source src="https://drive.google.com/uc?export=download&id=1akQ-yJFyURhfkDVECRPzlJWbxzsYM2gr" type='video/mp4'>
                </video> --}}
                

            </div>
        </div>
    </div>
    
    <!-- intro video section ends heair -->
    <!-- Services section starts heair -->
    <div class="Services" id="services-section">
        <div class="max-width">
            <div class="Services-left">
                <img src="{{ asset('public/img/allinone.png') }}" alt="" />
            </div>
            <div class="Services-right">
                <h2>Explore Learn and Grow</h2>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Globe.png') }}" alt="" />
                    <p>
                        Businesses and organizations can publically establish their strong presence. 
                    </p>
                </div>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Services.png') }}" alt="" />
                    <p>
                        Communities can organize , support and even sponsor an event or a competetion. 
                    </p>
                </div>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Idea.png') }}" alt="" />
                    <p>
                        Startups and businesses can recruit skilled and talented indivisuals from various communities.
                    </p>
                </div>
                <div class="Services-content">
                    <img src="{{ asset('public/icons/Puzzle.png') }}" alt="" />
                    <p>
                        Get surrounded by passionate indivisuals to grow your knowledge and expertise.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services section ends heair -->
    <!-- footer starts heair -->
    <footer>
        <div class="social-media">
            <div class="max-width">
                <p>Stay connected with us on :</p>
                <div class="social-media-icon">
                    <a href="mailto:info.boostem@gmail.com"><img src="{{ asset('public/icons/Gmail Logo.png') }}" alt="" /></a>
                    <a href="https://instagram.com/theboostem?igshid=YmMyMTA2M2Y="><img src="{{ asset('public/icons/Instagram.png') }}" alt="" /></a>
                    <a href="https://www.linkedin.com/company/boostem/"><img src="{{ asset('public/icons/LinkedIn.png') }}" alt="" /></a>
                    <a href="https://chat.whatsapp.com/D49E0ma5oSqCSSt5H3i2na"><img src="{{ asset('public/icons/WhatsApp.png') }}" alt="" /></a>
                    <a href="https://t.me/+sk0McMDN0NQyOWNl"><img src="{{ asset('public/icons/Telegram App.png') }}" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="max-width footer-grid">
                <div class="about">
                    <h2>Boostem</h2>
                    <p>
                        Boostem is an one stop solution for communities to manage their events projects and workflow , indivisuals , learn through various communities and resources.
                    </p>
                    {{-- <a href="mailto:info.boostem@gmail.com">
                        <img src="{{ asset('public/icons/Home.png') }}" alt="" />
                        <p>info.boostem@gmail.com</p>
                    </a>
                    <a href="">
                        <img src="{{ asset('public/icons/Phone.png') }}" alt="" />
                        <p>+91 7987250919</p>
                    </a> --}}
                </div>
                <div class="quick-links">
                    <h3>Quick links</h3>
                    <a href=""> About us </a>
                    <a href="{{ url('/dashboard') }}"> Your profile </a>
                    <a href="{{ url('/home') }}"> Discover </a>
                    <a href="{{ url('user/register') }}"> upcoming events </a>
                </div>
                <div class="contact">
                    <h3 style="padding-bottom: 0;">contact us</h3>
                    {{-- <form action="{{ route('contact.us') }}" method="POST">
                        <input name="email" type="text" placeholder="Email :" />
                        <textarea name="query" type="texta" placeholder="Query :"></textarea>
                        <button type="submit" >Submit</button>
                    </form> --}}
                    <div class="about" style="padding-top: 0;">
                    <a href="mailto:info.boostem@gmail.com">
                        <img src="{{ asset('public/icons/Home.png') }}" alt="" />
                        <p>info.boostem@gmail.com</p>
                    </a>
                    <a href="">
                        <img src="{{ asset('public/icons/Phone.png') }}" alt="" />
                        <p>+91 7987250919</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ends heair -->
    <script>
        const nav = document.querySelector("nav");
        const hamburger = document.querySelector(".hamburger");
        const mobilemenu = document.querySelector(".mobilemenu");
        const blackcover = document.querySelector(".black-cover");
        const videoplayer = document.querySelector(".video-player");
        const videoclosebtn = document.querySelector(".video-close-btn");

        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                nav.classList.add('white-nav');
            } else {
                nav.classList.remove('white-nav');
            }
        }

        function mobileMenu() {
            if (mobilemenu.classList.contains('show-mobilemenu')) {
                mobilemenu.classList.remove('show-mobilemenu');
                blackcover.style.display = "none";
            } else {
                mobilemenu.classList.add('show-mobilemenu');
                blackcover.style.display = "block";
            }
        }

        function playVideo() {
            if (videoplayer.classList.contains('display-none')) {
                videoplayer.classList.remove('display-none');
                videoplayer.innerHTML = `<iframe src="https://drive.google.com/file/d/1akQ-yJFyURhfkDVECRPzlJWbxzsYM2gr/preview" width="800px" height="450px"></iframe>`;
                videoclosebtn.classList.remove('display-none');
            } else {
                videoplayer.classList.add('display-none');
                videoplayer.innerHTML = ``;
                videoclosebtn.classList.add('display-none');
            }
        }

        hamburger.addEventListener("click", mobileMenu);
    </script>
</body>

</html>
