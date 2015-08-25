<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
        	<div style="float: right"><a href="/logins/log_off">Log off</a></div>
        	<h1>Welcome <?= $user_data['first_name']; ?>!</h1>
        	<div class="jumbotron">
        		<h2>User Information</h2>
        		<table>
        			<tr>
        				<td>First Name:</td>
        				<td><?= $user_data['first_name']; ?></td>
        			</tr>
        			<tr>
        				<td>Last Name:</td>
        				<td><?= $user_data['last_name']; ?></td>
        			</tr>
        			<tr>
        				<td>Email Address:</td>
        				<td><?= $user_data['email']; ?></td>
        			</tr>
        		</table>
        	</div>
        </div>
    </body>
</html>