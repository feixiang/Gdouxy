<?php

//公共函数
function toDate($time, $format = 'Y-m-d H:i:s') {
    if (empty($time)) {
        return '';
    }
    $format = str_replace('#', ':', $format);
    return date($format, $time);
}

function get_client_ip() {
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
    else if (isset($_SERVER ['REMOTE_ADDR']) && $_SERVER ['REMOTE_ADDR'] && strcasecmp($_SERVER ['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER ['REMOTE_ADDR'];
    else
        $ip = "unknown";
    return ($ip);
}

// 缓存文件
function cmssavecache($name = '', $fields = '') {
    $Model = D($name);
    $list = $Model->select();
    $data = array();
    foreach ($list as $key => $val) {
        if (empty($fields)) {
            $data [$val [$Model->getPk()]] = $val;
        } else {
            // 获取需要的字段
            if (is_string($fields)) {
                $fields = explode(',', $fields);
            }
            if (count($fields) == 1) {
                $data [$val [$Model->getPk()]] = $val [$fields [0]];
            } else {
                foreach ($fields as $field) {
                    $data [$val [$Model->getPk()]] [] = $val [$field];
                }
            }
        }
    }
    $savefile = cmsgetcache($name);
    // 所有参数统一为大写
    $content = "<?php\nreturn " . var_export(array_change_key_case($data, CASE_UPPER), true) . ";\n?>";
    file_put_contents($savefile, $content);
}

function cmsgetcache($name = '') {
    return DATA_PATH . '~' . strtolower($name) . '.php';
}

function IP($ip = '', $file = 'UTFWry.dat') {
    $_ip = array();
    if (isset($_ip [$ip])) {
        return $_ip [$ip];
    } else {
        import("ORG.Net.IpLocation");
        $iplocation = new IpLocation($file);
        $location = $iplocation->getlocation($ip);
        $_ip [$ip] = $location ['country'] . $location ['area'];
    }
    return $_ip [$ip];
}

/**
  +----------------------------------------------------------
 * 获取登录验证码 默认为4位数字
  +----------------------------------------------------------
 * @param string $fmode 文件名
  +----------------------------------------------------------
 * @return string
  +----------------------------------------------------------
 */
function build_verify($length = 4, $mode = 1) {
    return rand_string($length, $mode);
}

/**
 * 首页幻灯片展示，获取文章第一张图片地址
 * preg_match第一次成功后就停止，存储在match中，preg_match_all则获取所有匹配的结果,存储在matches中
 * @param <type> $content 文章内容
 * @return 每一张图片地址
 */
function getFirstImage($content) {
    $first_img = '';
    $all_image = preg_match("<img.*src=[\"](.*?)[\"].*?>", $content, $match);
    $first_img = $match[1];
    if (empty($first_img))
        $first_img = '../Public/images/d_slider.png'; //默认图片地址
    return $first_img;
}
/**
 *截取字符串
 * @param <type> $length 截取长度
 */
function getKeyword($length){
    
}

?>