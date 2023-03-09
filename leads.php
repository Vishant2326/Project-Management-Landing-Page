<?php
             
      include('required/db_connection.php');
      include('required/functions.php');
         
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leads</title>

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        .container {
            background-color: pink;
            
        }

        body {
            background-color: pink;
            text-align: center;
        }

        .height {

            height: 50vh;
        }

        .table {
            border: 1px solid;
        }
        .lead{
            padding-top: 8%;
            margin-left: 0%;
        }
    </style>

</head>

<body>
    <div class="container">                         
      
    <strong><bold><h1 class="lead">Leads</h1></bold></strong> <br><br>
        <div class="height d-flex justify-content-center align-items-center">
             
            <table class="table table-bordered">
                <thead>
                    <bold>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact NO.</th>
                            <th scope="col">password</th>
                        </tr>
                </thead>
                </bold>
                <tbody>
                     <?php
                        $query_emplyee = "SELECT * FROM details";
                        $employee_data = db_all($query_emplyee);
                        $emp_string="";
                                                                
                        foreach( $employee_data  AS $employee_row)
                        {
                           $emp_string .="
                             <tr>
                                <form action='pdf.php' method='POST'>
                                <td  style='text-align:center';>".$employee_row['id']."</td>
                                <td  style='text-align:center';>".$employee_row['name']."</td>
                                <td  style='text-align:center';>".$employee_row['contact']."</td>
                                <td  style='text-align:center';>".$employee_row['pass']."</td>
                                </form>
                             </tr>";                                                
                        }
                           echo $emp_string;
                    ?> 
                </tbody>
            </table>
        </div><br><br>

<div class="col-md-12 d-flex justify-content-center">
    <div class=" col-md-5 ">

        <form method="POST" action="pdf.php">
            <h1>Download The details in PDF Format</h1>
            
			<div class="form-input">
				<input type="text" id="name4" name="name4" placeholder="Enter the User Name"/>	
			</div><br>
            <div class="form-input">
				<input type="text" id="Contact4" name="Contact4" placeholder="Enter the Contact Number"/>	
			</div><br>
			<div class="form-input">
				<input type="password" id="password4" name="password4" placeholder="password"/>
			</div><br>
			<button class='btn btn-danger' type='pdf' name='pdf' id='pdf'>PDF</button>
		</form>

        </div>
        </div><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>



</body>

</html>