<?php
include("conn.php"); //it contain code that connects to the database by including the files in current files code 
$id = $_GET["id"]; //takes 'id' from url query using the $_GET superglobal arrary in php
$sql = "select * from task  where id ='$id'";
$query = mysqli_query($conn, $sql); //executes in sql using mysqli_query() function takes two '$args' conn and '#sql'
$result = mysqli_fetch_array($query);

// The provided code segment is written in PHP and appears to be involved in fetching data from a MySQL database based on the value passed through the id parameter in the URL query string.
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        form {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 20px;
            width: 400px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div>
        <form action="editpro.php" method="POST">
            <p>Welcome to the Register page:</p>
            <label>Name:</label>
            <input type="hidden" name="id" value="<?php echo $result["id"]; ?>">

            <input type="text" name="Name" value="<?php echo $result["Name"]; ?>">

            <label>Email:</label>
            <input type="text" name="Email" value="<?php echo $result["Email"]; ?>">

            <label>Password:</label>
            <input type="password" name="Password" value="<?php echo $result["Password"]; ?>">

            <label>Confirm Password:</label>
            <input type="password" name="ConfirmPassword" value="<?php echo $result["ConfirmPassword"]; ?>">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>