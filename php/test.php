<?php
$conn = pg_connect("host=postgres port=5432 dbname=testdb user=testuser password=testpass");
if ($conn) {
    echo "PostgreSQL接続成功!";
} else {
    echo "接続失敗";
}

