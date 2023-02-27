@extends('layouts/app')
@section('title')
    Inventory
@endsection
@section('sectioncss')
    <link href="{{ asset('/css/showAll.css') }}" rel="stylesheet" />
@endsection
@section('textTitle')
    Here are your bikes!
@endsection
@section('content')
    <div id="show_all_container">
        <div id="item-container">
            @foreach ($viewData["bikes"] as $bike)
                <a href="{{route('bike.show', ['id'=>$bike->id])}}">
                    <div class="item">
                        <img src="{{ asset('/images/bikes/'.$bike->image)}}"/>
                        <p class="item_title"> {{$bike->name}} </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection