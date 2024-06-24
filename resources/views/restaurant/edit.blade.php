@extends('layout')
@section('content')
<div class="container borderd" style="box-shadow: 1px 2px 10px">
    <h1 class="text-center">Edit Restaurent</h1>

    <form method="post" action="add">
        @csrf
        <div class="mb-3">
            <h4><label for="name" style="color: #960dad"> Name:</label></h4>
            <input type="text" class="form-control"name="name" value="{{$data->name}}" placeholder="Enter Name"
                required>
        </div>

        <div class="mb-3">
            <h4><label for="email" style="color: #960dad">Email</label></h4>
            <input type="text" class="form-control"name="email" value="{{$data->email}}" id="fees" placeholder="Enter Fees" required>
        </div>

        <div class="mb-3">
            <h4><label for="address" style="color: #960dad">Address</label></h4>
            <input type="text" class="form-control"name="address"value="{{$data->address}}" id="discount" placeholder="Enter Address">
        </div>

        </h4>
        <div class="mb-3 text-center " id="btn">
            </h4>
            <button class="btn btn-success">SAVE</button>
        </div><br>

    </form>
</div>

@endsection
