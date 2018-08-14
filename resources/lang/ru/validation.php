<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле :attribute должно быть принято.',
    'active_url' => 'Поле :attribute не является допустимым URL-адресом.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой после или равной :date.',
    'alpha' => 'Поле :attribute могут содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры и тире.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой до или равной :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть числом между :min и :max.',
        'file' => 'Поле :attribute должно быть файлом с размером между :min и :max килобайт.',
        'string' => 'Поле :attribute должно быть строкой с размером между :min и :max символами.',
        'array' => 'Поле :attribute должно быть массивом с размером между :min и :max элементами.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed' => 'Поле :attribute не соответствует подтверждаемому.',
    'date' => 'Поле :attribute не является действительной датой.',
    'date_format' => 'Поле :attribute не соответствует указанному формату даты: :format.',
    'different' => 'Поле :attribute и поля :other должно быть разным.',
    'digits' => 'Поле :attribute должно быть числом длиной :digits цифр.',
    'digits_between' => 'Поле :attribute должно быть числом длиной между :min и :max цифрами.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute включает в массив повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'exists' => 'Поле :attribute является недействительным.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно быть заполнено.',
    'gt' => [
        'numeric' => 'Поле :attribute должно быть числом более :value.',
        'file' => 'Поле :attribute должно быть файлом с размером более :value килобайт.',
        'string' => 'Поле :attribute должно быть строкой с размером более :value символов.',
        'array' => 'Поле :attribute должно быть массивом с размером более :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно быть числом более или равным :value.',
        'file' => 'Поле :attribute должно быть файлом с размером более или равным :value килобайт.',
        'string' => 'Поле :attribute должно быть строкой с размером более или равным :value символов.',
        'array' => 'Поле :attribute должно быть массивом с размером более или равным :value элементов.',
    ],
    'image' => 'Поле :attribute должно быть изображение.',
    'in' => 'Поле :attribute является недействительным.',
    'in_array' => 'Поле :attribute не существует среди значений поля :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Поле :attribute должно быть действительной JSON строкой.',
    'lt' => [
        'numeric' => 'Поле :attribute должно быть числом менее :value.',
        'file' => 'Поле :attribute должно быть файлом с размером менее :value килобайт.',
        'string' => 'Поле :attribute должно быть строкой с размером менее :value символов.',
        'array' => 'Поле :attribute должно быть массивом с размером менее :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть числом менее или равным :value.',
        'file' => 'Поле :attribute должно быть файлом с размером менее или равным :value килобайт.',
        'string' => 'Поле :attribute должно быть строкой с размером менее или равным :value символов.',
        'array' => 'Поле :attribute должно быть массивом с размером менее или равным :value элементов.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не должно быть числом более :max.',
        'file' => 'Поле :attribute не должно быть файлом с размером более :max килобайт.',
        'string' => 'Поле :attribute не должно быть строкой с размером более :max символов.',
        'array' => 'Поле :attribute не должно быть массивом с размером более :max элементов.',
    ],
    'mimes' => 'Поле :attribute должно быть файлом следующего типа: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом следующего типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute не должно быть числом менее :min.',
        'file' => 'Поле :attribute не должно быть файлом с размером менее :min килобайт.',
        'string' => 'Поле :attribute не должно быть строкой с размером менее :min символов.',
        'array' => 'Поле :attribute не должно быть массивом с размером менее :min элементов.',
    ],
    'not_in' => 'Поле :attribute является недействительным.',
    'not_regex' => 'Поле :attribute не соответствует действительному формату.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'present' => 'Поле :attribute должно быть представлено.',
    'regex' => 'Поле :attribute не соответствует действительному формату.',
    'required' => 'Поле :attribute является обязательным для заполнения.',
    'required_if' => 'Поле :attribute является обязательным если значением поля :other является :value.',
    'required_unless' => 'Поле :attribute является обязательным если значением поля :other не является :values.',
    'required_with' => 'Поле :attribute является обязательным если любое поле из :values представлено.',
    'required_with_all' => 'Поле :attribute является обязательным если все поля из :values представлены.',
    'required_without' => 'Поле :attribute field является обязательным если любое поле из :values не представлено.',
    'required_without_all' => 'Поле :attribute является обязательным если ни одно поле из :values не представлено.',
    'same' => 'Поле :attribute и поле :other должны иметь одинаковые значения.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть числом равным :size.',
        'file' => 'Поле :attribute должно быть файлом с размером :size килобайт.',
        'string' => 'Поле :attribute должно быть строкой с размером :size символов.',
        'array' => 'Поле :attribute должно быть массивом с размером :size элементов.',
    ],
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Поле :attribute имеет значение, которое уже было выбрано другим пользователем.',
    'uploaded' => 'Поле :attribute содержит файл, который не удалось загрузить.',
    'url' => 'Поле :attribute не соответствует действительному формату URL.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
