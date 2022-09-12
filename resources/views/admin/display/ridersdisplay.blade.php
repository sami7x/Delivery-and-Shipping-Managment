@extends("layouts.admin.layout")
@section('content')


<div class="row">
    <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Registered Riders</a></div>
    <!-- end col -->
</div>

<div class="content">


    <div class="container">

        <div class="row">
            @foreach($rider as $rider)
            <div class=" col-lg-6">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="{{asset('uploads/rider/'.$rider->image)}}" class="rounded-circle img-thumbnail"></div>
                        <div class="">
                            <h4> {{ $rider['id']}}</h4>
                            <h4>{{$rider['rider_name']}}</h4>
                           <h5 class="text-muted">{{$rider['rider_address']}}<span>| </span><span><a href="#" class="text-pink">{{$rider['rider_phone']}}</a></span></p></h5>
                        </div>

                        <div class="mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h4>{{$rider['license_no']}}</h4>
                                        <p class="mb-0 text-muted">License Number</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h4>{{$rider['vehicle_no']}}</h4>
                                        <p class="mb-0 text-muted">Vehicle Number</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-3">
                                        <a href="{{ route('rider-delete', $rider['id']) }}" class="btn btn-sm btn-danger">  <i  class="mdi mdi-delete " ></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            @endforeach
        </div>
        <!-- end row -->

        </div>

<!-- container -->
</div>

<style type="text/css">
body{
    background:#DCDCDC;
    margin-top:20px;
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}
</style>

<script type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

