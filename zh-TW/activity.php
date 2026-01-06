<?php

/**
 * 含不同活動日誌事件的翻譯文字。
 */
return [
    'auth' => [
        'fail' => '登入失敗',
        'success' => '已登入',
        'password-reset' => '已重設密碼',
        'reset-password' => '已請求重設密碼',
        'checkpoint' => '已請求兩步驟驗證',
        'recovery-token' => '使用了兩步驟還原代碼',
        'token' => '已通過兩步驟驗證',
        'ip-blocked' => '來自未列入清單的 IP 位址 (：:identifier) 的請求已被封鎖',
        'sftp' => [
            'fail' => 'SFTP 登入失敗',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => '已將電子郵件從 :old 更改為 :new',
            'password-changed' => '已變更密碼',
        ],
        'api-key' => [
            'create' => '已建立新的 API 金鑰 :identifier',
            'delete' => '已刪除 API 金鑰 :identifier',
        ],
        'ssh-key' => [
            'create' => '已將 SSH 金鑰 :fingerprint 新增至帳戶',
            'delete' => '已從帳戶刪除 SSH 金鑰 :fingerprint',
        ],
        'two-factor' => [
            'create' => '啟用兩步驟驗證',
            'delete' => '停用兩步驟驗證',
        ],
    ],
    'server' => [
        'reinstall' => '已重新安裝伺服器',
        'console' => [
            'command' => '在伺服器上執行了 ":command"',
        ],
        'power' => [
            'start' => '已啟動伺服器',
            'stop' => '已停止伺服器',
            'restart' => '已重新啟動伺服器',
            'kill' => '已終止伺服器程序',
        ],
        'backup' => [
            'download' => '已下載 :name 備份',
            'delete' => '已刪除 :name 備份',
            'restore' => '已還原 :name 備份（已刪除檔案：:truncate）',
            'restore-complete' => '已完成還原 :name 備份',
            'restore-failed' => '無法完成還原 :name 備份',
            'start' => '開始建立新備份 :name',
            'complete' => '已將 :name 備份標示為完成',
            'fail' => '已將 :name 備份標示為失敗',
            'lock' => '已鎖定 :name 備份',
            'unlock' => '已解除鎖定 :name 備份',
        ],
        'database' => [
            'create' => '已建立新資料庫 :name',
            'rotate-password' => '已為資料庫 :name 重新產生密碼',
            'delete' => '已刪除資料庫 :name',
        ],
        'file' => [
            'compress_one' => '已壓縮 :directory:file',
            'compress_other' => '已壓縮 :count 個檔案於 :directory',
            'read' => '已檢視 :file 內容',
            'copy' => '已複製 :file',
            'create-directory' => '已建立目錄 :directory:name',
            'decompress' => '已在 :directory 解壓縮 :files',
            'delete_one' => '已刪除 :directory:files.0',
            'delete_other' => '已刪除 :count 個檔案於 :directory',
            'download' => '已下載 :file',
            'pull' => '已從 :url 下載遠端檔案到 :directory',
            'rename_one' => '已將 :directory:files.0.from 重新命名為 :directory:files.0.to',
            'rename_other' => '已重新命名 :count 個檔案於 :directory',
            'write' => '已寫入新內容至 :file',
            'upload' => '已開始上傳檔案',
            'uploaded' => '已上傳 :directory:file',
        ],
        'sftp' => [
            'denied' => '因權限限制而阻擋 SFTP 存取',
            'create_one' => '已建立 :files.0',
            'create_other' => '已建立 :count 個新檔案',
            'write_one' => '已修改 :files.0 的內容',
            'write_other' => '已修改 :count 個檔案的內容',
            'delete_one' => '已刪除 :files.0',
            'delete_other' => '已刪除 :count 個檔案',
            'create-directory_one' => '已建立 :files.0 目錄',
            'create-directory_other' => '已建立 :count 個目錄',
            'rename_one' => '已將 :files.0.from 重新命名為 :files.0.to',
            'rename_other' => '已重新命名或移動 :count 個檔案',
        ],
        'allocation' => [
            'create' => '已將 :allocation 新增至伺服器',
            'notes' => '已將 :allocation 的備註從 ":old" 更新為 ":new"',
            'primary' => '已將 :allocation 設為主要伺服器配置',
            'delete' => '已刪除 :allocation 配置',
        ],
        'schedule' => [
            'create' => '已建立 :name 工作排程',
            'update' => '已更新 :name 工作排程',
            'execute' => '已手動執行 :name 工作排程',
            'delete' => '已刪除 :name 工作排程',
        ],
        'task' => [
            'create' => '已為 :name 工作排程建立一則 ":action" 任務',
            'update' => '已更新 :name 工作排程的 ":action" 任務',
            'delete' => '已刪除 :name 工作排程的一則任務',
        ],
        'settings' => [
            'rename' => '已將伺服器名稱從 :old 更改為 :new',
            'description' => '已將伺服器描述從 :old 更改為 :new',
        ],
        'startup' => [
            'edit' => '已將 :variable 變數從 ":old" 更改為 ":new"',
            'image' => '已將伺服器的 Docker 映像從 :old 更新為 :new',
        ],
        'subuser' => [
            'create' => '已新增 :email 為子使用者',
            'update' => '已更新 :email 的子使用者權限',
            'delete' => '已移除 :email 作為子使用者',
        ],
    ],
];
