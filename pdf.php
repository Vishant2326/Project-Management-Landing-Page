<?php
             
      include('required/db_connection.php');
      include('required/functions.php');

      require("fpdf/fpdf.php");

      $pd = new FPDF();

     if(isset($_POST['pdf'])){

    $name5 = $_POST['name4'];
    $contact5 = $_POST['Contact4'];
    $password5 = $_POST['password4'];
 
    

   
    $pd->AddPage();
    $pd->SetFont("Arial","B",12);

    $pd->Cell(0,10,"Registration Details",1,1,'C');
    
    $pd->Cell(50,10,"Name",1,0);
    $pd->Cell(0,10, $name5,1,1);

    $pd->Cell(50,10,"Contact No",1,0);
    $pd->Cell(0,10,$contact5,1,1);

    $pd->Cell(50,10,"Pass",1,0);
    $pd->Cell(0,10,$password5,1,1);

    $pd->output();

}

?>
