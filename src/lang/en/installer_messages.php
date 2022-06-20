<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'Cấu hình website',
    'next' => 'Bước tiếp theo',
    'back' => 'Quay lại',
    'finish' => 'Cài đặt',
    'forms' => [
        'errorTitle' => 'Đã xảy ra lỗi :',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Chào mừng bạn',
        'title'   => 'Cấu hình website',
        'message' => 'Chào mừng bạn đến với trang cấu hình webtite của LionDev',
        'next'    => 'Kiểm tra cấu hình',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Bước 1 | kiểm tra cấu hình',
        'title' => 'Kiểm tra cấu hình',
        'next'    => 'Kiểm tra quyền',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Bước 2 | kiểm tra quyền',
        'title' => 'Kiểm tra quyền',
        'next' => 'Cấu hình mặc định',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Bước 3 | Cấu hình mặc định',
            'title' => 'Cấu hình mặc định',
            'desc' => 'Vui lòng chọn cách mà bạn muốn cấu hình file .env',
            'wizard-button' => 'Cấu hình cơ bản',
            'classic-button' => 'Cấu hình nâng cao',
        ],
        'wizard' => [
            'templateTitle' => 'Bước 3 | Cấu hình mặc định',
            'title' => 'Cấu hình cơ bản file <code>.env</code>',
            'tabs' => [
                'environment' => 'Cấu hình chung',
                'database' => 'Cơ sở dữ liệu',
                'application' => 'Các chức năng khác',
            ],
            'form' => [

            'name_required' => 'An environment name is required.',
            'app_name_label' => 'Tên website của bạn',
            'app_name_placeholder' => 'Tên website của bạn',
            'app_environment_label' => 'Trạng thái cài đặt',
            'app_environment_label_local' => 'Local',
            'app_environment_label_developement' => 'Lập trình viên',
            'app_environment_label_qa' => 'Qa',
            'app_environment_label_production' => 'Xuất bản',
            'app_environment_label_other' => 'Khác',
            'app_environment_placeholder_other' => 'Nhập trạng thái mà bạn muốn',
            'app_debug_label' => 'Chạy Debug',
            'app_debug_label_true' => 'Có',
            'app_debug_label_false' => 'Không',
            'app_log_level_label' => 'App Log Level',
            'app_log_level_label_debug' => 'debug',
            'app_log_level_label_info' => 'info',
            'app_log_level_label_notice' => 'notice',
            'app_log_level_label_warning' => 'warning',
            'app_log_level_label_error' => 'error',
            'app_log_level_label_critical' => 'critical',
            'app_log_level_label_alert' => 'alert',
            'app_log_level_label_emergency' => 'emergency',
            'app_url_label' => 'Url website',
            'app_url_placeholder' => 'Url website',
            'db_connection_failed' => 'Không thể kết nối database.',
            'db_connection_label' => 'Loại Database',
            'db_connection_label_mysql' => 'mysql',
            'db_connection_label_sqlite' => 'sqlite',
            'db_connection_label_pgsql' => 'pgsql',
            'db_connection_label_sqlsrv' => 'sqlsrv',
            'db_host_label' => 'Database Host',
            'db_host_placeholder' => 'Database Host',
            'db_port_label' => 'Database Port',
            'db_port_placeholder' => 'Database Port',
            'db_name_label' => 'Tên Database',
            'db_name_placeholder' => 'Tên Database',
            'db_username_label' => 'Tài khoản Database',
            'db_username_placeholder' => 'tài khoản Database',
            'db_password_label' => 'Mật khẩu Database',
            'db_password_placeholder' => 'Mật khẩu Database',
            'app_tabs' => [
                    'more_info' => 'More Info',
                    'broadcasting_title' => 'Cấu hình broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Cache Driver',
                    'cache_placeholder' => 'Cache Driver',
                    'session_label' => 'Session Driver',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Queue Driver',
                    'queue_placeholder' => 'Queue Driver',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Password',
                    'redis_port' => 'Redis Port',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail Driver',
                    'mail_driver_placeholder' => 'Mail Driver',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail Username',
                    'mail_username_placeholder' => 'Mail Username',
                    'mail_password_label' => 'Mail Password',
                    'mail_password_placeholder' => 'Mail Password',
                    'mail_encryption_label' => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'Cấu hình website',
                    'setup_application' => 'Cấu hình khác',
                    'install' => 'Cài đặt',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Step 3 | Environment Settings | Classic Editor',
            'title' => 'Classic Environment Editor',
            'save' => 'Save .env',
            'back' => 'Use Form Wizard',
            'install' => 'Save and Install',
        ],
        'success' => 'Your .env file settings have been saved.',
        'errors' => 'Unable to save the .env file, Please create it manually.',
    ],

    'install' => 'Install',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'đã cài đặt thành công ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Hoàn thành cấu hình',
        'templateTitle' => 'Installation Finished',
        'finished' => 'Hoàn thành cấu hình',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console' => 'Application Console Output:',
        'log' => 'Installation Log Entry:',
        'env' => 'Final .env File:',
        'exit' => 'Lưu và thoát',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Cập nhật',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Trang cập nhật',
            'message' => 'Chào mừng bạn đến với trang cập nhật',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Overview',
            'message' => 'Có 1 thay đổi.|Có :number thay đổi.',
            'install_updates' => 'Cập nhật thay đổi',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Hoàn thành',
            'finished' => 'Cập nhật thành công',
            'exit' => 'Nhấn để thoát',
        ],

        'log' => [
            'success_message' => 'successfully UPDATED on ',
        ],
    ],
];
