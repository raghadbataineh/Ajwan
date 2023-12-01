@extends('admin_dashboard.admin_layouts.master')

@section('title','Edit Subject')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit Course
@endsection

@section('content')

<div class="container-fluid">
    <h2>Edit Course Information</h2>
     
    <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Course Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $course->name) }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Choose course category:</label>
            <select name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="instructor">Instructor Name:</label>
            <input type="text" name="instructor" class="form-control" id="instructor" placeholder="Enter instructor name" value="{{ old('instructor', $course->instructor) }}">
            @error('instructor')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Course Image:</label>
            <input type="file" class="form-control" name="image" width="100px" height="100px">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Lectures">Lectures:</label>
            <input type="number" name="Lectures" class="form-control" id="lectures" placeholder="Enter number of lectures" value="{{ old('lectures', $course->Lectures) }}">
            @error('lectures')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Duration">Duration:</label>
            <input type="number" name="Duration" class="form-control" id="duration" placeholder="Enter duration (in weeks)" value="{{ old('duration', $course->Duration) }}">
            @error('duration')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter course description" value="{{ old('description', $course->description) }}">
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

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</div>
        


@endsection

@section('scripts')

@endsection