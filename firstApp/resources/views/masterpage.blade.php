<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | HelloExe.</title>
    <link rel="icon" href="/asset/fio.ico" type="image/x-icon">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/portfolio.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/confirm.css">
</head>
<body >
    {{-- <div class="preLoader"></div> --}}
    <div class="main">
    <header id="sec">
        <nav>
            <ul>
                <li class="l1"><a href="{{route('home')}}">{{__('lang.menu1')}}</a></li>
                <li class="l2"><a href="{{route('about')}}">{{__('lang.menu2')}}</a></li>
                <li class="l3"><a href="{{route('portfolio')}}">{{__('lang.menu3')}}</a></li>
                <li class="l4"><a href="{{route('contact')}}">{{__('lang.menu4')}}</a></li>
            </ul>
            <div class="loginBtn">

                <button class="logBtn"><a  href="/profile"><img src="/asset/profileuser.svg" alt=""></a></button>
                
                
            </div>
            <div class="lang-btn">
                
                <select name="" class="fa" id="lang-op" onchange="window.location.href=this.value;">
                    <option value="fa fa-globe" selected class="select">&#xf0ac; {{__('lang.language')}}</option>
                    
                    <option value="/en">English</option>
                    <option value="/bn">বাংলা</option>
                    <option value="/hi">हिन्दी</option>
                    <option value="/ja">日本</option>
                </select>

                
            </div>
        </nav>
        <div class="logo">
            <p class="log">HelloEXE<span>.</span></p>
            <div class="bb"></div>
        </div>
    </header>

    <hero>
        @yield('line')
        @yield('404sec')
        @yield('log')
        <div class="alert hide">
            <i class="lni lni-warning"></i>
            <p class="cbtn">Ohhhh! Don't be smart </p>
            <div class="close">
                <i class="lni lni-cross-circle"></i>
            </div>
        </div>
    </hero>

    <footer>
        <div class="container">
            <div class="left">
                <div class="nam">
                    <p>HelloEXE<span class="d">.</span></p>
                </div>
                <div class="pages">
                    <a href="/">{{__('lang.menu1')}}</a>
                    <a href="/about">{{__('lang.menu2')}}</a>
                    <a href="/portfolio">{{__('lang.menu3')}}</a>
                    <a href="/contact">{{__('lang.menu4')}}</a>
                </div>
            </div>
            <div class="middle">
                <p class="noti">{{__('lang.sub-inp')}}</p>
                <form name="subForm" action="{{route('email')}}" method="POST">
                    @csrf
                    <input class="subEm" type="email" placeholder="{{__('lang.inp-placeholder')}}" name="email">
                    <br>
                    <button type="submit" class="subs">
                        {{__('lang.subs-btn')}}
                    </button>
                    
            </form>
                
            </div>
            <div class="right">
                <div class="loc">
                    <div class="io">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="iconmonstr-location-16 1">
                            <g id="right-line">
                            <path d="M20.979 4.751C22.142 5.669 22.881 7.007 22.881 8.499C22.881 9.991 22.142 11.33 20.979 12.247L21.72 13C23.115 11.899 24 10.293 24 8.499C24 6.705 23.115 5.1 21.72 3.999L20.979 4.751Z" fill="#f77d2c"/>
                            <path d="M20.24 11.499L19.5 10.748C20.197 10.198 20.641 9.394 20.641 8.499C20.641 7.604 20.197 6.801 19.5 6.25L20.24 5.499C21.171 6.232 21.761 7.304 21.761 8.499C21.761 9.695 21.171 10.766 20.24 11.499Z" fill="#f77d2c"/>
                            </g>
                            <g id="left-line">
                            <path d="M2.28 13L3.021 12.247C1.858 11.33 1.119 9.991 1.119 8.499C1.119 7.007 1.858 5.669 3.021 4.751L2.28 3.999C0.885 5.1 0 6.705 0 8.499C0 10.293 0.885 11.899 2.28 13Z" fill="#ff6600"/>
                            <path d="M4.5 6.25C3.802 6.801 3.359 7.603 3.359 8.499C3.359 9.395 3.803 10.198 4.5 10.748L3.76 11.499C2.829 10.766 2.239 9.695 2.239 8.499C2.239 7.304 2.829 6.232 3.76 5.499L4.5 6.25Z" fill="#ff6600"/>
                            </g>
                            <path id="main" d="M6 8.702C6 5.553 8.852 3 12 3C15.149 3 18 5.553 18 8.702C18 11.85 15.398 15.609 12 21C8.602 15.609 6 11.85 6 8.702Z" fill="#F3F3F3"/>
                            </g>
                            </svg>
                            
                            
                    </div>
                    <div class="n">
                        <p>{{__('lang.add1')}}</p>
                    </div>
                </div>
                <div class="phone">
                    <div class="io">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="iconmonstr-phone-10 1" clip-path="url(#clip0_7_8)">
                            <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M16 22.621L12.479 15.826C12.472 15.83 10.505 16.796 10.415 16.837C8.17498 17.923 3.61598 9.017 5.80598 7.843L7.88798 6.817L4.39598 0L2.28998 1.039C0.650984 1.894 -0.0230162 3.705 0.000983772 5.955C0.0759838 12.903 6.80998 24.026 12.31 24C12.851 23.997 13.38 23.887 13.89 23.654C14.011 23.599 15.992 22.625 16 22.621Z" fill="black"/>
                            <path id="phone" fill-rule="evenodd" clip-rule="evenodd" d="M16 22.621L12.479 15.826C12.472 15.83 10.505 16.796 10.415 16.837C8.17498 17.923 3.61598 9.017 5.80598 7.843L7.88798 6.817L4.39598 0L2.28998 1.039C0.650984 1.894 -0.0230162 3.705 0.000983772 5.955C0.0759838 12.903 6.80998 24.026 12.31 24C12.851 23.997 13.38 23.887 13.89 23.654C14.011 23.599 15.992 22.625 16 22.621Z" fill="#EFEFEF"/>
                            <g id="dots">
                            <path d="M14 10.5C14 9.672 13.328 9 12.5 9C11.672 9 11 9.672 11 10.5C11 11.328 11.672 12 12.5 12C13.328 12 14 11.328 14 10.5Z" fill="#ff6600"/>
                            <path d="M23 10.5C23 9.672 22.328 9 21.5 9C20.672 9 20 9.672 20 10.5C20 11.328 20.672 12 21.5 12C22.328 12 23 11.328 23 10.5Z" fill="#ff6600"/>
                            <path d="M18.5 10.5C18.5 9.672 17.828 9 17 9C16.172 9 15.5 9.672 15.5 10.5C15.5 11.328 16.172 12 17 12C17.828 12 18.5 11.328 18.5 10.5Z" fill="#ff6600"/>
                            </g>
                            </g>
                            <defs>
                            <clipPath id="clip0_7_8">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            
                    </div>
                    <div class="n">
                        <p>+880 1879866202</p>
                    </div>
                </div>
                <div class="mail">
                    <div class="io">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="iconmonstr-email-3 1">
                            <path id="mb" d="M12 16.5L0 6.775V22.213H24V6.775L12 16.5Z" fill="#E9E9E9"/>
                            <path id="mh" d="M0.015 5L12 14.713L23.985 5H0.015Z" fill="#ff6600"/>
                            </g>
                            </svg>
                            
                            
                    </div>
                    <div class="n"><p>shykatsam347@gmail.com</p></div>
                </div>
                <div class="tel">
                    <div class="io">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="iconmonstr-paper-plane-7 1">
                            <path id="Vector" d="M23 0L18.5 16.5L12.403 11.07L18.255 4.895L10.411 10.316L5 9L23 0ZM12 12.501V18L14.193 14.677L12 12.501Z" fill="black"/>
                            <path id="plane" d="M23 0L18.5 16.5L12.403 11.07L18.255 4.895L10.411 10.316L5 9L23 0ZM12 12.501V18L14.193 14.677L12 12.501Z" fill="#F5F5F5"/>
                            <g id="force">
                            <path d="M1.863 18.215L3.302 18.722L9 13.396L7.564 13L1.863 18.215Z" fill="#ff6600"/>
                            <path d="M5.241 22.444L6.564 23.009L11 18.396L9.68 17.941L5.241 22.444Z" fill="#ff6600"/>
                            <path d="M1 22.889L2.481 23.396L10.437 15.396L9 14.999L1 22.889Z" fill="#ff6600"/>
                            </g>
                            </g>
                            </svg>
                            
                            
                    </div>
                    <div class="n">
                        <p>+880 1879866202</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="social-small">
        <div class="line"></div>
            <a href="https://www.facebook.com/"><i class="lni lni-facebook-oval"></i></a>
            <a href="https://www.instagram.com/"><i class="lni lni-instagram-filled"></i></a>
            <a href="https://youtube.com/"><i class="lni lni-youtube"></i></a>
        <div class="line"></div>
    </div>
    </footer>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="/js/animation.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/filter.js"></script>
    <script src="/js/trans.js"></script>

   
</body>
</html>