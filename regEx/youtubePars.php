<?php

//preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
//    "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$post_details['description']);

$url1 = 'https://www.youtube.com/watch?v=-E20aE-w7vc&t=27s';
$url2 = 'https://www.youtube.com/watch?v=C4U-qSwtmcA&list=PLhgRAQ8BwWFY7RmKnxfvqupfkeLPsh9GY&index=28';
$url3 = 'https://www.youtube.com/watch?v=NVcpJZJ60Ao';
$url4 = 'https://youtu.be/NVcpJZJ60Ao';



$res = preg_match('/^(https?:\/\/)(www\.youtube\.com|youtu\.be\/)(\/watch\?v=)?(\S+)$/i', $url4, $matches);

print_r($matches[0]);
echo "<br><a href='$matches[0]'>video YouTube</a>";
