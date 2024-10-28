<?php
include 'db_connection_subscribe.php';

$name = $_POST['name'];
$email = $_POST['email'];

if (!empty($name) && !empty($email)) {
    $stmt = $conn->prepare("INSERT INTO subscribers (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Please fill in both the name and email fields.";
}
?>
