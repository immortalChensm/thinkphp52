<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//echo 'common.php is running';

/**
 * @param $class 类名
 * @param $func  方法名
 * @param $data  要打印的数据
 */
function trackTest($class,$func,$data)
{

    $position = get_class($class)."->".$func."()";
    echo " <p style='margin:5px auto;line-height:80px;font-weight:bold;background:lightseagreen;color:yellow;min-height:80px;'> Run to: $position ";
    if (is_array($data)){
        print_r($data);
    }elseif(is_string($data)){
        echo $data;
    }elseif(is_object($data)){
        var_dump($data);
    }else{
        echo $data;
    }
    echo "</p>";

}
