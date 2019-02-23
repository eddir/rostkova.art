<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Не заполнено :attribute .',
    'active_url'           => 'Введённое :attribute не является ссылкой.',
    'after'                => ':attribute должно быть после даты :date.',
    'after_or_equal'       => ':attribute должно быть датой после или равняться :date.',
    'alpha'                => ':attribute может иметь только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры и тире.',
    'alpha_num'            => ':attribute может содержать только буквы и цифры.',
    'array'                => ':attribute должно быть массивом.',
    'before'               => ':attribute должно быть датой после :date.',
    'before_or_equal'      => ':attribute должно быть датой до или равняться :date.',
    'between'              => [
        'numeric' => ':attribute должен быть :min и :max.',
        'file'    => ':attribute должен быть между :min и :max килобайт.',
        'string'  => ':attribute должен быть между :min и :max символов.',
        'array'   => ':attribute должен быть между :min и :max предметов.',
    ],
    'boolean'              => ':attribute должно быть правдой или ложью.',
    'confirmed'            => ':attribute не подтверждено.',
    'date'                 => ':attribute не является датой.',
    'date_format'          => ':attribute не соответствует формату :format.',
    'different'            => ':attribute и :other должны быть разные.',
    'digits'               => ':attribute должен содержать :digits цифр.',
    'digits_between'       => ':attribute должен содержать между :min и :max цифр.',
    'dimensions'           => ':attribute не является изображением.',
    'distinct'             => ':attribute имеет повторяющиеся значения.',
    'email'                => ':attribute должно быть email адресом.',
    'exists'               => 'Выбранный :attribute является инвалидным.',
    'file'                 => ':attribute должен быть файл.',
    'filled'               => ':attribute должен иметь какое-либо значение.',
    'image'                => ':attribute должен быть изображением.',
    'in'                   => 'Выбранный :attribute некорректный.',
    'in_array'             => ':attribute не состоит в :other.',
    'integer'              => ':attribute должен быть числом.',
    'ip'                   => ':attribute должен быть IP адресом.',
    'ipv4'                 => ':attribute должен быть IPv4 адресом.',
    'ipv6'                 => ':attribute должен быть IPv6 адресом.',
    'json'                 => ':attribute должен быть JSON строкой.',
    'max'                  => [
        'numeric' => ':attribute не может быть больше :max.',
        'file'    => ':attribute не может быть больше :max килобайт.',
        'string'  => ':attribute не может быть больше :max символов.',
        'array'   => ':attribute не может иметь больше :max предметов.',
    ],
    'mimes'                => ':attribute должен быть файлом: :values.',
    'mimetypes'            => ':attribute должен быть файлом с типом: :values.',
    'min'                  => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file'    => ':attribute должен быть не менее :min килобайт.',
        'string'  => ':attribute должен быть не менее :min символов.',
        'array'   => ':attribute должен быть не менее :min предметов.',
    ],
    'not_in'               => 'Выбранное значение :attribute некорректно.',
    'numeric'              => ':attribute должен быть цифрой.',
    'present'              => ':attribute значение должно присутствовать.',
    'regex'                => ':attribute неверный формат.',
    'required'             => ':attribute необходимое значение.',
    'required_if'          => ':attribute значение обязательно, когда :other является :value.',
    'required_unless'      => ':attribute значение обязательно, если :other относится к :values.',
    'required_with'        => ':attribute значение обязательно, когда :values присутствует.',
    'required_with_all'    => ':attribute значение обязательно, когда :values присутствуют.',
    'required_without'     => ':attribute значение обязательно, когда :values не присутствует.',
    'required_without_all' => ':attribute значение обязательно, когда ни один из :values не присутствует.',
    'same'                 => ':attribute и :other должны соответствовать.',
    'size'                 => [
        'numeric' => ':attribute должен иметь размер :size.',
        'file'    => ':attribute должен быть размером :size килобайт.',
        'string'  => ':attribute должен иметь :size символов.',
        'array'   => ':attribute должен содержать :size предметов.',
    ],
    'string'               => ':attribute должен быть строкой.',
    'timezone'             => ':attribute должен иметь корректную зону.',
    'unique'               => ':attribute должен быть уникальным.',
    'uploaded'             => ':attribute не удалось загрузить.',
    'url'                  => ':attribute формат неверный.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'tags' => [
            'regex' => "Тэги, разделённые запятыми (без пробелов), должен иметь максимум 50 символов.",
        ],
        'meta_keywords' => [
            'regex' => "Ключевые слова, разделённые запятыми (без пробелов), должен иметь максимум 50 символов.",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

