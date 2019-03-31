<?php
/**
 * Created by PhpStorm.
 * User: 1655664358@qq.com
 * Date: 2019/3/31
 * Time: 21:52
 */

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

function parserInput($input)
{
    foreach (explode("\n",$input) as $item){
        $field = explode(";",$item);
        $id = array_shift($field);

        yield $id=>$field;
    }
}

$ret = parserInput($input);

foreach($ret as $id=>$field){
    echo $id."...".$field[1].PHP_EOL;
}