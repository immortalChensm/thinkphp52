<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/3/31
 * Time: 22:00
 */

function test()
{
    yield 1;
    yield from [2];
    yield from [3,4];
    yield from new ArrayIterator([5,6]);
    yield from seven();

}

function seven()
{
    yield 7;
    yield from eight();
}

function eight()
{
    yield from [8,9];
}

foreach (test() as $num){
    echo $num;
}