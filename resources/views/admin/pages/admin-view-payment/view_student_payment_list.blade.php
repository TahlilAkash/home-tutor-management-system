@extends('admin.master')

@section('content')

    <div class="container">
      {{-- report generate --}}
      <button class="btn btn-success" onclick="printContent('printDiv')">Print</button>
      <div id="printDiv">
        {{-- end of report generate part --}}

        <h1 style="font-size: 20px; font-weight: bold;">Student Payment List</h1>
      
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Serial</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Transaction Id</th>
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
                      <td>{{$singleUser->tran_id}}</td>
                      <td>{{$singleUser->amount}}.BDT</td>
                      
                  </tr>
                  @endforeach

              </tbody>
        </table>
      </div>

      {{-- report generate part this last div --}}
    </div>

{{-- using for report generate --}}
@endsection
    @push('yourJsCode')
    <script type="text/javascript">
          
      function printContent(el){
          var restorepage = $('body').html();
          var printcontent = $('#' + el).clone();
          $('body').empty().html(printcontent);
          window.print();
          $('body').html(restorepage);
      }

    </script>
    @endpush
 {{-- script for report generate  --}}