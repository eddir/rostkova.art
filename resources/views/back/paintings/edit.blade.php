@extends('back.paintings.template')

@section('form-open')
    <form method="post" action="{{ route('paintings.update', [$painting->id]) }}">
        {{ method_field('PUT') }}
@endsection
