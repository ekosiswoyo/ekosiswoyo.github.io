@extends('app')

@section('content')
        <main>
            <section class="intro-section">
                <h2 class="section-title">Hello, Eko Siswoyo!</h2>
                <p>I'm Website Developer from Pekalongan, Central Java, Indonesia. I can build a website with Framework such as Laravel , Codeigniter , Wordpress , Native. I can build your website so that functionally and user friendly in desktop or mobile but at the same time attractive. I have created website or information system for famous companies and school</p>
                <a href="#!" class="btn btn-primary btn-hire-me">HIRE ME</a>
            </section>
            <section class="resume-section">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="section-subtitle">RESUME</h6>
                        <h2 class="section-title">EDUCATION</h2>
                        <ul class="time-line">
                            <li class="time-line-item">
                                <span class="badge badge-primary">2015-2017</span>
                                <h6 class="time-line-item-title">Politeknik Negeri Bandung</h6>
                                <p class="time-line-item-subtitle">Informatic Engineering </p>
                                <p class="time-line-item-content">Diploma II</p>
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">2012-2015</span>
                                <h6 class="time-line-item-title">SMK 1 Sragi</h6>
                                <p class="time-line-item-subtitle">Computer and Network Engineering</p>
                               
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">2009 - 2012</span>
                                <h6 class="time-line-item-title">SMP 1 Sragi</h6>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="section-subtitle">RESUME</h6>
                        <h2 class="section-title">Experience</h2>
                        <ul class="time-line">
                            <li class="time-line-item">
                                <span class="badge badge-primary">2017 - Now</span>
                                <h6 class="time-line-item-title">Web Programmer</h6>
                                <p class="time-line-item-subtitle">PT. BPR Mandiri Artha Abadi</p>
                                <!-- <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed
                                    tortor.</p> -->
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">2017</span>
                                <h6 class="time-line-item-title">IT Engineer</h6>
                                <p class="time-line-item-subtitle">PT. Graha Karya Informasi</p>
                                <!-- <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed
                                    tortor.
                                </p> -->
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">2016 - 2017</span>
                                <h6 class="time-line-item-title">Technician</h6>
                                <p class="time-line-item-subtitle">Lubada Jaya</p>
                                <!-- <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed
                                    tortor.
                                </p> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="services-section">
                <h6 class="section-subtitle">WHAT I DO</h6>
                <h2 class="section-title">SERVICES</h2>
                <div class="row">
                    <div class="media service-card col-lg-6">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/003-idea.svg') }}" alt="target">
                        </div>
                        <div class="media-body">
                            <h5 class="service-title">Web Developer</h5>
                            <p class="service-description">Laravel, Codeigniter, Native, Wordpress</p>
                        </div>
                    </div>
                    <div class="media service-card col-lg-6">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/003-idea.svg') }}" alt="bulb">
                        </div>
                        <div class="media-body">
                            <h5 class="service-title">Graphic design</h5>
                            <p class="service-description">Corel Draw
                            </p>
                        </div>
                    </div>
                    <div class="media service-card col-lg-6">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/002-development.svg') }}" alt="development">
                        </div>
                        <div class="media-body">
                            <h5 class="service-title">Server</h5>
                            <p class="service-description">Centos, Debian, Windows Server
                            </p>
                        </div>
                    </div>
                    <div class="media service-card col-lg-6">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/004-smartphone.svg') }}" alt="smartphone">
                        </div>
                        <div class="media-body">
                            <h5 class="service-title">Mobile Developer</h5>
                            <p class="service-description">Android Studio
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="testimonial-section">
                <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="testimonial-content">I can work in teams and individually.</p>
                            <img src="{{ asset('assets/images/Profile.png') }}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                        <div class="carousel-item">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{ asset('assets/images/Profile.png') }}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                        <div class="carousel-item">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{ asset('assets/images/Profile.png') }}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </section> -->

           
@endsection