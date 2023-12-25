@extends('admin.master')

@section('content')
    <div class="container">

        <h1>User Lists</h1>
        <div>
            <a href="{{ route('users.Formcreate') }}" class="btn btn-success">Create new User</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col" style="width: 120px;">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $singleUser)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $singleUser->name }}</td>
                        <td>
                            <img style="border-radius: 60px; width : 60px; height:70px"
                                src="{{ url('/uploads/' . $singleUser->image) }}" alt="img">
                        </td>
                        <td>{{ $singleUser->email }}</td>
                        <td>{{ $singleUser->role }}</td>
                        <td>
                            {{-- <a class="btn btn-success" href="">View</a> --}}
                            <a class="btn btn-primary" href="{{ route('user.edit', $singleUser->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('user.delete', $singleUser->id) }}">Delete</a>
                        </td>

                    </tr>
                @endforeach





            </tbody>
        </table>

    </div>
@endsection
