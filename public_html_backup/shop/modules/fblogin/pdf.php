<?PHP
include_once('../../config/config.inc.php');
include_once('../../init.php');

/*
$pdf = new PDFGeneratorCore();;
$pdf->createHeader("test");
$pdf->createFooter("footer");
$pdf->writePage();
$pdf->render("product.pdf",false);
*/

$pdf = new PDF(null,null,null);

?>