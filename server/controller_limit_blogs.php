<?php

include('connection.php');

$query_blogs = "SELECT * FROM blogs ORDER BY blog_date DESC LIMIT 3";

$stmt_blogs = $conn->prepare($query_blogs);

$stmt_blogs->execute();

$blogs = $stmt_blogs->get_result();