@extends('layout')
@section('content')
 
<div class="container borderd" style="box-shadow: 1px 2px 10px">
        <h1 class="text-center">User Login Page</h1>

        <form method="post" action="/login/">
            @csrf
          
            <div class="mb-3">
                <h4><label for="email" style="color: #960dad">Email</label></h4>
                <input type="text" class="form-control"name="email" id="email" placeholder="Enter Email" required>
            </div>

            <div class="mb-3">
                <h4><label for="password" style="color: #960dad">Password</label></h4>
                <input type="password" class="form-control"name="password" id="password" placeholder="Enter Password">
            </div>
            </h4>
            <div class="mb-3 text-center " id="btn">
                </h4>
                <button class="btn btn-success">SAVE</button>
            </div><br>

        </form>
    </div>
@endsection
