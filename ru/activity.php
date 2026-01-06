<?php

/**
 * Содержит строки перевода для различных событий в журнале активности.
 * Ключи должны соответствовать значению перед двоеточием (:) в имени события.
 * Если двоеточие отсутствует, ключи должны находиться на верхнем уровне.
 */
return [
    'auth' => [
        'fail' => 'Неудачная попытка входа',
        'success' => 'Вход выполнен',
        'password-reset' => 'Пароль сброшен',
        'reset-password' => 'Запрошен сброс пароля',
        'checkpoint' => 'Запрошена двухфакторная аутентификация',
        'recovery-token' => 'Использован токен восстановления двухфакторной аутентификации',
        'token' => 'Пройдена проверка двухфакторной аутентификации',
        'ip-blocked' => 'Блокированный запрос с незарегистрированного IP-адреса для :identifier',
        'sftp' => [
            'fail' => 'Неудачная попытка входа по SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Электронная почта изменена с :old на :new',
            'password-changed' => 'Пароль изменён',
        ],
        'api-key' => [
            'create' => 'Создан новый API-ключ :identifier',
            'delete' => 'Удалён API-ключ :identifier',
        ],
        'ssh-key' => [
            'create' => 'Добавлен SSH-ключ :fingerprint в аккаунт',
            'delete' => 'Удалён SSH-ключ :fingerprint из аккаунта',
        ],
        'two-factor' => [
            'create' => 'Включена двухфакторная аутентификация',
            'delete' => 'Отключена двухфакторная аутентификация',
        ],
    ],
    'server' => [
        'reinstall' => 'Сервер переустановлен',
        'console' => [
            'command' => 'Выполнена команда ":command" на сервере',
        ],
        'power' => [
            'start' => 'Сервер запущен',
            'stop' => 'Сервер остановлен',
            'restart' => 'Сервер перезапущен',
            'kill' => 'Принудительно завершён процесс сервера',
        ],
        'backup' => [
            'download' => 'Скачан бэкап :name',
            'delete' => 'Удалён бэкап :name',
            'restore' => 'Восстановлён бэкап :name (удалённые файлы: :truncate)',
            'restore-complete' => 'Восстановление бэкапа :name завершено',
            'restore-failed' => 'Не удалось завершить восстановление бэкапа :name',
            'start' => 'Начато создание бэкапа :name',
            'complete' => 'Бэкап :name помечен как завершённый',
            'fail' => 'Бэкап :name помечен как неудачный',
            'lock' => 'Бэкап :name заблокирован',
            'unlock' => 'Бэкап :name разблокирован',
        ],
        'database' => [
            'create' => 'Создана новая база данных :name',
            'rotate-password' => 'Пароль базы данных :name изменён',
            'delete' => 'Удалена база данных :name',
        ],
        'file' => [
            'compress_one' => 'Сжат :directory:file',
            'compress_other' => 'Сжато :count файлов в :directory',
            'read' => 'Просмотрено содержимое :file',
            'copy' => 'Создана копия :file',
            'create-directory' => 'Создан каталог :directory:name',
            'decompress' => 'Распаковано :files в :directory',
            'delete_one' => 'Удалён :directory:files.0',
            'delete_other' => 'Удалено :count файлов в :directory',
            'download' => 'Скачан :file',
            'pull' => 'Скачан удалённый файл из :url в :directory',
            'rename_one' => 'Переименован :directory:files.0.from в :directory:files.0.to',
            'rename_other' => 'Переименовано :count файлов в :directory',
            'write' => 'Записано новое содержимое в :file',
            'upload' => 'Начата загрузка файла',
            'uploaded' => 'Загружен :directory:file',
        ],
        'sftp' => [
            'denied' => 'Доступ по SFTP заблокирован из-за прав',
            'create_one' => 'Создан :files.0',
            'create_other' => 'Создано :count новых файлов',
            'write_one' => 'Изменено содержимое :files.0',
            'write_other' => 'Изменено содержимое :count файлов',
            'delete_one' => 'Удалён :files.0',
            'delete_other' => 'Удалено :count файлов',
            'create-directory_one' => 'Создан каталог :files.0',
            'create-directory_other' => 'Создано :count каталогов',
            'rename_one' => 'Переименован :files.0.from в :files.0.to',
            'rename_other' => 'Переименовано или перемещено :count файлов',
        ],
        'allocation' => [
            'create' => 'Добавлено :allocation к серверу',
            'notes' => 'Примечания для :allocation обновлены с ":old" на ":new"',
            'primary' => 'Установлено :allocation как основное выделение сервера',
            'delete' => 'Удалено выделение :allocation',
        ],
        'schedule' => [
            'create' => 'Создано расписание :name',
            'update' => 'Обновлено расписание :name',
            'execute' => 'Вручную выполнено расписание :name',
            'delete' => 'Удалено расписание :name',
        ],
        'task' => [
            'create' => 'Создана новая задача ":action" для расписания :name',
            'update' => 'Обновлена задача ":action" для расписания :name',
            'delete' => 'Удалена задача для расписания :name',
        ],
        'settings' => [
            'rename' => 'Сервер переименован с :old на :new',
            'description' => 'Описание сервера изменено с :old на :new',
        ],
        'startup' => [
            'edit' => 'Изменена переменная :variable с ":old" на ":new"',
            'image' => 'Обновлён Docker-образ сервера с :old на :new',
        ],
        'subuser' => [
            'create' => 'Добавлен :email как субпользователь',
            'update' => 'Обновлены права субпользователя для :email',
            'delete' => 'Удалён :email как субпользователь',
        ],
    ],
];
