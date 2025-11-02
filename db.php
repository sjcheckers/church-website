<?php
// inc/db.php
$db_file = __DIR__ . '/../database.db';

// create or open db
$db = new SQLite3($db_file);

// helper function
function db() {
    global $db;
    return $db;
}
?>

