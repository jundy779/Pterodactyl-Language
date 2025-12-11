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

    'accepted' => ':attribute mesti diterima.',
    'active_url' => ':attribute bukan URL yang sah.',
    'after' => ':attribute mesti berupa tarikh selepas :date.',
    'after_or_equal' => ':attribute mesti berupa tarikh selepas atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash' => ':attribute hanya boleh mengandungi huruf, nombor, dan tanda sempang.',
    'alpha_num' => ':attribute hanya boleh mengandungi huruf dan nombor.',
    'array' => ':attribute mesti berupa array.',
    'before' => ':attribute mesti berupa tarikh sebelum :date.',
    'before_or_equal' => ':attribute mesti berupa tarikh sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute mesti antara :min dan :max.',
        'file' => ':attribute mesti antara :min dan :max kilobait.',
        'string' => ':attribute mesti antara :min dan :max aksara.',
        'array' => ':attribute mesti mempunyai antara :min dan :max item.',
    ],
    'boolean' => 'Medan :attribute mesti true atau false.',
    'confirmed' => 'Pengesahan :attribute tidak sepadan.',
    'date' => ':attribute bukan tarikh yang sah.',
    'date_format' => ':attribute tidak sepadan dengan format :format.',
    'different' => ':attribute dan :other mesti berbeza.',
    'digits' => ':attribute mesti :digits digit.',
    'digits_between' => ':attribute mesti antara :min dan :max digit.',
    'dimensions' => ':attribute mempunyai dimensi imej yang tidak sah.',
    'distinct' => 'Medan :attribute mempunyai nilai pendua.',
    'email' => ':attribute mesti berupa alamat e-mel yang sah.',
    'exists' => ':attribute yang dipilih tidak sah.',
    'file' => ':attribute mesti berupa fail.',
    'filled' => 'Medan :attribute wajib diisi.',
    'image' => ':attribute mesti berupa imej.',
    'in' => ':attribute yang dipilih tidak sah.',
    'in_array' => 'Medan :attribute tidak wujud dalam :other.',
    'integer' => ':attribute mesti berupa integer.',
    'ip' => ':attribute mesti berupa alamat IP yang sah.',
    'json' => ':attribute mesti berupa rentetan JSON yang sah.',
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar daripada :max.',
        'file' => ':attribute tidak boleh lebih besar daripada :max kilobait.',
        'string' => ':attribute tidak boleh lebih besar daripada :max aksara.',
        'array' => ':attribute tidak boleh mempunyai lebih daripada :max item.',
    ],
    'mimes' => ':attribute mesti berupa fail bertipe: :values.',
    'mimetypes' => ':attribute mesti berupa fail bertipe: :values.',
    'min' => [
        'numeric' => ':attribute mesti sekurang-kurangnya :min.',
        'file' => ':attribute mesti sekurang-kurangnya :min kilobait.',
        'string' => ':attribute mesti sekurang-kurangnya :min aksara.',
        'array' => ':attribute mesti mempunyai sekurang-kurangnya :min item.',
    ],
    'not_in' => ':attribute yang dipilih tidak sah.',
    'numeric' => ':attribute mesti berupa nombor.',
    'present' => 'Medan :attribute mesti wujud.',
    'regex' => 'Format :attribute tidak sah.',
    'required' => 'Medan :attribute wajib diisi.',
    'required_if' => 'Medan :attribute wajib diisi apabila :other ialah :value.',
    'required_unless' => 'Medan :attribute wajib diisi kecuali :other ada dalam :values.',
    'required_with' => 'Medan :attribute wajib diisi apabila :values wujud.',
    'required_with_all' => 'Medan :attribute wajib diisi apabila :values wujud.',
    'required_without' => 'Medan :attribute wajib diisi apabila :values tidak wujud.',
    'required_without_all' => 'Medan :attribute wajib diisi apabila tiada :values yang wujud.',
    'same' => ':attribute dan :other mesti sepadan.',
    'size' => [
        'numeric' => ':attribute mesti :size.',
        'file' => ':attribute mesti :size kilobait.',
        'string' => ':attribute mesti :size aksara.',
        'array' => ':attribute mesti mengandungi :size item.',
    ],
    'string' => ':attribute mesti berupa rentetan.',
    'timezone' => ':attribute mesti berupa zon yang sah.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal dimuat naik.',
    'url' => 'Format :attribute tidak sah.',

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

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => 'pembolehubah :env',
        'invalid_password' => 'Kata laluan yang diberikan tidak sah untuk akaun ini.',
    ],
];

