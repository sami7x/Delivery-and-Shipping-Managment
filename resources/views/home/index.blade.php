@extends("layouts.index.layout")
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
<div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
    <div>
        <h1>Fast, Reliable & Reasonable</h1>
        <h2> We offer fast, reliable & reasonable cargo & courier service including domestic as well as international deliveries.</h2>
        <a href="/login" class="download-btn">ADMIN</a>
        <a href="{{route('rider.login') }}" class="download-btn">RIDER</a>
    </div>
</div>
<div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
    <img src="{{asset('resources/Content/assets/img/hero-img.svg')}}" class="img-fluid'" alt="">
</div>
</div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- =======  Features ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>Features</h2>
                <p>Serving dire need of Logistics and Fulfillment, LIVRASION provides instant Home Delivery Services.We have always focused on improvising our services.The core services LIVRASION focuses are</p>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <div class="icon"><i class="icofont-truck"></i></div>

                                <h4>Instant Delivery</h4>
                                <p>EXPRESS provides Instant Local Delivery Services.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="icofont-rupee"></i></div>
                                <h4>Resonable</h4>
                                <p>Services starting on an equivalent Get Quote of an icecream.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="icofont-box"></i></div>
                                <h4>Safety of Parcel</h4>
                                <p>Making the delivery of couriers & parcels to the destination is our top priority.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="icofont-google-map"></i></div>
                                <h4>Real Time Tracking</h4>
                                <p>EXPRESS provides real time tracking of your parcel</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{asset('resources/Content/assets/img/features.svg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End App Features Section -->
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="{{asset('resources/Content/assets/img/details-1.svg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3>Make your Delivery simple, easy, and convenient with real time tracking</h3>
                    <p class="font-italic">
                        Efficiently manage all your dispatch operations with our intuitive & interactive dashboard web applications.
                    </p>
                    <ul style="list-style: none;">
                        <li><i class="icofont-check"></i>Real-time delivery tracking system, you can provide your customers with real-time locations.</li>
                        <li><i class="icofont-check"></i>Customers and owners receive live updates of their delivery status..</li>
                        <li><i class="icofont-check"></i> User-friendly.</li>
                        <li><i class="icofont-check"></i> Shipment Price Calculator.</li>
                    </ul>

                </div>
            </div>

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{asset('resources/Content/assets/img/details-2.svg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Relaible and Resonable Services</h3><br />
                    <p>
                        EXPRESS, a trade and logistic solution dedicated for ecommerce Industry is established for catering to the dynamic needs of electronic commerce industry which is growing by leaps and bounds.
                    </p>
                    <p>
                        EXPRESS is poised to take the challenges and allow its client to focus on its core activity.We have been serving numbers of startups and well established companies globally.
                    </p>
                </div>
            </div>


        </div>
    </section><!-- End Details Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Your praise, constructive criticisms, feedback and suggestions has always helped us to improve.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 info" data-aos="fade-up">
                            <i class="bx bx-map"></i>
                            <h4>Address</h4>
                            <p>Kamalpokari<br>Kathmandu,Nepal</p>
                        </div>
                        <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-phone"></i>
                            <h4>Call Us</h4>
                            <p>014455667<br>014756891</p>
                        </div>
                        <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-envelope"></i>
                            <h4>Email Us</h4>
                            <p>livarsion@gmail.com<br>info@gmail.com</p>
                        </div>
                        <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-time-five"></i>
                            <h4>Working Hours</h4>
                            <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                        <div class="form-group">
                            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
