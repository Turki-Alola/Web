<?php
// including the database connection file
include_once("conn.php");
if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];	
	
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($email)) {	
			
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Last Name Field.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE myinfo SET firstname='$fname',lastname='$lname',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM myinfo WHERE id=$id");
if($res = mysqli_fetch_array($result))
{
	$fname = $res['firstname'];
	$lname = $res['lastname'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>

	<script>



function validateForm() {
	var regex = /[^a-zA-Z0-9@.]/g;
    document.getElementById("firstname").value = document.getElementById("firstname").value.replace(regex,"");
    document.getElementById("lastname").value = document.getElementById("lastname").value.replace(regex,"");
    document.getElementById("email").value = document.getElementById("email").value.replace(regex,"");
}

// function validateField(input){
// 	var regex = /[^a-z0-9@.]/gi;
// 	//input.value = input.value.replace(regex, "");
// }



// var myCookies = {};
// function saveCookies(){
// 	document.getElementById("out").innerHTML = "";
// 	myCookies["_firstname"] = document.getElementById("firstname").value;
// 	myCookies["_lastname"] = document.getElementById("lastname").value;
// 	document.cookie = "";
// 	var expiresAttrib = new Date(Date.now()+60*1000).toString();
// 	var cookieString = "";
// 	for (var key in myCookies){
// 		cookieString = key+"="+myCookies[key]+";"+expiresAttrib+";";
// 	}	
// }


function loadCookies(){
	var kv = document.cookie.split(";");
	for (var id in kv){
		var cookie = kv[id].split("=");
		myCookies[cookie[0].trim()] = cookie[1];
	}
	document.getElementById("out").innerHTML = document.cookie;
}

function saveLocal(){
	localStorage._firstname = document.getElementById("firstname").value;
	localStorage._lastname = document.getElementById("lastname").value.toString();
	document.getElementById("out").innerHTML = "";
}

function loadLocal(){
	document.getElementById("out").innerHTML = localStorage._firstname + localStorage._lastname;
}

</script>


<body>
	<a href="index.php">Home</a>
	<br/><br/>
	<form name="form1" id="form" method="post" action="editinfo.php?id=<?php echo$_GET['id'];?> " autocomplete="off">
		<table border="0">
			<tr> 
				<td id="test">First Name</td>
				<td><input type="text" id="firstname" name="fname" value="<?php echo $fname;?>" ></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" id="lastname" name="lname" value="<?php echo $lname;?>" ></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" id="email" name="email" value="<?php echo $email;?>" ></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" onclick="validateForm()"></td>
			</tr>
		</table>
	</form>
	<!-- <button onclick="saveCookies()">Save Cookie</button>
	<button onclick="loadCookies()">Load Cookie</button>
	<p id="out"></p> -->
</body>
</html>