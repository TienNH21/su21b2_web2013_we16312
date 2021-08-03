<?php

require_once './../../db/san_pham.php';

$id = $_GET['id'];
deleteById($id);
header("Location: /we16312/admin/san_pham/index.php");
