<?php
/*
 * tasks
 * http://http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-2.html
 */

echo "<a href='http://http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-2.html'>
          <h2 >all tasks</h2>
      </a>";
echo "<h2>tasks on '{}' symbols</h2>";
echo "<br>" . 'task 1' . "<br>";
echo preg_replace('/ab{2,4}a/', '!', 'aa aba abba abbba abbbba abbbbba');
//print aa aba ! ! ! abbbbba

echo "<br>" . "<br>" . 'task 2' . "<br>";
echo preg_replace('/ab{0,3}a/', '!', 'aa aba abba abbba abbbba abbbbba');
//print ! ! ! ! abbbba abbbbba

echo "<br>" . "<br>" . 'task 3' . "<br>";
echo preg_replace('/ab{4,}a/', '!','aa aba abba abbba abbbba abbbbba');
//print aa aba abba abbba ! !

echo "<h2>tasks on '\s, \S, \w, \W, \d, \D' symbols</h2>";
echo "<br>" . 'task 4' . "<br>";
echo preg_replace('/a\da/', '!', 'a1a a2a a3a a4a a5a aba aca');
//print ! ! ! ! ! aba aca

echo "<br>" . "<br>" . 'task 5' . "<br>";
echo preg_replace('/a\d+a/', '!', 'a1a a22a a333a a4444a a55555a aba aca');
//print ! ! ! ! ! aba aca

echo "<br>" . "<br>" . 'task 6' . "<br>";
echo preg_replace('/a\d*a/', '!', 'aa a1a a22a a333a a4444a a55555a aba aca');
//print ! ! ! ! ! ! aba aca

echo "<br>" . "<br>" . 'task 7' . "<br>";
echo preg_replace('/a\Db/','!', 'avb a1b a2b a3b a4b a5b abb acb');
//print ! a1b a2b a3b a4b a5b ! !

echo "<br>" . "<br>" . 'task 8' . "<br>";
echo preg_replace('/a\Wb/', '!', 'ave a#b a2b a$b a4b a5b a-b acb');
//print ave ! a2b ! a4b a5b ! acb

echo "<br>" . "<br>" . 'task 9' . "<br>";
echo preg_replace('/\s/','!', 'ave a#a a2a a$a a4a a5a a-a aca');
//print ave!a#a!a2a!a$a!a4a!a5a!a-a!aca

echo "<h2>tasks on '[], '^' - not, [a-zA-Z], Cyrillic' symbols</h2>";

$str = 'a1 a4a a5a aza a2a a0a a+a aaa';

echo "<br>" . 'task 10' . "<br>";
echo preg_replace('/a[bex]a/', '!', 'aba aea aca aza axa');
//print ! ! aca aza !

echo "<br>" . "<br>" . 'task 11' . "<br>";
echo preg_replace('/a[b\.\+\*]a/', '!', 'aba aea aca aza axa a.a a+a a*a');
//print ! aea aca aza axa ! ! !

echo "<br>" . "<br>" . 'task 12' . "<br>";
echo preg_replace('/a[3-7]a/', '!', $str);
//print a1 ! ! aza a2a a0a a+a aaa

echo "<br>" . "<br>" . 'task 13' . "<br>";
echo preg_replace('/a[a-g]a/', '!', $str);
//print a1 a4a a5a aza a2a a0a a+a !

echo "<br>" . "<br>" . 'task 14' . "<br>";
echo preg_replace('/a[a-fj-z]/', '!', $str);
//print a1 a4a a5a !a a2a a0a a+a !a

echo "<br>" . "<br>" . 'task 15' . "<br>";
echo preg_replace('/a[a-fA-Z]a/', '!', $str);
//print a1 a4a a5a aza a2a a0a a+a !

echo "<br>" . "<br>" . 'task 16' . "<br>";
echo preg_replace('/a[^ex]a/', '!', 'aba aea aca aza axa a-a a#a');
//print ! ae!c!z!x!-!#a

echo "<br>" . "<br>" . 'task 17' . "<br>";
echo preg_replace('/w[а-яё]w/u', '!', 'wйw wяw wёw wqw');
//print ! ! ! wqw


echo "<h2>tasks on '[a-zA-Z] and quantifiers' symbols</h2>";
echo "<br>" . 'task 18' . "<br>";
echo preg_replace('/a[a-z]+a/', '!', 'aAXa aeffa aGha aza ax23a a3sSa');
//print aAXa ! aGha ! ax23a a3sSa

echo "<br>" . "<br>" . 'task 19' . "<br>";
echo preg_replace('/a[a-zA-Z]+a/', '!', 'aAXa aeffa aGha aza ax23a a3sSa');
//print ! ! ! ! ax23a a3sSa

echo "<br>" . "<br>" . 'task 20' . "<br>";
echo preg_replace('/a[a-z0-9]+a/', '!', 'aAXa aeffa aGha aza ax23a a3sSa');
//print aAXa ! aGha ! ! a3sSa

echo "<br>" . "<br>" . 'task 21' . "<br>";
echo preg_replace('/[а-яА-ЯёЁ]+/u', '!', 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ');
//print ! ! ! ! ! ! ! ! ! !


echo "<h2>tasks on '^', '$' symbols</h2>";
echo "<br>" . 'task 22' . "<br>";
echo preg_replace('/^aaa/', '!', 'aaa aaa aaa');
//print ! aaa aaa

echo "<br>" . "<br>" . 'task 23' . "<br>";
echo preg_replace('/aaa$/', '!', 'aaa aaa aaa');
//print aaa aaa !


echo "<h2>tasks on '|' symbols</h2>";
echo "<br>" . 'task 24' . "<br>";
echo preg_replace('/a(e+|x+)a/', '!', 'aeeea aeea aea axa axxa axxxa');
//print ! ! ! ! ! !

echo "<br>" . "<br>" . 'task 25' . "<br>";
echo preg_replace('/a(e{2}|x+)a/', '!', 'aeeea aeea aea axa axxa axxxa');
//print ! ! ! ! ! !

echo "<h2>tasks: end or beginning of a word \b, \B symbols</h2>";
echo "<br>" . 'task 26' . "<br>";
echo preg_replace('/\b/', '!', 'xbx aca aea abba adca abea');
//print !xbx! !aca! !aea! !abba! !adca! !abea!

echo "<h2>tasks on '\' symbols</h2>";
echo "<br>" . 'task 27' . "<br>";
echo preg_replace('/a[\\\\]a/', '!', 'a\a abc');
//print ! abc

echo "<br>" . "<br>" . 'task 28' . "<br>";
echo preg_replace('/a\\\\\\\\a/', '!', 'a\a a\\a a\\\a');
//print a\a a\a !

echo "<h2>tasks: Shielding is more difficult</h2>";
echo "<br>" . 'task 29' . "<br>";
echo preg_replace('/\/[a-z]+\\\\/', '!', 'bbb /aaa\\ bbb /ccc\\');
//print bbb ! bbb !

echo "<br>" . "<br>" . 'task 30' . "<br>";
echo preg_replace('/\<b\>\s[a-z]+\s\<\/b\>/', '!', 'bbb <b> hello </b>, <b> world </b> eee');
//print bbb !, ! eee