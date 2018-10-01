<?php
require 'connect.php';
$name = $_POST['email'];
$sql = "DELETE FROM test WHERE email='$name'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

  ?>


<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width:40%;
}
</style>
<body>

<h2>DELETION FORM</h2>
<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fname">Email:</label>
    <input type="text" id="fname" name="email" placeholder="Enter Email..">
    <input type="submit">
  </form>
</div>

</body>
</html>

