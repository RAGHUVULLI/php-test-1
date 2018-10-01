<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
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


</style>

<body>

<div class="topnav">
    <a class="active" href="#home">WebStacks</a>
   
</div>

<form action="delete.php">
<input type="submit" value="DELETE"></form>


<form action="select.php">
<input type="submit" value="SELECT"></form>


<form action="insert.php">
<input type="submit" value="INSERT"></form>

</body>
</html>