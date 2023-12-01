@extends('admin_dashboard.admin_layouts.master')

@section('title', 'Create New Subject')


@section('css')
@endsection

@section('title_page1')
    Courses
@endsection

@section('title_page2')
    Create New Course
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('courses.store') }} "
        enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="name">Course Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter course name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Choose course category:</label>
            <select name="category" id="category" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="instructor">Instructor Name:</label>
            <input type="text" name="instructor" class="form-control" id="instructor" placeholder="Enter instructor name">
            @error('instructor')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
         
        <div class="form-group">
            <label for="image">Course Image:</label>
            <input type="file" class="form-control" name="image" required width="100px" height="100px">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="lectures">Lectures:</label>
            <input type="number" name="lectures" class="form-control" id="lectures" placeholder="Enter number of lectures">
            @error('lectures')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="number" name="duration" class="form-control" id="duration" placeholder="Enter duration (in weeks)">
            @error('duration')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter course description">
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="active">Active</option>
                <option value="disabled">Not active</option>
            </select>
        </div>

        <br>
        <input type="submit" value="Add Course" class="btn btn-success"><br>
    </form>






@endsection

@section('scripts')

@endsection
