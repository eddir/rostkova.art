@extends('front.layout')

@section('main')

   <!-- content
   ================================================== -->
   <div class="container">
   	<div class="row">
        <div class="col-lg-6 col-xs-12">

            <div class="card">
                <div class="card-body">

                    @if (session('ok'))
                        @component('front.components.alert')
                            @slot('type')
                                success
                            @endslot
                            {!! session('ok') !!}
                        @endcomponent
                    @endif

                    <h1 class="entry-title add-bottom">@lang('Get In Touch With Us')</h1>

                    <p class="lead">По вопросам приобретения и доставки картин оставьте свои контакты ниже.</p>
                    
                    <form method="post" action="{{ route('contacts.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            @if ($errors->has('name'))
                                @component('front.components.error')
                                    {{ $errors->first('name') }}
                                @endcomponent
                            @endif
                            <label for="name">Имя</label>
                            <input id="name" placeholder="Как Вас зовут?" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('type'))
                                @component('front.components.error')
                                    {{ $errors->first('type') }}
                                @endcomponent
                            @endif
                            <label for="type">Способ связи</label>
                            <select name="type" class="custom-select mr-sm-2" id="type">
                                <option selected>Выбрать...</option>
                                <option value="phone">По телефону</option>
                                <option value="email">По электронной почте</option>
                                <option value="telegram">Telegram</option>
                                <option value="whatsapp">WhatsApp</option>
                                <option value="viber">Viber</option>
                                <option value="vk">ВКонтакте</option>
                                <option value="ok">Одноклассники</option>
                            </select>
                            <small id="typeHelp" class="form-text text-muted">Выберите обратный звонок или социальную сеть для связи.</small>
                        </div>
                        <div class="form-group">
                            @if ($errors->has('address'))
                                @component('front.components.error')
                                    {{ $errors->first('address') }}
                                @endcomponent
                            @endif
                            <label for="address">Адрес</label>
                            <input id="address" placeholder="@lang('Address')" type="text" class="form-control" name="address" value="Адрес" required>
                            <small id="typeHelp" class="form-text text-muted">Номер телефона или ссылка на профиль или почту.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea name="message" id="message" class="form-control" placeholder="@lang('Your message')"></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    @if ($errors->has('confirm'))
                                        @component('front.components.error')
                                            {{ $errors->first('confirm') }}
                                        @endcomponent
                                    @endif
                                    <input name="confirm" class="form-check-input" type="checkbox" id="confirm">
                                    <label class="form-check-label" for="confirm">
                                        Согласие на обработку персональных данных
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
   		   		
		</div> <!-- end col-twelve -->
   	</div> <!-- end row -->
</div> <!-- end content --> 
      
@endsection
