@extends('layout')
@section('content')
 <div>   
     <h1>List of Restaurent</h1>
     @if (Session::get('status'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{(Session::get('status'))}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
     @endif
     <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th>Operations</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($data as $item )
            {{-- {{$item}} --}}
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><b>{{$item->name}}</b></td> 
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td><a href="/list{{$item->id}}/delete"  class="fa fa-trash">  </a>
              <a href="/edit{{$item->id}}"  class="fa fa-edit">  </a>
            </td>
            {{-- <td><form method="post" action="/list/{{$item['id']}}">
              @csrf
          @method('delete')
          <button class="button-82-pushable" role="button">
              <span class="button-82-shadow"></span>
              <span class="button-82-edge"></span>
              <span class="button-82-front text" onclick="return confirm('do you really want to delete')" >
                Delete
              </span>
            </button>
          </td> --}}
          </tr>
          
          @endforeach
        </tbody>
      </table>
    </div>
        
@endsection