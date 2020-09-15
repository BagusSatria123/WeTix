@extends('layouts.dashboard')
@section('content') 
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h3>Users</h3>
                    </div> 

                    <div class="col-4">
                    
                        
                    </div>    
                    </div>    
                    
        </div>
        <div class="card-body p-0">
           <div class="row">
               <div class="col-md-8 offset-md-2">
               <form method="POST" action="{{url('dashboard/user/update/'.$user->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{old('email') ?? $user->email}}">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
               </form>
               </div>
           </div>
        </div>
    </div>  
@endsection