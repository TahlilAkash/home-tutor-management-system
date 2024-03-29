@extends('admin.master')
@section('content')
    <div class="container">

        <h1 style="font-size: 20px; font-weight: bold;">Class List</h1>
        <a class=" btn btn-success mb-2" href="{{ route('class.form') }}">Create Class</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Class Name</th>
                    {{-- <th scope="col">Description</th> --}}
                    <th scope="col">Action</th>

                </tr>
            </thead>
            @foreach ($classts as $key => $classt)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <!-- form name property -->
                    <td>{{ $classt->name }}</td>
                    {{-- <td>{{ $classt->description }}</td> --}}
                    <td>
                        <a href="{{ route('class.edit', $classt->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('class.delete', $classt->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            <tbody>

            </tbody>
        </table>
    </div>
    </div>
@endsection
