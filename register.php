<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
</head>
<body>
<form  action="registerdatabase.php" method="post">
        <h1 >Registration</h1>
        <input type="text"  name="name" placeholder="Username" required />
        <input type="text"  name="email" placeholder="Email Adress">
        <input type="password"  name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register">
        <p >Already have an account? <a href="login.php">Login here</a></p>
    </form>
</body>
</html>