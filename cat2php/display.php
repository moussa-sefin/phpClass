<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>viewmaks</title>


<style>
body{
background-color: #f0f2f5;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #FAFAFA}

th {
    background-color: #00D3BB;
    color: white;
}
td{
color:#D7465;
}
tr:hover{background-color:#f5f5f5}
 .msg{
 color:red;
 margin-left:350px;
 }
 .text{
 margin-left:500px;
 }
 div{
 display:flex;
 justify-content:space-araund;
 font-size:18px;
 
 }
 .c{
 background-color:#D74654;
 color:white;
 border-radius:10px;
 padding:3px;
 }
 .link{
 background-color:#D74654;
 color:white;
 border-radius:10px;
 padding:3px;
 }
</style>


</head>
<body>


<?php include("header.php") ?><br><br>

<div>
<form action="display.php">
<input type="text" name="searchQuery">
<input type="submit"value="Search">
</form>

</div><br>
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>mod_title</th>
    <th>mod_code</th>
    <th>lev_title</th>
    <th>marks</th>
    <th>Decision</th>
    
  </tr>
   
</table>

</body>
</html>