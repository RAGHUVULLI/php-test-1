<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leaderboard</title>
</head>
<style>
        table 
{
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 1px solid brown;
    position: absolute;
    left: 140px;
    top:300px;
}

th
{
    font-family: "Comic Sans MS", cursive, sans-serif;
    background-color:burlywood;
    color: black;
    text-align: left;
    padding: 16px;
}
td 
{
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: black;
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) 
{
    background-color: white;
}
tr:nth-child(odd) 
{
    background-color:cornsilk;
}
html
{
    
    background: url(tab.jpg) no-repeat center fixed; 
    background-size: cover;
}
body
{
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.topnav 
{
overflow: hidden;
background-color:black;
}
.topnav a 
{
  float:left;
  color:bisque;
  text-align: center;
  padding: 18px 18px;
  text-decoration: none;
  font-size: 20px;
}
.topnav a:hover 
{
  background-color:grey;
  color: black;
}
h1
{
    color: rgb(238, 208, 112);
}
.log
{
    position:absolute;
    right:0px;
}
.lead
{
    position: absolute;
    left:650px;
}
.user
{
    position: absolute;
    right:200px;
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
    
<div class="topnav">
    <a class="active" href="#home">WebStacks</a>
    <a class="log"  href="login.php">Logout</a>
    <a class="lead">SELECTED LIST</a>
<?php   echo "<a class='user'>$user</a>"; ?>
</div>

<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name='name' placeholder="Your name..">
    <input type="submit" value="Submit">
  </form>
</div>



<table>
<tr>
    <th>NAME</th>
    <th>PHONE</th>
    <th>E-mail</th>
</tr>

<?php
       
        require 'connect.php';
        $name = $_POST['name'];
$sql = "SELECT * FROM test WHERE name='$name'";
        $sql = "SELECT name,phone,email FROM test WHERE name='$name'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $a=$row["name"];
              $b=$row["phone"];
              $c=$row["email"];
            echo " <tr>
                <td>$a</td>
              <td>$b</td>
            <td>$c</td> 
          </tr>";
}
        } else {
            echo "0 results";
        }
        ?>
</table>
</body>
</html>