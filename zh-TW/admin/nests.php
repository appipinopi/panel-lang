<?php

return [
    'notices' => [
        'created' => '已成功建立新的 Nest：:name。',
        'deleted' => '已從面板成功刪除所選的 Nest。',
        'updated' => '已成功更新 Nest 的設定選項。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => '已成功匯入此 Egg 與其相關變數。',
            'updated_via_import' => '此 Egg 已使用提供的檔案更新。',
            'deleted' => '已成功從面板刪除所選的 Egg。',
            'updated' => 'Egg 的設定已成功更新。',
            'script_updated' => 'Egg 的安裝腳本已更新，伺服器安裝時將會執行。',
            'egg_created' => '已成功建立新的 Egg。您需要重新啟動正在執行的 daemon 以套用此 Egg。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '變數 ":variable" 已被刪除，重建後將不再提供給伺服器使用。',
            'variable_updated' => '變數 ":variable" 已更新。請重建使用該變數的伺服器以套用變更。',
            'variable_created' => '新的變數已成功建立並指派給此 Egg。',
        ],
    ],
];
