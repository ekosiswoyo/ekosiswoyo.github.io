<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV :: Eko Siswoyo</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/live-resume.css') }}">
</head>

<body>
    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="{{ asset('assets/images/share.svg') }}" alt="share" class="btn-img">
            SHARE</button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="/" class="nav-link {{ set_active('/') }}">HOME</a>
            <a href="/resume" class="nav-link {{ set_active('resume') }}">RESUME</a>
            <a href="/portfolio" class="nav-link {{ set_active('portfolio') }} ">PORTFOLIO</a>
            <!-- <a href="/blog" class="nav-link {{ set_active('blog') }}">BLOG</a> -->
            <a href="/contact" class="nav-link {{ set_active('contact') }}">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{ asset('assets/images/hamburger.svg') }}" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
        <aside>
            <div class="profile-img-wrapper">
                <img src="{{ asset('assets/images/Profile.png') }}" alt="profile">
            </div>
            <h1 class="profile-name">Eko Siswoyo</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">Programmer</span>
            </div>
            <nav class="social-links">
                <a href="https://www.facebook.com/eko.siswoyo26" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="https://github.com/ekosiswoyo" class="social-link"><i class="fab fa-github"></i></a>
                <a href="https://instagram.com/ekoosiswoyo" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/6285712386283" class="social-link"><i class="fab fa-whatsapp"></i></a>
            </nav>
            <div class="widget">
                <h5 class="widget-title">personal information</h5>
                <div class="widget-content">
                    <p>BIRTHDAY : Pekalongan, 26 Maret 1998</p>
                    <p>WEBSITE : www.example.com</p>
                    <p>PHONE : +62 857 1238 6283</p>
                    <p>MAIL : ekoputra351@gmail.com</p>
                    <p>Location : Ds. Sragi, Pekalongan, Jawa Tengah</p>
                    <button class="btn btn-download-cv btn-primary rounded-pill"> <img src="{{ asset('assets/images/download.svg') }}" alt="download"
                        class="btn-img">DOWNLOAD CV </button>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">LANGUAGES</h5>
                        <p>English : native</p>
                    </div>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">INTERESTS</h5>
                        <p>Games</p>
                        <p>Basketball</p>
                        <p>Movie</p>
                    </div>
                </div>
            </div>
        </aside>

        @yield('content')
        <footer>CV @ <a href="https://www.instagram.com/ekoosiswoyo" target="_blank" rel="noopener noreferrer">Eko Siswoyo</a>. All Rights Reserved 2020</footer>
        </main>
        </div>
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/@popperjs/core/dist/umd/popper-base.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/live-resume.js') }}"></script>
</body>

</html>