@extends('layouts.base')

@section('page-title')
    {{$comic['title']}}
@endsection

@section('page-content')
    <h1>{{$comic['series']}}</h1>
    
@endsection