<?php
require './vendor/autoload.php';
require './MyCustomPDFWithWatermark.php';

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new MyCustomPDFWithWatermark(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//seting a default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//automatically creating a new page
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//setting the image scale or size
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//enabling the setting to set another font
$pdf->setFontSubsetting(true);
//changing the font style and size
$pdf->SetFont('dejavusans', '', 12, '', true);



//Start New Page
$pdf->SetPrintFooter(false);
$pdf->SetPrintHeader(true);
$pdf->AddPage();

//PAGE 1
$image_file = './vtilogo.png';
        //(X,Y, scale)
        $pdf->Image($image_file,10, 10, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false );
        $pdf->SetFont('helvetica', 'B', 20);
        $pdf->Cell(115, 18, '  Vector Technology Institute', 0, false, 'L', 0, '', 0, false, 'M', 'B');
        $pdf->SetFont('helvetica', '', 8);
        $pdf->Ln(13);
        $pdf->Cell(90, 4, '                                TRANSFORMING EDUCATION INTO CAREERS', 0, false, 'L', 0, '', 0, false, 'M', 'T');
        $pdf->SetFont('helvetica', 'I', 7);
        $pdf->Cell(90, 4, '             Registered by the University Council of Jamaica', 0, false, 'L', 0, '', 0, false, 'M', 'T');
        $pdf->SetFont('helvetica', '', 8);
        $pdf->Ln(5);
        $pdf->Cell(190, 4, '                                    35A Eastwood Park Road                         www.vector.com                              Tel.(876) 929 3435/6', 0, false, 'L', 0, '', 0, false, 'M', 'T');
        $pdf->Ln(3);
        $pdf->SetX(10);
        $pdf->Cell(190, 4, '                                    Kingston 10, Jamaica                               info@vector.edu.jm                           Fax. (876) 929 8006', 0, false, 'L', 0, '', 0, false, 'M', 'T');
$pdf->Write(0, "\n\n", '', 0, 'C', true, 0, false, false, 0);
//writehtml allows you to use html tags(<b>)
$pdf->Ln(20);
$pdf->SetFont('helvetica', '', 12, '', true);
$pdf->writeHTMLCell(60, 8, 70, 35, '<b>APPLICATION FORM</b>', 0, 0, 0, false, 'R', true);
$pdf->SetFont('helvetica', '', 8, '', true);
$pdf->Ln(3);
$pdf->writeHTMLCell(20, 2.5, 6, 45, '<i>Instruction(s): </i>', 0, 0, 0, false, 'L', true);
$pdf->Ln(0.3);
$pdf->writeHTMLCell(150, 3, 20, 48, '<i>             Fill out this form in <b>BLOCK LETTERS</b> and place N/A where not applicable. <b>Application fees are non-refundable.</b></i>', 0, 0, 0, false, 'L', true);
$pdf->SetXY(10,54);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(10, 10, 'TITLE', 'TL', false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(10,59);
        $title = readline('Title: ');
        $pdf->Cell(10, 10, $title, 0, false, 'B', 0, '', 0, false, 'B', 'B');
$pdf->SetXY(20,54);       
$pdf->Cell(40, 10, 'SURNAME', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(20,59);
        $surname = readline('Surname: ');       
        $pdf->Cell(40, 10, $surname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(60,54);
$pdf->Cell(40, 10, 'FIRST NAME', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(60,59);
        $firstname = readline('First Name: ');       
        $pdf->Cell(40, 10, $firstname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(100,54);
$pdf->Cell(50, 10, 'MIDDLE NAME', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(100,59);
        $middlename = readline('Middle Name: ');       
        $pdf->Cell(50, 10, $middlename, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(150,54);
$pdf->Cell(45, 10, 'DATE OF BIRTH (DD/MM/YYYY)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(150,59);
        $dob = readline('Date of Birth (DD/MM/YYY): ');       
        $pdf->Cell(45, 10, $dob, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10,64);
$pdf->Cell(150, 30, 'IDENTIFICATION VERIFICATION', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        //IDENTIFICATION
        $pdf->SetXY(40,70);
        $pdf->Cell(25, 6, 'Passport #', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(34,70);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(60,67);
        $pdf->Cell(70, 6, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
        


        $pdf->SetXY(40,76);
        $pdf->Cell(25, 6, 'Drivers License #', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(34,76);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(60,73);
        $pdf->Cell(70, 6, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');


        $pdf->SetXY(40,82);
        $pdf->Cell(25, 6, 'Other', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(34,82);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(60,79);
        $pdf->Cell(70, 6, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');

        $id = readline('Identification Type. Enter Passport, License or Other (use common letters): ');
         switch ($id)
         {
                case "passport":
                        $pdf->SetXY(34,70);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');  
                        $pass = readline('Passport Number: ');
                        $pdf->SetXY(60,69);
                        $pdf->Cell(70, 6, $pass, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                        break;

                case "license":
                        $pdf->SetXY(34,76);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                        $lic = readline('Drivers License Number: ');
                        $pdf->SetXY(60,76);
                        $pdf->Cell(70, 6, $lic, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                        break;

                case "other":
                        $pdf->SetXY(34,82);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                        $type = readline('Enter the type of identification and the number: ');
                        $pdf->SetXY(60,81);
                        $pdf->Cell(70, 6, $type, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                        break;
         }

$pdf->SetXY(160,64);
$pdf->Cell(35, 15, 'TRN', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(160,69);
        $trn = readline('TRN: ');       
        $pdf->Cell(35, 10, $trn, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(160,79);
$pdf->SetXY(160,79);
$pdf->Cell(35, 15, 'GENDER', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        //GENDER
        $pdf->SetXY(165,85);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(169,85);
        $pdf->Cell(8, 4, 'Male', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(177,85);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(181,85);
        $pdf->Cell(8, 4, 'Female', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $gender = readline('Gender (m or f): ');
        switch ($gender)
        {
                case "m":
                        $pdf->SetXY(165,85);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                        break;

                case "f":
                        $pdf->SetXY(177,85);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                        break; 
        }
$pdf->SetXY(10,94);
$pdf->Cell(92.5, 35, 'PERMANENT ADDRESS', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $address = readline('Address: ');
        $pdf->SetXY(10,99);
        $pdf->Cell(92.5, 35, $address, 0, false, 'L', 0, '', 0, false, 'L', 'T');
        
$pdf->SetXY(102.5,94);
$pdf->Cell(92.5, 35, 'MAILING ADDRESS (if different)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $mailing = readline('Do you have a different mailing address? (yes or no) ');
        switch ($mailing)
        {
                case "yes":
                        $pdf->SetXY(102.5,99);
                        $maddress = readline('Mailing Address: ');
                        $pdf->Cell(92.5, 35, $maddress, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
                case "no":
                break;
        }
$pdf->SetXY(10,129);
$pdf->Cell(92.5, 10.5, 'EMAIL ADDRESS', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(10,133);
        $email = readline('Email Address: ');
        $pdf->Cell(92.5, 10.5, $email, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102.5,129);
$pdf->Cell(46.25, 10.5, 'TELEPHONE #1', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(102.5,133);
        $tel1 = readline('Telephone Number: ');
        $pdf->Cell(46.25, 10.5, $tel1, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(148.75,129);
$pdf->Cell(46.25, 10.5, 'TELEPHONE #2', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $tele = readline('Do you have a second telephone number? Enter yes or enter no: ');
        switch ($tele)
        {
                case "yes":
                        $pdf->SetXY(148.75,133);
                        $tel2 = readline('Second Telephone Number: ');
                        $pdf->Cell(46.25, 10.5, $tel2, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
                case "no":
                break;    
        }

//EMERGENCY CONTACT
$pdf->SetXY(10,145);
$pdf->SetFont('helvetica', 'B', 12, '', true);
$pdf->Cell(150, 25, 'EMERGENCY CONTACT INFORMATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10,150);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(64.375, 10.5, 'NAME (FIRST, LAST)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(10,154);
        $emname = readline('Emergency Contact First and Last Name: ');
        $pdf->Cell(64.375, 10.5, $emname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(74.375,150);
$pdf->Cell(46, 10.5, 'RELATIONSHIP', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(74.375,154);
        $emrel = readline('Emergency Contact Relationship: ');
        $pdf->Cell(46, 10.5, $emrel, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(120.375,150);
$pdf->Cell(37.25, 10.5, 'TELEPHONE #1', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(120.375,154);
        $emtel1 = readline('Telephone Number: ');
        $pdf->Cell(46.25, 10.5, $emtel1, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(157.625,150);
$pdf->Cell(37.25, 10.5, 'TELEPHONE #2', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $tele = readline('Does your emergency contact have a second telephone number? Enter yes or enter no: ');
        switch ($tele)
        {
                case "yes":
                        $pdf->SetXY(157.625,154);
                        $emtel2 = readline('Emergency Contact Second Telephone Number: ');
                        $pdf->Cell(46.25, 10.5, $emtel2, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
                case "no":
                break;    
}
$pdf->SetXY(10,160.5);
$pdf->Cell(64.375, 10.5, 'NAME (FIRST, LAST)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(10,164.5);
        $em2name = readline('Second Emergency Contact First and Last Name: ');
        $pdf->Cell(64.375, 10.5, $em2name, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(74.375,160.5);
$pdf->Cell(46, 10.5, 'RELATIONSHIP', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(74.375,164.5);
        $em2rel = readline('Second Emergency Contact Relationship: ');
        $pdf->Cell(46, 10.5, $em2rel, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(120.375,160.5);
$pdf->Cell(37.25, 10.5, 'TELEPHONE #1', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(120.375,164.5);
        $em2tel1 = readline('Telephone Number: ');
        $pdf->Cell(46.25, 10.5, $em2tel1, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(157.625,160.5);
$pdf->Cell(37.25, 10.5, 'TELEPHONE #2', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $tele = readline('Does your emergency contact have a second telephone number? Enter yes or enter no: ');
        switch ($tele)
        {
                case "yes":
                        $pdf->SetXY(157.625,164.5);
                        $em2tel2 = readline('Emergency Contact Second Telephone Number: ');
                        $pdf->Cell(46.25, 10.5, $em2tel2, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
                case "no":
                break;    
        }
//EMPLOYMENT
$pdf->SetXY(10,175.5);
$pdf->SetFont('helvetica', 'B', 12, '', true);
$pdf->Cell(150, 30, 'EMPLOYMENT INFORMATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10,180.5);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(117.5, 10.5, 'NAME OF EMPLOYER', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $employment = readline('Are you employed? Enter yes or no: ');
        switch ($employment)
        {
                case "yes":
                $boss = readline('Employer Name (First and Last): ');
                $pdf->SetXY(10,184.5);
                $pdf->Cell(117.5, 10.5, $boss, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                $bosstel = readline('Employer Phone Number: ');
                $pdf->SetXY(127.5,184.5);
                $pdf->Cell(66.75, 10.5, $bosstel, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                
                $bosstitle = readline('Employer Title: ');
                $pdf->SetXY(10,195);
                $pdf->Cell(117.5, 10.5, $bosstitle, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                $bossfax = readline('Employer Fax Number: ');
                $pdf->SetXY(127.5,195);
                $pdf->Cell(66.75, 10.5, $bossfax, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                break;
                case "no":
                break;
        }
        
$pdf->SetXY(127.5,180.5);
$pdf->Cell(66.75, 10.5, 'TELEPHONE #', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10,191);
$pdf->Cell(117.5, 10.5, 'JOB TITLE', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127.5,191);
$pdf->Cell(66.75, 10.5, 'FAX #', 1, false, 'L', 0, '', 0, false, 'L', 'T');
//SPONSORSHIP
$pdf->SetXY(10,206);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'SPONSORSHIP INFORMATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10,214);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(185, 10.5,  'HOW DO YOU PLAN TO PAY OUR TUITION?', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        //SPONSORSHIP TYPES
        $pdf->SetXY(80,218);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(85,218);
        $pdf->Cell(8, 4, 'Self', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $pdf->SetXY(95,218);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(100,218);
        $pdf->Cell(8, 4, 'Sponsor', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $pdf->SetXY(110,218);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(115,218);
        $pdf->Cell(8, 4, 'Scolarship', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $pdf->SetXY(130,218);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(135,218);
        $pdf->Cell(8, 4, 'Salary Deduction', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $sponsor = readline('How do you plan to pay our tuition?. Enter Self, Sponsor, Scolarship or Salary Deduction (use common letters): ');
        switch ($sponsor)
        {
               case "self":
                       $pdf->SetXY(80,218);
                       $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                       break;

               case "sponsor":
                       $pdf->SetXY(95,218);
                       $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                       $sponsor = readline('Name of Person or Institution: ');
                       $pdf->SetXY(10,228.5);
                       $pdf->Cell(70, 6, $sponsor, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                       $sponsoradd = readline('Address of Person or Institution: ');
                       $pdf->SetXY(10,239);
                       $pdf->Cell(70, 6, $sponsoradd, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                       break;

                case "scolarship":
                        $pdf->SetXY(110,218);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                        $scolarship = readline('Name of Institution: ');
                        $pdf->SetXY(10,228.5);
                        $pdf->Cell(70, 6, $scolarship, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                        $scolarshipadd = readline('Address of Institution: ');
                        $pdf->SetXY(10,239);
                        $pdf->Cell(70, 6, $scolarshipadd, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                        break;
                case "salary deduction":
                        $pdf->SetXY(130,218);
                        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                        break;
        }
$pdf->SetXY(10,224.5);
$pdf->Cell(185, 10.5,  'NAME OF SPONSOR / INSTITUTION', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10,235);
$pdf->Cell(185, 10.5,  'ADDRESS OF SPONSOR / INSTITUTION', 1, false, 'L', 0, '', 0, false, 'L', 'T');

//PAGE 2
$pdf->SetPrintFooter(false);
$pdf->SetPrintHeader(true);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'SECONDARY EDUCATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->SetXY(6,25);
$pdf->Cell(15, 3,  'EXAM', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,27);
$pdf->Cell(15, 3,  'BODY', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,29);
$pdf->Cell(15, 3,  '(For e.g.', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,31);
$pdf->Cell(15, 3,  'CXC)', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,25);
$pdf->Cell(74, 3,  'INSTITUTION', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,25);
$pdf->Cell(74, 3,  'SUBJECT', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,25);
$pdf->Cell(13, 3,  'RESULT', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,25);
$pdf->Cell(182, 3,  'DATE', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,27);
$pdf->Cell(15, 3,  'AWARDED', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,29);
$pdf->Cell(15, 3,  'MM/YYYY', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 22);
$pdf->Cell(192, 15,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');

//EXAM COLUMN
$pdf->SetXY(6, 37);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 42.5);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 48);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 53.5);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 59);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 64.5);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 70);
$pdf->Cell(15, 5.5,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');

//INSTITUTION COLUMN
$pdf->SetXY(21,37);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,42.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,48);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,53.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,59);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,64.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(21,70);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');


//SUBJECT COLUMN
$pdf->SetXY(95,37);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,42.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,48);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,53.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,59);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,64.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(95,70);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');


//RESULT COLUMN
$pdf->SetXY(169,37);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,42.5);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,48);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,53.5);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,59);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,64.5);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(169,70);
$pdf->Cell(13, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');


//DATE COLUMN
$pdf->SetXY(182,37);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,42.5);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,48);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,53.5);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,59);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,64.5);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(182,70);
$pdf->Cell(16, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$numsub = readline('How many subjects did you do in high school? Pick a number between 1 and 7. It is okay if you did more, just make sure to add in English Language and a numerical subject: ');
        switch ($numsub)
        {
                case "7":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body2 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 42.5);
                        $pdf->Cell(15, 5.5,  $body2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution2 = readline('Institution: ');
                        $pdf->SetXY(21,42.5);
                        $pdf->Cell(74, 5.5,  $institution2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject2 = readline('Subject: ');
                        $pdf->SetXY(95,42.5);
                        $pdf->Cell(74, 5.5,  $subject2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result2 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,42.5);
                        $pdf->Cell(13, 5.5,  $result2, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date2 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,42.5);
                        $pdf->Cell(16, 5.5,  $date2, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body3 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 48);
                        $pdf->Cell(15, 5.5,  $body3, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution3 = readline('Institution: ');
                        $pdf->SetXY(21,48);
                        $pdf->Cell(74, 5.5,  $institution3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject3 = readline('Subject: ');
                        $pdf->SetXY(95,48);
                        $pdf->Cell(74, 5.5,  $subject3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result3 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,48);
                        $pdf->Cell(13, 5.5,  $result3, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date3 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,48);
                        $pdf->Cell(16, 5.5,  $date3, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body4 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 53.5);
                        $pdf->Cell(15, 5.5,  $body4, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution4 = readline('Institution: ');
                        $pdf->SetXY(21,53.5);
                        $pdf->Cell(74, 5.5,  $institution4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject4 = readline('Subject: ');
                        $pdf->SetXY(95,53.5);
                        $pdf->Cell(74, 5.5,  $subject4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result4 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,53.5);
                        $pdf->Cell(13, 5.5,  $result4, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date4 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,53.5);
                        $pdf->Cell(16, 5.5,  $date4, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body5 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 59);
                        $pdf->Cell(15, 5.5,  $body5, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution5 = readline('Institution: ');
                        $pdf->SetXY(21,59);
                        $pdf->Cell(74, 5.5,  $institution5, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject5 = readline('Subject: ');
                        $pdf->SetXY(95,59);
                        $pdf->Cell(74, 5.5,  $subject5, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result5 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,59);
                        $pdf->Cell(13, 5.5,  $result5, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date5 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,59);
                        $pdf->Cell(16, 5.5,  $date5, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body6 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 64.5);
                        $pdf->Cell(15, 5.5,  $body6, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution6 = readline('Institution: ');
                        $pdf->SetXY(21,64.5);
                        $pdf->Cell(74, 5.5,  $institution6, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject6 = readline('Subject: ');
                        $pdf->SetXY(95,64.5);
                        $pdf->Cell(74, 5.5,  $subject6, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result6 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,64.5);
                        $pdf->Cell(13, 5.5,  $result6, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date6 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,64.5);
                        $pdf->Cell(16, 5.5,  $date6, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body7 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 70);
                        $pdf->Cell(15, 5.5,  $body7, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution7 = readline('Institution: ');
                        $pdf->SetXY(21,70);
                        $pdf->Cell(74, 5.5,  $institution7, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject7 = readline('Subject: ');
                        $pdf->SetXY(95,70);
                        $pdf->Cell(74, 5.5,  $subject7, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result7 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,70);
                        $pdf->Cell(13, 5.5,  $result7, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date7 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,70);
                        $pdf->Cell(16, 5.5,  $date7, 1, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;

                case "6":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body2 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 42.5);
                        $pdf->Cell(15, 5.5,  $body2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution2 = readline('Institution: ');
                        $pdf->SetXY(21,42.5);
                        $pdf->Cell(74, 5.5,  $institution2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject2 = readline('Subject: ');
                        $pdf->SetXY(95,42.5);
                        $pdf->Cell(74, 5.5,  $subject2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result2 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,42.5);
                        $pdf->Cell(13, 5.5,  $result2, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date2 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,42.5);
                        $pdf->Cell(16, 5.5,  $date2, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body3 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 48);
                        $pdf->Cell(15, 5.5,  $body3, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution3 = readline('Institution: ');
                        $pdf->SetXY(21,48);
                        $pdf->Cell(74, 5.5,  $institution3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject3 = readline('Subject: ');
                        $pdf->SetXY(95,48);
                        $pdf->Cell(74, 5.5,  $subject3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result3 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,48);
                        $pdf->Cell(13, 5.5,  $result3, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date3 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,48);
                        $pdf->Cell(16, 5.5,  $date3, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body4 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 53.5);
                        $pdf->Cell(15, 5.5,  $body4, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution4 = readline('Institution: ');
                        $pdf->SetXY(21,53.5);
                        $pdf->Cell(74, 5.5,  $institution4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject4 = readline('Subject: ');
                        $pdf->SetXY(95,53.5);
                        $pdf->Cell(74, 5.5,  $subject4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result4 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,53.5);
                        $pdf->Cell(13, 5.5,  $result4, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date4 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,53.5);
                        $pdf->Cell(16, 5.5,  $date4, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body5 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 59);
                        $pdf->Cell(15, 5.5,  $body5, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution5 = readline('Institution: ');
                        $pdf->SetXY(21,59);
                        $pdf->Cell(74, 5.5,  $institution5, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject5 = readline('Subject: ');
                        $pdf->SetXY(95,59);
                        $pdf->Cell(74, 5.5,  $subject5, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result5 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,59);
                        $pdf->Cell(13, 5.5,  $result5, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date5 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,59);
                        $pdf->Cell(16, 5.5,  $date5, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body6 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 64.5);
                        $pdf->Cell(15, 5.5,  $body6, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution6 = readline('Institution: ');
                        $pdf->SetXY(21,64.5);
                        $pdf->Cell(74, 5.5,  $institution6, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject6 = readline('Subject: ');
                        $pdf->SetXY(95,64.5);
                        $pdf->Cell(74, 5.5,  $subject6, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result6 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,64.5);
                        $pdf->Cell(13, 5.5,  $result6, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date6 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,64.5);
                        $pdf->Cell(16, 5.5,  $date6, 1, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;

                case "5":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body2 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 42.5);
                        $pdf->Cell(15, 5.5,  $body2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution2 = readline('Institution: ');
                        $pdf->SetXY(21,42.5);
                        $pdf->Cell(74, 5.5,  $institution2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject2 = readline('Subject: ');
                        $pdf->SetXY(95,42.5);
                        $pdf->Cell(74, 5.5,  $subject2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result2 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,42.5);
                        $pdf->Cell(13, 5.5,  $result2, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date2 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,42.5);
                        $pdf->Cell(16, 5.5,  $date2, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body3 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 48);
                        $pdf->Cell(15, 5.5,  $body3, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution3 = readline('Institution: ');
                        $pdf->SetXY(21,48);
                        $pdf->Cell(74, 5.5,  $institution3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject3 = readline('Subject: ');
                        $pdf->SetXY(95,48);
                        $pdf->Cell(74, 5.5,  $subject3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result3 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,48);
                        $pdf->Cell(13, 5.5,  $result3, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date3 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,48);
                        $pdf->Cell(16, 5.5,  $date3, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body4 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 53.5);
                        $pdf->Cell(15, 5.5,  $body4, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution4 = readline('Institution: ');
                        $pdf->SetXY(21,53.5);
                        $pdf->Cell(74, 5.5,  $institution4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject4 = readline('Subject: ');
                        $pdf->SetXY(95,53.5);
                        $pdf->Cell(74, 5.5,  $subject4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result4 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,53.5);
                        $pdf->Cell(13, 5.5,  $result4, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date4 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,53.5);
                        $pdf->Cell(16, 5.5,  $date4, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body5 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 59);
                        $pdf->Cell(15, 5.5,  $body5, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution5 = readline('Institution: ');
                        $pdf->SetXY(21,59);
                        $pdf->Cell(74, 5.5,  $institution5, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject5 = readline('Subject: ');
                        $pdf->SetXY(95,59);
                        $pdf->Cell(74, 5.5,  $subject5, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result5 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,59);
                        $pdf->Cell(13, 5.5,  $result5, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date5 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,59);
                        $pdf->Cell(16, 5.5,  $date5, 1, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;

                case "4":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body2 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 42.5);
                        $pdf->Cell(15, 5.5,  $body2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution2 = readline('Institution: ');
                        $pdf->SetXY(21,42.5);
                        $pdf->Cell(74, 5.5,  $institution2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject2 = readline('Subject: ');
                        $pdf->SetXY(95,42.5);
                        $pdf->Cell(74, 5.5,  $subject2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result2 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,42.5);
                        $pdf->Cell(13, 5.5,  $result2, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date2 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,42.5);
                        $pdf->Cell(16, 5.5,  $date2, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body3 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 48);
                        $pdf->Cell(15, 5.5,  $body3, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution3 = readline('Institution: ');
                        $pdf->SetXY(21,48);
                        $pdf->Cell(74, 5.5,  $institution3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject3 = readline('Subject: ');
                        $pdf->SetXY(95,48);
                        $pdf->Cell(74, 5.5,  $subject3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result3 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,48);
                        $pdf->Cell(13, 5.5,  $result3, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date3 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,48);
                        $pdf->Cell(16, 5.5,  $date3, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body4 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 53.5);
                        $pdf->Cell(15, 5.5,  $body4, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution4 = readline('Institution: ');
                        $pdf->SetXY(21,53.5);
                        $pdf->Cell(74, 5.5,  $institution4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject4 = readline('Subject: ');
                        $pdf->SetXY(95,53.5);
                        $pdf->Cell(74, 5.5,  $subject4, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result4 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,53.5);
                        $pdf->Cell(13, 5.5,  $result4, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date4 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,53.5);
                        $pdf->Cell(16, 5.5,  $date4, 1, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;

                case "3":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body2 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 42.5);
                        $pdf->Cell(15, 5.5,  $body2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution2 = readline('Institution: ');
                        $pdf->SetXY(21,42.5);
                        $pdf->Cell(74, 5.5,  $institution2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject2 = readline('Subject: ');
                        $pdf->SetXY(95,42.5);
                        $pdf->Cell(74, 5.5,  $subject2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result2 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,42.5);
                        $pdf->Cell(13, 5.5,  $result2, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date2 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,42.5);
                        $pdf->Cell(16, 5.5,  $date2, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body3 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 48);
                        $pdf->Cell(15, 5.5,  $body3, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution3 = readline('Institution: ');
                        $pdf->SetXY(21,48);
                        $pdf->Cell(74, 5.5,  $institution3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject3 = readline('Subject: ');
                        $pdf->SetXY(95,48);
                        $pdf->Cell(74, 5.5,  $subject3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result3 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,48);
                        $pdf->Cell(13, 5.5,  $result3, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date3 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,48);
                        $pdf->Cell(16, 5.5,  $date3, 1, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;

                case "2":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 1, false, 'C', 0, '', 0, false, 'L', 'T');


                        $body2 = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 42.5);
                        $pdf->Cell(15, 5.5,  $body2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution2 = readline('Institution: ');
                        $pdf->SetXY(21,42.5);
                        $pdf->Cell(74, 5.5,  $institution2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject2 = readline('Subject: ');
                        $pdf->SetXY(95,42.5);
                        $pdf->Cell(74, 5.5,  $subject2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result2 = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,42.5);
                        $pdf->Cell(13, 5.5,  $result2, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date2 = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,42.5);
                        $pdf->Cell(16, 5.5,  $date2, 1, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;

                case "1":
                        $body = readline('Exam Body. (CXC etc.): ');
                        $pdf->SetXY(6, 37);
                        $pdf->Cell(15, 5.5,  $body, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                        $institution = readline('Institution: ');
                        $pdf->SetXY(21,37);
                        $pdf->Cell(74, 5.5,  $institution, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $subject = readline('Subject: ');
                        $pdf->SetXY(95,37);
                        $pdf->Cell(74, 5.5,  $subject, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                        $result = readline('Result. Enter the number or pending: ');
                        $pdf->SetXY(169,37);
                        $pdf->Cell(13, 5.5,  $result, 1, false, 'C', 0, '', 0, false, 'L', 'T');

                        $date = readline('Date Awarded (mm/yyyy). Enter the date or pending: ');
                        $pdf->SetXY(182,37);
                        $pdf->Cell(16, 5.5,  $date, 0, false, 'C', 0, '', 0, false, 'L', 'T');
                        break;
        }


//TERTIARY HEADING
$pdf->SetXY(6, 90);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'TERTIARY EDUCATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->SetXY(6,95);
$pdf->Cell(65, 3,  'INSTITUTION', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(71,95);
$pdf->Cell(74, 3,  'PROGRAMME', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(145,95);
$pdf->Cell(26, 3,  'FROM', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(145,97);
$pdf->Cell(26, 3,  '(MM/YYYY)', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(171,95);
$pdf->Cell(26, 3,  'TO', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(171,97);
$pdf->Cell(26, 3,  '(MM/YYYY)', 0, false, 'C', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6, 93);
$pdf->Cell(192, 15,  '', 1, false, 'L', 0, '', 0, false, 'L', 'T');

//INSTITUTION COLUMN
$pdf->SetXY(6,108);
$pdf->Cell(65, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,113.5);
$pdf->Cell(65, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,119);
$pdf->Cell(65, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');

//PROGRAMME COLUMN
$pdf->SetXY(71,108);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(71,113.5);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(71,119);
$pdf->Cell(74, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');

//FROM COLUMN
$pdf->SetXY(145,108);
$pdf->Cell(26, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(145,113.5);
$pdf->Cell(26, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(145,119);
$pdf->Cell(26, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');

//TO COLUMN
$pdf->SetXY(171,108);
$pdf->Cell(27, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(171,113.5);
$pdf->Cell(27, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(171,119);
$pdf->Cell(27, 5.5,  '', 1, false, 'C', 0, '', 0, false, 'L', 'T');


$tertiary = readline('Do you have prior tertiary education? Enter yes or no: ');
        switch($tertiary)
        {
                case "yes":
                        $ternum = readline('How many schools did you attend? Enter a number between 1 and 3. If more than three, enter the three most recent: ');
                        switch($ternum)
                        {
                                case "3":
                                        $school = readline('Institution: ');
                                        $pdf->SetXY(6, 108);
                                        $pdf->Cell(15, 5.5,  $school, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                                        $programme = readline('Programme: ');
                                        $pdf->SetXY(78,108);
                                        $pdf->Cell(13, 5.5,  $programme, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $from = readline('From (mm/yyyy): ');
                                        $pdf->SetXY(125,108);
                                        $pdf->Cell(74, 5.5,  $from, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $to = readline('To (mm/yyyy): ');
                                        $pdf->SetXY(151,108);
                                        $pdf->Cell(74, 5.5,  $to, 0, false, 'C', 0, '', 0, false, 'L', 'T');


                                        $school2 = readline('Institution: ');
                                        $pdf->SetXY(6, 115.5);
                                        $pdf->Cell(15, 5.5,  $school2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                                        $programme2 = readline('Programme: ');
                                        $pdf->SetXY(78,115.5);
                                        $pdf->Cell(13, 5.5,  $programme2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $from2 = readline('From (mm/yyyy): ');
                                        $pdf->SetXY(125,115.5);
                                        $pdf->Cell(74, 5.5,  $from2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $to2 = readline('To (mm/yyyy): ');
                                        $pdf->SetXY(151,115.5);
                                        $pdf->Cell(74, 5.5,  $to2, 0, false, 'C', 0, '', 0, false, 'L', 'T');


                                        $school3 = readline('Institution: ');
                                        $pdf->SetXY(6, 121);
                                        $pdf->Cell(15, 5.5,  $school3, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                                        $programme3 = readline('Programme: ');
                                        $pdf->SetXY(78,121);
                                        $pdf->Cell(13, 5.5,  $programme3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $from3 = readline('From (mm/yyyy): ');
                                        $pdf->SetXY(125,121);
                                        $pdf->Cell(74, 5.5,  $from3, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $to3 = readline('To (mm/yyyy): ');
                                        $pdf->SetXY(151,121);
                                        $pdf->Cell(74, 5.5,  $to3, 0, false, 'C', 0, '', 0, false, 'L', 'T');
                                        break;

                                case "2":
                                        $school = readline('Institution: ');
                                        $pdf->SetXY(6, 108);
                                        $pdf->Cell(15, 5.5,  $school, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                                        $programme = readline('Programme: ');
                                        $pdf->SetXY(78,108);
                                        $pdf->Cell(13, 5.5,  $programme, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $from = readline('From (mm/yyyy): ');
                                        $pdf->SetXY(125,108);
                                        $pdf->Cell(74, 5.5,  $from, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $to = readline('To (mm/yyyy): ');
                                        $pdf->SetXY(151,108);
                                        $pdf->Cell(74, 5.5,  $to, 0, false, 'C', 0, '', 0, false, 'L', 'T');


                                        $school2 = readline('Institution: ');
                                        $pdf->SetXY(6, 115.5);
                                        $pdf->Cell(15, 5.5,  $school2, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                                        $programme2 = readline('Programme: ');
                                        $pdf->SetXY(78,115.5);
                                        $pdf->Cell(13, 5.5,  $programme2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $from2 = readline('From (mm/yyyy): ');
                                        $pdf->SetXY(125,115.5);
                                        $pdf->Cell(74, 5.5,  $from2, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $to2 = readline('To (mm/yyyy): ');
                                        $pdf->SetXY(151,115.5);
                                        $pdf->Cell(74, 5.5,  $to2, 0, false, 'C', 0, '', 0, false, 'L', 'T');
                                        break;

                                case "1":
                                        $school = readline('Institution: ');
                                        $pdf->SetXY(6, 108);
                                        $pdf->Cell(15, 5.5,  $school, 0, false, 'L', 0, '', 0, false, 'L', 'T');

                                        $programme = readline('Programme: ');
                                        $pdf->SetXY(78,108);
                                        $pdf->Cell(13, 5.5,  $programme, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $from = readline('From (mm/yyyy): ');
                                        $pdf->SetXY(125,108);
                                        $pdf->Cell(74, 5.5,  $from, 0, false, 'C', 0, '', 0, false, 'L', 'T');

                                        $to = readline('To (mm/yyyy): ');
                                        $pdf->SetXY(151,108);
                                        $pdf->Cell(74, 5.5,  $to, 0, false, 'C', 0, '', 0, false, 'L', 'T');
                                        break;
                        }
        }


//OTHER QUALIFICATIONS
$pdf->SetXY(6,135);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'OTHER QUALIFICATIONS', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetFont('helvetica', '', 8, '', true);
$otherqual = readline('Do you have other qualifications? Enter them or put none: ');
$pdf->SetXY(6, 140);
$pdf->Cell(192, 15,  $otherqual, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 132);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 142);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 152);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 162);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');

        

//PROGRAMMES
$pdf->SetXY(6,201);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'PROGRAMMES', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetFont('helvetica', '', 9, '', true);

$pdf->SetXY(6,206);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 206);
$pdf->Cell(96, 4.5,  'Bachelor of Science in Technology Management', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,210);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 210);
$pdf->Cell(96, 4.5,  'Bachelor of Science in Information & Communication Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,214);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 214);
$pdf->Cell(96, 4.5,  'Associate Degree in Computer Systems Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,218);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 218);
$pdf->Cell(96, 4.5,  'Associate Degree in Computer Systems Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,222);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 222);
$pdf->Cell(96, 4.5,  'Associate Degree in Software Programming', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,226);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 226);
$pdf->Cell(96, 4.5,  'Diploma in Software Programming', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,230);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 230);
$pdf->Cell(96, 4.5,  'Diploma in Computer Systems Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,234);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 234);
$pdf->Cell(96, 4.5,  'Advanced Diploma in Cyber Security Analyst', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,238);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 238);
$pdf->Cell(96, 4.5,  'Certificate in Mobile Application Development', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,242);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 242);
$pdf->Cell(96, 4.5,  'CISCO Certified Network Associate (CCNA)', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,246);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 246);
$pdf->Cell(192, 4.5,  'Other:', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(28, 246);
$pdf->Cell(170, 4.5,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetFont('helvetica', '', 9, '', true);
$pdf->SetXY(127,210);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 210);
$pdf->Cell(66, 4.5,  'Fiber Optics Technician Part 1', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,214);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 214);
$pdf->Cell(66, 4.5,  'Fiber Optics Technician Part 2', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,218);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 218);
$pdf->Cell(66, 4.5,  'Graphics Design 1', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,222);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 222);
$pdf->Cell(66, 4.5,  'Graphic Design 2', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,226);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 226);
$pdf->Cell(66, 4.5,  'Webpage Design and Development', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,230);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 230);
$pdf->Cell(66, 4.5,  'Photovoltaic Installer Level 1 (Solar)', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,234);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 234);
$pdf->Cell(66, 4.5,  'Computer Service Technicians', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,238);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 238);
$pdf->Cell(66, 4.5,  'Computer Network Technicians', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(127,242);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(132, 242);
$pdf->Cell(66, 4.5,  'Computer Network Security Technicians', 0, false, 'L', 0, '', 0, false, 'L', 'T');



readline('Choose your major. Enter the number to the corresponding one below.');
$major = readline('1. Bachelor of Science in Technology Management, 2. Bachelor of Science in Information & Communication Technology, 3. Associate Degree in Computer Systems Technology, 4. Associate Degree in Software Programming, 5. Diploma in Software Programming, 6. Diploma in Computer Systems Technology, 7. Advanced Diploma in Cyber Security Analyst, 8. Certificate in Mobile Application Development, 9. CISCO Certified Network Associate (CCNA), 10. Fiber Optics Technician Part 1, 11. Fiber Optics Technician Part 2, 12. Graphics Design 1, 13. Graphics Design 2, 14. Webpage Design & Development, 15. Photovoltaic Installer Level 1 (Solar), 16. Computer Service Technicians, 17. Computer Network Technicians, 18. Computer Network Security Technicians, 19. Other: ');
switch ($major)
{
case "1":
        $pdf->SetXY(6,206);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "2":
        $pdf->SetXY(6,210);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "3":
        $pdf->SetXY(6,214);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "4":
        $pdf->SetXY(6,218);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "5":
        $pdf->SetXY(6,222);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "6":
        $pdf->SetXY(6,226);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;
        
case "7":
        $pdf->SetXY(6,230);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "8":
        $pdf->SetXY(6,234);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "9":
        $pdf->SetXY(6,238);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "10":
        $pdf->SetXY(6,242);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

        case "11":
                $pdf->SetXY(6,206);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "12":
                $pdf->SetXY(127,210);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "13":
                $pdf->SetXY(127,214);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "14":
                $pdf->SetXY(127,218);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "15":
                $pdf->SetXY(127,222);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "16":
                $pdf->SetXY(127,226);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
                
        case "17":
                $pdf->SetXY(127,230);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "18":
                $pdf->SetXY(127,234);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "19":
                $pdf->SetXY(6,246);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                $othermajor =  readline('What is the other major that you wish to pursue? ');
                $pdf->SetXY(28, 245);
                $pdf->Cell(170, 4.5,  $othermajor, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
}


//PROGRAMME SCHEDULE
$pdf->SetXY(6, 264);
$pdf->SetFont('helvetica', '', 9, '', true);
$pdf->Cell(150, 30, 'PROGRAMME SCHEDULE?', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,278);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 278);
$pdf->SetFont('helvetica', 'B', 9, '', true);
$pdf->Cell(64, 4.5, 'Day', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 282);
$pdf->SetFont('helvetica', 'I', 9, '', true);
$pdf->Cell(64, 4.5, 'Mon - Fri, 9:00 am - 4:00 pm', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(70,278);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 278);
$pdf->SetFont('helvetica', 'B', 9, '', true);
$pdf->Cell(64, 4.5, 'Evening', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 282);
$pdf->SetFont('helvetica', 'I', 9, '', true);
$pdf->Cell(64, 4.5, 'Mon - Thurs, 5:30 pm - 8:30 pm or', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 286);
$pdf->Cell(64, 4.5, 'Tues / Thurs & Sat, 9:00 am – 4:00 pm or', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 290);
$pdf->Cell(64, 4.5, 'Mon / Wed & Sat, 9:00 am – 4:00 pm', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(134,278);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(140, 278);
$pdf->SetFont('helvetica', 'B', 9, '', true);
$pdf->Cell(64, 4.5, 'Weekend', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(140, 282);
$pdf->SetFont('helvetica', 'I', 9, '', true);
$pdf->Cell(64, 4.5, 'Saturdays 9:00 am – 4:00 pm', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(140, 286);
$pdf->Cell(64, 4.5, 'Sundays 9:00 am – 4:00 pm', 0, false, 'L', 0, '', 0, false, 'L', 'T');



$schedule = readline('Do you wish to go to school during the day, evening or on weekends? Enter day, evening or weekend: ');
switch ($schedule)
{
case "day":
        $pdf->SetXY(6,278);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "evening":
        $pdf->SetXY(70,278);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;

case "weekend":
        $pdf->SetXY(134,278);
        $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        break;
}


//PAGE 3
$pdf->SetPrintFooter(false);
$pdf->SetPrintHeader(true);
$pdf->AddPage();
$pdf->SetXY(6, 16);
$pdf->SetFont('helvetica', '', 9, '', true);
$pdf->Cell(150, 30, 'WHAT IS YOUR OBJECTIVE FOR THE PROGRAMME BEING REGISTERED FOR?', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$objective = readline('What is your objective for the programme? ');
$pdf->SetXY(6, 25);
$pdf->Cell(192, 15,  $objective, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(23);
$pdf->SetXY(6, 15);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 25);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');

//HOW DID YOU HEAR ABOUT US
$pdf->SetXY(6, 50);
$pdf->Cell(150, 30, 'HOW DID YOU HEAR ABOUT VECTOR TECHNOLOGY INSTITUTE?', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,60);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 60);
$pdf->Cell(64, 4.5, 'Newspaper', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,66);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 66);
$pdf->Cell(64, 4.5, 'Television', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,72);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 72);
$pdf->Cell(64, 4.5, 'Facebook', 0, false, 'L', 0, '', 0, false, 'L', 'T');


$pdf->SetXY(70,60);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 60);
$pdf->Cell(45, 4.5, 'Walk By/Sign', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(70,66);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 66);
$pdf->Cell(45, 4.5, 'Radio', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(70,72);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(76, 72);
$pdf->Cell(45, 4.5, 'Instagram', 0, false, 'L', 0, '', 0, false, 'L', 'T');


$pdf->SetXY(115,60);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(121, 60);
$pdf->Cell(83, 4.5, 'Website', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(115,66);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(121, 66);
$pdf->Cell(83, 4.5, 'Search Engine', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(115,72);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(121, 72);
$pdf->Cell(83, 4.5, 'Other', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(130, 72);
$pdf->Cell(76, 4.5, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');


readline('How did you hear about Vector Technology Institute? Choose the corresponding letter below');
$hear = readline('1. Newspaper, 2. Television, 3. Facebook, 4. Walk By/Sign, 5. Radio, 6. Instagram, 7. Website, 8. Search Engine, 9. Other: ');
switch ($hear)
{
        case "1":
                $pdf->SetXY(6,60);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "2":
                $pdf->SetXY(6,66);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "3":
                $pdf->SetXY(6,72);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "4":
                $pdf->SetXY(70,60);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "5":
                $pdf->SetXY(70,66);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "6":
                $pdf->SetXY(70,72);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
                
        case "7":
                $pdf->SetXY(115,60);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "8":
                $pdf->SetXY(115,66);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "9":
                $pdf->SetXY(115,72);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                $otherhear =  readline('What is the other major that you wish to pursue? ');
                $pdf->SetXY(130, 71);
                $pdf->Cell(170, 4.5,  $otherhear, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        }
//REFERRALS
$pdf->SetXY(6,85);
$pdf->Cell(150, 30, 'Referrals:', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,95);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(12, 95);
$pdf->Cell(35, 4.5, 'Family', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(41,95);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(47, 95);
$pdf->Cell(35, 4.5, 'Friend', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(76,95);
$pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(82, 95);
$pdf->Cell(35, 4.5, 'Colleague', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(115, 95);
$pdf->Cell(90, 4.5, 'Name', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(128, 95);
$pdf->Cell(77, 4.5, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');


readline('Who is your referral? Choose the corresponding letter below');
$hear = readline('1. Family, 2. Friend, 3. Colleague: ');
switch($hear)
{
        case "1":
                $pdf->SetXY(6,95);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                $refname = readline('What is their name? ');
                $pdf->SetXY(128, 94);
                $pdf->Cell(77, 4.5, $refname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "2":
                $pdf->SetXY(41,95);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                $refname = readline('What is their name? ');
                $pdf->SetXY(128, 94);
                $pdf->Cell(77, 4.5, $refname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "3":
                $pdf->SetXY(76,95);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                $refname = readline('What is their name? ');
                $pdf->SetXY(128, 94);
                $pdf->Cell(77, 4.5, $refname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;
        
        case "4":
                $pdf->SetXY(115, 95);
                $pdf->Cell(4, 4, 'X', 1, false, 'L', 0, '', 0, false, 'L', 'T');
                $refname = readline('What is their name? ');
                $pdf->SetXY(128, 94);
                $pdf->Cell(77, 4.5, $refname, 0, false, 'L', 0, '', 0, false, 'L', 'T');
                break;        
}
//DECLARATION
$pdf->SetFont('helvetica', '', 9, '', true);
$pdf->SetXY(6,113);
$pdf->Cell(192, 5, 'I hereby certify that the information written on this application and the documents provided are true and correct. I also agree to abide', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,117);
$pdf->Cell(192, 5, 'by the Terms and Conditions mentioned overleaf which governs this Application for admittance to the above-mentioned programme.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,125);
$pdf->Cell(96, 12, 'APPLICANT SIGNATURE', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$sig = readline('Enter your full name: ');
$pdf->SetXY(6,130);
$pdf->Cell(96, 12, $sig, 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,125);
$pdf->Cell(96, 12, 'DATE(DD / MM / YY)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$sigdate = readline('Enter the current date: ');
$pdf->SetXY(102,130);
$pdf->Cell(96, 12, $sigdate, 0, false, 'L', 0, '', 0, false, 'L', 'T');


//OFFICIAL USE ONLY
$pdf->SetFont('helvetica', '', 16, '', true);
$pdf->SetXY(6,150);
$pdf->Cell(192, 12, 'OFFICIAL USE ONLY', 1, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetFont('helvetica', '', 9, '', true);
$pdf->SetXY(6,160);
$pdf->Cell(96, 12, 'RECEIVED/WITNESSED BY', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,160);
$pdf->Cell(96, 12, 'DATE(DD / MM / YY)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,172);
$pdf->Cell(96, 12, 'PROCESSED BY', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,172);
$pdf->Cell(96, 12, 'DATE(DD / MM / YY)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,184);
$pdf->Cell(192, 12, 'MATRICULATION', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        //Matriculation Options
        $pdf->SetXY(76,188);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(82, 188);
        $pdf->Cell(35, 4.5, 'Full', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $pdf->SetXY(104,188);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(110, 188);
        $pdf->Cell(35, 4.5, 'Provisional', 0, false, 'L', 0, '', 0, false, 'L', 'T');

        $pdf->SetXY(144,188);
        $pdf->Cell(4, 4, '', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(150, 188);
        $pdf->Cell(35, 4.5, 'Mature Entry', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6,196);
$pdf->Cell(192, 48, 'COMMENTS', 1, false, 'L', 0, '', 0, false, 'L', 'T');
        //COMMENT LINES
        $pdf->SetXY(8,200);
        $pdf->Cell(188, 8, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(8,212);
        $pdf->Cell(188, 8, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(8,224);
        $pdf->Cell(188, 8, '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,244);
$pdf->Cell(96, 12, 'ACCEPTANCE APPROVED BY', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,244);
$pdf->Cell(96, 12, 'DATE(DD / MM / YY)', 1, false, 'L', 0, '', 0, false, 'L', 'T');


//FINAL PAGE!!!!
$pdf->SetPrintFooter(false);
$pdf->SetPrintHeader(true);
$pdf->SetAutoPageBreak(TRUE, 0);
//$pdf->SetMargins(-1, -1, -1, true);
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 10, '', true);
$pdf->SetXY(6,13);
$pdf->Cell(192, 12, 'TERMS AND CONDITIONS', 0, false, 'C', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,18);
$pdf->Cell(192, 12, 'QUALIFICATION FOR ADMISSION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetFont('helvetica', '', 8, '', true);
$pdf->SetXY(6,30);
$pdf->Cell(192, 12, 'To begin our programmes, participants need not have any background in working with computers; however, it is necessary that the individual', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,34);
$pdf->Cell(192, 12, 'show an affinity for working with electrical or electronic devices. Participants seeking admission to these programmes must satisfy the', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,38);
$pdf->Cell(192, 12, 'minimum matriculation requirements.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,42);
$pdf->Cell(192, 12, 'Bachelor & Associate Degree Programmes – five subjects at; Diploma Programme - four subjects at:', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        //LIST
        $pdf->SetXY(20,46);
        $pdf->Cell(183, 12, '- CXC passes to Grade 3 level (from 1998)', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(20,50);
        $pdf->Cell(183, 12, '- GCE ‘O’ level passes to Grade ‘C’ level', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(20,54);
        $pdf->Cell(183, 12, '- U.L.C.I subjects to the ‘Pass’ level', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,58);
$pdf->Cell(192, 12, 'These subjects should include English Language, which is compulsory, and a numeric subject.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,62);
$pdf->Cell(192, 12, 'The completed application form must be submitted with:', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        //LIST
        $pdf->SetXY(20,66);
        $pdf->Cell(183, 12, '- Proof of academic standing, and Proof of Identity (Passport, Driver’s license, Birth Certificate)', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(20,70);
        $pdf->Cell(183, 12, '- Passport sized picture of student', 0, false, 'L', 0, '', 0, false, 'L', 'T');
        $pdf->SetXY(20,74);
        $pdf->Cell(183, 12, '- Marriage certificate where applicable.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,82);
$pdf->Cell(192, 12, 'GENERAL', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,90);
$pdf->Cell(192, 12, 'It is important that students obtain a VTI Policies Handbook during orientation as the rules and regulations set out will govern the operations of', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,94);
$pdf->Cell(192, 12, 'the Institute and the conduct expected from students. All students must ensure that they inform themselves of the starting dates of their', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,98);
$pdf->Cell(192, 12, 'modules. Information is provided via the Notice Boards, the Intranet and the Internet (website). VTI reserves the right to cancel a Programme', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,104);
$pdf->Cell(192, 12, 'due to insufficient applicants and also to make changes to class times (scheduling) where necessary.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,110);
$pdf->Cell(192, 12, 'REGISTRATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,118);
$pdf->Cell(192, 12, 'Before registration is carried out, date(s) for commencement of module/programme must be chosen from the schedule after which application', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,122);
$pdf->Cell(192, 12, 'form(s) are completed.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,126);
$pdf->Cell(192, 12, 'NB: For the evening programmes, your space on each module cannot be guaranteed unless you have', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,130);
$pdf->Cell(192, 12, 'a) Paid up fees for, the relevant programme/module or as, per approved payment plan.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,134);
$pdf->Cell(192, 12, 'b) Submitted an approved Purchase order for the full amount of the programme/module being registered for if sponsored.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,142);
$pdf->Cell(192, 12, 'EXEMPTIONS', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,150);
$pdf->Cell(192, 12, 'To be exempted from a module, a person must show that he/she has superior knowledge of the subject matter. An exemption test may be given,', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,154);
$pdf->Cell(192, 12, 'with a pass mark of 80%. An exemption fee will apply. One may also be exempted if it is adjudged by the Institute, that he/she has superior', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,158);
$pdf->Cell(192, 12, 'qualifications by submitting valid proof of such. In this case, no examination will be required.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,166);
$pdf->Cell(192, 12, 'CANCELLATIONS', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,174);
$pdf->Cell(192, 12, 'Can be made but will be subjected to the following service charges:', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,182);
$pdf->Cell(96, 12, 'Ten or more working days before starting date', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,182);
$pdf->Cell(96, 12, '5% of course fees', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,186);
$pdf->Cell(96, 12, 'Between four to ten working days before starting date', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,186);
$pdf->Cell(96, 12, '10% of course fees', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,190);
$pdf->Cell(96, 12, 'Less than four working days before starting date', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102,190);
$pdf->Cell(96, 12, '20% of course fees', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,198);
$pdf->Cell(192, 12, 'REFUNDS', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,206);
$pdf->Cell(192, 12, 'Fees are refundable subject to the cancellation policy. However, once a student has started attending classes, or once the class commences,', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,210);
$pdf->Cell(192, 12, 'he/she will be liable for the full cost of the course.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,216);
$pdf->Cell(192, 12, 'TRANSFERS', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,224);
$pdf->Cell(192, 12, 'Where applicable, participants may be allowed to transfer their application to another module, however all transfers must be made five working', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,228);
$pdf->Cell(192, 12, 'days or more before commencement of module. Failure to do so will result in an imposed penalty of 50% of regular module fee. Once the module', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,232);
$pdf->Cell(192, 12, 'commences, transfers will only be allowed under exceptional circumstances and the imposed penalty will still be applied.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,240);
$pdf->Cell(192, 12, 'PLEASE NOTE', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,248);
$pdf->Cell(192, 12, 'Where applicable it is important to register for upcoming modules by paying the required 50 % deposit of the module fee in advance of the', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,252);
$pdf->Cell(192, 12, 'scheduled starting date. The balance must be paid on commencement of the module. We encourage students to seek company sponsorship and', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,256);
$pdf->Cell(192, 12, 'submit a purchase order for all modules.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,264);
$pdf->Cell(192, 12, 'COURSE FEES ARE SUBJECT TO CHANGE, HOWEVER, STUDENTS PAYING FOR A NUMBER OF MODULES IN ADVANCE WILL NOT BE AFFECTED', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,268);
$pdf->Cell(192, 12, 'BY INCREASED COSTS, AND ONLY THIS WILL ENSURE A RESERVED SPACE IN FUTURE MODULES SINCE THE NUMBER OF STUDENTS IS', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,272);
$pdf->Cell(192, 12, 'LIMITED TO TWENTY (20). Failure to do this may result in all places being filled by students who have paid in advance.', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,280);
$pdf->Cell(192, 12, 'REGISTRATION IS NOT AUTOMATIC REGARDLESS OF YOUR INTENTIONS MADE ON THE REGISTRATION FORM. These terms and conditions', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6,284);
$pdf->Cell(192, 12, 'along with other policies governing the Institute can be found in the VTI Policies Handbook.', 0, false, 'L', 0, '', 0, false, 'L', 'T');



//Save PDF File
$pdf->Output(__DIR__ . 'invoice#27.pdf', 'F');
?>