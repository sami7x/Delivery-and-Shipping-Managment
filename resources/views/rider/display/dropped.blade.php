
@extends("layouts.rider.layout")
@section('content')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />


<div class="container mt-3 mb-4">
<div class="col-lg-12 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>receiver DETAILS</th>
                <th class="text-center">Cargo Status</th>
                {{--  <th class="action text-right">Action</th>  --}}
              </tr>
            </thead>
            <tbody>
                @foreach($cargo as $cargo)
                @if($cargo->cargo_status==1)
                <tr class="candidates-list">
                    <td class="title">
                      <div class="thumb">
                        <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="candidate-list-details">
                        <div class="candidate-list-info">
                          <div class="candidate-list-title">
                            <h5 class="mb-0"><a href="#">{{$cargo['receiver_name']}}</a></h5>
                          </div>
                          <div class="candidate-list-option">
                            <ul class="list-unstyled">
                              <li><i class="mdi mdi-phone"></i>{{$cargo['receiver_phone']}}</li>
                              <li><i class="fas fa-map-marker-alt pr-1"></i>{{$cargo['receiver_address']}}</li>
                              <li>,{{$cargo['receiver_location']}}</li>
                            </ul>
                          </div>
                        </div>
                        <div class="candidate-list-option">
                            <ul class="list-unstyled">
                              <li>{{$cargo['product']}}</li>
                              <li>,{{$cargo['product_weight']}}kg</li>
                              <li>,{{$cargo['product_type']}}</li>

                            </ul>
                          </div>
                      </div>
                    </td>
                    <form class="forms-sample" action="{{route('cargo-status',$cargo['id'])}}" method="POST">
                        @csrf
                    <td class="candidate-list-favourite-time text-center">
                        <label class="toggle">
                         <input onchange="toogleStatus('{{$cargo->id}}')" data-id="{{$cargo->cargo_status}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{$cargo->cargo_status? 'checked' : '' }}>
                            <span class="slider"></span>
                            <span class="labels" data-on="Dropped" data-off="Remaining"></span>
                        </label>
                    </td>
                    </form>
                    {{--  <td>
                      <ul class="list-unstyled mb-0 d-flex justify-content-end">
                        <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                        <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                        <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                      </ul>
                    </td>  --}}
                  </tr>
                  @endif
                  @endforeach
            </tbody>
          </table>
          <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-nlass="page-link" href="#">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">25</a></li>
                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection



<style>



      {{--  toogle button css  --}}
    .toggle {
      --width: 80px;
      --height: calc(var(--width) / 3);

      position: relative;
      display: inline-block;
      width: var(--width);
      height: var(--height);
      border-radius: var(--height);
      cursor: pointer;
    }

    .toggle input {
      display: none;
    }

    .toggle .slider {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: var(--height);
      border: 2px solid #ff0000;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      transition: all 0.4s ease-in-out;
    }

    .toggle .slider::before {
      content: "";
      position: absolute;
      top: 2.5px;
      left: 2px;
      width: calc(var(--height)*0.6);
      height: calc(var(--height)*0.6);
      border-radius: calc(var(--height) / 2);
      border: 3px solid #f80000;
      background-color: #d1bbbb;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
      transition: all 0.4s ease-in-out;
    }

    .toggle input:checked+.slider {
      border-color: #2196F3;
    }

    .toggle input:checked+.slider::before {
      border-color: #2196F3;
      background-color: #c6e5ff;
      transform: translateX(calc(var(--width) - var(--height)));
    }

    .toggle .labels {
      position: absolute;
      top: 8px;
      left: 0;
      width: 100%;
      height: 100%;
      color: #4d4d4d;
      font-size: 12px;
      font-family: sans-serif;
      transition: all 0.4s ease-in-out;
    }

    .toggle .labels::after {
      content: attr(data-off);
      position: absolute;
      right: 5px;
      opacity: 1;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
      transition: all 0.4s ease-in-out;
    }

    .toggle .labels::before {
      content: attr(data-on);
      position: absolute;
      left: 5px;
      opacity: 0;
      text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.4);
      transition: all 0.4s ease-in-out;
    }

    .toggle input:checked~.labels::after {
      opacity: 0;
    }

    .toggle input:checked~.labels::before {
      opacity: 1;
    }
  </style>

<style type="text/css">
body{
    background-color: #f8f9fa!important
}
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
}
/* user-dashboard-info-box */
.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
.user-dashboard-info-box .candidates-list .thumb img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    border-radius: 50%;
}

.user-dashboard-info-box .title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0;
}

.user-dashboard-info-box .candidates-list td {
    vertical-align: middle;
}

.user-dashboard-info-box td li {
    margin: 0 4px;
}

.user-dashboard-info-box .table thead th {
    border-bottom: none;
}

.table.manage-candidates-top th {
    border: 0;
}

.user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
    margin-bottom: 10px;
}

.table.manage-candidates-top {
    min-width: 650px;
}

.user-dashboard-info-box .candidate-list-details ul {
    color: #969696;
}

/* Candidate List */
.candidate-list {
    background: #ffffff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #eeeeee;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.candidate-list:hover {
    -webkit-box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    position: relative;
    z-index: 99;
}
.candidate-list:hover a.candidate-list-favourite {
    color: #e74c3c;
    -webkit-box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
    box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
}

.candidate-list .candidate-list-image {
    margin-right: 25px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    border: none;
}
.candidate-list .candidate-list-image img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
}

.candidate-list-title {
    margin-bottom: 5px;
}

.candidate-list-details ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0px;
}
.candidate-list-details ul li {
    margin: 5px 10px 5px 0px;
    font-size: 13px;
}

.candidate-list .candidate-list-favourite-time {
    margin-left: auto;
    text-align: center;
    font-size: 13px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px;
}
.candidate-list .candidate-list-favourite-time span {
    display: block;
    margin: 0 auto;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite {
    display: inline-block;
    position: relative;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border: 1px solid #eeeeee;
    border-radius: 100%;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin-bottom: 20px;
    font-size: 16px;
    color: #646f79;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
    background: #ffffff;
    color: #e74c3c;
}

.candidate-banner .candidate-list:hover {
    position: inherit;
    -webkit-box-shadow: inherit;
    box-shadow: inherit;
    z-index: inherit;
}

.bg-white {
    background-color: #ffffff !important;
}
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
</style>

<script type="text/javascript">
function toogleStatus(id){
  let url = '{{route("toggle-cargodrop-status", ["id"])}}'
  url = url.replace("id", id);

  window.location.href = url
}
</script>
