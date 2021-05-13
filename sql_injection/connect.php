<?php

/**
 * @return PDO
 */
function connect(): PDO
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=phpinfosec', 'root', 'root');
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
    return $db;
}