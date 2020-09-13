@extends('layouts.dashboard')
@section('content') 
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h3>Users</h3>
                    </div>   
            </div>
        </div>
        <div class="card-body">
            <table class="table  p-5 table-borderless table-striped table-hover">
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