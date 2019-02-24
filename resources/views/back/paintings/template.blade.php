@extends('back.layout')

@section('css')
    <style>
        textarea { resize: vertical; }
    </style>
    <link href="{{ asset('adminlte/plugins/colorbox/colorbox.css') }}" rel="stylesheet">
@endsection

@section('main')

    @yield('form-open')
        {{ csrf_field() }}

        <div class="row">

            <div class="col-md-8">
                @if (session('painting-ok'))
                    @component('back.components.alert')
                        @slot('type')
                            success
                        @endslot
                        {!! session('painting-ok') !!}
                    @endcomponent
                @endif
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Title'),
                    ],
                    'input' => [
                        'name' => 'title',
                        'value' => isset($painting) ? $painting->title : '',
                        'input' => 'text',
                        'required' => true,
                    ],
                ])
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Slug'),
                    ],
                    'input' => [
                        'name' => 'slug',
                        'value' => isset($painting) ? $painting->slug : '',
                        'input' => 'text',
                        'title' => __('Slug'),
                        'required' => true,
                    ],
                ])
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Price'),
                    ],
                    'input' => [
                        'name' => 'price',
                        'value' => isset($painting) ? $painting->price : '',
                        'input' => 'text',
                        'title' => __('Price'),
                        'required' => true,
                    ],
                ])
                @include('back.partials.boxinput', [
                    'box' => [
                        'type' => 'box-primary',
                        'title' => __('Body'),
                    ],
                    'input' => [
                        'name' => 'body',
                        'value' => isset($painting) ? $painting->body : '',
                        'input' => 'textarea',
                        'rows' => 10,
                        'required' => true,
                    ],
                ])
                <button type="submit" class="btn btn-primary">@lang('Submit')</button>
            </div>

            <div class="col-md-4">

                @component('back.components.box')
                    @slot('type')
                        success
                    @endslot
                    @slot('boxTitle')
                        @lang('Details')
                    @endslot
                    @include('back.partials.input', [
                        'input' => [
                            'name' => 'active',
                            'value' => isset($painting) ? $painting->active : false,
                            'input' => 'checkbox',
                            'title' => __('Status'),
                            'label' => __('Active'),
                        ],
                    ])
                @endcomponent

                @component('back.components.box')
                    @slot('type')
                        primary
                    @endslot
                    @slot('boxTitle')
                        @lang('Image')
                    @endslot
                    <img id="img" src="@isset($painting) {{ $painting->image }} @endisset" alt="" class="img-responsive">
                    @slot('footer')
                        <div class="{{ $errors->has('image') ? 'has-error' : '' }}">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <a href="" class="popup_selector btn btn-primary" data-inputid="image">@lang('Select an image')</a>
                                </div>
                                <!-- /btn-group -->
                                <input class="form-control" type="text" id="image" name="image" value="{{ old('image', isset($painting) ? $painting->image : '') }}">
                            </div>
                            {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
                        </div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <!-- /.row -->
    </form>

@endsection

@section('js')

    <script src="{{ asset('adminlte/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/voca/voca.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>

        CKEDITOR.replace('body', {customConfig: '/adminlte/js/ckeditor.js'})

        $('.popup_selector').click( function (event) {
            event.preventDefault()
            var updateID = $(this).attr('data-inputid')
            var elfinderUrl = '/elfinder/popup/'
            var triggerUrl = elfinderUrl + updateID
            $.colorbox({
                href: triggerUrl,
                fastIframe: true,
                iframe: true,
                width: '70%',
                height: '70%'
            })
        })

        function processSelectedFile(filePath, requestingField) {
            $('#' + requestingField).val('\\' + filePath)
            $('#img').attr('src', '\\' + filePath)
        }

        $('#slug').keyup(function () {
            $(this).val(v.slugify($(this).val()))
        })

    </script>

@endsection
