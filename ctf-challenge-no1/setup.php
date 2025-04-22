<?php
$db = new SQLite3('db.sqlite');
$db->exec("DROP TABLE IF EXISTS users");

$db->exec("
  CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT,
    password TEXT,
    role TEXT
  )
");

// The password is the flag!
$db->exec("INSERT INTO users (username, password, role) VALUES ('admin', 'flag{admin_secret_42}', 'admin')");
$db->exec("INSERT INTO users (username, password, role) VALUES ('guest', '1234', 'user')");
echo "✅ Database initialized with flag.";
?>
