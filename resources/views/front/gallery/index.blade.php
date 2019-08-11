@extends('front.layout')

@section('css')
    @if (Auth::check())
      <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    @endif
@endsection

@section('title')
    Галерея
@endsection

@section('main')


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($Paintings as $paint)
        <div class="col-md-4" onclick="location.href = '{{ route('picture', ['id' => $paint->id]) }}'">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{ $paint->thumbnails }}" alt="Card image">
	    <div class="card-body">
	      <b>{{ $paint->title }}</b>. {!! mb_strimwidth(strip_tags($paint->body), 0, 25, '...') !!}
	      <p><a style="margin-top: 10px" class="btn btn-outline-primary">Подробнее</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
