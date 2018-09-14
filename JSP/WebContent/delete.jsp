<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<jsp:useBean id="u" class="main.user" scope="session"></jsp:useBean>
<jsp:setProperty property="*" name="u"/>

<jsp:getProperty property="name" name="u"/>
<jsp:getProperty property="pass" name="u"/>
<%@page import="java.sql.DriverManager" %>
<%@page import="com.mysql.jdbc.Connection" %>
<%@page import="java.sql.PreparedStatement" %>
<%@page import="java.sql.ResultSet" %>
<%
Class.forName("com.mysql.jdbc.Driver");
Connection con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/college", "root", "");
PreparedStatement pre= con.prepareStatement("DELETE FROM college WHERE user='"+u.getName()+"'");
int status  = pre.executeUpdate();
if(status ==1){
	out.println("DONE");
}else{
	out.println("FAILED");
}
%>
</body>
</html>