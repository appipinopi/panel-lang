<?php

return [
    'sign_in' => '登入',
    'go_to_login' => '前往登入',
    'failed' => '找不到符合該憑證的帳號。',

    'forgot_password' => [
        'label' => '忘記密碼？',
        'label_help' => '輸入您的帳號電子郵件以取得重設密碼的指示。',
        'button' => '重設帳號',
    ],

    'reset_password' => [
        'button' => '重設並登入',
    ],

    'two_factor' => [
        'label' => '兩步驟驗證代碼',
        'label_help' => '此帳號需要第二層驗證。請輸入裝置產生的代碼以完成登入。',
        'checkpoint_failed' => '兩步驟驗證代碼無效。',
    ],

    'throttle' => '嘗試登入次數過多。請於 :seconds 秒後再試。',
    'password_requirements' => '密碼必須至少 8 個字元，並建議與其他網站不同。',
    '2fa_must_be_enabled' => '管理員已要求您的帳號必須啟用兩步驟驗證才能使用控制台。',
];
