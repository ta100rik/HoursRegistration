<?php
// var_dump($_POST);
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Weaknumber');
$sheet->setCellValue('B1', date('W'));

$sheet->setCellValue('A2', 'Employee');
$sheet->setCellValue('B2', 'Zyad Osseyran');

$sheet->setCellValue('A4', 'Monday');
$sheet->setCellValue('B4', 'Tuesday');
$sheet->setCellValue('C4', 'Wednesday');
$sheet->setCellValue('D4', 'Thursday');
$sheet->setCellValue('E4', 'Friday');
$sheet->setCellValue('F4', 'Saturday');
$sheet->setCellValue('G4', 'Sunday');

$sheet->setCellValue('A5', $_POST['Monday']);
$sheet->setCellValue('B5', $_POST['Tuesday']);
$sheet->setCellValue('C5', $_POST['Wednesday']);
$sheet->setCellValue('D5', $_POST['Thursday']);
$sheet->setCellValue('E5', $_POST['Friday']);
$sheet->setCellValue('F5', $_POST['Saturday']);
$sheet->setCellValue('G5', $_POST['Sunday']);


$writer = new Xlsx($spreadsheet);

$writer->save('Weaknumber_' . date('W') . '_Zyad_Osseyran.xlsx');

  include_once "api/db.php";
$ID = date('W-Y');
$Monday = $_POST['Monday'];
$Tuesday = $_POST['Tuesday'];
$Wednesday = $_POST['Wednesday'];
$Thursday = $_POST['Thursday'];
$Friday = $_POST['Friday'];
$Saturday = $_POST['Saturday'];
$Sunday = $_POST['Sunday'];
	$insertsql = "
	INSERT INTO weaktable
	(ID,
	Monday,
	Tuesday,
	Wednesday,
	Thursday,
	Friday,
	Saturday,
	Sunday)
	VALUES(
	'" . $ID . "',
	'" . $Monday . "',
	'" . $Tuesday . "',
	'" . $Wednesday . "',
	'" . $Thursday . "',
	'" . $Friday . "',
	'" . $Saturday . "',
	'" . $Sunday . "'
	)";  
	$result = mysqli_query($con,$insertsql) ;

	if($result){
	

// $email = new PHPMailer();
// $bodytext = 'test';

// $email->FromName  = 'Zyad Osseyran';
// $email->Subject   = 'dsafsadf';
// $email->Body      = $bodytext;
// $email->AddAddress( 'zyadosseyran@gmail.com' );

// $file_to_attach = 'Weaknumber_' . date('W') . '_Zyad_Osseyran.xlsx';

// $email->AddAttachment( $file_to_attach , 'Weaknumber_' . date('W') . '_Zyad_Osseyran.xlsx' );

// return $email->Send();
$mail = new PHPMailer;
$mail->setFrom('zyad@chicken-it.nl', 'Zyad Osseyran');
$mail->addAddress('administratie@quingo.nl', 'Quingo Administratie');
$mail->AddCC('zyadosseyran@gmail.com', 'Zyad Osseyran');
$mail->AddCC('pim@quingo.nl', 'Pim Moolenaar');
$mail->AddReplyTo('zyadosseyran@gmail.com', 'Zyad Osseyran');
$mail->Subject  = 'Urenbrief Zyad Osseyran Weeknummer_' . date('W') . ' ';
$mail->Body     = 
'Beste Administratie, Pim en JP, 

Hierbij mijn Uren in excel van deze week.
Bij vragen kunt u me altijd benaderen op zyadosseyran@gmail.com.

Vriendelijke groet,

Zyad Osseyran
';
$mail->AddAttachment('Weaknumber_' . date('W') . '_Zyad_Osseyran.xlsx');
if($mail->send()) {
		echo 'done';

}else{
	echo "mail is niet verstuurd wel op geslagen in de database";
}
	}else{
		echo 'Dit record bestaat al in de database';
	}