<!DOCTYPE html>
<html>
<head>
    <title>contact Details</title>
    <link rel="stylesheet" href="contactread.css"> 
<body>
    <h1>contact Details</h1>

    <?php
  
    $connection = new mysqli('localhost', 'root', '', 'recruitment');
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    
    $result = $connection->query("SELECT * FROM contact");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='contact'>";
            echo "<h2>" . $row['username'] . "</h2>";
            echo "<p>Email: " . $row['email'] . "</p>";
            echo "<p>Subject: " . $row['subject'] . "</p>";
            echo "<p>Details: " . $row['detail'] . "</p>";
            

           

echo "<a href='contactdelete.php?S_id=" . $row['S_id'] . "'>Delete</a>";

            echo "</div>";
        }
    } else {
        echo "No contact details.";
    }

    $connection->close();
    ?>
    <br>
    <a href="contact.html"><button>Back</button></a>
</body>
</html>