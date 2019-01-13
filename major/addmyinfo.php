<html>
<head>
    <title>Add My Info Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("conn.php");
 
if(isset($_POST['Submit'])) {    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
      echo   "First name : "  .$fname ." Last Name: ".$lname. " email   :".$email;
    // checking empty fields
    if(empty($fname) || empty($lname) || empty($email)) {                
        if(empty($fname)) {
            echo "<font color='red'>Name field is empty. </font><br/>";
        }
        
        if(empty($lname)) {
            echo "<font color='red'>Last Name should not be empty. </font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty. </font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
	
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO myinfo (firstname, lastname, email) VALUES('$fname','$lname','$email')");
        
        //display success message
        echo "<br/><font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>