<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => '您正嘗試刪除此伺服器的預設配置，但沒有可用的備用配置。',
        'marked_as_failed' => '此伺服器已被標記為先前安裝失敗，當前狀態無法變更。',
        'bad_variable' => ':name 變數有驗證錯誤。',
        'daemon_exception' => '與 daemon 通訊時發生例外，回傳 HTTP/:code，該例外已被記錄。(request id: :request_id)',
        'default_allocation_not_found' => '在此伺服器的配置中找不到所請求的預設配置。',
    ],
    'alerts' => [
        'startup_changed' => '伺服器的啟動設定已更新。如變更了 nest 或 egg，將立即進行重新安裝。',
        'server_deleted' => '伺服器已成功從系統刪除。',
        'server_created' => '伺服器已成功在面板建立。請給 daemon 幾分鐘時間完成安裝。',
        'build_updated' => '伺服器的建置設定已更新，某些變更可能需要重新啟動才能生效。',
        'suspension_toggled' => '伺服器停權狀態已變更為 :status。',
        'rebuild_on_boot' => '此伺服器已被標記為需要重建 Docker Container，將於下次啟動時執行。',
        'install_toggled' => '此伺服器的安裝狀態已切換。',
        'server_reinstalled' => '此伺服器已排入重新安裝佇列。',
        'details_updated' => '伺服器詳情已成功更新。',
        'docker_image_updated' => '已成功變更此伺服器的預設 Docker 映像，需重新啟動以套用此變更。',
        'node_required' => '在新增伺服器之前，您必須先設定至少一個節點。',
        'transfer_nodes_required' => '在轉移伺服器之前，您必須先設定至少兩個節點。',
        'transfer_started' => '伺服器轉移已開始。',
        'transfer_not_viable' => '您選擇的節點沒有足夠的磁碟空間或記憶體來容納此伺服器。',
    ],
];
