@extends('layouts.base')

@section('page-title')
    Home page
@endsection

@section('page-content')
<section  class="sc-grey">
        <div class="container">
            <div class="product-list">
                @foreach ($comics as $index => $comic)
                <div class="card">
                    <a href="{{route("comic",["id"=> $index])}}"> 
                        <li>
                            <img src="{{$comic['thumb']}}">
                            <h5>{{$comic['series']}}</h5>
                        </li>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection