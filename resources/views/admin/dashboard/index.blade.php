@extends("layouts.admin.layout")
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12  col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">
           {{--  Welcome {{auth()->user()->company_name}}  --}}
        </h3>
          <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
        </div>
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <i class="mdi mdi-calendar"></i> Today (16 Jan 2022)
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
              <a class="dropdown-item" href="#">January - March</a>
              <a class="dropdown-item" href="#">March - June</a>
              <a class="dropdown-item" href="#">June - August</a>
              <a class="dropdown-item" href="#">August - November</a>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="{{asset('resources/admin/images/dashboard/people.png')}}" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>15<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">Kathmandu</h4>
                <h6 class="font-weight-normal">Nepal</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total  Delivered Products</p>
              <p class="fs-30 mb-2">{{$productdeliveriesCount}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Remaining Product</p>
              <p class="fs-30 mb-2">{{$productremainingCount}}</p>
              {{--  {{ $user}}  --}}

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Total Picked-Up Product</p>
              <p class="fs-30 mb-2">{{ $cargodeliveriesCount}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Total Remaining Pick-Up</p>
              <p class="fs-30 mb-2">{{$cargoremainingCount}}</p>
            </div>
          </div>
        </div>

      </div>

    </div>


  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Order Details</p>
          <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website.</p>
          <div class="d-flex flex-wrap mb-5">
            <div class="mr-5 mt-3">
              <p class="text-muted">Total Rider</p>
              <h3 class="text-primary fs-30 font-weight-medium">{{$rider}}</h3>
            </div>
            <div class="mr-5 mt-3">
              <p class="text-muted">Total Orders</p>
              <h3 class="text-primary fs-30 font-weight-medium">{{$cargo}}</h3>
            </div>

          </div>
          <canvas id="order-chart"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">To Do Lists</h4>
                <div class="list-wrapper pt-2">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        <li>
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Meeting with Mr Shah
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox" checked>
                                    Interview new riders
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Project meeting with CEO
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox" checked>
                                    Pickup Products
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                Resgister new Rider
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                    </ul>
</div>
<div class="add-items d-flex mb-0 mt-2">
                    <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
                    <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                </div>
            </div>
        </div>
</div>
</div>


@endsection
