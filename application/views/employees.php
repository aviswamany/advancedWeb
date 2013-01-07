
<!DOCTYPE HTML>
<html lang="en-UK">
<head>
	<title>Employees</title>
	<meta charset="UTF-8">
	<style>
		
		table {
			border-collapse: collapse;
			
			margin-left: auto;
			margin-right: auto;
		    background-color: #E0E0E0  ; color: black;
		    font-family: Arial;font-size: 12px;
		}
		td, th {
			border: 1px solid #ffffff;
			padding:  4px;
		}
		div {
			margin: 4px;
		}
		
		label {
			display: inline-block;
			width: 120px;
		}
		
		body
		{
			background-color:#FBFBEF;
			color:black;
			
		} 
		
	</style>
	
	
	<style type="text/css"> 
<!-- 
 
 #navbar ul { 
        margin: 0; 
        padding: 5px; 
        list-style-type: none; 
        text-align: center; 
        background-color: #000; 
        } 
 
#navbar ul li {  
        display: inline; 
        } 
 
#navbar ul li a { 
        text-decoration: none; 
        padding: .2em 1em; 
        color: #fff; 
        background-color: #000; 
        } 
 
#navbar ul li a:hover { 
        color: #000; 
        background-color: #fff; 
        } 
 
--> 
</style> 


			<div data-role="navbar">
			<ul>
			 <a href="searchEmployee">Advanced Search</a>||<a href="addview">Add Employee</a>||<a href="promote">Promote Employee</a>||<a href="demote">Demote Employee</a>||<a href="move">Move Employee</a>||<a href="Logout">Logout</a>
		</ul>
	</div><!-- /navbar --> 
</head>
<body>

	
		
		
	
	
	
	
	<h1> Your Results </h1>
            	<table>
            	<thead>
                		<th>Employee_No</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Gender</th>
                        <th>Hire_date</th>
                        
                        
                </thead>
                
                <tbody>
                	<?php foreach($employees as $employee): ?>
                    <tr>
                    	<td> <?php echo($employee->emp_no); ?></td>
                        <td> <?php echo($employee->first_name); ?></td>
                        <td> <?php echo($employee->last_name); ?></td>
                        <td> <?php echo($employee->gender); ?></td>
                        <td> <?php echo($employee->hire_date); ?></td>
                    </tr>   
					<?php endforeach; ?>
                </tbody>
                
                </table>

<?php if (strlen($pagination)): ?>
	<div>
		Pages: <?php echo $pagination; ?>
	</div>
	<?php endif; ?>
                
 <br/>

            
<hr width = "100%" size = "2"/>
<p>

Ajesh Viswamany<br/>
W1235590</br>
a.viswamany@.westminister.ac.uk
</p>        
                
</body>
</html>

