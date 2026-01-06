<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => '您正尝试删除此伺服器的预设配置，但没有可用的备用配置。',
        'marked_as_failed' => '此伺服器已被标记为先前安装失败，当前状态无法变更。',
        'bad_variable' => ':name 变数有验证错误。',
        'daemon_exception' => '与 daemon 通讯时发生例外，回传 HTTP/:code，该例外已被记录。(request id: :request_id)',
        'default_allocation_not_found' => '在此伺服器的配置中找不到所请求的预设配置。',
    ],
    'alerts' => [
        'startup_changed' => '伺服器的启动设定已更新。如变更了 nest 或 egg，将立即进行重新安装。',
        'server_deleted' => '伺服器已成功从系统删除。',
        'server_created' => '伺服器已成功在面板建立。请给 daemon 几分钟时间完成安装。',
        'build_updated' => '伺服器的建置设定已更新，某些变更可能需要重新启动才能生效。',
        'suspension_toggled' => '伺服器停权状态已变更为 :status。',
        'rebuild_on_boot' => '此伺服器已被标记为需要重建 Docker Container，将于下次启动时执行。',
        'install_toggled' => '此伺服器的安装状态已切换。',
        'server_reinstalled' => '此伺服器已排入重新安装伫列。',
        'details_updated' => '伺服器详情已成功更新。',
        'docker_image_updated' => '已成功变更此伺服器的预设 Docker 映像，需重新启动以套用此变更。',
        'node_required' => '在新增伺服器之前，您必须先设定至少一个节点。',
        'transfer_nodes_required' => '在转移伺服器之前，您必须先设定至少两个节点。',
        'transfer_started' => '伺服器转移已开始。',
        'transfer_not_viable' => '您选择的节点没有足够的磁碟空间或记忆体来容纳此伺服器。',
    ],
];
