<?php

/*
 * tasks
 * http://http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-4.html
 */

echo "<a href='http://http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-4.html'>
          <h2 >all tasks</h2>
      </a>";
echo "<h2>tasks on For positive and negative viewing</h2>";
echo "<br>" . 'task 1' . "<br>";
echo preg_replace('/(?<=b)aaa/', '!', 'baaa');
//print b!

echo "<br>" . "<br>" . 'task 2' . "<br>";
echo preg_replace('/(?<!b)aaa/', '!', 'waaa');
//print w!

echo "<br>" . "<br>" . 'task 3' . "<br>";
echo preg_replace('/aaa(?=b)/', '!', 'aaab');
//print !b

echo "<br>" . "<br>" . 'task 4' . "<br>";
echo preg_replace('/aaa(?!b)/', '!', 'aaaw aaab');
//print !w aaab

echo "<br>" . "<br>" . 'task 5' . "<br>";
echo preg_replace('/(?<!\*)\*(?!\*)/', '!', 'aaa * bbb ** eee * **');
//print !b

echo "<br>" . "<br>" . 'task 6' . "<br>";
echo preg_replace('/(?<!\*)\*\*(?!\*)+/', '!', 'aaa * bbb ** eee *** kkk ****');

echo "<br>" . "<br>" . 'task 7' . "<br>";
echo preg_replace('/([a-z])(?=\1)/', '!', 'aabbccdefffgh');

echo "<h2>tpreg_replace_callback</h2>";
echo "<br>" . 'task 9' . "<br>";
echo preg_replace_callback('(\d+)', 'square', 'a1b2c3');
    function square($matcher)
        {
            $result = pow($matcher[0], 2);
            return $result;
        }

echo "<br>" . "<br>" . 'task 10' . "<br>";
echo preg_replace_callback('/(?<=\')\d(?=\')/', 'sq', "2aaa'3'bbb'4'");
    function sq($matcher)
    {
        $result = pow($matcher[0], 2);
        return $result;
    }