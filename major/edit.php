<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>

<h2>Filter Anything</h2>
<p>Type something in the input field to search for a specific text inside the div element with id="myDIV":</p>
<input id="myInput" type="text" placeholder="Search..">
<div id="myDIV">
  <p>I am a paragraph.</p>
  <div>I am a div element inside div.</div>
  <button>log in</button>
  <button>I am a button</button>
  <button>Another button</button>
  <p>Another paragraph.</p>
</div>
  
</body>
</html>
