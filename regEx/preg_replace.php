<?php

/*
 * tasks
 * http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-1.html
 */

echo "<a href='http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-1.html'>
          <h2 >all tasks</h2>
      </a>";
echo "<h2>tasks on '.' symbols</h2>";
echo "<br>" . 'task 1' . "<br>";
// 1. Given the string 'ahb acb aeb aeeb adcb axeb'.
// Write a regular line that matches the strings ahb, acb, aeb by pattern: letter 'a', any character, letter 'b'.
echo preg_replace('/a.b/', '!', 'ahb acb aeb aeeb adcb axeb');
//print ! ! ! aeeb adcb axeb

// 2. Given the string 'aba aca aea abba adca abea'.
// Write a regular line that matches the pattern abba adca abea: letter 'a', any 2 characters, letter 'a'.
echo "<br>" . "<br>" . 'task 2' . "<br>";
echo preg_replace('/a..a/', '!', 'aba aca aea abba adca abea');
//print aba aca aea ! ! !

// 3. Given the string 'aba aca aea abba adca abea'.
// Write a regex that finds the strings abba and abea without capturing adca.
echo "<br>" . "<br>" . 'task 3' . "<br>";
echo  preg_replace('/ab.a/', '!', 'aba aca aea abba adca abea');
//print aba aca aea ! adca !
echo "<br>" . "<br>";


echo "<h2>tasks on '+', '*', '?', () symbols</h2>";
//4. Given the string 'aa aba abba abbba abca abea'. Write a regular line that matches the pattern aba, abba, abbba:
// letter 'a', letter 'b' any number of times, letter 'a'.
echo "<br>" . "<br>" . 'task 4' . "<br>";
echo preg_replace('/ab+a/', '!', 'aa aba abba abbba abca abea' );
//print aa ! ! ! abca abea

//5. Given the string 'aa aba abba abbba abca abea'. Write a regular line that matches the strings aa, aba, abba, abbba
// by pattern: letter 'a', letter 'b' any number of times (including no time), letter 'a'.
echo "<br>" . "<br>" . 'task 5' . "<br>";
echo preg_replace('/ab*a/', '!', 'aa aba abba abbba abca abea');
//print ! ! ! ! abca abea

//6. Given the string 'aa aba abba abbba abca abea'. Write a regular pattern that matches the strings aa, aba by pattern:
// letter 'a', letter 'b' once or none, letter 'a'.
echo "<br>" . "<br>" . 'task 6' . "<br>";
echo preg_replace('/ab?a/', '!', 'aa aba abba abbba abca abea');
//print ! ! abba abbba abca abea

//7/ Given the string 'ab abab abab abababab abea'. Write a regular pattern that matches strings by pattern:
// the string 'ab' is repeated 1 or more times.
echo "<br>" . "<br>" . 'task 7' . "<br>";
echo preg_replace('/(ab)+/', '!', 'ab abab abab abababab abea');
//print ! ! ! ! !ea


echo "<h2>tasks on shielding symbols</h2>";

//8. Given the string 'a.a aba aea'. Write a regex that finds string a.a without capturing the rest.
echo "<br>" . "<br>" . 'task 8' . "<br>";
echo preg_replace('/a\.a/', '!', 'a.a aba aea');
//print ! aba aea

//9. Given the string ''2+3 223 2223'. Write a regex that finds line 2+3 without capturing the rest.
echo "<br>" . "<br>" . 'task 9' . "<br>";
echo preg_replace('/2\+3/', '!', '2+3 223 2223');
//print ! 223 2223

//10.Given the string '23 2+3 2++3 2+++3 345 567'.
//Write a regex that finds lines 2+3, 2++3, 2+++3 without capturing the rest (+ can be any number).
echo "<br>" . "<br>" . 'task 10' . "<br>";
echo preg_replace('/2\++3/', '!', '23 2+3 2++3 2+++3 345 567');
//print 23 ! ! ! 345 567

//11. Given the string '23 2+3 2++3 2+++3 445 677 '.
// Write a regex that finds lines 23, 2+3, 2++3, 2+++3 without capturing the rest.
echo "<br>" . "<br>" . 'task 11' . "<br>";
echo preg_replace('/2\+*3/', '!', '23 2+3 2++3 2+++3 445 677');
//print ! ! ! ! 445 677

//12.Given the string '*+ *q+ *qq+ *qqq+ *qqq qqq+'.
// Write a regex that finds the lines *q+, *qq+, *qqq+ without capturing the rest.
echo "<br>" . "<br>" . 'task 12' . "<br>";
echo preg_replace('/\*q+\+/', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
//print *+ ! ! ! *qqq qqq+

//13.Given the string '*+ *q+ *qq+ *qqq+ *qqq qqq+'.
// Write a regex that finds the lines *+, *q+, *qq+, *qqq+ without capturing the rest.
echo "<br>" . "<br>" . 'task 13' . "<br>";
echo preg_replace('/\*q*\+/', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
//print ! ! ! ! *qqq qqq+


echo "<h2>tasks on shielding greed</h2>";

//14.Given the string 'aba accca azzza wwwwa'.
// Write a regex that will find all lines around the edges of which are letters 'a', and replace each of them with '!'.
// Any character (except a) can be between the letters a.
echo "<br>" . "<br>" . 'task 14' . "<br>";
echo preg_replace('/a.+?a/', '!', 'aba accca azzza wwwwa');
//print ! ! ! wwwwa;