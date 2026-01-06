<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'このサーバーのデフォルト割り当てを削除しようとしていますが、代替の割り当てが見つかりません。',
        'marked_as_failed' => 'このサーバーは以前のインストールに失敗したとしてマークされています。この状態ではステータスを切り替えられません。',
        'bad_variable' => ':name 変数に検証エラーがあります。',
        'daemon_exception' => 'デーモンとの通信中に例外が発生し、HTTP/:code レスポンスが返されました。例外はログに記録されています。（リクエストID: :request_id）',
        'default_allocation_not_found' => '要求されたデフォルト割り当てはこのサーバーの割り当て内に見つかりませんでした。',
    ],
    'alerts' => [
        'startup_changed' => 'このサーバーの起動設定が更新されました。ネストや Egg が変更された場合は再インストールが行われます。',
        'server_deleted' => 'サーバーをシステムから削除しました。',
        'server_created' => 'サーバーをパネル上に作成しました。デーモンが完全にインストールするまで数分お待ちください。',
        'build_updated' => 'サーバーのビルド情報を更新しました。一部の変更は再起動が必要です。',
        'suspension_toggled' => 'サーバーの停止状態を :status に変更しました。',
        'rebuild_on_boot' => 'このサーバーは Docker コンテナの再構築が必要としてマークされました。次回起動時に実行されます。',
        'install_toggled' => 'サーバーのインストール状態を切り替えました。',
        'server_reinstalled' => 'このサーバーは再インストールのキューに登録されました。',
        'details_updated' => 'サーバーの詳細を更新しました。',
        'docker_image_updated' => 'このサーバーで使用するデフォルトの Docker イメージを変更しました。適用には再起動が必要です。',
        'node_required' => 'このパネルにサーバーを追加する前に、少なくとも1つのノードを設定する必要があります。',
        'transfer_nodes_required' => 'サーバーを転送するには、少なくとも2つのノードが必要です。',
        'transfer_started' => 'サーバー転送を開始しました。',
        'transfer_not_viable' => '選択したノードは、このサーバーを収容するのに十分なディスク容量やメモリを持っていません。',
    ],
];
