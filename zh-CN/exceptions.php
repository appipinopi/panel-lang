<?php

return [
    'daemon_connection_failed' => '在尝试与 daemon 通讯时发生例外并回传 HTTP/:code，该例外已被记录。',
    'node' => [
        'servers_attached' => '节点必须没有连结任何伺服器才能被删除。',
        'daemon_off_config_updated' => 'daemon 的设定 <strong>已更新</strong>，但在尝试自动更新 daemon 上的设定档时发生错误。您需手动更新 daemon 的设定档 (config.yml) 以套用这些变更。',
    ],
    'allocations' => [
        'server_using' => '此配置目前已被伺服器使用。只有在没有伺服器指派时才可删除配置。',
        'too_many_ports' => '一次新增超过 1000 个连接埠的范围并不受支援。',
        'invalid_mapping' => '提供的 :port 对应无效，无法处理。',
        'cidr_out_of_range' => 'CIDR 记法仅允许 /25 到 /32 之间的遮罩。',
        'port_out_of_range' => '配置中的连接埠须大于 1024 且小于或等于 65535。',
    ],
    'nest' => [
        'delete_has_servers' => '具有活动伺服器的 Nest 无法从面板删除。',
        'egg' => [
            'delete_has_servers' => '具有活动伺服器的 Egg 无法从面板删除。',
            'invalid_copy_id' => '选择复制脚本来源的 Egg 要么不存在，要么本身就是复制来源。',
            'must_be_child' => '此 Egg 的「从哪里复制设定」选项必须是所选 Nest 的子项。',
            'has_children' => '此 Egg 有一或多个子 Egg，请先删除那些 Egg。',
        ],
        'variables' => [
            'env_not_unique' => '环境变数 :name 必须在此 Egg 中唯一。',
            'reserved_name' => '环境变数 :name 为保留名称，无法指定。',
            'bad_validation_rule' => '验证规则 ":rule" 并非此应用程式的有效规则。',
        ],
        'importer' => [
            'json_error' => '解析 JSON 档案时发生错误：:error。',
            'file_error' => '所提供的 JSON 档案无效。',
            'invalid_json_provided' => '提供的 JSON 档案格式无法识别。',
        ],
    ],
    'subusers' => [
        'editing_self' => '不允许编辑您自己的子使用者帐号。',
        'user_is_owner' => '您不能将伺服器拥有者新增为此伺服器的子使用者。',
        'subuser_exists' => '具有该电子邮件地址的使用者已被指派为此伺服器的子使用者。',
    ],
    'databases' => [
        'delete_has_databases' => '无法删除拥有活动资料库的资料库主机伺服器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '串接任务的最大间隔时间为 15 分钟。',
    ],
    'locations' => [
        'has_nodes' => '无法删除有活动节点的地点。',
    ],
    'users' => [
        'node_revocation_failed' => '无法撤销 <a href=":link">节点 #:node</a> 的金钥。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '找不到符合自动部署要求的节点。',
        'no_viable_allocations' => '找不到符合自动部署要求的配置。',
    ],
    'api' => [
        'resource_not_found' => '所请求的资源在此伺服器上不存在。',
    ],
];
