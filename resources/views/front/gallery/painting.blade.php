@extends('front.layout')

@section('main')

<!-- content
   ================================================== -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-xs-12">

            <div class="card">
                <div class="card-body">
                    <img onclick="openPhotoSwipe()" class="photoswipe" src="{{ $painting->image }}" style="width: 100%"></img>
                    <p class="h1">Название: <b>{{ $painting->title }}</p>
                    <p class="h1">Цена: <b>{{ $painting->price }}₽</p>
                    {!! $painting->body !!}
                </div>
            </div>

        </div>
    </div>
</div>

@include('front.components.photoswipe')

@endsection