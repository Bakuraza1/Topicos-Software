@extends('layouts/app')
@section('title')
    Home
@endsection
@section('sectioncss')
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet" />
@endsection
@section('textTitle')
    Welcome to bike
@endsection
    
@section('subTitle')
    <p id="title_text"> Bike is a website where you can add all the bikes you want and then see them </p>
@endsection

@section('content')
    <div id="home_container">
        <div id="actions_container">
            <a class="button_link" href="{{ route('bike.create')}}"><div class="button_container"> <p class="button_text"> Add Bike </p></div></a>
            <a class="button_link" href="{{ route('bike.showAll')}}"><div class="button_container">  <p class="button_text"> See Bikes </p></div></a>
        </div>
    </div>
@endsection