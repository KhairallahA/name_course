<?php include("register.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2 style="text-align: center">نموذج تسجيل الدورة</h2>
    <hr/>

    <form action="form.php" method="POST">

        <label>First name:</label>
        <input type="text" name="first_name"/>
        <br/>
        <label>Last name:</label>
        <input type="text" name="last_name">
        <br/>
        <label>Email:</label>
        <input type="email" name="email">
        <br/>
        <label>Choose the course you like to register:</label>
        <select name="course">
            <option>-- choose course --</option>
            <option>HTML5</option>
            <oPtion>CSS3</oPtion>
            <option>Java Script</option>
            <option>PHP</option>
        </select>
        <br/>

        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>