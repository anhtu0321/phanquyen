@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-offset-4">
            <form action="" method="POST" role="form">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" required="required" name="name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="">Re-Password</label>
                    <input type="password" class="form-control" name="repassword">
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <select class="form-control" name="role[]" multiple="multiple">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

@endsection