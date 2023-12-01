@extends('admin_dashboard.admin_layouts.master')

@section('title', 'Create New Student')


@section('css')
@endsection

@section('title_page1')
    Admins
@endsection

@section('title_page2')
    Create New Admin
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('admins.store') }} "
        enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="name">Admin Name:</label>
            <input type="text" name="username" class="form-control" id="name" placeholder="Enter admin name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter admin email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="Enter admin password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <br>
        <input type="submit" value="Add Admin" class="btn btn-success"><br>
    </form>






@endsection

@section('scripts')

@endsection
