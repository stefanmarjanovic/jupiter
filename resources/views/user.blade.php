@extends('layouts.app')

@section('content')
<button class="button right-align" data-toggle="modal" data-target="#addUserModal">Add User</button>
<div class="container">
    <div class="row justify-content-center" style="width:100%; padding-top:10px;">
        <div style="width:100%;">
            <!-- Users table-->
            <table class="table " style="width:100%">
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

        <!-- Modal Form -->
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="userFirstName">First Name</label>
                                <input type="text" class="form-control" id="userFirstName" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="userLastName">Last Name</label>
                                <input type="text" class="form-control" id="userLastName" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <label for="userName">Usermame</label>
                                <input type="text" class="form-control" id="userName" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="userEmail">Email</label>
                                <input type="email" class="form-control" id="userEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Password</label>
                                <input type="password" class="form-control" id="userPassword" placeholder="Password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="button" onclick="">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
