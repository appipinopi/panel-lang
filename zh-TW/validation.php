<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 驗證語系文字
    |--------------------------------------------------------------------------
    |
    | 下列文字為驗證器使用的預設錯誤訊息。某些規則有不同版本（例如大小相關規則）。
    |
    */

    'accepted' => ':attribute 必須被接受。',
    'active_url' => ':attribute 不是有效的網址。',
    'after' => ':attribute 必須是晚於 :date 的日期。',
    'after_or_equal' => ':attribute 必須是等於或晚於 :date 的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、數字與連字號。',
    'alpha_num' => ':attribute 只能包含字母與數字。',
    'array' => ':attribute 必須為陣列。',
    'before' => ':attribute 必須是早於 :date 的日期。',
    'before_or_equal' => ':attribute 必須是等於或早於 :date 的日期。',
    'between' => [
        'numeric' => ':attribute 必須介於 :min 到 :max 之間。',
        'file' => ':attribute 必須介於 :min 到 :max KB 之間。',
        'string' => ':attribute 必須介於 :min 到 :max 個字元之間。',
        'array' => ':attribute 必須有 :min 到 :max 個項目。',
    ],
    'boolean' => ':attribute 欄位必須為 true 或 false。',
    'confirmed' => ':attribute 的確認欄位不相符。',
    'date' => ':attribute 不是有效的日期。',
    'date_format' => ':attribute 不符合格式 :format。',
    'different' => ':attribute 與 :other 必須不同。',
    'digits' => ':attribute 必須是 :digits 位數。',
    'digits_between' => ':attribute 必須介於 :min 到 :max 位數。',
    'dimensions' => ':attribute 的圖片尺寸無效。',
    'distinct' => ':attribute 欄位含有重複值。',
    'email' => ':attribute 必須是有效的電子郵件地址。',
    'exists' => '所選的 :attribute 非法。',
    'file' => ':attribute 必須為檔案。',
    'filled' => ':attribute 欄位為必填。',
    'image' => ':attribute 必須為圖片。',
    'in' => '所選的 :attribute 非法。',
    'in_array' => ':attribute 欄位在 :other 中不存在。',
    'integer' => ':attribute 必須為整數。',
    'ip' => ':attribute 必須為有效的 IP 位址。',
    'json' => ':attribute 必須為有效的 JSON 字串。',
    'max' => [
        'numeric' => ':attribute 不能大於 :max。',
        'file' => ':attribute 不能大於 :max KB。',
        'string' => ':attribute 不能超過 :max 個字元。',
        'array' => ':attribute 不能超過 :max 個項目。',
    ],
    'mimes' => ':attribute 必須為以下類型的檔案：:values。',
    'mimetypes' => ':attribute 必須為以下類型的檔案：:values。',
    'min' => [
        'numeric' => ':attribute 必須至少為 :min。',
        'file' => ':attribute 必須至少為 :min KB。',
        'string' => ':attribute 必須至少為 :min 個字元。',
        'array' => ':attribute 必須至少有 :min 個項目。',
    ],
    'not_in' => '所選的 :attribute 非法。',
    'numeric' => ':attribute 必須為數字。',
    'present' => ':attribute 欄位必須存在。',
    'regex' => ':attribute 格式不正確。',
    'required' => ':attribute 欄位為必填。',
    'required_if' => '當 :other 為 :value 時，:attribute 欄位為必填。',
    'required_unless' => '除非 :other 在 :values 中，否則 :attribute 欄位為必填。',
    'required_with' => '當 :values 存在時，:attribute 欄位為必填。',
    'required_with_all' => '當 :values 都存在時，:attribute 欄位為必填。',
    'required_without' => '當 :values 不存在時，:attribute 欄位為必填。',
    'required_without_all' => '當所有 :values 都不存在時，:attribute 欄位為必填。',
    'same' => ':attribute 與 :other 必須相符。',
    'size' => [
        'numeric' => ':attribute 必須為 :size。',
        'file' => ':attribute 必須為 :size KB。',
        'string' => ':attribute 必須為 :size 個字元。',
        'array' => ':attribute 必須包含 :size 個項目。',
    ],
    'string' => ':attribute 必須為字串。',
    'timezone' => ':attribute 必須為有效的時區。',
    'unique' => ':attribute 已被使用。',
    'uploaded' => ':attribute 上傳失敗。',
    'url' => ':attribute 格式不正確。',

    /*
    |--------------------------------------------------------------------------
    | 自訂驗證屬性
    |--------------------------------------------------------------------------
    |
    | 下列文字用於將屬性占位符替換為更友善的描述，例如 E-Mail Address
    |
    */

    'attributes' => [],

    // Pterodactyl 的內部驗證訊息
    'internal' => [
        'variable_value' => ':env 變數',
        'invalid_password' => '提供的密碼不正確。',
    ],
];
