@extends('layouts.admin')
@section('content')
        <h1>Edit Category</h1>

        <form action="{{ route('admin.categories.update',[$category->id]) }}" method="post">
        <!-- CSRF Token -->
      <!-- <input type="hidden" name="_token" value=" {{csrf_token() }}">
      <input type="hidden" name="_method" value="put">  convrted post method to put in update action -->

             @csrf
             @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @if(old('status') == 'draft') checked @endif" id="name" value="{{ $category->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror

            </div>
            <div class="form-group">
                <label for="parent_id">Parent</label>
                <select name="parent_id" class="form-control @error('parent_id') is-invalid @enderror">
                @error('parent_id')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror

                    <option value="">No Parent</option>
                     @foreach (App\Category::all() as $cat)

                        <option {{ $cat->id == $category->parent_id? 'selected' : '' }} value=" {{$cat->id }} "> {{ $cat->name }}</option>

                        @endforeach
                </select>
            
            </div>

            <div class="form-group">
                <label for="parent_id">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status-published" value="published" {{ $category->status =='published'? 'checked' : ''}}>
                    <label class="form-check-label" for="status-published">
                    Published
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" {{ $category->status == 'draft'? 'checked': ''}}>
                    <label class="form-check-label" for="status-draft">
                        Draft
                    </label>
                </div>

                @error('parent_id')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror


                <button type="submit" class="btn btn-primary">Update</button>



        </form>
    @endsection