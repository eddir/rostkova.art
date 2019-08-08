@extends('front.layout')

@section('title')
    Наталья Росткова
@endsection

@section('main')
<div class="container">
   	<div class="row">
        <div class="col-lg-6 col-xs-12">

            <div class="card">
                <div class="card-body">
                	{!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
