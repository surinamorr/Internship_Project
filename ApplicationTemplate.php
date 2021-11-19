<?php
require './vendor/autoload.php';

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
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
$pdf->Ln(6);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(10, 10, 'TITLE', 'TL', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(40, 10, 'SURNAME', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(40, 10, 'FIRST NAME', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(50, 10, 'MIDDLE NAME', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(45, 10, 'DATE OF BIRTH (DD/MM/YYYY)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(10);
$pdf->Cell(150, 30, 'IDENTIFICATION VERIFICATION', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(35, 15, 'TRN', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(1.5);
$pdf->SetXY(160,79);
$pdf->Cell(35, 15, 'GENDER', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(15);
$pdf->Cell(92.5, 35, 'PERMANENT ADDRESS', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(92.5, 35, 'MAILING ADDRESS (if different)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(35);
$pdf->Cell(92.5, 10.5, 'EMAIL ADDRESS', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(46.25, 10.5, 'TELEPHONE #1', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(46.25, 10.5, 'TELEPHONE #2', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 12, '', true);
$pdf->Cell(150, 25, 'EMERGENCY CONTACT INFORMATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(64.375, 10.5, 'NAME (FIRST, LAST)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(46, 10.5, 'RELATIONSHIP', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(37.25, 10.5, 'TELEPHONE #1', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(37.25, 10.5, 'TELEPHONE #2', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(10.5);
$pdf->Cell(64.375, 10.5, 'NAME (FIRST, LAST)', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(46, 10.5, 'RELATIONSHIP', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(37.25, 10.5, 'TELEPHONE #1', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(37.25, 10.5, 'TELEPHONE #2', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 12, '', true);
$pdf->Cell(150, 30, 'EMPLOYMENT INFORMATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(5);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(117.5, 10.5, 'NAME OF EMPLOYER', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(66.75, 10.5, 'TELEPHONE #', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(10.5);
$pdf->Cell(117.5, 10.5, 'JOB TITLE', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Cell(66.75, 10.5, 'FAX #', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'SPONSORSHIP INFORMATION', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(3);
$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->Cell(185, 10.5,  'HOW DO YOU PLAN TO PAY OUR TUITION?', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(10.5);
$pdf->Cell(185, 10.5,  'HOW DO YOU PLAN TO PAY OUR TUITION?', 1, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->Ln(10.5);
$pdf->Cell(185, 10.5,  'HOW DO YOU PLAN TO PAY OUR TUITION?', 1, false, 'L', 0, '', 0, false, 'L', 'T');

//PAGE 2
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

//TERTIARY HEADING
$pdf->Ln(15);
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


//OTHER QUALIFICATIONS
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'OTHER QUALIFICATIONS', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetXY(6, 135);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 145);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 155);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 165);
$pdf->Cell(192, 15,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');

//PROGRAMMES
$pdf->Ln(25);
$pdf->SetFont('helvetica', 'B', 16, '', true);
$pdf->Cell(150, 30, 'PROGRAMMES', 0, false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->SetXY(6, 195);
$pdf->Cell(96, 4.5,  'Bachelor of Science in Technology Management', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 199.5);
$pdf->Cell(96, 4.5,  'Bachelor of Science in Information & Communication Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 204.25);
$pdf->Cell(96, 4.5,  'Associate Degree in Computer Systems Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 209);
$pdf->Cell(96, 4.5,  'Associate Degree in Computer Systems Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 213.75);
$pdf->Cell(96, 4.5,  'Associate Degree in Software Programming', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 218.5);
$pdf->Cell(96, 4.5,  'Diploma in Software Programming', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 223.25);
$pdf->Cell(96, 4.5,  'Diploma in Computer Systems Technology', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 228);
$pdf->Cell(96, 4.5,  'Advanced Diploma in Cyber Security Analyst', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 232.75);
$pdf->Cell(96, 4.5,  'Certificate in Mobile Application Development', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 237.5);
$pdf->Cell(96, 4.5,  'CISCO Certified Network Associate (CCNA)', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(6, 242.25);
$pdf->Cell(192, 4.5,  'Other:', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(10, 242.25);
$pdf->Cell(192, 4.5,  '', 'B', false, 'L', 0, '', 0, false, 'L', 'T');

$pdf->SetFont('helvetica', '', 6, '', true);
$pdf->SetXY(102, 195);
$pdf->Cell(96, 4.5,  'Fiber Optics Technician Part 1', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 199.5);
$pdf->Cell(96, 4.5,  'Fiber Optics Technician Part 2', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 204.25);
$pdf->Cell(96, 4.5,  'Graphics Design 1', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 209);
$pdf->Cell(96, 4.5,  'Graphic Design 2', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 213.75);
$pdf->Cell(96, 4.5,  'Webpage Design and Development', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 218.5);
$pdf->Cell(96, 4.5,  'Photovoltaic Installer Level 1 (Solar)', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 223.25);
$pdf->Cell(96, 4.5,  'Computer Service Technicians', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 228);
$pdf->Cell(96, 4.5,  'Computer Network Technicians', 0, false, 'L', 0, '', 0, false, 'L', 'T');
$pdf->SetXY(102, 232.75);
$pdf->Cell(96, 4.5,  'Computer Network Security Technicians', 0, false, 'L', 0, '', 0, false, 'L', 'T');


//Save PDF File
$pdf->Output(__DIR__ . 'invoice#27.pdf', 'F');
?>