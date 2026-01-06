<?php

return [
    'daemon_connection_failed' => '在嘗試與 daemon 通訊時發生例外並回傳 HTTP/:code，該例外已被記錄。',
    'node' => [
        'servers_attached' => '節點必須沒有連結任何伺服器才能被刪除。',
        'daemon_off_config_updated' => 'daemon 的設定 <strong>已更新</strong>，但在嘗試自動更新 daemon 上的設定檔時發生錯誤。您需手動更新 daemon 的設定檔 (config.yml) 以套用這些變更。',
    ],
    'allocations' => [
        'server_using' => '此配置目前已被伺服器使用。只有在沒有伺服器指派時才可刪除配置。',
        'too_many_ports' => '一次新增超過 1000 個連接埠的範圍並不受支援。',
        'invalid_mapping' => '提供的 :port 對應無效，無法處理。',
        'cidr_out_of_range' => 'CIDR 記法僅允許 /25 到 /32 之間的遮罩。',
        'port_out_of_range' => '配置中的連接埠須大於 1024 且小於或等於 65535。',
    ],
    'nest' => [
        'delete_has_servers' => '具有活動伺服器的 Nest 無法從面板刪除。',
        'egg' => [
            'delete_has_servers' => '具有活動伺服器的 Egg 無法從面板刪除。',
            'invalid_copy_id' => '選擇複製腳本來源的 Egg 要麼不存在，要麼本身就是複製來源。',
            'must_be_child' => '此 Egg 的「從哪裡複製設定」選項必須是所選 Nest 的子項。',
            'has_children' => '此 Egg 有一或多個子 Egg，請先刪除那些 Egg。',
        ],
        'variables' => [
            'env_not_unique' => '環境變數 :name 必須在此 Egg 中唯一。',
            'reserved_name' => '環境變數 :name 為保留名稱，無法指定。',
            'bad_validation_rule' => '驗證規則 ":rule" 並非此應用程式的有效規則。',
        ],
        'importer' => [
            'json_error' => '解析 JSON 檔案時發生錯誤：:error。',
            'file_error' => '所提供的 JSON 檔案無效。',
            'invalid_json_provided' => '提供的 JSON 檔案格式無法識別。',
        ],
    ],
    'subusers' => [
        'editing_self' => '不允許編輯您自己的子使用者帳號。',
        'user_is_owner' => '您不能將伺服器擁有者新增為此伺服器的子使用者。',
        'subuser_exists' => '具有該電子郵件地址的使用者已被指派為此伺服器的子使用者。',
    ],
    'databases' => [
        'delete_has_databases' => '無法刪除擁有活動資料庫的資料庫主機伺服器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '串接任務的最大間隔時間為 15 分鐘。',
    ],
    'locations' => [
        'has_nodes' => '無法刪除有活動節點的地點。',
    ],
    'users' => [
        'node_revocation_failed' => '無法撤銷 <a href=":link">節點 #":node" 的金鑰。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '找不到符合自動部署要求的節點。',
        'no_viable_allocations' => '找不到符合自動部署要求的配置。',
    ],
    'api' => [
        'resource_not_found' => '所請求的資源在此伺服器上不存在。',
    ],
];
