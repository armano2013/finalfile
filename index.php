<!DOCTYPE html>
<html>

<head>
  
	<title> todo list</title>
</head>
 
<body>

  <h1 style="text-align:left">Todo list</h1>
  <hr>

  <form method="get" action="http://127.0.0.1/input.php">
    <label>*****NAMEofEVENT****</label>
    <br>

    <!-- Add controls -->
    <label>AddIN</label>
    <label></label>
    <input type="text" name="txtAddname" />
    <br>

    <!-- Delete controls -->
    <label>Delete</label>
    <input type="text" name="txtDeleteID" />
    <label></label>
    <label></label>
    <br>
	<label>view</label>
    <input type="text" name="txtview" />
    <label></label>
    <label></label>
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset">

    </form>
  <hr>
</body>
</html>
