<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type='text/css' media='all' href="StyleT.css" />
        <script>
    
    </script>
    </head>
    <body>

    <section>
    <H1> Identifiez-vous </H1> 
    <img src="logo2.png">

    <form action="traitement.php" method="post">
        
        <label for="role">Role:</label>

        <select name="role" id="role">
        </br>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
</br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <input type="submit" name="submit" value="Login">
</br>

    </form>
</section>


</body>
</html>


 