@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Update Account</div>
                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" value="{{ $name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" value="{{ $email }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="current_password" class="form-control" id="current_password" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
