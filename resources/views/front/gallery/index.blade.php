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
        <a class="col-md-4" onclick="location.href = '{{ route('picture', ['id' => $paint->id]) }}'">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="{{ $paint->image }}" alt="Card image">
            <div class="card-body">
              <p class="card-text"><b>{{ $paint->title }}</b>. {!! $paint->body !!}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
