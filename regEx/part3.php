<?php

/*
 * tasks
 * http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-3.html
 */

echo "<a href='http://old.code.mu/tasks/php/regular/rabota-s-regulyarnymi-vyrazeniyami-v-php-glava-3.html'>
          <h2 >all tasks</h2>
      </a>";
echo "<h2>tasks on pockets when replacing</h2>";
echo "<br>" . 'task 1' . "<br>";
echo preg_replace('/([a-z0-9]+)@([a-z0-9]+)/', '$2@$1', 'aaa@bbb eee7@kkk');
//print bbb@aaa kkk@eee7

echo "<br>" . "<br>" . 'task 2' . "<br>";
echo preg_replace('/([0-9])/', '$0$0', 'a1b2c3');
//print a11b22c33


echo "<h2>tasks Into the pockets in the most regular expressionx</h2>";
echo "<br>" . 'task 3' . "<br>";
echo preg_replace('/([a-z0-9])\1/', '!', 'aae xxz 33a');
//print !e !z !a

echo "<br>" . "<br>" . 'task 4' . "<br>";
echo preg_replace('/([a-z])\1+/', '!', 'aaa bcd xxx efg');
//print ! bcd ! efg

echo "<h2>tasks on preg_match[_all]</h2>";
echo "<br>" . 'task 5' . "<br>";
$t5 = 'mymail@gmail.com';
preg_match_all('/^[a-z0-9\-\_+\.]+@[a-z]+\.[a-z]{2,3}$/', $t5, $matches);
print_r($matches);
//print Array ( [0] => Array ( [0] => mymail@gmail.com ) )

echo "<br>" . "<br>" . 'task 6' . "<br>";
$t6 = '#!test@gmail.com&&&';
$res = preg_match('/[a-z0-9_.-]+@[a-z]+\.[a-z]{2,3}/', $t6, $matches);
if($res == 1) {
    echo 'this string have email';
}elseif ($res == 0) {
    echo 'this string have not email';
}else {
    echo 'error';
}
//print 'this string have email'

echo "<br>" . "<br>" . 'task 7' . "<br>";
$t7 = 'my-site123.com';
$res = preg_match('/^[\w\.-]+\.[a-z]{2,3}$/', $t7, $matches);
if($res == 1) {
    echo 'this is string  - domen';
}elseif ($res == 0) {
    echo 'this is string - not domen';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 8' . "<br>";
$t8 = 'hello.site.com';
$res = preg_match('/^[a-z0-9-]+\.[a-z0-9-]+\.[a-z]{2,3}$/', $t8, $matches);
if($res == 1) {
    echo 'this is string  - domen 3 lvl';
}elseif ($res == 0) {
    echo 'this is string - not domen 3 lvl';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 9' . "<br>";
$t9 = 'https://site.com';
$res = preg_match('/^http:\/\/[a-z0-9.-]+\.[a-z]{2,}$/', $t9, $matches);
if($res == 1) {
    echo 'this is string  - http domen ';
}elseif ($res == 0) {
    echo 'this is string  - not http domen';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 10' . "<br>";
$t10 = 'https://site.com';
$res = preg_match('/^https?:\/\/[a-z0-9.-]+\.[a-z]{2,}$/', $t10, $matches);
if($res == 1) {
    echo 'this is string  - http(s) domen ';
}elseif ($res == 0) {
    echo 'this is string  - not http(s) domen';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 11' . "<br>";
$t11 = 'https://site.com/';
$res = preg_match('/^https?:\/\/[a-z0-9-]+\.[a-z]{2,}\/?$/', $t11, $matches);
if($res == 1) {
    echo 'this is string  - http(s) domen ';
}elseif ($res == 0) {
    echo 'this is string  - not http(s) domen';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 12' . "<br>";
$t12 = 'https://site.com/';
$res = preg_match('/^https?/', $t12, $matches);
if($res == 1) {
    echo 'this is string - starts with http(s)';
}elseif ($res == 0) {
    echo 'this is string  - not starts with http(s)';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 13' . "<br>";
$t13 = 'index.txt';
$res = preg_match('/\.(php|txt|html)$/', $t13, $matches);
if($res == 1) {
    echo 'this is string - ends with php or txt or html';
}elseif ($res == 0) {
    echo 'this is string  - not ends with php or txt or html';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 14' . "<br>";
$t14 = 'index.jpeg';
$res = preg_match('/\.(jpeg|jpg)$/', $t14, $matches);
if($res == 1) {
    echo 'this is string - ends with jpeg or jpg';
}elseif ($res == 0) {
    echo 'this is string  - not ends with jpeg or jpg';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 15' . "<br>";
$t15 = '6549833216554';
$res = preg_match('/[0-9]{1,12}/', $t15, $matches);
if($res == 1) {
    echo 'this is string - have on 1 to 12 numbers';
}elseif ($res == 0) {
    echo 'this is string  - have 1 ur more that 12 numbers';
}else {
    echo 'error';
}

echo "<br>" . "<br>" . 'task 16' . "<br>";
$t16 = '1d23d45 67s8 a9';
$res = preg_match_all('/\d/', $t16, $matches);
echo array_sum($matches[0]);

echo "<h2>tasks on preg_match</h2>";
echo "<br>" . 'task 17' . "<br>";
$t17 = '31-07-2021';
echo preg_replace('/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/', '$3.$2.$1', $t17);


echo "<br>" . "<br>" . 'task 18' . "<br>";
echo preg_replace('/^https?:\/\/([a-z0-9-]+\.[a-z]{2,})$/', '<a href="$0">$1</a>', 'http://site.com');



