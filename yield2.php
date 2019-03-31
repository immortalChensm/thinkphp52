<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/3/31
 * Time: 20:39
 */

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$start = microtime_float();

function test($num)
{
    $loop1 = 50*10000;
    $loop2 = 90*10000;
    $ret = [];
    for ($i=0;$i<$num;$i++){
        $ret[] = $i;
    }

    foreach($ret as $i){
        if ($i==$loop1){
            echo $loop1;
            echo PHP_EOL;
        }elseif($i==$loop2){
            echo $loop2;
            echo PHP_EOL;
        }
        //处理每条数据，并写入文件
    }
}

//假设这是1亿条数据，从数据库里取出来的
test(100*100*100*100);

$end = microtime_float();
echo $end-$start."秒";