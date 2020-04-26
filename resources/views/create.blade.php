@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard   <span class=" float-right"><a  class="btn btn-primary" href="/home">GO back</a> </span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <form method="post" action="/listing">
  	@csrf
 
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" >
  </div>

   <div class="form-group">
    <label >website</label>
    <input type="text" class="form-control" name="website">
  </div>
     <div class="form-group">
    <label >address</label>
    <input type="text" class="form-control" name="address">
  </div>
     <div class="form-group">
    <label >Bio</label>
    <input type="text" class="form-control" name="bio">
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  name="email" >
    
  </div>
 <div class="form-group">
    <label >Phone</label>
    <input type="number" class="form-control" name="phone">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                

                </div>
            </div>
        </div>
    </div>
</div>

@endsection