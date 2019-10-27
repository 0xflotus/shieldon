<?php

return [

    'reason_manual_ban' => '被管理員手動加入',
    'reason_is_search_engine' => '搜尋引擎機器人',
    'reason_is_google' => 'Google 機器人',
    'reason_is_bing' => 'Bing 機器人',
    'reason_is_yahoo' => 'Yahoo 機器人',
    'reason_too_many_sessions' => '太多工作階段',
    'reason_too_many_accesses' => '太多連線',
    'reason_empty_js_cookie' => '無法建立 JS cookie',
    'reason_empty_referer' => '空的來源網址',
    'reason_reached_limit_day' => '達成每日限制',
    'reason_reached_limit_hour' => '達到每小時限制',
    'reason_reached_limit_minute' => '達到每分限制',
    'reason_reached_limit_second' => '達到每秒限制',

    // Menu
    'nav_locale' => '語系',
    'menu_firewall' => '防火牆',
    'menu_status' => '狀態',
    'menu_overview' => '總覽',
    'menu_settings' => '設定',
    'menu_ip_manager' => 'IP 管理員',
    'menu_xss_protection' => 'XSS 防護',
    'menu_authentication' => '網頁認證',
    'menu_exclusion' => '例外清單',
    'menu_last_month' => '上月',
    'menu_this_month' => '本月',
    'menu_last_7_days' => '過去 7 日',
    'menu_yesterday' => '昨日',
    'menu_today' => '今天',
    'menu_ip_logs' => 'IP 記錄',
    'menu_ip_rules' => 'IP 規則',
    'menu_sessions' => '工作階段',
    'menu_logs' => '記錄',
    'menu_data_circle' => '資料週期',

    // Message
    'error_mysql_connection' => '無法連接您的 MySQL 資料庫，請檢查設定值。',
    'error_mysql_driver_not_supported' => '您的系統不支援 MySQL 驅動器。',
    'error_sqlite_driver_not_supported' => '您的系統不支援 SQLite 驅動器。',
    'error_sqlite_directory_not_writable' => 'SQLite 資料驅動器需要儲存目錄可寫入。',
    'error_redis_driver_not_supported' => '您的系統不支援 Redis 驅動器。',
    'error_file_directory_not_writable' => '檔案資料驅動器需要儲存目錄可寫入。',
    'error_logger_directory_not_writable' => '動作記錄器需要儲存目錄可寫入。',
    'success_settings_saved' => '設定值已儲存。',

    // Others.
    'field_not_visible' => '無法在示範模式檢視此欄位。',
    'permission_required' => '需要權限。',

    // Header status bar.
    'channel' => '頻道',
    'mode' => '模式',
    'logout' => '登出',

    // Setting - authentication page.
    'auth_heading' => '認證方式',
    'auth_description' => '回應頭部字段 HTTP WWW-Authenticate 定義了獲取對資源的連接權限應該被使用的認證方式。',
    'auth_label_url_path' => '網址路徑',
    'auth_label_username' => '使用者',
    'auth_label_password' => '密碼',
    'auth_btn_submit' => '送出',
    'auth_label_encrypted' => '已加密',
    'auth_label_remove' => '移除',

    // Setting - exclusion page.
    'excl_heading' => '例外清單',
    'excl_description' => '請輸入要排除掉 Shieldon 保護的開頭網址。',

    // IP Manager
    'ipma_heading' => 'IP 管理員',
    'ipma_description' => 'IP 管理員不像規格表 (效期取決於資料週期)，任何動作都是永久性的。',
    'ipma_label_ip' => 'IP',
    'ipma_label_order' => '順序',
    'ipma_label_rule' => '規則',
    'ipma_label_action' => '動作',
    'ipma_label_plz_select' => '請選擇',
    'ipma_label_remove_ip' => '移除這個 IP',
    'ipma_label_allow_ip' => '允許這個 IP',
    'ipma_label_deny_ip' => '拒絕這個 IP',

    // Log
    'log_heading_captchas' => 'CAPTCHA 驗證',
    'log_note_captcha_last_month' => 'CAPTCHA 上月份統計',
    'log_heading_pageviews' => '網頁檢視數',
    'log_note_pageview_last_month' => '上月份總網頁檢視數',

    'log_label_last_month' => '上月',
    'log_label_this_month' => '本月',
    'log_label_last_7_days' => '過去 7 日',
    'log_label_yesterday' => '昨日',
    'log_label_today' => '今日',
    'log_msg_no_logger' => '不好意思，您必須執行動作記錄器才能使用這個功能。',
    'log_label_in_queue' => '排隊中',
    'log_label_in_blacklist' => '在黑名單中',
    'log_label_captcha' => 'CAPTCHA 驗證',
    'log_label_pageviews' => '網頁檢視',
    'log_label_session' => '工作階段',
    'log_label_solved' => '已解決',
    'log_label_failed' => '已失敗',
    'log_label_displays' => '顯示次數',
    'log_label_timezone' => '時區',
    'log_note_captcha_last_7_days' => 'CAPTCHA 過去 7 日統計',

    // Overview
    'overview_heading_data_circle' => '資料週期',
    'overview_label_mysql' => 'MySQL',
    'overview_text_rows' => 'rows',
    'overview_note_sql_db' => 'SQL 資料庫。',
    'overview_note_memory_db' =>  '使用記憶體的資料庫。',
    'overview_label_redis' => 'Redis',
    'overview_btn_document' => '文件',
    'overview_btn_close' => '關閉',
    'overview_btn_save' => '儲存',
    'overview_note_image_captcha' => '一個簡易型的文字圖片 CAPTCHA 驗證。',
    'overview_label_image_captcha' => '圖片 CAPTCHA 驗證',
    'overview_note_recaptcha' => '此功能服務由 Google 提供。',
    'overview_label_recaptcha' => 'reCAPTCHA',
    'overview_heading_captcha' => 'CAPTCHA 驗證模組',
    'overview_note_action_logger' => '記錄每一位訪客的行為。',
    'overview_label_action_logger' => '動作記錄器',
    'overview_heading_logger' => '記錄器',
    'overview_text_since' => '自',
    'overview_text_days' => '天',
    'overview_text_size' => '尺寸',
    'overview_note_useragent' => '分析來自訪客的 User-agent 資訊。',
    'overview_label_useragent' => '使用者代理',
    'overview_note_rdns' => '識別來自訪客的 IP 反查主機名稱 (RDNS)。',
    'overview_label_rdns' => 'RDNS',
    'overview_note_header' => '分析來自訪客的頭部字段資訊。',
    'overview_label_header' => '頭部字段',
    'overview_note_trustedbot' => '允許受歡迎的搜尋引擎檢索您的網站',
    'overview_label_trustedbot' => '信賴的機器人',
    'overview_note_ip' => '進階的 IP 位址管理功能。',
    'overview_label_ip' => 'IP',
    'overview_heading_components' => '組件',
    'overview_note_referer' => '檢查 HTTP 來源網址資訊。',
    'overview_label_referer' => '來源網址',
    'overview_note_frequency' => '檢查訪客有多頻繁檢閱網頁。',
    'overview_label_frequency' => '頻率',
    'overview_note_session' => '偵測是否多個工作階段由同一位訪客產生。',
    'overview_label_session' => '工作階段',
    'overview_note_cookie' => '檢查是否訪客可藉由 JavaScript 產生 cookie。',
    'overview_label_cookie' => 'Cookie',
    'overview_heading_filters' => '過濾器',
    'overview_label_sqlite' => 'SQLite',
    'overview_note_file_system' => '檔案系統。',
    'overview_label_file' => '檔案',
    'overview_text_more_usages' => '更多用法細節請查閱文件。',

    // IP log table.
    'table_heading_ip_log' => 'IP 記錄表',
    'table_description_ip_log_1' => '這裡是 Shieldon 記錄使用者們行為有異的地方。',
    'table_description_ip_log_2' => '所有過程是自動化且即時性的，您可以忽略。',
    'table_description_ip_log_3' => 'IP 記錄表在新的資料週期開始後會被清除。',
    'table_label_resolved_hostname' => '反解主機名稱',
    'table_label_last_visit' => '上次造訪',
    'table_label_flags' => '旗標',

    // Rule table.
    'table_heading_rule' => '規則表',
    'table_description_rule_1' => '這是 Shieldon 在目前的資料週期內，暫時性地允許或拒絕使用者的地方。',
    'table_description_rule_2' => '所有過程是自動化且即時性的，您可以忽略。',
    'table_description_rule_3' => '規則表在新的資料週期開始時將會被重設。',
    'table_label_deny_ip_temporarily' => '暫時性地拒絕此 IP',
    'table_label_deny_ip_permanently' => '永久性地拒絕此 IP',
    'table_ip_placeholder' => '請填進一個 IP 位址',
    'table_label_type' => '類型',
    'table_label_reason' => '理由',
    'table_label_time' => '時間',
    'table_label_remove' => '移除',

    // Session table.
    'table_heading_session' => '工作階段表',
    'table_label_remain_seconds' => '剩餘秒數',
    'table_label_priority' => '優先權',
    'table_label_status' => '狀態',
    'table_label_session_id' => '工作階段 ID',
    'table_text_allowable' => '准許的',
    'table_text_expired' => '已失效',
    'table_text_waiting' => '等待中',
    'table_description_session_1' => '針對<strong>線上工作階段控管</strong>的即時記錄。所有過程是自動化且即時性的，您可以忽略。',
    'table_description_session_2' => '注意這個只有在您有啟用時才會運作。',
    'table_heading_limit' => '限制',
    'table_note_limit' => '線上工作階段限制',
    'table_heading_period' => '期間',
    'table_note_period' => '存續期間。 (分鐘)',
    'table_heading_online' => '線上',
    'table_note_online' => '線上工作階段限制。',

    // Xss protection.
    'xss_heading' => 'XSS 防護',
    'xss_description' => '預防跨站腳本攻擊。',
    'xss_label_variable' => '變數',
    'xss_text_eradicate_injection' => '針對單一變數消除潛在的注入字串。',
    'xss_label_single_variable' => '單一變數',
    'xss_label_variable_name' => '變數名稱',
    'xss_text_update_above_settings' => '更新以上設定值。',
    'xss_text_filter_cookie_variables' => '過濾全部 COOKIE 型態的變數。',
    'xss_text_filter_get_variables' => '過濾全部 GET 型態的變數。',
    'xss_text_filter_post_variables' => '過濾全部 POST 型態的變數。',

    // Tab
    'tab_heading_adminlogin' => '管理登入',
    'tab_heading_dialogui' => '對話框介面',
    'tab_heading_captchas' => 'CAPTCHA 驗證',
    'tab_heading_filters' => '過濾器',
    'tab_heading_components' => '元件',
    'tab_heading_daemon' => '守護進程',

    // Setting - admin login.
    'setting_heading_adminlogin' => ' 管理登入',
    'setting_label_last_modified' => '最近一次修改',
    'setting_label_password' => '密碼',
    'setting_label_user' => '使用者',

    // Setting - captcha.
    'setting_heading_recaptcha' => 'reCAPTCHA　驗證',
    'setting_label_recaptcha_key' => '網站金鑰',
    'setting_note_recaptcha_key' => '輸入您的網站的 Google reCaptcha 網站金鑰。',
    'setting_label_recaptcha_secret' => '密鑰',
    'setting_note_recaptcha_secret' => '輸入您的網站的 Google reCaptcha 密鑰。',
    'setting_label_recaptcha_version' => '版本',
    'setting_note_recaptcha_version' => '請輸入相對應版本的金鑰否則無法正常運作。',
    'setting_label_recaptcha_lang' => '語言代碼',
    'setting_note_recaptcha_lang' => 'ISO 639 - ISO 3166 代碼。舉例，zh-TW 代表台灣的繁體中文。',
    'setting_note_image_captcha_1' => '混合數字及英文小寫字母及大寫英文字母的字串。',
    'setting_note_image_captcha_2' => '只有小寫英文字母及大寫英文字母的字串。',
    'setting_note_image_captcha_3' => '只有數字型字串。',
    'setting_note_image_captcha_length' => '您想顯示多少字元長度的 CAPTCHA 驗證？',
    'setting_label_length' => '長度',
    'setting_heading_image_captcha' => '圖片型 CAPTCHA 驗證',

    // Setting - component.
    'setting_heading_component_ip' => 'IP',
    'setting_note_component_ip' => '通過啟用此選項來啟動 IP 管理員。',
    'setting_heading_component_tb' => '信任的機器人',
    'setting_note_component_tb_1' => '允許受歡迎的搜尋引擎檢索您的網站',
    'setting_note_component_tb_2' => '注意：把這個選項關閉將會衝擊到您的 SEO，因為機器人們將會進入檢查的程序。',
    'setting_label_strict_mode' => '嚴格模式',
    'setting_note_component_tb_3' => 'IP 反解的主機名稱和 IP 位址必須互相吻合。',
    'setting_heading_component_header' => '頭部字段',
    'setting_note_component_header_1' => '分析來自訪客的頭部字段資訊。',
    'setting_note_component_header_2' => '拒絕所有沒有常見頭部字段資訊的訪客。',
    'setting_heading_component_useragent' => '使用者代理',
    'setting_note_component_useragent_1' => '分析來自訪客的使用者代理資訊。',
    'setting_note_component_useragent_2' => '拒絕所有使用者代理資訊為空值的訪客。',
    'setting_heading_component_rdns' => '反向 DNS',
    'setting_note_component_rdns_1' => '一般而言，從電信業者配發的 IP 都會被設定 RDNS 記錄。此選項只在嚴格模式時運作。',
    'setting_note_component_rdns_2' => '所有 RDNS 記錄為空值的訪客將會被封鎖。',

    // Setting - daemon
    'setting_heading_enable' => '啟用',
    'setting_label_data_driver' => '資料驅動器',
    'setting_note_data_driver' => '藉由執行 Shieldon 開始保護您的網站。Shieldon 防火牆只有在這個選項啟用時才會運作。',
    'setting_label_driver_file' => '檔案系統',
    'setting_label_driver_mysql' => 'MySQL',
    'setting_label_driver_redis' => 'Redis',
    'setting_label_driver_sqlite' => 'SQLite',
    'setting_label_mysql_host' => '主機',
    'setting_label_mysql_dbname' => '資料庫名稱',
    'setting_label_mysql_user' => '使用者',
    'setting_label_mysql_password' => '密碼',
    'setting_label_mysql_charset' => '字符集',
    'setting_label_redis_host' => '主機',
    'setting_label_redis_port' => '端口',
    'setting_label_redis_auth' => '授權密碼',
    'setting_note_redis_host' => '只有需要密碼時才必填。',
    'setting_label_directory' => '目錄',
    'setting_note_directory' => '請填寫你要儲存資料的目錄的絕對路徑。',
    'setting_label_reset_data_cycle' => '重設資料週期',
    'setting_note_reset_data_cycle' => '自動地在每天 0:00 清除所有記錄。啟用這個選項能提升效能。',
    'setting_label_ip_source' => 'IP 來源',
    'setting_note_ip_source' => '您的網站在 CDN 服務背後？如果您使用 CDN，務必把這個設定值填寫正確，不然全部來自 CDN 的 IP 位址可能會被封鎖。',
    'setting_label_session_limit' => '工作階段限制',
    'setting_note_session_limit_1' => '當在線上的使用者數量達到限制範圍，其他未在隊列中的使用者必須排隊！',
    'setting_note_session_limit_2' => '以下圖片是範例。',
    'setting_label_online_limit' => '線上限制',
    'setting_note_online_limit' => '線上人數限制的最大值。',
    'setting_label_alive_period' => '存續期間',
    'setting_note_alive_period' => '單位：分鐘。',
    'setting_label_logs' => '記錄',
    'setting_label_action_logger' => '動作記錄器',
    'setting_heading_dailogui' => '對話框界面',
    'setting_label_language' => '語系',
    'setting_label_background_image' => '背景圖片',
    'setting_note_background_image' => '請加入該圖片的完整網址或相對路徑。',
    'setting_label_background_color' => '背景顏色',
    'setting_note_background_color' => '如果您不想用背景圖片的話，您可以指定一個背景顏色。',
    'setting_label_dialog_header' => '對話框頭部',
    'setting_text_for_example' => '舉例',
    'setting_label_font_color' => '字型顏色',
    'setting_label_shadow_opacity' => '陰影不透明度',
    'setting_note_shadow_opacity' => '範圍從 0 到 1，舉例來說，0.2 代表 20% 不透明度。',
    'setting_heading_filter_frequency' => '頻率',
    'setting_note_filter_frequency_1' => '不要在意人類使用者，如果他們達到限制範圍而被封鎖，他們可以藉由解決 CAPTCHA 驗證解除封鎖繼續瀏覽您的網站。',
    'setting_note_filter_frequency_2' => '以下圖片是範例。',
    'setting_label_secondly_limit' => '每秒限制',
    'setting_label_minutely_limit' => '每分鐘限制',
    'setting_label_hourly_limit' => '每小時限制',
    'setting_label_daily_limit' => '每日限制',
    'setting_note_secondly_limit' => '每秒鐘每位使用者可檢視的網頁數量。',
    'setting_note_minutely_limit' => '每分鐘每位使用者可檢視的網頁數量。',
    'setting_note_hourly_limit' => '每小時每位使用者可檢視的網頁數量。',
    'setting_note_daily_limit' => '每天每位使用者可檢視的網頁數量。',
    'setting_label_filter_cookie' => 'Cookie',
    'setting_label_filter_session' => '工作階段',
    'setting_note_filter_session' => '偵測是否多個工作階段由同一位訪客產生。',
    'setting_label_filter_referer' => '來源網址',
    'setting_note_filter_referer' => '檢查 HTTP 來源網址資訊。',
    'setting_label_quota' => '額度',
    'setting_note_quota' => '訪可在達到限制時將會被暫時地封鎖。',
    'setting_label_buffered_time' => '緩衝的時間',
    'setting_note_buffered_time' => '在第一次造訪您的網站的 n 秒後開始使用這個過濾器。',
    'setting_label_cookie_name' => 'Cookie 名',
    'setting_note_cookie_name' => '只限英文字元。',
    'setting_label_cookie_value' => 'Cookie 值',
    'setting_label_cookie_domain' => 'Cookie 域名',
    'setting_text_leave_blank' => '只要留空即套用預設值。'
];