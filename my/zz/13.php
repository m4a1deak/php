<?php
//1
//$str = 'hello ,when i am working , don not coming';

//查找单词结尾是ing的词根部分
//前瞻 断言 正预测 零宽度
//$patt = '/\b\w+(?=ing\b)/';

//把不已以ing结尾的单词找出来
//前瞻 断言 负预测 零宽度
// = '/\b\w+(?!ing)\w{3}\b/';

//2
$str = 'luck ,unlucky, state , unhappy';

//把un开头的单词词根找出来
//回顾 断言 正预测 零宽度
//$patt='/(?<=\bun)\w+\b/';

//把非un开头的单词找出来
$patt= '/\b\w{2}(?<!un)\w+\b/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
