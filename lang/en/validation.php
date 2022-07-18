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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute şundan daha eski bir tarih olmalıdır :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'before' => ':attribute şundan daha önceki bir tarih olmalıdır :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    "between" => array(
        "numeric" => ":attribute :min - :max arasında olmalıdır.",
        "file" => ":attribute :min - :max arasındaki kilobayt değeri olmalıdır.",
        "string" => ":attribute :min - :max arasında karakterden oluşmalıdır.",
        "array" => ":attribute :min - :max arasında nesneye sahip olmalıdır."
    ),
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'current_password' => 'The password is incorrect.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => ':attribute :format biçimi ile eşleşmiyor.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits' => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute :min ile :max arasında rakam olmalıdır.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => ':attribute biçimi geçersiz.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => ':attribute alanı resim dosyası olmalıdır.',
    'in' => ':attribute değeri geçersiz.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ':attribute rakam olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    "max" => array(
        "numeric" => ":attribute değeri :max değerinden küçük olmalıdır.",
        "file" => ":attribute değeri :max kilobayt değerinden küçük olmalıdır.",
        "string" => ":attribute değeri :max karakter değerinden küçük olmalıdır.",
        "array" => ":attribute değeri :max adedinden az nesneye sahip olmalıdır."
    ),
    'mimes' => ':attribute dosya biçimi :values olmalıdır.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    "min" => array(
        "numeric" => ":attribute değeri :min değerinden büyük olmalıdır.",
        "file" => ":attribute değeri :min kilobayt değerinden büyük olmalıdır.",
        "string" => ":attribute değeri :min karakter değerinden büyük olmalıdır.",
        "array" => ":attribute en az :min nesneye sahip olmalıdır."
    ),
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute rakam olmalıdır.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => ':attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    "required_with" => ":attribute alanı :values varken zorunludur.",
    "required_with_all" => ":attribute alanı :values varken zorunludur.",
    "required_without" => ":attribute alanı :values yokken zorunludur.",
    "required_without_all" => ":attribute alanı :values yokken zorunludur.",
    "same" => ":attribute ile :other eşleşmelidir.",
    "size" => array(
        "numeric" => ":attribute :size olmalıdır.",
        "file" => ":attribute :size kilobyte olmalıdır.",
        "string" => ":attribute :size karakter olmalıdır.",
        "array" => ":attribute :size nesneye sahip olmalıdır."
    ),
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => ':attribute daha önceden kayıt edilmiş.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => ':attribute biçimi geçersiz.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    'attributes' => [],

];
