<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
        	<br>
        	<div class="jumbotron">
        		<h2>Log In</h2>
        		<form action="process.php" method="post">
	        		<table>
	        			<tr>
	        				<td>Email:</td>
	        				<td><input type="text" name="email"></td>
	        			</tr>
	        			<tr>
	        				<td>Password:</td>
	        				<td><input type="password" name="password"></td>
	        			</tr>
	        			<tr>
	        				<td></td>
	        				<td style="text-align:right"><input type="submit" value="Login"></td>
	        			</tr>
	        		</table>
        		</form>
        	</div>
        	<div class="jumbotron">
        		<h2>Or Register</h2>
        		<form action="/logins/register" method="post">
	        		<table>
	        			<tr>
	        				<td>First Name:</td>
	        				<td><input type="text" name="first_name"></td>
	        			</tr>
	        			<tr>
	        				<td>Last Name:</td>
	        				<td><input type="text" name="last_name"></td>
	        			</tr>
	        			<tr>
	        				<td>Email Address:</td>
	        				<td><input type="text" name="email"></td>
	        			</tr>
	        			<tr>
	        				<td>Password:</td>
	        				<td><input type="password" name="password"></td>
	        			</tr>
	        			<tr>
	        				<td>Comfirm Password:</td>
	        				<td><input type="password" name="com_password"></td>
	        			</tr>
	        			<tr>
	        				<td colspan="2" style="text-align:right"><input type="submit" value="Register"></td>
	        			</tr>
	        		</table>
        		</form>
        	</div>
        </div>
    </body>
</html>