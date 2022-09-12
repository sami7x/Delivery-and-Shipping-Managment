use Illuminate\Support\Facades\DB;
@extends("layouts.admin.layout")
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bordered table</h4>
        <p class="card-description">
          Delivery Rider Details
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                    Rider ID
                  </th>
                <th>
                  Full Name
                </th>
                <th>
                    Phone No.
                  </th>
                <th>
                  Address
                </th>
                <th>
                  Gender
                </th>
                <th>
                  License No.
                </th>
                <th>
                  Vehicle No.
                </th>
                <th>
                   Edit
                </th>
                <th>
                  Delete
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($rider as $rider)
                <tr>
                <td>{{$rider['id']}}</td>
                <td>{{$rider['rider_name']}}</td>
                <td>{{$rider['rider_address']}}</td>
                <td>{{$rider['rider_phone']}}</td>
                <td>{{$rider['gender']}}</td>
                <td>{{$rider['license_no']}}</td>
                <td>{{$rider['vehicle_no']}}</td>

                <td>
                    <a href="{{ route('rider-edit', [$rider->id]) }}" class="btn btn-sm btn-warning"> <i class="mdi mdi-table-edit"></i></a>
                </td>
                <td>

                    <a href="{{ route('rider-delete', $rider['id']) }}" class="btn btn-sm btn-danger">  <i  class="mdi mdi-delete " ></i></a>
                </td>



                {{--  <td>
                    <a href="{{route('rider-delete', $rider['rider_id'])}}">Delete</a>
                </td>
                <td>
                    <a href="{{route('rider-edit', $rider['rider_id'])}}">Edit</a>
                </td>  --}}
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection
