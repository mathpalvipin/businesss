@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <h2 class="text-center card-header" > Latest Bussion listings</h2>
   
                    @If(count($listings))
                  
                       <div class="list-group">
                        @foreach( $listings as $listing )
                      <div class="list-group-item">
                       <a href="listing/{{$listing->id}}" style="text-decoration: none" >{{$listing->name}}</a>
                      </div>
                           

                  
                        @endforeach
                 
                        @else
                    <p class="ml-2">no listing yet</p>
                  </div>
                    @endif
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
