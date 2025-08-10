<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <form action="login" method="post">
        <center>Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button></center>
        <p style="color: red;">
            <% if (request.getParameter("error") != null) { %>
                Invalid username or password!
            <% } %>
        </p>
    </form>
</body>
</html>
