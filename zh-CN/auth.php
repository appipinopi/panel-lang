<?php

return [
    'sign_in' => '登入',
    'go_to_login' => '前往登入',
    'failed' => '找不到符合该凭证的帐号。',

    'forgot_password' => [
        'label' => '忘记密码？',
        'label_help' => '输入您的帐号电子邮件以取得重设密码的指示。',
        'button' => '重设帐号',
    ],

    'reset_password' => [
        'button' => '重设并登入',
    ],

    'two_factor' => [
        'label' => '两步骤验证代码',
        'label_help' => '此帐号需要第二层验证。请输入装置产生的代码以完成登入。',
        'checkpoint_failed' => '两步骤验证代码无效。',
    ],

    'throttle' => '尝试登入次数过多。请于 :seconds 秒后再试。',
    'password_requirements' => '密码必须至少 8 个字元，并建议与其他网站不同。',
    '2fa_must_be_enabled' => '管理员已要求您的帐号必须启用两步骤验证才能使用控制台。',
];
