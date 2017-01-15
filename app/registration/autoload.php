<?php

$needed_files = array(
    dirname(__FILE__).'/env.php',
    dirname(__FILE__).'/classes/zohohelpermethods.php',
);

foreach ($needed_files as $file) {
    require_once($file);
}
    
    