@extends('layouts.admin')

       @section('content')
<!-- Flash Message -->
       @if(session()->has('alert.success'))
       <div class="alert alert-success">
       {{ session('alert.success') }}
       </div>
       @endif
        
     <div class="d-flex">
        <h1 class="h3 mb-4 text-gray-800">View Rooms</h1>

        <div class="ml-auto">
        <a href="{{ route('room.create') }}" class="btn btn-outline-success ">Add Room</a>
        </div>
    </div>
        <table class="table">
            <thead>
                <tr>

                   <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Description</th>
                    <th>Status </th>
                    
                    
                    
                </tr>
            </thead>
            <tbody>

                @foreach($rooms as $room)  <!--blade syntax directive -->
                <tr>
                   
                    <td>{{ $room->Room_Number }}</td>
                    <td>{{ $room->Room_Type }}</td>
                    <td>{!! $room->description !!}</td>
                    <td>{{ $room->Status }}</td> 
                   
                    
                    
                    <td class="d-flex "><a href="{{ route('room.edit' , [$room->id]) }}" class="btn btn-primary mr-2">Edit</a>
                    <form method="post" action="{{ route('room.destroy', [$room->id]) }}">
                   <!-- <input type="hidden" name="_method" value="delete"> -->
                   @method('delete')
                   <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                   @csrf
                       <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    </td>
                </tr>
               
               @endforeach
            </tbody>

            
        </table>
      
        @endsection


       