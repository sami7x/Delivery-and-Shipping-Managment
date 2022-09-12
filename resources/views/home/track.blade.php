@extends("layouts.index.layout")
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Track Your Order</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Track</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="card">
<div class="upper">
    <div class="row">
        <div class="col-8 heading">
            <h3><b>Track Your Order</b></h3>
        </div>
        <div class="col-4"> <img class="img-fluid" src="{{asset('resources/Content/assets/img/track.svg')}}"> </div>
    </div>

    @if(session('msg'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Hello! </h4>{{session('msg')}}
    </div>
    @endif

    <form class="forms-sample" action="{{route('tracker')}}" method="POST">
        @csrf
        <div class="form-element"> <span id="input-header">Order ID</span>
             <input type="text" id="order_id"  name="tracker" placeholder="2548745588958">
        </div>
        <div class="lower">
            <button type="submit" class="btn">Track</button>
         </div>
    </form>
</div>
<hr>

</div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
