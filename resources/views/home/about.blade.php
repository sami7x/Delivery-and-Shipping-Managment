@extends("layouts.index.layout")
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>ABOUT US</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <section class="about" data-aos="fade-up">
<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <img src="{{asset('resources/Content/assets/img/about.svg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
            <h2>Get To Know About Us.</h2>
            <p class="font-italic">
                EXPRESS, a trade and logistic solution dedicated for ecommerce Industry is established for catering to the dynamic needs of electronic commerce industry which is growing by leaps and bounds.

            </p>
            <ul>
                <li><i class="icofont-check-circled"></i> EXPRESS serves instant Local Deliveries (same town)..</li>
                <li><i class="icofont-check-circled"></i> Real time tracking of your parcel.</li>
                <li><i class="icofont-check-circled"></i> Calculate price of your deliveries yourself.</li>
            </ul>
            <p>

                <b> Reliable</b> - We take care of every consignments serously.<br />
                <b>Reasonable</b> - Services starting on an equivalent Get Quote of an icecream.
                <br /><b>Dropship service</b> -
                The service where Expres will pick-up the shipment on behalf of the shipper from various Vendors for delivering its consignees
            </p>
        </div>
    </div>

</div>
</section><!-- End About Section -->

        </div>
    </section>

</main><!-- End #main -->
@endsection
