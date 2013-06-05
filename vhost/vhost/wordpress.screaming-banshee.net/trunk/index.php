<?php

error_log(" ");
foreach($_SERVER as $key=>$val) {
        error_log($key . ":    " . $val);
}
error_log(" ");
