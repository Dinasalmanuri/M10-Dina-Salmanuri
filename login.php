<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<style>
	body {
    background-image: url('hero-bg.jpg');
	position: fixed;
    display: flex;
    justify-content: left;
    align-items: center;
    margin: 300px;
	}

	table {
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-collapse: collapse;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
	}

	th, td {
    padding: 10px;
    text-align: left;
	}

	th {
    text-align: center;
    font-size: 24px;
    color: #333333;
	}

	input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #dddddd;
    border-radius: 4px;
	}

	input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
	}

	input[type="submit"]:hover {
    background-color: #45a049;
	}

	.error {
    color: red;
    text-align: center;
    margin-top: 10px;
	}
	</style>
</head>
<body>

<form action ="" method ="POST">
<table align = "center">
    <tr>
        <th colspan="2" height="40">LOGIN FORM</th>
    </tr>
    <tr>
        <td width = "100"> Username </td>
        <td> <input type="text" name="username"></td>
    </tr>
    <tr>
        <td> Password </td>
        <td> <input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" value = "Login" name="proseslog"></td>
    </tr>
</table>
</form>

<?php
if(isset($_POST['proseslog'])){
    $sql=mysqli_query($koneksi, "select * from tbuser 
	where username = '$_POST[username]' and password = '$_POST[password]'");
	header("Location: index.html");
    
    $cek=mysqli_num_rows($sql);
    if($cek>0){
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else {
        echo "<p class= error align=center><b> Username dan Password salah!</b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}

?>
</body>
</html>