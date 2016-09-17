<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 9/17/16
 */
$dotenv = new Dotenv\Dotenv(__DIR__.DIRECTORY_SEPARATOR.'..');
$dotenv->load();
$dotenv->required(['APP_ENV', 'DB_HOST', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'])->notEmpty();
