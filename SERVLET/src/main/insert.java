package main;

import java.sql.DriverManager;

import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;

@WebServlet("/insert")
public class insert extends HttpServlet {
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request,HttpServletResponse response){
		try {
			Class.forName("com.mysql.jdbc.Driver");
			Connection con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/college", "root", "");
			PreparedStatement pre= (PreparedStatement) con.prepareStatement("INSERT INTO college VALUES ('"+request.getParameter("name")+"','"+request.getParameter("pass")+"')");
			int status = pre.executeUpdate();
			if(status == 1) {
				request.getRequestDispatcher("index.jsp").include(request, response);  
			}else {
				System.out.println("Failed");
			}
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

}
