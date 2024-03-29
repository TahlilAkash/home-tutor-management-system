@extends('admin.master')



@section('content')
    <div class="container">
        <h1 style="font-size: 20px; font-weight: bold;">Teacher Post List</h1>
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($TeacherList as $key => $TList)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $TList->name }}</td>
                            <td>{{ $TList->role }}</td>
                            <td>{{ $TList->email }}</td>
                            <td>{{ $TList->class_list }}</td>
                            <td>{{ $TList->subject_name }}</td>
                            <td>{{ $TList->salary }} .BDT </td>
                            <td>{{ $TList->contact }}</td>
                            <td>{{ $TList->address }}</td>
                            <td><img class="img" src="{{ url('/uploads/' . $TList->image) }}"
                                    style="width: 50px; height: 50px; object-fit: cover; object-position: top; border: 1px solid rgb(172, 169, 169); border-radius:60%; color:black;"
                                    alt="img"></td>
                            <td>
                                <span class="post-status {{ $TList->status }}">
                                    {{ $TList->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('teacherlist.edit', $TList->id) }}" class="btn btn-success mb-1">Update</a>
                                <a href="{{ route('teacherlist.delete', $TList->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endsection
    </div>
</div>
<style>
    .post-status {
        padding: 3px 5px;
        border-radius: 9px;
        font-weight: bold;
    }

    .post-status.pending {
        color: white;
        background-color: red;
    }

    .post-status.approved {
        color: white;
        background-color: green;
    }

    .table tbody td {
        padding: 5px;
    }
</style>
