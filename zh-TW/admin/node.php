<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '提供的 FQDN 或 IP 位址無法解析為有效 IP 位址。',
        'fqdn_required_for_ssl' => '若要在此節點使用 SSL，需提供能解析為公開 IP 的完整網域名稱。',
    ],
    'notices' => [
        'allocations_added' => '已成功將配置新增至此節點。',
        'node_deleted' => '已成功從面板移除該節點。',
        'location_required' => '在新增節點前，您必須先設定至少一個位置。',
        'node_created' => '已成功建立新節點。您可以在「設定」頁面自動設定此機器上的 daemon。<strong>在新增任何伺服器前，您必須先分配至少一個 IP 位址和連接埠。</strong>',
        'node_updated' => '節點資訊已更新。如有更改 daemon 設定，請重新啟動它以套用變更。',
        'unallocated_deleted' => '已刪除 <code>:ip</code> 的所有未分配連接埠。',
    ],
];
