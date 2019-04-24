<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/3/31
 * Time: 19:10
 */

function test($num)
{
    for ($i=0;$i<$num;$i++){
        yield $i;
    }

}


function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$start = microtime_float();
echo $start.PHP_EOL;
echo (memory_get_peak_usage(true)/1024/1024)."MB";
echo PHP_EOL;
$ret = test(100*100*100*1000);
foreach ($ret as $v){
    //echo $v;
    if ($v == 500000){
        echo $v;
    }elseif($v==900000){
        echo $v;
    }
}
echo PHP_EOL;
echo (memory_get_peak_usage(true)/1024/1024)."MB";
echo PHP_EOL;
$end = microtime_float();
echo $end-$start."秒";
echo $end."秒";
echo $start."秒";