<?php
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="dist/output.css">
</head>
<body class="flex items-center justify-center">

<div class="display-container text-center mb-11">
    <?php
    $conn = Database::getInstance()->getConnection();

        $sql = "SELECT * FROM fersons";
        $result = $conn->query($sql);
    
        $data = [];
    
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    
        $result->close();

    if (isset($data)) {
        echo "<h2 class='text-2xl pt-11 text-red-600 font-bold mb-4'>Form Information</h2>";

        foreach ($data as $ferson) {
            echo "<p class=''>ID: " . $ferson['id'] . "</p>";
            echo "<p class=''>Last Name: " . $ferson['last_name'] . "</p>";
            echo "<p class=''>First Name: " . $ferson['first_name'] . "</p>";
            echo "<p class=''>Middle Initial: " . $ferson['middle_initial'] . "</p>";
            echo "<p class=''>Age: " . $ferson['age'] . "</p>";
            echo "<p class=''>Contact No: " . $ferson['contact_number'] . "</p>";
            echo "<p class=''>Email: " . $ferson['email'] . "</p>";
            echo "<p class=''>Address: " . $ferson['address'] . "</p>";
            echo "</br></br>";
        }

        echo '<a href="index.php">Go Back</a>';
    } else {
        echo "<p class='text-red-500'>Form information not available.</p>";
    }
    ?>
</div>
</body>
</html>