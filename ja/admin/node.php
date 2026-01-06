<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '指定された FQDN または IP アドレスが有効な IP アドレスに解決されませんでした。',
        'fqdn_required_for_ssl' => 'このノードで SSL を使用するには、パブリック IP に解決される完全修飾ドメイン名が必要です。',
    ],
    'notices' => [
        'allocations_added' => '割り当てをノードに追加しました。',
        'node_deleted' => 'ノードをパネルから削除しました。',
        'location_required' => 'ノードを追加する前に少なくとも1つのロケーションを設定する必要があります。',
        'node_created' => '新しいノードを作成しました。マシン上のデーモンは「構成」タブから自動設定できます。<strong>サーバーを追加する前に少なくとも1つの IP とポートを割り当てる必要があります。</strong>',
        'node_updated' => 'ノード情報を更新しました。デーモン設定が変更された場合は再起動が必要です。',
        'unallocated_deleted' => '<code>:ip</code> の未割り当てポートをすべて削除しました。',
    ],
];
