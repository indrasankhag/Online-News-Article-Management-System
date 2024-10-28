<?php
include 'db_connection_subscribe.php';

$sql = "SELECT * FROM subscribers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Subscribers List</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
