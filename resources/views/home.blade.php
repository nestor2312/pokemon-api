@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($pokemones['results'] as $key => $poke)  
        <div class="col-md-3">
            <div class="card margin">
                <div class="card-body card-action">           
                    <p> <a class="link" href="{{route('pokemon',['url'=>$key+1])}}">{{$poke['name']}}</a></p>
                </div>
              </div>
        </div>
      @endforeach
    </div>
</div>
@endsection