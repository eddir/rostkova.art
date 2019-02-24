@extends('back.layout')

@section('css')
    <style>
        .box-body hr+p {
            font-size: x-large;
        }
    </style>
@endsection


@section('main')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <hr>
                    <p>ID</p>
                    {{ $painting->id }}
                    <hr>
                    <p>@lang('Title')</p>
                    {{ $painting->title }}
                    <hr>
                    <p>@lang('Body')</p>
                    {!! $painting->body !!}
                    <hr>
                    <p>@lang('Image')</p>
                    <img src="{{ $painting->image }}" alt="" width="200px">
                    <hr>
                    <p>@lang('Slug')</p>
                    {{ $painting->slug }}
                    <hr>
                    <p>@lang('Status')</p>
                    {{ $painting->active ? __('Active') : __('No Active')}}
                    <hr>
                    <p>@lang('Date Creation')</p>
                    {{ $painting->created_at->formatLocalized('%c') }}
                    <hr>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection
