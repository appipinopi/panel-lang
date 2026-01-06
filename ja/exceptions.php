<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信中に例外が発生し、HTTP/:code のレスポンスコードが返されました。例外はログに記録されました。',
    'node' => [
        'servers_attached' => 'ノードを削除するには、そのノードに紐づくサーバーが存在していない必要があります。',
        'daemon_off_config_updated' => 'デーモンの設定は<strong>更新されました</strong>が、デーモン上の設定ファイルを自動的に更新しようとした際にエラーが発生しました。デーモンの設定ファイル（config.yml）を手動で更新して変更を適用してください。',
    ],
    'allocations' => [
        'server_using' => 'この割り当てには現在サーバーが割り当てられています。割り当てを削除するには、サーバーが割り当てられていない必要があります。',
        'too_many_ports' => '単一の範囲で1000を超えるポートを一度に追加することはサポートされていません。',
        'invalid_mapping' => ':port のマッピングが無効で、処理できませんでした。',
        'cidr_out_of_range' => 'CIDR表記は /25 から /32 のマスクのみ許可されます。',
        'port_out_of_range' => '割り当てのポートは1024より大きく、65535以下でなければなりません。',
    ],
    'nest' => [
        'delete_has_servers' => '稼働中のサーバーが紐づくネストはパネルから削除できません。',
        'egg' => [
            'delete_has_servers' => '稼働中のサーバーが紐づく Egg はパネルから削除できません。',
            'invalid_copy_id' => 'スクリプトのコピー元に選択された Egg が存在しないか、スクリプト自体をコピーしようとしています。',
            'must_be_child' => 'この Egg の「設定をコピー」先は、選択されたネストの子オプションである必要があります。',
            'has_children' => 'この Egg は他の Egg の親です。先にそれらを削除してください。',
        ],
        'variables' => [
            'env_not_unique' => '環境変数 :name はこの Egg 内で一意でなければなりません。',
            'reserved_name' => '環境変数 :name は保護されており、変数に割り当てることはできません。',
            'bad_validation_rule' => '検証ルール ":rule" はこのアプリケーションで有効なルールではありません。',
        ],
        'importer' => [
            'json_error' => 'JSON ファイルの解析中にエラーが発生しました: :error',
            'file_error' => '提供された JSON ファイルは有効ではありません。',
            'invalid_json_provided' => '提供された JSON ファイルは認識可能な形式ではありません。',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分自身のサブユーザーアカウントを編集することは許可されていません。',
        'user_is_owner' => 'サーバーの所有者をサブユーザーとして追加することはできません。',
        'subuser_exists' => 'そのメールアドレスのユーザーは既にこのサーバーのサブユーザーとして割り当てられています。',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースが紐づくデータベースホストサーバーは削除できません。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連鎖タスクの最大インターバルは15分です。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなノードが紐づくロケーションは削除できません。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">ノード #:node</a> のキー取り消しに失敗しました。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動デプロイの要件を満たすノードが見つかりませんでした。',
        'no_viable_allocations' => '自動デプロイの要件を満たす割り当てが見つかりませんでした。',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバーに存在しません。',
    ],
];
