@extends('admin.master')

@section('content')

<div class="container">

  <h1 style="font-size: 20px; font-weight: bold;">Student Payment List</h1>
 <div>
 </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($paidStudent as $key=>$singleUser)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$singleUser->name}}</td>
                {{-- <td>
                <img style="border-radius: 60px; width : 60px; height:70px" src="{{url('/uploads/'.$singleUser->image)}}" alt="img">
                </td> --}}
                <td>{{$singleUser->email}}</td>
                <td>{{$singleUser->role}}</td>
                <td>{{$singleUser->amount}}.BDT</td>
                <td>

                </td>

            </tr>

        @endforeach

    </tbody>
  </table>

</div>
@endsection