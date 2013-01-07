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

		<h2>Demote Employee</h2>
		<p align="lleft"">
		<form action="movedepartments" method="POST">
			<table >
			
		 <tr> <td align="left"> Employee Number </td> <td align="right"> <input type="text" id="emp_no" name="emp_no"/></td></tr>
		 <tr> <td align="left"> Department Number </td> <td align="right"> <input type="text" id="dept_no" name="dept_no"/></td></tr>
		 <tr> <td align="left">	<input type="submit" name="submit" value="submit" onclick="submit()"/></td></tr>
		 	
		    </table>          
			
		</form>
		</p>
		
 <br/>

            
<hr width = "100%" size = "2"/>
<p>
</p>        
                
</body>
</html>

