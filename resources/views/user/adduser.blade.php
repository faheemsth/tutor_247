@extends('layouts.main')
@section('title', 'Users')
@section('content')
<!-- push external head elements to head -->
@push('head')
<link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/webicons/css/all.css') }}">
@endpush


<form action="/user/store" method="POST">
    @csrf
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" id="first-name" name="first_name" value="{{ old('first_name') }}">
            @if($errors->has('first_name'))
            <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif

        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last-name" name="last_name">
            @if($errors->has('last_name'))
            <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password">
            @if($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" id="user-phone" name="phone">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Gender</label>
            <input type="text" class="form-control" id="user-gender" name="gender">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Facebook Link</label>
            <input type="text" class="form-control" id="facebook-link" name="facebook_link">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Linkedin Link</label>
            <input type="text" class="form-control" id="linedin-link" name="Linkedin_link ">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Twitter Link</label>
            <input type="text" class="form-control" id="twitter-link" name="twitter_link">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Profile Description</label>
            <input type="text" class="form-control" id="profile-description" name="profile_description">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            @if($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Role</label>
            <input type="text" class="form-control" id="role" name="role_id">
        </div>
    </div>
    <button type="submit">Submit</button>
</form>



@push('script')
<script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
<!--server side users table script-->
<!-- <script src="{{ asset('js/custom.js') }}"></script> -->
@endpush
@endsection