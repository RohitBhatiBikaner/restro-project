@extends('layout')
@section('content')

 {{-- <div class="container">
     <h1 class="text-center">Add New Restaurent</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form=control" placeholder="Enter Name Here" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form=control" placeholder="Enter Email Here" >
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form=control" placeholder="Enter Address Here" >
        </div>
    </form> --}}
    {{-- </div> --}}
    <div class="container borderd" style="box-shadow: 1px 2px 10px">
        <h1 class="text-center">Add New Restaurent</h1>

        <form method="post" action="/restaurant/">
            @csrf
            <div class="mb-3">
                <h4><label for="name" style="color: #960dad"> Name:</label></h4>
                <input type="text" class="form-control"name="name"  placeholder="Enter Name"
                    required>
            </div>

            <div class="mb-3">
                <h4><label for="email" style="color: #960dad">Email</label></h4>
                <input type="text" class="form-control"name="email" id="fees" placeholder="Enter Fees" required>
            </div>

            <div class="mb-3">
                <h4><label for="address" style="color: #960dad">Address</label></h4>
                <input type="text" class="form-control"name="address" id="discount" placeholder="Enter Address">
            </div>

            </h4>
            <div class="mb-3 text-center " id="btn">
                </h4>
                <button class="btn btn-success">SAVE</button>
            </div><br>

        </form>
    </div>

@endsection
