<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html>
<body onload="loadXMLDoc()">

<h2>Using the XMLHttpRequest Object</h2>

<div id="demo">
<!--<button type="button" onclick="loadXMLDoc()">Change Content</button>-->
</div>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "emails.xml", true);
  xhttp.send();
}
</script>
</body>
</html>