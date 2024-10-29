<?php

declare(strict_types=1);

require_once __DIR__.'/';

function database_connect(): PDO
{
    return new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
}