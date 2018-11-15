<?php 
// pdf
                                            function fetch_data()  
                                             {  
                                                  $output = '';
                                                  $db = mysqli_connect('localhost','root','','ligtaspinas');
                                                    $sql = "SELECT * FROM tblreports ORDER BY `id` DESC ";
                                                  $result = mysqli_query($db, $sql);  
                                                 
                                                  while($row = mysqli_fetch_array($result))  
                                                  {       
                                                    $string = $row['photo'];
                                                    $img = str_replace('data:image/jpeg;base64,', '', $string);
                                                    $data = base64_decode($img);
                                                  $output .= '<tr> 
                                                                <td>'.$row["description"].'</td>  
                                                                <td>'.$row["name"].'</td>  
                                                                <td>'.$row["time"].'</td>  
                                                                <td>'.$row["date"].'</td> 
                                                              </tr>';
                                                  }  
                                                  return $output;  
                                             }
                                             if(isset($_POST["pdf"]))  
                                               {  
                                                    require_once('tcpdf/tcpdf.php'); 
                                                    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
                                                    $obj_pdf->SetCreator(PDF_CREATOR);  
                                                    $obj_pdf->SetTitle("Incident Report");  
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
                                                    <h1 align="center">LIGTAS PINAS - INCIDENT REPORT </h1><br /> 
                                                    <table border="1" cellspacing="0" cellpadding="3">  
                                                         <tr>   
                                                              <th>Description</th>  
                                                              <th>Name</th>  
                                                              <th>Time</th>
                                                              <th>Date</th> 
                                                         </tr>  
                                                    ';
                                                    $content .= fetch_data();  
                                                    $content .= '</table>';  
                                                    $obj_pdf->writeHTML($content);  
                                                    ob_end_clean();
                                                    $obj_pdf->Output('incidentreport.pdf', 'I');  
                                               }  
                                             // End of PDF
 ?>