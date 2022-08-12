<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain El default error messages used by
    | El validator class. Some of El se rules have multiple versions such
    | as El size rules. Feel free to tweak each of El se messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo debe contener letras.',
    'alpha_dash' => 'El campo :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solo debe contener letras y números.',
    'array' => 'El campo :attribute debe ser una matriz.',
    'before' => 'El campo :attribute debe ser una fecha anterior :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe estar entre :min and :max.',
        'file' => 'El campo :attribute debe estar entre :min and :max kilobytes.',
        'string' => 'El campo :attribute debe estar entre :min and :max characters.',
        'array' => 'El campo :attribute debe tener entre :min and :max items.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no coincide con El campo formato :format.',
    'different' => 'El campo :attribute y :oEl campor deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser :digits digits.',
    'digits_between' => 'El campo :attribute debe estar entre :min y :max digits.',
    'dimensions' => 'El campo :attribute has invalid image dimensions.',
    'distinct' => 'El campo :attribute field has a duplicate value.',
    'email' => 'El campo :attribute must be a valid email address.',
    'ends_with' => 'El campo :attribute must end with one of El campo following: :values.',
    'exists' => 'El campo sel campoected :attribute is invalid.',
    'file' => 'El campo :attribute must be a file.',
    'filled' => 'El campo :attribute field must have a value.',
    'gt' => [
        'numeric' => 'El campo :attribute must be greater than :value.',
        'file' => 'El campo :attribute must be greater than :value kilobytes.',
        'string' => 'El campo :attribute must be greater than :value characters.',
        'array' => 'El campo :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'El campo :attribute must be greater than or equal :value.',
        'file' => 'El campo :attribute must be greater than or equal :value kilobytes.',
        'string' => 'El campo :attribute must be greater than or equal :value characters.',
        'array' => 'El campo :attribute must have :value items or more.',
    ],
    'image' => 'El campo :attribute must be an image.',
    'in' => 'El campo sel campoected :attribute is invalid.',
    'in_array' => 'El campo :attribute field does not exist in :oEl campor.',
    'integer' => 'El campo :attribute must be an integer.',
    'ip' => 'El campo :attribute must be a valid IP address.',
    'ipv4' => 'El campo :attribute must be a valid IPv4 address.',
    'ipv6' => 'El campo :attribute must be a valid IPv6 address.',
    'json' => 'El campo :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'El campo :attribute must be less than :value.',
        'file' => 'El campo :attribute must be less than :value kilobytes.',
        'string' => 'El campo :attribute must be less than :value characters.',
        'array' => 'El campo :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El campo :attribute must be less than or equal :value.',
        'file' => 'El campo :attribute must be less than or equal :value kilobytes.',
        'string' => 'El campo :attribute must be less than or equal :value characters.',
        'array' => 'El campo :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'El campo :attribute must not be greater than :max.',
        'file' => 'El campo :attribute must not be greater than :max kilobytes.',
        'string' => 'El campo :attribute must not be greater than :max characters.',
        'array' => 'El campo :attribute must not have more than :max items.',
    ],
    'mimes' => 'El campo :attribute must be a file of type: :values.',
    'mimetypes' => 'El campo :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'El campo :attribute must be at least :min.',
        'file' => 'El campo :attribute must be at least :min kilobytes.',
        'string' => 'El campo :attribute must be at least :min characters.',
        'array' => 'El campo :attribute must have at least :min items.',
    ],
    'multiple_of' => 'El campo :attribute must be a multiple of :value.',
    'not_in' => 'El campo sel campoected :attribute is invalid.',
    'not_regex' => 'El campo :attribute format is invalid.',
    'numeric' => 'El campo :attribute must be a number.',
    'password' => 'El campo password is incorrect.',
    'present' => 'El campo :attribute field must be present.',
    'regex' => 'El campo :attribute format is invalid.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute field is required when :oEl campor is :value.',
    'required_unless' => 'El campo :attribute field is required unless :oEl campor is in :values.',
    'required_with' => 'El campo :attribute field is required when :values is present.',
    'required_with_all' => 'El campo :attribute field is required when :values are present.',
    'required_without' => 'El campo :attribute field is required when :values is not present.',
    'required_without_all' => 'El campo :attribute field is required when none of :values are present.',
    'prohibited' => 'El campo :attribute field is prohibited.',
    'prohibited_if' => 'El campo :attribute field is prohibited when :oEl campor is :value.',
    'prohibited_unless' => 'El campo :attribute field is prohibited unless :oEl campor is in :values.',
    'same' => 'El campo :attribute and :oEl campor must match.',
    'size' => [
        'numeric' => 'El campo :attribute must be :size.',
        'file' => 'El campo :attribute must be :size kilobytes.',
        'string' => 'El campo :attribute must be :size characters.',
        'array' => 'El campo :attribute must contain :size items.',
    ],
    'starts_with' => 'El campo :attribute must start with one of El campo following: :values.',
    'string' => 'El campo :attribute must be a string.',
    'timezone' => 'El campo :attribute must be a valid timezone.',
    'unique' => 'El campo :attribute has already been taken.',
    'uploaded' => 'El campo :attribute failed to upload.',
    'url' => 'El campo :attribute must be a valid URL.',
    'uuid' => 'El campo :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using El campo
    | convention "attribute.rule" to name El campo lines. This makes it quick to
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
    | El campo following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply hel campops us make our message more expressive.
    |
    */

    'attributes' => [],

];
