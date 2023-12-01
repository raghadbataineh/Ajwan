@extends('admin_dashboard.admin_layouts.master')

@section('title', 'Create New Student')


@section('css')
@endsection

@section('title_page1')
    Categories
@endsection

@section('title_page2')
    Create New Category
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('categories.store') }} "
        enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Category Image:</label>
            <input type="file" class="form-control" name="image" required width="100px" height="100px">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <br>
        <input type="submit" value="Add Category" class="btn btn-success"><br>
    </form>






@endsection

@section('scripts')

@endsection
