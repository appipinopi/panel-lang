<?php

return [
    'location' => [
        'no_location_found' => '找不到符合提供短代碼的紀錄。',
        'ask_short' => '位置短代碼',
        'ask_long' => '位置描述',
        'created' => '已成功建立新位置 (:name)，ID 為 :id。',
        'deleted' => '已成功刪除所選位置。',
    ],
    'user' => [
        'search_users' => '輸入使用者名稱、使用者 ID 或電子郵件',
        'select_search_user' => '要刪除的使用者 ID（輸入 \"0\" 重新搜尋）',
        'deleted' => '使用者已從面板刪除。',
        'confirm_delete' => '確定要從面板刪除此使用者嗎？',
        'no_users_found' => '找不到符合搜尋條件的使用者。',
        'multiple_found' => '找到多個帳號，因為使用了 --no-interaction 旗標無法刪除使用者。',
        'ask_admin' => '此使用者是否為管理員？',
        'ask_email' => '電子郵件地址',
        'ask_username' => '使用者名稱',
        'ask_name_first' => '名字',
        'ask_name_last' => '姓氏',
        'ask_password' => '密碼',
        'ask_password_tip' => '如要建立隨機密碼並寄送給使用者，請重新執行此指令 (CTRL+C) 並加上 `--no-password` 旗標。',
        'ask_password_help' => '密碼至少 8 個字元，並須包含至少一個大寫字母和數字。',
        '2fa_help_text' => [
            '此指令會停用使用者帳號的兩步驟驗證（如已啟用），僅應作為帳號復原用。',
            '若這不是您要執行的動作，請按 CTRL+C 結束此程序。',
        ],
        '2fa_disabled' => ':email 的兩步驟驗證已被停用。',
    ],
    'schedule' => [
        'output_line' => '已派送工作，執行 `:schedule` (:hash) 的第一個任務。',
    ],
    'maintenance' => [
        'deleting_service_backup' => '正在刪除服務備份檔案 :file。',
    ],
    'server' => [
        'rebuild_failed' => '在節點 ":node" 上重新建置 ":name" (#:id) 的請求發生錯誤：:message',
        'reinstall' => [
            'failed' => '在節點 ":node" 上重裝 ":name" (#:id) 的請求發生錯誤：:message',
            'confirm' => '您即將對一組伺服器執行重裝，是否繼續？',
        ],
        'power' => [
            'confirm' => '您即將對 :count 台伺服器執行 :action，是否繼續？',
            'action_failed' => '在節點 ":node" 上對 ":name" (#:id) 執行電源操作失敗：:message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP 主機 (例如 smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP 埠號',
            'ask_smtp_username' => 'SMTP 使用者名稱',
            'ask_smtp_password' => 'SMTP 密碼',
            'ask_mailgun_domain' => 'Mailgun 網域',
            'ask_mailgun_endpoint' => 'Mailgun 端點',
            'ask_mailgun_secret' => 'Mailgun 密鑰',
            'ask_mandrill_secret' => 'Mandrill 密鑰',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => '請選擇用於發送電子郵件的驅動程式',
            'ask_mail_from' => '郵件寄件人地址',
            'ask_mail_name' => '郵件顯示名稱',
            'ask_encryption' => '加密方法',
        ],
    ],
];
