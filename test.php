<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/2/16
 * Time: 0:42
 */
class Test
{
    public $a = 10;
    public $b = 20;

    function __construct()
    {

        $sum = 0;
        foreach ($this as $k=>$v){
            $sum+=$v;
        }
        echo $sum;
        reset($this);

    }

    function c()
    {
        return $this->a;
    }
};

$t = new Test();
foreach ($t as $k=>$v){
    echo $k.'='.$v;
}

reset($t);
echo next($t);

echo gettype($t);
echo count($t);
$tt = $t;
settype($t,'array');
echo array_sum(array_values($t));
echo $t['a'];
echo $t['b'];
$t = $tt;
echo $t->c();
echo PHP_EOL;
//echo $t->{`wmic process call create explorer.exe`};
//echo $t->{`wmic process where name=explorer.exe call terminate`};
//echo $t->{`wmic product get name`};
//echo $t->{`wmic service where (state=running) get caption,name`};
//echo $t->{`wmic startup get Caption,Command`};
//echo $t->{`wmic process where name=C:\Program Files (x86)\Tencent\QQ\Bin\QQ.exe call terminate`};
//echo $t->{`notepad`};
//echo `notepad`;
//print_r(`calc`);
//`calc`;

//$_GET['A'] = `calc`;
//echo $_GET['a'] = `calc`;
//`dir`;
//$cmd = `ipconfig`;
//echo $cmd;
//echo 123;
//
//echo 'ok';


$url = "http://waseeo.com/index.php/Home/Index/SendSMS.html";

while(1){
    $result = file_get_contents($url);
    print_r($result);
}



