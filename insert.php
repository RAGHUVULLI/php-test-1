<?php
        require 'connect.php';
        $name=$_POST['name'];
        $phone=$_POST['phone'];        
        $email=$_POST['email'];
       
          
           $sql = "INSERT INTO test (name,phone,email)
           VALUES ('$name','$phone','$email')";
           
           if ($conn->query($sql) === TRUE) {
               echo "New record created successfully";
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
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
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
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
}
</style>
<body>

<h2>INSERT FORM</h2>


<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

     <label for="fname">Email:</label>
    <input type="text" id="fname" name="email" placeholder="Your name..">

    <label for="lname">Phone:</label>
    <input type="text" id="lname" name="phone" placeholder="Your Phone number..">

   
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
