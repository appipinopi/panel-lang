<?php

return [
    'location' => [
        'no_location_found' => '找不到符合提供短代码的纪录。',
        'ask_short' => '位置短代码',
        'ask_long' => '位置描述',
        'created' => '已成功建立新位置 (:name)，ID 为 :id。',
        'deleted' => '已成功删除所选位置。',
    ],
    'user' => [
        'search_users' => '输入使用者名称、使用者 ID 或电子邮件',
        'select_search_user' => '要删除的使用者 ID（输入 \"0\" 重新搜寻）',
        'deleted' => '使用者已从面板删除。',
        'confirm_delete' => '确定要从面板删除此使用者吗？',
        'no_users_found' => '找不到符合搜寻条件的使用者。',
        'multiple_found' => '找到多个帐号，因为使用了 --no-interaction 旗标无法删除使用者。',
        'ask_admin' => '此使用者是否为管理员？',
        'ask_email' => '电子邮件地址',
        'ask_username' => '使用者名称',
        'ask_name_first' => '名字',
        'ask_name_last' => '姓氏',
        'ask_password' => '密码',
        'ask_password_tip' => '如要建立随机密码并寄送给使用者，请重新执行此指令 (CTRL+C) 并加上 `--no-password` 旗标。',
        'ask_password_help' => '密码至少 8 个字元，并须包含至少一个大写字母和数字。',
        '2fa_help_text' => [
            '此指令会停用使用者帐号的两步骤验证（如已启用），仅应作为帐号复原用。',
            '若这不是您要执行的动作，请按 CTRL+C 结束此程序。',
        ],
        '2fa_disabled' => ':email 的两步骤验证已被停用。',
    ],
    'schedule' => [
        'output_line' => '已派送工作，执行 `:schedule` (:hash) 的第一个任务。',
    ],
    'maintenance' => [
        'deleting_service_backup' => '正在删除服务备份档案 :file。',
    ],
    'server' => [
        'rebuild_failed' => '在节点 ":node" 上重新建置 ":name" (#:id) 的请求发生错误：:message',
        'reinstall' => [
            'failed' => '在节点 ":node" 上重装 ":name" (#:id) 的请求发生错误：:message',
            'confirm' => '您即将对一组伺服器执行重装，是否继续？',
        ],
        'power' => [
            'confirm' => '您即将对 :count 台伺服器执行 :action，是否继续？',
            'action_failed' => '在节点 ":node" 上对 ":name" (#:id) 执行电源操作失败：:message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP 主机 (例如 smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP 埠号',
            'ask_smtp_username' => 'SMTP 使用者名称',
            'ask_smtp_password' => 'SMTP 密码',
            'ask_mailgun_domain' => 'Mailgun 网域',
            'ask_mailgun_endpoint' => 'Mailgun 端点',
            'ask_mailgun_secret' => 'Mailgun 密钥',
            'ask_mandrill_secret' => 'Mandrill 密钥',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => '请选择用于发送电子邮件的驱动程式',
            'ask_mail_from' => '邮件寄件人地址',
            'ask_mail_name' => '邮件显示名称',
            'ask_encryption' => '加密方法',
        ],
    ],
];
