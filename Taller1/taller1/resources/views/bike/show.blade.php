@extends('layouts/app')
@section('title')
    success
@endsection
@section('sectioncss')
    <link href="{{ asset('/css/show.css') }}" rel="stylesheet" />
@endsection
@section('textTitle')
   {{$viewData["bike"]->name}}
@endsection
@section('content')
    <div id="show_container">
        <div id="show_info_container">
            <img id="show_img" src="{{ asset('/images/bikes/'.$viewData["bike"]->image)}}"/>
            <div id="show_info">
                <p class="show_info_general">Stock: {{$viewData["bike"]->stock}}</p>
                <p class="show_info_general">Brand: {{$viewData["bike"]->brand}}</p>
                <p class="show_info_general">Type: {{$viewData["bike"]->type}}</p>
                <p class="show_info_general">Price: {{$viewData["bike"]->price}}</p>
                @if ($viewData["bike"]->shareable == 1)
                    <p class="show_info_general">Public: Yes</p>
                @else
                    <p class="show_info_general">Public: No</p>
                @endif
                <div id="show_description_container">
                    <p class="show_info_general"> Description </p>
                    <p class="show_info_description"> {{$viewData["bike"]->description}}</p>
                </div>
            </div>
        </div>
        <a class="button_link" href="{{ route('bike.remove', ['id'=>$viewData["bike"]->id])}}"><div class="button_container">  <p class="button_text"> Delete Bike </p></div></a>
    </div>
@endsection