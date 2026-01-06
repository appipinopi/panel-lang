<?php

return [
    'notices' => [
        'created' => '已成功建立新的 Nest：:name。',
        'deleted' => '已从面板成功删除所选的 Nest。',
        'updated' => '已成功更新 Nest 的设定选项。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => '已成功汇入此 Egg 与其相关变数。',
            'updated_via_import' => '此 Egg 已使用提供的档案更新。',
            'deleted' => '已成功从面板删除所选的 Egg。',
            'updated' => 'Egg 的设定已成功更新。',
            'script_updated' => 'Egg 的安装脚本已更新，伺服器安装时将会执行。',
            'egg_created' => '已成功建立新的 Egg。您需要重新启动正在执行的 daemon 以套用此 Egg。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '变数 ":variable" 已被删除，重建后将不再提供给伺服器使用。',
            'variable_updated' => '变数 ":variable" 已更新。请重建使用该变数的伺服器以套用变更。',
            'variable_created' => '新的变数已成功建立并指派给此 Egg。',
        ],
    ],
];
