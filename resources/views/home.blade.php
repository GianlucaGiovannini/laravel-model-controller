@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-5 pb-2">

        @foreach($movies as $movie)
        <div class="col">
            <div class="cards p-1">
                <div class="card_title">
                    <h3>
                        {{$movie->title}}
                    </h3>
                    <small>
                        Titolo Originale: 
                        <strong> {{$movie->original_title}} </strong>
                    </small>
                </div>
                <div class="card_info">
                    <div class="nazionality">
                        Nazionalità:  <strong> {{$movie->title}} </strong>
                    </div>
                    <div class="release">
                        Uscita: <strong> {{$movie->date}} </strong>
                    </div>
                </div>
                <div class="rate">
                    Voto: <strong> {{$movie->vote}} </strong>
                </div>

                
            </div>
       
        </div>
        @endforeach

        </div>
        
        
</div>


@endsection