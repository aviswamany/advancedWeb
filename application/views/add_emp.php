<!DOCTYPE HTML>
<html lang="en-UK">
<head>
	<title>Employees</title>
	<meta charset="UTF-8">
	
	  <style type="text/css">
  </style>
	
	<script type='text/javascript'> function submit(){alert("success);}
		
		
		 #hire_date({
        useMode:2,
        target:"aFieldId",        
        isStripped:false,
        selectedDate:{
            year:2009,
            month:4,
            day:16
       	},
        yearsRange: new Array(1971,2100),
        limitToToday:true,
    });
		
		
		
		</script>
	
</head>
			<div data-role="navbar">
			<ul>
			 <a href="searchEmployee">Advanced Search</a>||<a href="addview">Add Employee</a>||<a href="promote">Promote Employee</a>||<a href="demote">Demote Employee</a>||<a href="move">Move Employee</a>||<a href="Logout">Logout</a>
		</ul>
	</div><!-- /navbar -->
<body>

		<h2>Add Employee</h2>
		<p align="lleft"">
		<form action="add" method="POST">
			<table >
			
		 <tr> <td align="left">Number </td> <td align="right">	 <input type="text" id="emp_no" name="emp_no"/></td></tr>
		 <tr> <td align="left">First Name </td> <td align="right">	<input type="text" id="first_name" name="first_name"/></td></tr>
		 <tr> <td align="left">Second Name </td> <td align="right"><input type="text" id="last_name" name="last_name"/> </td></tr>
		 <tr> <td align="left"> Gender</td> <td align="right"><input type="text" id="gender" name="gender"/> </td></tr>
		 <tr> <td align="left"> Hire date </td> <td align="right"><input type="text" id="hire_date" name="hire_date"/> </td></tr>
		 <tr> <td align="left">	<input type="submit" name="submit" value="submit" onclick="submit()"/></tr>
		    </table>          
			
		</form>
		</p>
		
 <br/>

            
<hr width = "100%" size = "2"/>
<p>
</p>        
                
</body>
</html>

