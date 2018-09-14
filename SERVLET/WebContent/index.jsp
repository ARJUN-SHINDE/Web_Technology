<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<script src="./jquery.min.js"></script>
<script>
function add(){
	$('#add').show();
	$('#del').hide();
	$('#up').hide();
}
function del(){
	$('#add').hide();
	$('#del').show();
	$('#up').hide();
}
function up(){
	alert
	$('#add').hide();
	$('#del').hide();
	$('#up').show();
}

</script>
<%@page import="java.sql.DriverManager" %>
<%@page import="com.mysql.jdbc.Connection" %>
<%@page import="java.sql.PreparedStatement" %>
<%@page import="java.sql.ResultSet" %>

<body>
<center>
<button onclick="add()">Add</button>
<button onclick="del()">Delete</button>
<button onclick="up()">Update</button>
<table>
<tr>
<td>User</td>
<td>Pass</td>
<%
Class.forName("com.mysql.jdbc.Driver");
Connection con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/college", "root", "");
PreparedStatement pre= con.prepareStatement("SELECT * FROM college");
ResultSet rs = pre.executeQuery();
while(rs.next()) {
	out.println("<tr><td>"+rs.getString("user")+"</td><td>"+rs.getString("pass")+"</td></tr>");
}
%>
</tr>

</table>

<form class="disp" method="POST" action="insert" id="add" style="display:none;">
<input name="name" type="text" value="Name"><br>
<input name="pass" type="text" value=""><br>
<button type="submit">Submit</button>
</form>
<form action="delete" method="POST" id="del" style="display:none" class="disp">
<input name="name" type="text" value="Name"><br>
<input name="pass" type="hidden" value="">
<button type="submit">Submit</button>
</form>
<form action="update" method="POST" id="up" style="display:none;" class="disp">
<input name="name" type="text" value="Name"><br>
<input name="pass" type="text" value=""><br>
<button type="submit">Submit</button>
</form>
</center>
</body>
</html>