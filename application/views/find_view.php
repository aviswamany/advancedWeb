
<?php 
if (isset ($data)){
	
	echo json_encode ($data);
}

?>





<!DOCTYPE HTML>
<html lang="en-UK">
<head>

	
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<meta charset="UTF-8">


	<link rel="stylesheet" type="text/css" href="/codeigniter/css/css.css" media="screen" />
</head>

<style>
		* {
			font-family: Arial;
			font-size: 12px;
		}
		table {
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid #666666;
			padding:  4px;
		}
		div {
			margin: 4px;
		}

		label {
			display: inline-block;
			width: 120px;
		}
		.search tr:nth-child(odd) {
			background:#C4B0B7;
		}
	</style>

<body>

<center>
	

<table class="table search">


        
  


<form class="form-horizontal" form action="findemp" method="GET" >

<div align="left" class="hero-unit">
	
	
	     <a href='<?php echo site_url('login');?>'>Login</a>

	 <H1>Enter Your Search</H1>



		  	<label >First name</label>
	  	
		 <input type= "text" name="firstname">	


	  	<label >Last name</label>
	  	
		 <input type= "text" name="lastname">	

<br />
	  	<label>Title</label>

	  		<input type= "text" name="title">	

		

		
		

	  	<label >	Departments</label>

	<select name="dept_no">
	
<option value="d009" selected="d009">Customer Service</option>
<option value="d005" selected="d005">Development</option>
<option value="d002" selected="d002">Finance</option>
<option value="d003" selected="d003">Human Resources</option>
<option value="d001" selected="d001">Marketing</option>
<option value="d004" selected="d004">Production</option>
<option value="d006" selected="d006">Quality Management</option>
<option value="d008" selected="d008">Research</option>
<option value="d007" selected="d007">Sales</option>
	<option value="" selected="">Select</option>
</select>



<div class="control-group">
	  	<div class="controls"> 
  <button type="submit"  class="btn btn-inverse" >Search</button>
</div></div>


	
</form>
</div>

	

            	<thead>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Dept_no</th>
                		<th>Title</th>

                	
                        
                        
                </thead>
                <tbody>
                	<?php if (isset($query) && (count($query) > 0)) : ?>
                	<?php foreach($query as $employee): ?>

                    <tr>
                        <td> <?php echo($employee->first_name); ?></td>
                        <td> <?php echo($employee->last_name); ?></td>
                        <td> <?php echo($employee->dept_no); ?></td>
                        <td> <?php echo($employee->title); ?></td>

                        
                        
                    </tr>   
					<?php endforeach; ?>
					<?php endif;?>
                </tbody>
                
                </table>
</center>

                
 <br/>     
                
</body>
</html>

