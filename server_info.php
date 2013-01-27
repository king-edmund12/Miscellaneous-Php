<?php
/*
* @licence Attribution-NonCommercial 3.0 , http://creativecommons.org/licenses/by-nc/3.0/
* @author Eddy K as (Accross Codes)
* @name Server Information 
*/

$s_name = $_SERVER['SERVER_NAME'];
$s_ip = $_SERVER['SERVER_ADDR'];
$s_d_root = $_SERVER['DOCUMENT_ROOT'];
$s_r_time = $_SERVER['REQUEST_TIME'];

?>

<p>Server Name : <?echo $s_name;?></p>
<p>Server Ip : <?echo $s_ip;?></p>
<p>Server Root Folder : <?echo $s_d_root;?></p>
<p>Server Responce Time : <?echo $s_r_time;?></p>