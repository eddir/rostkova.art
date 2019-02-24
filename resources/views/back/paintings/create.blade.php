@extends('back.paintings.template')

@section('form-open')
    <form method="post" action="{{ route('paintings.store') }}">
@endsection
