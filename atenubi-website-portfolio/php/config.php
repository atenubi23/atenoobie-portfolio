<?php
/**
 * Database connection.
 * Default values match a fresh XAMPP install (root / no password).
 * Import db/schema.sql into phpMyAdmin before using the forms below.
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'atenoobie_portfolio');
define('DB_USER', 'root');
define('DB_PASS', '');

/**
 * Returns a PDO connection, or null if the database isn't reachable.
 * The handlers fall back to writing a local log file when this is null,
 * so the forms still work even before you've set up MySQL.
 */
function getDbConnection(): ?PDO {
    try {
        $pdo = new PDO(
            'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        return $pdo;
    } catch (PDOException $e) {
        return null;
    }
}
