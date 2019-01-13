<?php
//including the database connection file
include_once("conn.php");
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM myinfo ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Web Major</title>
</head>
 
<body>
    <a href="add.html">Add More Records</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td id="test">First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Operations</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) {    
            echo "<tr>";
            echo "<td name='firstname'>".$res['firstname']."</td>";
            echo "<td>".$res['lastname']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"editinfo.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";         
        }
        ?>
    </table>
</body>
</html>