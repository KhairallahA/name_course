<?php
include("register.php");


////////////////////// إستدعاء البيانات من الجداول ///////////////////////////////////

$select = "SELECT * FROM alla2";
$sqll = mysqli_query($db,$select);
$getData = mysqli_fetch_assoc($sqll);

////////////////////////////////////////////////////////

echo "<h2 style='text-align: center'>تم استقبال بياناتك بنجاح</h2> <hr/>";

echo "<jk style='color: blue'>Hi</jk> "
    .$getData["First_name"].
    "! <jk style='color: blue'>Thank you for registering one of our course, you have added</jk> "
    .$getData["Course"].
    " <jk style='color: blue'>to your courses list</jk>   <hr/>";

///////////////////////////// الجدول ////////////////////////////////////////
echo "<table border='1'>
        <tr>
            <td>First Name:</td>
            <td>Last Name:</td>
            <td style='width: 100px; font-size: 20px';>Email:</td>
            <td>Course:</td>
        </tr>
    </table>".
    
    "<table border='1' style='color: blue'><tr>".
        "<td>".$getData['First_name']."</td>".
        "<td>".$getData['Last_name']."</td>".
        "<td>".$getData['Email']."</td>".
        "<td>".$getData['Course']."</td>".
    "</tr></table>"

?>