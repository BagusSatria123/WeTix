@extends('layouts.dashboard')
@section('content') 
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h3>Users</h3>
                    </div> 

                    <div class="col-4">
                    <form method="GET" action="{{url('dashboard/users')}}">
                    <div class="input-group">
                    <input type="text" class="form-control" name="q">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-sm">Search</button>
                        
                    </div>    
                    </div>    
                    </form>    
                    </div>  
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-borderless table-striped table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Registed</th>
                    <th>Edited</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{($users->currentPage()-1) * $users->perPage() + $loop->iteration}}</td>
                <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>  
@endsection