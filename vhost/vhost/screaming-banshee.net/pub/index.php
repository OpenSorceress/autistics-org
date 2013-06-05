<?php

foreach($_SERVER as $key=>$val) {
        error_log("$key:\t\t$val\n\r", 3, "../log/php.log");
}
error_log('\n', 3, "../log/php.log");
