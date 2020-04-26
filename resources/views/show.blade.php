@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <h2 class="text-center card-header" > {{$listing->name}}
  
                     <span class=" float-right"><a  class="btn btn-primary" href="/">GO back</a> </span>
                  </h2>
                       <div class="list-group">
                       
                      <div class="list-group-item">
                       WEBSITE:-   <a href="/{{$listing->website}}"> {{$listing->website}}</a>
                      </div>
                      <div class="list-group-item">
                       EMAIL:-   <a href="mailto:{{$listing->email}}?Subject=Hello%20again" target="_top">{{$listing->email}}</a>
                      </div>
                      <div class="list-group-item">
                       PHONE:-   {{$listing->phone}}
                      </div>
                      <div class="list-group-item">
                       BIO:-    {{$listing->bio}}
                      </div>
                     

                  
                      
                   
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
