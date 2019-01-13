<!DOCTYPE html>
<?php session_start(); ?> 
<!-- saved from url=(0035)http://yasirkiani.com/rsk/index.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>:- Welcome to Risk -:</title>

<link rel="stylesheet" type="text/css" href="styleaa.css">
<?php session_start(); ?>
<script language="javascript">
    function handleSelect(elm)
{
window.location = elm.value+".html";
}
function calculateriskscore(){
	var likelyhood = document.getElementById("likelyhood").value;
	var impact     = document.getElementById("impact").value;
	var riskscore      = likelyhood * impact;
	document.getElementById("risk_score").innerHTML = riskscore;
	document.getElementById("riskscore").value = riskscore;
	
}

function calcScore(){
	riskscore   = document.frm.riskscore.value;
	var c_score = document.frm.c_score.value;
	
	rscore = riskscore/c_score;
	document.getElementById("r_score").innerHTML = rscore;
	document.getElementById("rscore").value      = rscore;
	
}

function valid(){
	if(document.frm.college.value == ""){
		alert("Please Select the College/Unit Name");
		return false
	}

	else
		return true;
}
</script>


</head>



<body class="body">

<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td><link href="./riskc_files/styleaa.css" rel="stylesheet" type="text/css">
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">


  <tbody><tr>

    <td width="1100" colspan="2" bgcolor="#F8F8F8"><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tbody><tr>

        <td height="40" class="heading">&nbsp;Risk Management </td>
        </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF" class="s-orange"> 
		 Welecome <strong>
		 Ahmed		 </strong> to Risk Management <a href="logout.php" class="blue">Logout</a>| <a href="view.php" class="blue"> view</a></td>
      </tr>

    </tbody></table></td>
  </tr>
</tbody></table>

</td>
  </tr>


  <tr>

    <td bgcolor="#FFFFFF" height="10"></td>
  </tr>

  <tr>

    <td bgcolor="#FFFFFF"><table width="80%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#999999">
      <form method="post" action="add.php" name="frm">
	  	  <tbody><tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Select Your Department </td>
	    <td bgcolor="#FFFFFF" class="s-orange"><input name="department" type="radio" value="Co" onclick="location.href='college.php'" checked="">
	      College 
	        &nbsp;&nbsp;
	        <input name="department" type="radio" value="Un" onclick="location.href='unit.php'">
Unit </td>
	    </tr>
	  <tr id="tr_college">
        <td width="28%" height="28" bgcolor="#F2F2F2" class="blue">Select College/Unit:</td>
        <td width="72%" bgcolor="#FFFFFF"><select name="college" class="txt" id="college" onchange="javascript:handleSelect(this)">
        <option value="">- Select College/Unit -</option>
				<option  value="CCIS">College of Computer Scineces</option>
				<option value="CBA">College of Business</option>
				</select>        </td>
	  </tr>
	  	  <tr id="tr_depart">
	    <td height="28" bgcolor="#F2F2F2" class="blue">Select Department </td>
	    <td bgcolor="#FFFFFF"><select name="depart" class="txt" id="depart">
          <option value="">- Select Department -</option>
                  </select></td>
	    </tr>
	  	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Risk Category:</td>
	    <td bgcolor="#FFFFFF"><select name="category" class="txt" id="category">
          <option value="">- Select Category -</option>
          <option value="OR">Other</option>
		  <option value="AR">Academic</option>
		  <option value="FR">Financial</option>
		  </select>	</td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Risk Statement: </td>
	    <td bgcolor="#FFFFFF"><textarea name="statement" cols="40" rows="5" class="txt" id="statement"></textarea></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Cause:</td>
	    <td bgcolor="#FFFFFF"><textarea name="cause" cols="40" rows="5" class="txt" id="cause"></textarea></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Impact Description: </td>
	    <td bgcolor="#FFFFFF"><textarea name="impact_desc" cols="40" rows="5" class="txt" id="impact_desc"></textarea></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Likelyhood:</td>
	    <td bgcolor="#FFFFFF"><select name="likelyhood" class="txt" id="likelyhood">
          <option value="">- Select Likelyhood -</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Impact</td>
	    <td bgcolor="#FFFFFF"><select name="impact" class="txt" id="impact" onchange="calculateriskscore();">
          <option value="">- Select Impact -</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Overall Risk Score: </td>
	    <td bgcolor="#FFFFFF" class="s-orange"><input type="hidden" name="riskscore" id="riskscore">
		<div id="risk_score"></div>
		
		</td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue"><p>Response Action Plan: </p>	      </td>
	    <td bgcolor="#FFFFFF"><textarea name="actionplan" cols="40" rows="5" class="txt" id="actionplan"></textarea></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Contorl Score: </td>
	    <td bgcolor="#FFFFFF"><select name="c_score" class="txt" id="c_score" onchange="calcScore()">
          <option value="">- Select Control Score -</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Residual Risk Score </td>
	    <td bgcolor="#FFFFFF" class="s-orange"><div id="r_score"></div>
		<input type="hidden" name="rscore" id="rscore">
</td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">Responsible Unit Manager: </td>
	    <td bgcolor="#FFFFFF"><input name="unit_manager" type="text" id="unit_manager" size="35"></td>
	    </tr>
	  <tr>
	    <td height="28" bgcolor="#F2F2F2" class="blue">&nbsp; </td>
	    <td height="30" bgcolor="#FFFFFF"><input name="Submit" type="submit" class="blue" value="Submit"></td>
	    </tr>
	  
          </tbody></form></table></td>
  
  </tr>
</tbody></table>





</body></html>