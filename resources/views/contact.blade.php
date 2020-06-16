@extends('app')

@section('content')
        <main>
            <section class="contact-section">
                <h2 class="section-title">GET IN TOUCH</h2>
                <p class="mb-4">If you’d like to talk about a project, my work or anything else then get in touch.</p>
                
                <div class="contact-cards-wrapper">
                    <div class="contact-card">
                        <h6 class="contact-card-title">CALL US</h6>
                        <p class="contact-card-content">+62 857 1238 6283</p>
                    </div>
                    <div class="contact-card">
                        <h6 class="contact-card-title">Email Us</h6>
                        <p class="contact-card-content">ekoputra351@gmail.com</p>
                    </div>
                </div>

                <form action="#!" class="contact-form">
                    <div class="form-group form-group-name">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="NAME">
                    </div>
                    <div class="form-group form-group-email">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>
                </form>

            </section>
            <section class="location-section">
                <h5 class="section-title">MY LOCATION</h5>

                <div class="map-wrapper embed-responsive embed-responsive-16by9"">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6996566304224!2d109.5719422640326!3d-6.926459144995452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70275405aedca9%3A0xe9d93d206584d403!2sTegalontar%2C%20Kec.%20Sragi%2C%20Pekalongan%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1592294596071!5m2!1sid!2sid" idth="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
                </div>
            </section>
            
@endsection