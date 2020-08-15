@extends('layouts.admin')
@section('content')
        <h1>Create Category</h1>
{{--  blade comment 
    @if($erros->hasAny())
        @foreach($erros->all() as $error)
        <div class="alert alert-danger">
        {{ $error }}
        </div>
        @endforeach
     @endif
--}}


        <form action="{{ route('room.store') }}" method="post">
        <!-- CSRF Token -->
      <!-- <input type="hidden" name="_token" value="{{csrf_token() }}">-->
      @csrf

      <div class="form-group">
                <label for="Room_Number">Room Number</label>
                <input type="text" name="Room_Number" class="form-control @error('Room_Number') is-invalid @enderror" id="Room_Number" value="{{ old('Room_Number') }}">  <!-- old method used to view last value assigned it and using in post -->
                     @error('Room_Number')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror
            </div>

            <div class="form-group">
                <label for="Room_Type">Room Type</label>
                <input type="text" name="Room_Type" class="form-control @error('Room_Type') is-invalid @enderror" id="Room_Type" value="{{ old('Room_Type') }}">  <!-- old method used to view last value assigned it and using in post -->
                     @error('Room_Type')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">  <!-- old method used to view last value assigned it and using in post -->
                     @error('name')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror
            </div>

            <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="Description" class="form-control @error('Description') is-invalid @enderror" id="Description"> {{ old('Description') }} </textarea>  <!-- old method used to view last value assigned it and using in post -->
                     @error('Description')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror
            </div> 

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image[]" class="form-control @error('image') is-invalid @enderror" id="image" multiple>  <!-- old : method used to view last value assigned it and using in post -->
                     @error('image')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror
            </div>
            
           
            
            <div class="form-group">
                <label for="price">Price Per Night</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}">  <!-- old method used to view last value assigned it and using in post -->
                     @error('price')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror
            </div>

            <div class="form-group ">
                <label for="name">Status</label>
                <div class="form-check @error('status') is-invalid @enderror">
                    <input class="form-check-input" type="radio" name="status" id="status-Available" value="Available" @if(old('status') == 'Available') checked @endif>
                    <label class="form-check-label" for="status-Available">
                    Available
                    </label>
                </div>
                <div class="form-check @error('status') is-invalid @enderror">
                    <input class="form-check-input" type="radio" name="status" id="status-Unavailable" value="Unavailable" @if(old('status') == 'Unavailable') checked @endif>
                    <label class="form-check-label" for="status-Unavailable">
                        UNavailable
                    </label>
                </div>

                @error('parent_id')
                    <p class="text-danger">{{ $message }}</p>  
                    @enderror

                <button type="submit" class="btn btn-primary">Add</button>



        </form>
        @endsection


        


<!--

    </div>
     Optional JavaScript 
    jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>

</html
-->