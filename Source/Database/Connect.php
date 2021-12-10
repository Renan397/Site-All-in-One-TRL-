<?php
namespace Source\Database;

require __DIR__."/../../config/config.php";

use \PDO;
use \PDOException;

try {
  $conn = new PDO('mysql:host=localhost;dbname=talentos_trlsites','talentos_trlsitesUser', 'iIBpzZOJFlX$');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
