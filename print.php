<?php
session_start();


 function fetch_data($query)  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "users_tbl");
      //$query = "SELECT * FROM orders ORDER BY id ASC"; 
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {       
      $output .= '<tr>   
                          <td>'.$row["fullName"].'</td>  
                          <td>'.$row["contactNumber"].'</td>  
                          <td>'.$row["emailAddress"].'</td> 
                          <td>'.$row["dueDate"].'</td> 
                          <td>'.$row["name"].'</td>
                          <td>'.$row["category"].'</td>
                     </tr>  
                          ';  
      }  
      return $output;  
 } 


if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Data Report</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>   
                <th width="20%">Full Name</th>  
                <th width="15%">Contact Number</th>  
                <th width="20%">Email Address</th> 
                <th width="15%">Date of Event</th> 
                <th width="20%">Package Name</th>  
                <th width="10%">Category</th> 
           </tr>  
      ';  
      $content .= fetch_data($_SESSION['query']);  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }

 ?>