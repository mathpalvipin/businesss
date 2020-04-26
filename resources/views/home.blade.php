@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard  <span class=" float-right"><a  class="btn btn-primary" href="/listing/create">create listing</a> </span>
</div>
                             <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <h2 class="text-center">Your listings</h2>
  <h4>Company </h4>
                    @If(count($listings))
                    <table class="table table-striped">
                       
                        @foreach( $listings as $listing )
                        <tr>
                            <th>{{$listing->name}} </th>
                           <th> <form method="post" action="listing/{{$listing->id}}">
                               @csrf
                               @method('DELETE')
                               <button  type="submit" class="btn-danger btn float-right">delete</button>
                           </form>
                             <a href="/listing/{{$listing->id}}/edit" class="btn btn-info mr-2  float-right">edit</a>
                           

                            </th>


                        </tr>
                        @endforeach
                    </table>
                        @else
                    <p> You don't have any listings yet</p>
                    @endif
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
