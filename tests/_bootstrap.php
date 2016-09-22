<?php
// This is global bootstrap for autoloading
$dumpSql = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'company-web-app-dump.sql');
file_put_contents(__DIR__.DIRECTORY_SEPARATOR.'_data'.DIRECTORY_SEPARATOR.'dump.sql', $dumpSql);
