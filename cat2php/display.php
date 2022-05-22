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
   <%
   
   String reg = request.getParameter("searchQuery");
  
  String sql = String.format("select student.fname,student.lname,module.mod_title,module.mod_code,level.lev_title,marks.marks from student,module,level,marks where student.s_id=marks.s_id and level.lev_id=module.lev_id and level.lev_id=student.lev_id  and student.regno='%s'",reg);
	String jdbcUrl = "jdbc:mysql://localhost:3306/iprc_tumba"; 
	String userName = "root";
	String passwd = "";
	
	try
	{
		Class.forName("com.mysql.jdbc.Driver");
		Connection con = DriverManager.getConnection(jdbcUrl,userName,passwd);
		Statement st = con.createStatement();
		ResultSet rs = st.executeQuery(sql);
		
		while(rs.next())
		{
			%>
			 <tr>
    			<td><%=rs.getString("student.fname")%></td>
    			<td><%=rs.getString("student.lname")%></td>
    			<td><%=rs.getString("module.mod_title")%></td>
    			<td><%=rs.getString("module.mod_code")%></td>
    			<td><%=rs.getString("level.lev_title")%></td>
    			<td><%=rs.getInt("marks.marks")%></td>
    			<td><%
    				if(rs.getInt("marks.marks")>=50)
    				{
    					out.print("Success");
    				}else{
    					out.print("fail");
    				}
    			
    			%></td>
    			
  			</tr>
			
			<% 
	
		}
	
	}
	catch(Exception e)
	{
		response.getWriter().print(e.getMessage());
	}

  %>
 


</table>

</body>
</html>