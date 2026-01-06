<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '提供的 FQDN 或 IP 位址无法解析为有效 IP 位址。',
        'fqdn_required_for_ssl' => '若要在此节点使用 SSL，需提供能解析为公开 IP 的完整网域名称。',
    ],
    'notices' => [
        'allocations_added' => '已成功将配置新增至此节点。',
        'node_deleted' => '已成功从面板移除该节点。',
        'location_required' => '在新增节点前，您必须先设定至少一个位置。',
        'node_created' => '已成功建立新节点。您可以在「设定」页面自动设定此机器上的 daemon。<strong>在新增任何伺服器前，您必须先分配至少一个 IP 位址和连接埠。</strong>',
        'node_updated' => '节点资讯已更新。如有更改 daemon 设定，请重新启动它以套用变更。',
        'unallocated_deleted' => '已删除 <code>:ip</code> 的所有未分配连接埠。',
    ],
];
