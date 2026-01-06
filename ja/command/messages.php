<?php

return [
    'location' => [
        'no_location_found' => '指定されたショートコードに一致するレコードが見つかりませんでした。',
        'ask_short' => 'ロケーションのショートコード',
        'ask_long' => 'ロケーションの説明',
        'created' => '新しいロケーション :name を ID :id で作成しました。',
        'deleted' => '要求されたロケーションを削除しました。',
    ],
    'user' => [
        'search_users' => 'ユーザー名、ユーザーID、またはメールアドレスを入力してください',
        'select_search_user' => '削除するユーザーの ID を入力してください（再検索するには "0" を入力）',
        'deleted' => 'パネルからユーザーを削除しました。',
        'confirm_delete' => 'このユーザーをパネルから削除してもよろしいですか？',
        'no_users_found' => '検索語に一致するユーザーは見つかりませんでした。',
        'multiple_found' => '複数のアカウントが見つかりました。--no-interaction フラグにより削除できません。',
        'ask_admin' => 'このユーザーは管理者ですか？',
        'ask_email' => 'メールアドレス',
        'ask_username' => 'ユーザー名',
        'ask_name_first' => '名',
        'ask_name_last' => '姓',
        'ask_password' => 'パスワード',
        'ask_password_tip' => 'ランダムパスワードを生成してユーザーにメールする場合、このコマンドを再実行し（CTRL+C）、`--no-password` フラグを渡してください。',
        'ask_password_help' => 'パスワードは少なくとも8文字で、大文字と数字を含めてください。',
        '2fa_help_text' => [
            'このコマンドは、ユーザーがアカウントからロックされている場合の回復操作としてのみ使用してください。2段階認証を無効化します。',
            'もしこれが意図した操作でない場合、CTRL+C で終了してください。',
        ],
        '2fa_disabled' => ':email の 2段階認証を無効にしました。',
    ],
    'schedule' => [
        'output_line' => '`:schedule` (:hash) の最初のタスクのジョブをディスパッチします。',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'サービスバックアップファイル :file を削除しています。',
    ],
    'server' => [
        'rebuild_failed' => 'ノード ":node" 上の ":name" (ID :id) の再構築リクエストがエラーで失敗しました: :message',
        'reinstall' => [
            'failed' => 'ノード ":node" 上の ":name" (ID :id) の再インストールリクエストがエラーで失敗しました: :message',
            'confirm' => '複数のサーバーに対して再インストールを行います。本当に続行しますか？',
        ],
        'power' => [
            'confirm' => ':count 台のサーバーに対して :action を実行します。本当に続行しますか？',
            'action_failed' => 'ノード ":node" 上の ":name" (ID :id) に対する電源操作がエラーで失敗しました: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP ホスト (例: smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP ポート',
            'ask_smtp_username' => 'SMTP ユーザー名',
            'ask_smtp_password' => 'SMTP パスワード',
            'ask_mailgun_domain' => 'Mailgun ドメイン',
            'ask_mailgun_endpoint' => 'Mailgun エンドポイント',
            'ask_mailgun_secret' => 'Mailgun シークレット',
            'ask_mandrill_secret' => 'Mandrill シークレット',
            'ask_postmark_username' => 'Postmark API キー',
            'ask_driver' => 'メール送信に使用するドライバは？',
            'ask_mail_from' => '送信元メールアドレス',
            'ask_mail_name' => '送信元名',
            'ask_encryption' => '使用する暗号化方式',
        ],
    ],
];
