<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 验证语系文字
    |--------------------------------------------------------------------------
    |
    | 下列文字为验证器使用的预设错误讯息。某些规则有不同版本（例如大小相关规则）。
    |
    */

    'accepted' => ':attribute 必须被接受。',
    'active_url' => ':attribute 不是有效的网址。',
    'after' => ':attribute 必须是晚于 :date 的日期。',
    'after_or_equal' => ':attribute 必须是等于或晚于 :date 的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字与连字号。',
    'alpha_num' => ':attribute 只能包含字母与数字。',
    'array' => ':attribute 必须为阵列。',
    'before' => ':attribute 必须是早于 :date 的日期。',
    'before_or_equal' => ':attribute 必须是等于或早于 :date 的日期。',
    'between' => [
        'numeric' => ':attribute 必须介于 :min 到 :max 之间。',
        'file' => ':attribute 必须介于 :min 到 :max KB 之间。',
        'string' => ':attribute 必须介于 :min 到 :max 个字元之间。',
        'array' => ':attribute 必须有 :min 到 :max 个项目。',
    ],
    'boolean' => ':attribute 栏位必须为 true 或 false。',
    'confirmed' => ':attribute 的确认栏位不相符。',
    'date' => ':attribute 不是有效的日期。',
    'date_format' => ':attribute 不符合格式 :format。',
    'different' => ':attribute 与 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 位数。',
    'digits_between' => ':attribute 必须介于 :min 到 :max 位数。',
    'dimensions' => ':attribute 的图片尺寸无效。',
    'distinct' => ':attribute 栏位含有重复值。',
    'email' => ':attribute 必须是有效的电子邮件地址。',
    'exists' => '所选的 :attribute 非法。',
    'file' => ':attribute 必须为档案。',
    'filled' => ':attribute 栏位为必填。',
    'image' => ':attribute 必须为图片。',
    'in' => '所选的 :attribute 非法。',
    'in_array' => ':attribute 栏位在 :other 中不存在。',
    'integer' => ':attribute 必须为整数。',
    'ip' => ':attribute 必须为有效的 IP 位址。',
    'json' => ':attribute 必须为有效的 JSON 字串。',
    'max' => [
        'numeric' => ':attribute 不能大于 :max。',
        'file' => ':attribute 不能大于 :max KB。',
        'string' => ':attribute 不能超过 :max 个字元。',
        'array' => ':attribute 不能超过 :max 个项目。',
    ],
    'mimes' => ':attribute 必须为以下类型的档案：:values。',
    'mimetypes' => ':attribute 必须为以下类型的档案：:values。',
    'min' => [
        'numeric' => ':attribute 必须至少为 :min。',
        'file' => ':attribute 必须至少为 :min KB。',
        'string' => ':attribute 必须至少为 :min 个字元。',
        'array' => ':attribute 必须至少有 :min 个项目。',
    ],
    'not_in' => '所选的 :attribute 非法。',
    'numeric' => ':attribute 必须为数字。',
    'present' => ':attribute 栏位必须存在。',
    'regex' => ':attribute 格式不正确。',
    'required' => ':attribute 栏位为必填。',
    'required_if' => '当 :other 为 :value 时，:attribute 栏位为必填。',
    'required_unless' => '除非 :other 在 :values 中，否则 :attribute 栏位为必填。',
    'required_with' => '当 :values 存在时，:attribute 栏位为必填。',
    'required_with_all' => '当 :values 都存在时，:attribute 栏位为必填。',
    'required_without' => '当 :values 不存在时，:attribute 栏位为必填。',
    'required_without_all' => '当所有 :values 都不存在时，:attribute 栏位为必填。',
    'same' => ':attribute 与 :other 必须相符。',
    'size' => [
        'numeric' => ':attribute 必须为 :size。',
        'file' => ':attribute 必须为 :size KB。',
        'string' => ':attribute 必须为 :size 个字元。',
        'array' => ':attribute 必须包含 :size 个项目。',
    ],
    'string' => ':attribute 必须为字串。',
    'timezone' => ':attribute 必须为有效的时区。',
    'unique' => ':attribute 已被使用。',
    'uploaded' => ':attribute 上传失败。',
    'url' => ':attribute 格式不正确。',

    /*
    |--------------------------------------------------------------------------
    | 自订验证属性
    |--------------------------------------------------------------------------
    |
    | 下列文字用于将属性占位符替换为更友善的描述，例如 E-Mail Address
    |
    */

    'attributes' => [],

    // Pterodactyl 的内部验证讯息
    'internal' => [
        'variable_value' => ':env 变数',
        'invalid_password' => '提供的密码不正确。',
    ],
];
