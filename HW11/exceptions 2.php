<?php

echo preg_replace('|a..a|','!','aba aca aea abba adca abea'); // 1.2

echo preg_replace('|ab*a|','!','aa aba abba abbba abca abea'); // 1.4

echo preg_replace('|2\+3|','!','2+3 223 2223'); // 1.9

echo preg_replace('|a.*?a|','!', 'aba accca azzza wwwwa'); // 1.14

echo preg_replace('|a[0-9]*a|','!','a1a a22a a333a a4444a a55555a aba aca'); // 2.5

echo preg_replace('|a\Wb|','!','ave a#b a2b a$b a4b a5b a-b acb'); // 2.8

echo preg_replace('|a[a-zA-Z]*a|','!','aAXa aeffa aGha aza ax23a a3sSa'); // 2.19