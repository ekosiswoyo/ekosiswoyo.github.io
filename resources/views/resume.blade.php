@extends('app')

@section('content')
        <main>
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
            <section class="clients-section">
                <h6 class="section-subtitle">WHAT I DO</h6>
                <h2 class="section-title">CLIENTS</h2>
                <div class="client-logos-wrapper">
                    <div class="client-logo"><img src="assets/images/Clients_1.svg" alt="logo" class="w-100"></div>
                    <div class="client-logo"><img src="assets/images/Clients_2.svg" alt="logo" class="w-100"></div>
                    <div class="client-logo"><img src="assets/images/Clients_3.svg" alt="logo" class="w-100"></div>
                    <div class="client-logo"><img src="assets/images/Clients_4.svg" alt="logo" class="w-100"></div>
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
            <section class="achievements-section">
                <h6 class="section-subtitle">WHAT I DO</h6>
                <h2 class="section-title">ACHIEVEMENTS</h2>
                <div class="achievement-cards-wrapper">
                    <div class="media achievement-card">
                        <img src="assets/images/puzzle.svg" alt="puzzle" class="achievement-card-icon">
                        <div class="media-body">
                            <h4 class="achievement-card-title">550+</h4>
                            <p class="achievement-card-description">COMPLETED PROJECTS</p>
                        </div>
                    </div>
                    <div class="media achievement-card">
                        <img src="assets/images/team.svg" alt="puzzle" class="achievement-card-icon">
                        <div class="media-body">
                            <h4 class="achievement-card-title">23K</h4>
                            <p class="achievement-card-description">HAPPY CLIENTS</p>
                        </div>
                    </div>
                    <div class="media achievement-card">
                        <img src="assets/images/trophy.svg" alt="puzzle" class="achievement-card-icon">
                        <div class="media-body">
                            <h4 class="achievement-card-title">55</h4>
                            <p class="achievement-card-description">AWARDS RECIEVED</p>
                        </div>
                    </div>
                </div>
            </section>
            

@endsection