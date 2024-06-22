@extends('layout')
@section('content')
 <div>   
     <h1>List of Restaurent</h1>
     <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($data as $item )
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td><b>{{$item->name}}</b></td> 
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
    </div>
        
@endsection