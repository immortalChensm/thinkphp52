<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/3/31
 * Time: 22:39
 */
//PHP多进程服务器模型

$serv = stream_socket_server("tcp://0.0.0.0:9000",$errno,$error);

while (true){
    $connection = stream_socket_accept($serv);
    if (pcntl_fork() == 0){

        echo fread($connection);
        fwrite($connection,"hello,world",50);
        fclose($connection);
        exit(0);
    }
}