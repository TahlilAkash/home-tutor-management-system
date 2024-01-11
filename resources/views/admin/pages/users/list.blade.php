@extends('admin.master')

@section('content')
    <div class="container">

        <h1 style="font-size: 20px; font-weight: bold;">User Lists</h1>
        <div>
            <a href="{{ route('users.Formcreate') }}" class="btn btn-success mb-2">Create new User</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $singleUser)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $singleUser->name }}</td>
                        <td>
                            <img class="user-image"
                                style="width : 70px; height:70px; object-fit: cover; object-position: top; border: 1px solid rgb(172, 169, 169); border-radius:60%; color:black;"
                                src="{{ url('/uploads/' . $singleUser->image) }}" alt="img">
                        </td>
                        <td>{{ $singleUser->email }}</td>

                        <td>{{ $singleUser->role }}</td>
                        <td>{{ $singleUser->contact }}</td>

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
