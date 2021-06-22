@extends('layouts.main')

@section('content')




  <div class="prodotto container-80">
    <h3 class="relative">CURRENT SERIES</h3>
      <div class="ciccio">
        @foreach ($comics as $comic)
          <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
          <h3>{{$comic['series']}}</h3>
        @endforeach
        
        
      </div>
  </div>




@endsection