
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>	
	<title>login view</title>
	
			<div data-role="navbar">
			<ul>
   			<a href='<?php echo site_url('/find/findemp');?>'>Basic Search</a>
		</ul>
	</div><!-- /navbar -->	

</head>
<body>

	<div id='login_form' align="center">
		
		<table >
		<form action='<?php echo site_url('login/process');?>' method='post' name='process'>
			<tr><h2>User Login</h2></tr>
			<tr><td align="left"><label for='username'>Username</label></td><td align="right"><input type='text' name='username' id='username' size='25' /></td></tr>
	
			<tr><td align="left"><label for='password'>Password</label> </td><td align="right"><input type='password' name='password' id='password' size='25' /></td></tr>				
				
			<tr><td><input type='Submit' value='Login' />	</td></tr>	
		</form>
		
	</div>
	</table>
</body>
</html>