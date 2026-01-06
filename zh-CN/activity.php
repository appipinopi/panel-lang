<?php

/**
 * 含不同活动日志事件的翻译文字。
 */
return [
    'auth' => [
        'fail' => '登入失败',
        'success' => '已登入',
        'password-reset' => '已重设密码',
        'reset-password' => '已请求重设密码',
        'checkpoint' => '已请求两步骤验证',
        'recovery-token' => '使用了两步骤还原代码',
        'token' => '已通过两步骤验证',
        'ip-blocked' => '来自未列入清单的 IP 位址 (：:identifier) 的请求已被封锁',
        'sftp' => [
            'fail' => 'SFTP 登入失败',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => '已将电子邮件从 :old 更改为 :new',
            'password-changed' => '已变更密码',
        ],
        'api-key' => [
            'create' => '已建立新的 API 金钥 :identifier',
            'delete' => '已删除 API 金钥 :identifier',
        ],
        'ssh-key' => [
            'create' => '已将 SSH 金钥 :fingerprint 新增至帐户',
            'delete' => '已从帐户删除 SSH 金钥 :fingerprint',
        ],
        'two-factor' => [
            'create' => '启用两步骤验证',
            'delete' => '停用两步骤验证',
        ],
    ],
    'server' => [
        'reinstall' => '已重新安装伺服器',
        'console' => [
            'command' => '在伺服器上执行了 ":command"',
        ],
        'power' => [
            'start' => '已启动伺服器',
            'stop' => '已停止伺服器',
            'restart' => '已重新启动伺服器',
            'kill' => '已终止伺服器程序',
        ],
        'backup' => [
            'download' => '已下载 :name 备份',
            'delete' => '已删除 :name 备份',
            'restore' => '已还原 :name 备份（已删除档案：:truncate）',
            'restore-complete' => '已完成还原 :name 备份',
            'restore-failed' => '无法完成还原 :name 备份',
            'start' => '开始建立新备份 :name',
            'complete' => '已将 :name 备份标示为完成',
            'fail' => '已将 :name 备份标示为失败',
            'lock' => '已锁定 :name 备份',
            'unlock' => '已解除锁定 :name 备份',
        ],
        'database' => [
            'create' => '已建立新资料库 :name',
            'rotate-password' => '已为资料库 :name 重新产生密码',
            'delete' => '已删除资料库 :name',
        ],
        'file' => [
            'compress_one' => '已压缩 :directory:file',
            'compress_other' => '已压缩 :count 个档案于 :directory',
            'read' => '已检视 :file 内容',
            'copy' => '已复制 :file',
            'create-directory' => '已建立目录 :directory:name',
            'decompress' => '已在 :directory 解压缩 :files',
            'delete_one' => '已删除 :directory:files.0',
            'delete_other' => '已删除 :count 个档案于 :directory',
            'download' => '已下载 :file',
            'pull' => '已从 :url 下载远端档案到 :directory',
            'rename_one' => '已将 :directory:files.0.from 重新命名为 :directory:files.0.to',
            'rename_other' => '已重新命名 :count 个档案于 :directory',
            'write' => '已写入新内容至 :file',
            'upload' => '已开始上传档案',
            'uploaded' => '已上传 :directory:file',
        ],
        'sftp' => [
            'denied' => '因权限限制而阻挡 SFTP 存取',
            'create_one' => '已建立 :files.0',
            'create_other' => '已建立 :count 个新档案',
            'write_one' => '已修改 :files.0 的内容',
            'write_other' => '已修改 :count 个档案的内容',
            'delete_one' => '已删除 :files.0',
            'delete_other' => '已删除 :count 个档案',
            'create-directory_one' => '已建立 :files.0 目录',
            'create-directory_other' => '已建立 :count 个目录',
            'rename_one' => '已将 :files.0.from 重新命名为 :files.0.to',
            'rename_other' => '已重新命名或移动 :count 个档案',
        ],
        'allocation' => [
            'create' => '已将 :allocation 新增至伺服器',
            'notes' => '已将 :allocation 的备注从 ":old" 更新为 ":new"',
            'primary' => '已将 :allocation 设为主要伺服器配置',
            'delete' => '已删除 :allocation 配置',
        ],
        'schedule' => [
            'create' => '已建立 :name 工作排程',
            'update' => '已更新 :name 工作排程',
            'execute' => '已手动执行 :name 工作排程',
            'delete' => '已删除 :name 工作排程',
        ],
        'task' => [
            'create' => '已为 :name 工作排程建立一则 ":action" 任务',
            'update' => '已更新 :name 工作排程的 ":action" 任务',
            'delete' => '已删除 :name 工作排程的一则任务',
        ],
        'settings' => [
            'rename' => '已将伺服器名称从 :old 更改为 :new',
            'description' => '已将伺服器描述从 :old 更改为 :new',
        ],
        'startup' => [
            'edit' => '已将 :variable 变数从 ":old" 更改为 ":new"',
            'image' => '已将伺服器的 Docker 映像从 :old 更新为 :new',
        ],
        'subuser' => [
            'create' => '已新增 :email 为子使用者',
            'update' => '已更新 :email 的子使用者权限',
            'delete' => '已移除 :email 作为子使用者',
        ],
    ],
];
