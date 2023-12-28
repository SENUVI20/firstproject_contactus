<?php

require_once 'config.php';



if (isset($_GET['S_id'])) {
    $S_id = $_GET['S_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $stmt = $conn->prepare("DELETE FROM contact WHERE S_id = ?");
        $stmt->bind_param("i", $S_id);

        if ($stmt->execute()) {
            
            header("Location: contactread.php");
            exit();
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        
        echo "Are you sure you want to delete this record?<br>";
        echo "<form method='POST'>";
        echo "<input type='submit' value='Yes, Delete'>";
        echo "</form>";
    }
}

$conn->close();
?>