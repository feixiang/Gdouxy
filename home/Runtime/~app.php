<?php  function toDate($time, $format = 'Y-m-d H:i:s') { if (empty($time)) { return ''; } $format = str_replace('#', ':', $format); return date($format, $time); } function get_client_ip() { if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) $ip = getenv("HTTP_CLIENT_IP"); else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) $ip = getenv("HTTP_X_FORWARDED_FOR"); else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) $ip = getenv("REMOTE_ADDR"); else if (isset($_SERVER ['REMOTE_ADDR']) && $_SERVER ['REMOTE_ADDR'] && strcasecmp($_SERVER ['REMOTE_ADDR'], "unknown")) $ip = $_SERVER ['REMOTE_ADDR']; else $ip = "unknown"; return ($ip); } function cmssavecache($name = '', $fields = '') { $Model = D($name); $list = $Model->select(); $data = array(); foreach ($list as $key => $val) { if (empty($fields)) { $data [$val [$Model->getPk()]] = $val; } else { if (is_string($fields)) { $fields = explode(',', $fields); } if (count($fields) == 1) { $data [$val [$Model->getPk()]] = $val [$fields [0]]; } else { foreach ($fields as $field) { $data [$val [$Model->getPk()]] [] = $val [$field]; } } } } $savefile = cmsgetcache($name); $content = "<?php\nreturn " . var_export(array_change_key_case($data, CASE_UPPER), true) . ";\n?>"; file_put_contents($savefile, $content); } function cmsgetcache($name = '') { return DATA_PATH . '~' . strtolower($name) . '.php'; } function IP($ip = '', $file = 'UTFWry.dat') { $_ip = array(); if (isset($_ip [$ip])) { return $_ip [$ip]; } else { import("ORG.Net.IpLocation"); $iplocation = new IpLocation($file); $location = $iplocation->getlocation($ip); $_ip [$ip] = $location ['country'] . $location ['area']; } return $_ip [$ip]; } function build_verify($length = 4, $mode = 1) { return rand_string($length, $mode); } function getFirstImage($content) { $first_img = ''; $all_image = preg_match("<img.*src=[\"](.*?)[\"].*?>", $content, $match); $first_img = $match[1]; if (empty($first_img)) $first_img = '../Public/images/d_slider.png'; return $first_img; } function getKeyword($length){ } return array ( 'app_debug' => false, 'app_domain_deploy' => false, 'app_sub_domain_deploy' => false, 'app_plugin_on' => false, 'app_file_case' => false, 'app_group_depr' => '.', 'app_group_list' => '', 'app_autoload_reg' => false, 'app_autoload_path' => 'Think.Util.', 'app_config_list' => array ( 0 => 'taglibs', 1 => 'routes', 2 => 'tags', 3 => 'htmls', 4 => 'modules', 5 => 'actions', ), 'cookie_expire' => 3600, 'cookie_domain' => '', 'cookie_path' => '/', 'cookie_prefix' => '', 'default_app' => '@', 'default_group' => 'Home', 'default_module' => 'Index', 'default_action' => 'index', 'default_charset' => 'utf-8', 'default_timezone' => 'PRC', 'default_ajax_return' => 'JSON', 'default_theme' => 'default', 'default_lang' => 'zh-cn', 'db_type' => 'mysql', 'db_host' => 'localhost', 'db_name' => 'bmc_gdouxy', 'db_user' => 'root', 'db_pwd' => '123456', 'db_port' => '3306', 'db_prefix' => '', 'db_suffix' => '', 'db_fieldtype_check' => false, 'db_fields_cache' => true, 'db_charset' => 'utf8', 'db_deploy_type' => 0, 'db_rw_separate' => false, 'data_cache_time' => -1, 'data_cache_compress' => false, 'data_cache_check' => false, 'data_cache_type' => 'File', 'data_cache_path' => './home/Runtime/Temp/', 'data_cache_subdir' => false, 'data_path_level' => 1, 'error_message' => '您浏览的页面暂时发生了错误！请稍后再试～', 'error_page' => '', 'html_cache_on' => false, 'html_cache_time' => 60, 'html_read_type' => 0, 'html_file_suffix' => '.shtml', 'lang_switch_on' => false, 'lang_auto_detect' => true, 'log_exception_record' => true, 'log_record' => false, 'log_file_size' => 2097152, 'log_record_level' => array ( 0 => 'EMERG', 1 => 'ALERT', 2 => 'CRIT', 3 => 'ERR', ), 'page_rollpage' => 5, 'page_listrows' => 20, 'session_auto_start' => true, 'show_run_time' => false, 'show_adv_time' => false, 'show_db_times' => false, 'show_cache_times' => false, 'show_use_mem' => false, 'show_page_trace' => false, 'show_error_msg' => true, 'tmpl_engine_type' => 'Think', 'tmpl_detect_theme' => false, 'tmpl_template_suffix' => '.html', 'tmpl_content_type' => 'text/html', 'tmpl_cachfile_suffix' => '.php', 'tmpl_deny_func_list' => 'echo,exit', 'tmpl_parse_string' => '', 'tmpl_l_delim' => '{', 'tmpl_r_delim' => '}', 'tmpl_var_identify' => 'array', 'tmpl_strip_space' => false, 'tmpl_cache_on' => true, 'tmpl_cache_time' => -1, 'tmpl_action_error' => 'Public:success', 'tmpl_action_success' => 'Public:success', 'tmpl_trace_file' => './ThinkPHP/Tpl/PageTrace.tpl.php', 'tmpl_exception_file' => './ThinkPHP/Tpl/ThinkException.tpl.php', 'tmpl_file_depr' => '/', 'taglib_begin' => '<', 'taglib_end' => '>', 'taglib_load' => true, 'taglib_build_in' => 'cx', 'taglib_pre_load' => '', 'tag_nested_level' => 3, 'tag_extend_parse' => '', 'token_on' => true, 'token_name' => '__hash__', 'token_type' => 'md5', 'url_case_insensitive' => false, 'url_router_on' => false, 'url_route_rules' => array ( ), 'url_model' => 1, 'url_pathinfo_model' => 2, 'url_pathinfo_depr' => '/', 'url_html_suffix' => '.html', 'var_group' => 'g', 'var_module' => 'm', 'var_action' => 'a', 'var_router' => 'r', 'var_page' => 'p', 'var_template' => 't', 'var_language' => 'l', 'var_ajax_submit' => 'ajax', 'var_pathinfo' => 's', 'indexnewscount' => 8, 'slidercount' => 4, 'pagecount' => 5, 'noticecount' => 6, 'recommandcount' => 6, 'donatecount' => 20, 'blesscount' => 8, 'searchcount' => 10, 'focuscount' => 5, ); ?>