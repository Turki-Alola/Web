<?php
//including the database connection file
include_once("conn.php");
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM myinfo ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Our Fourth Try</title>
</head>
 
<body>
    <a href="addmyinfo.html">Add More Information</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#FFCCCC'>
            <td>First Name</td>
            <td>Second Name</td>
            <td>Email</td>
            <td>Opt</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['firstname']."</td>";
            echo "<td><font color='red'>".$res['lastname']."</font></td>";
            echo "<td><font color='orange'>".$res['email']."</font></td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>