<?php
require 'database.php';
require 'index.php';

// insert into database
function createUser($ferson, $conn) {
    try {
        $stmt = $conn->prepare("INSERT INTO fersons (last_name, first_name, middle_initial, age, contact_number, email, address) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $ferson->getLastName(), $ferson->getFirstName(), $ferson->getMiddleInitial(), $ferson->getAge(), $ferson->getContactNo(), $ferson->getEmail(), $ferson->getAddress());
        $stmt->execute();
        $stmt->close();

        header("Location: display.php");
        exit();
    } catch (Exception $e) {
        error_log("An error occurred: " . $e->getMessage());
        return false;
    }
} 

$conn = Database::getInstance()->getConnection();

session_start();
$ferson = $_SESSION['formInfo'];
unset($_SESSION['formInfo']);

createUser($ferson, $conn);
