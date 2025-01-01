@extends('layouts.app')

@section('content')
<div class="container">

<button class="button">Add User</button>
    <div class="row justify-content-center">
        <div class="col-md-8" style="width:100%; padding-top:5px;">
            <!-- populate the users table from the users database table -->
            <table class="table" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>Edit Delete</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
