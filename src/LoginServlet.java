import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

@WebServlet("/login")
public class LoginServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String username = request.getParameter("username");
        String password = request.getParameter("password");

          if ("madhu".equals(username) && "12345".equals(password)) {
             HttpSession session = request.getSession();
             session.setAttribute("user", username);
             
              response.sendRedirect("bio.html");
        } else {
            response.sendRedirect("login.jsp?error=1"); 
        }
    }
}
