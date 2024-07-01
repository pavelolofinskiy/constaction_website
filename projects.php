<?php
// projects.php

require 'db.php';

$projects = [];
$stmt = $pdo->query('SELECT * FROM projects');
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $projects[$row['id']] = $row;
}