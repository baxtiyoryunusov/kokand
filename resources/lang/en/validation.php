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

    'accepted' => 'Bu :attribute must be accepted.',
    'active_url' => 'Bu :attribute is not a valid URL.',
    'after' => 'Bu :attribute must be a date after :date.',
    'after_or_equal' => 'Bu :attribute must be a date after or equal to :date.',
    'alpha' => 'Bu :attribute may only contain letters.',
    'alpha_dash' => 'Bu :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'Bu :attribute may only contain letters and numbers.',
    'array' => 'Bu :attribute must be an array.',
    'before' => 'Bu :attribute must be a date before :date.',
    'before_or_equal' => 'Bu :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'Bu :attribute must be between :min and :max.',
        'file' => 'Bu :attribute must be between :min and :max kilobytes.',
        'string' => 'Bu :attribute must be between :min and :max characters.',
        'array' => 'Bu :attribute must have between :min and :max items.',
    ],
    'boolean' => 'Bu :attribute field must be true or false.',
    'confirmed' => 'Bu :attribute confirmation does not match.',
    'date' => 'Bu :attribute is not a valid date.',
    'date_equals' => 'Bu :attribute must be a date equal to :date.',
    'date_format' => 'Bu :attribute does not match the format :format.',
    'different' => 'Bu :attribute and :other must be different.',
    'digits' => 'Bu :attribute must be :digits digits.',
    'digits_between' => 'Bu :attribute must be between :min and :max digits.',
    'dimensions' => 'Bu :attribute has invalid image dimensions.',
    'distinct' => 'Bu :attribute field has a duplicate value.',
    'email' => 'Bu :attribute must be a valid email address.',
    'ends_with' => 'Bu :attribute must end with one of the following: :values.',
    'exists' => 'Bu selected :attribute is invalid.',
    'file' => 'Bu :attribute must be a file.',
    'filled' => 'Bu :attribute field must have a value.',
    'gt' => [
        'numeric' => 'Bu :attribute must be greater than :value.',
        'file' => 'Bu :attribute must be greater than :value kilobytes.',
        'string' => 'Bu :attribute must be greater than :value characters.',
        'array' => 'Bu :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Bu :attribute must be greater than or equal :value.',
        'file' => 'Bu :attribute must be greater than or equal :value kilobytes.',
        'string' => 'Bu :attribute must be greater than or equal :value characters.',
        'array' => 'Bu :attribute must have :value items or more.',
    ],
    'image' => 'Bu :attribute must be an image.',
    'in' => 'Bu selected :attribute is invalid.',
    'in_array' => 'Bu :attribute field does not exist in :other.',
    'integer' => 'Bu :attribute must be an integer.',
    'ip' => 'Bu :attribute must be a valid IP address.',
    'ipv4' => 'Bu :attribute must be a valid IPv4 address.',
    'ipv6' => 'Bu :attribute must be a valid IPv6 address.',
    'json' => 'Bu :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'Bu :attribute must be less than :value.',
        'file' => 'Bu :attribute must be less than :value kilobytes.',
        'string' => 'Bu :attribute must be less than :value characters.',
        'array' => 'Bu :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Bu :attribute must be less than or equal :value.',
        'file' => 'Bu :attribute must be less than or equal :value kilobytes.',
        'string' => 'Bu :attribute must be less than or equal :value characters.',
        'array' => 'Bu :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Bu :attribute may not be greater than :max.',
        'file' => 'Bu :attribute may not be greater than :max kilobytes.',
        'string' => 'Bu :attribute may not be greater than :max characters.',
        'array' => 'Bu :attribute may not have more than :max items.',
    ],
    'mimes' => 'Bu :attribute must be a file of type: :values.',
    'mimetypes' => 'Bu :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Bu :attribute  kamida :minta belgidan iborat boʻlishi kerak.',
        'file' => 'Bu :attribute must be at least :min kilobytes.',
        'string' => ' :attribute  kamida :minta belgidan iborat boʻlishi kerak.',
        'array' => 'Bu :attribute must have at least :min items.',
    ],
    'not_in' => 'Bu selected :attribute is invalid.',
    'not_regex' => 'Bu :attribute format is invalid.',
    'numeric' => 'Bu :attribute must be a number.',
    'password' => 'Bu password is incorrect.',
    'present' => 'Bu :attribute field must be present.',
    'regex' => 'Bu :attribute format is invalid.',
    'required' => ':attribute maydoni talab qilinadi.',
    'required_if' => 'Bu :attribute field is required when :oBur is :value.',
    'required_unless' => 'Bu :attribute field is required unless :oBur is in :values.',
    'required_with' => ' :attribute maydoni talab qilinadi.',
    'required_with_all' => 'Bu :attribute field is required when :values are present.',
    'required_without' => 'Bu :attribute field is required when :values is not present.',
    'required_without_all' => 'Bu :attribute field is required when none of :values are present.',
    'same' => 'Bu :attribute ga  mos kelishi kerak..',
    'size' => [
        'numeric' => 'Bu :attribute must be :size.',
        'file' => 'Bu :attribute must be :size kilobytes.',
        'string' => 'Bu :attribute must be :size characters.',
        'array' => 'Bu :attribute must contain :size items.',
    ],
    'starts_with' => 'Bu :attribute must start with one of Bu following: :values.',
    'string' => 'Bu :attribute must be a string.',
    'timezone' => 'Bu :attribute must be a valid zone.',
    'unique' => 'Bu :attribute has already been taken.',
    'uploaded' => 'Bu :attribute failed to upload.',
    'url' => 'Bu :attribute format is invalid.',
    'uuid' => 'Bu :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'dayjest'=>'Dayjest E-Pochta',
        'fullname'=>'Isim &  Familiya',
        'phone'=>'Telefon',
        'password'=>'Parol',
        'confirm'=>'Parol takrori',
        'email'=>'E-Pochta',
        'reg_email'=>'E-Pochta',
        'reg_name'=>'Isim &  Familiya',
        'reg_password'=>'Parol',
    ],

];
