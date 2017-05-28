<?php
	require('fpdf17/fpdf.php');
	$title = "Romz' Review Exercise in PHP";
	class PDF_Extended extends FPDF{
		function header(){
			global $title;
			$this->setFont("Helvetica", "B", 45);
			$this->setDrawColor(0,0,0);
			$this->setFillColor(255,255,0);
			$this->setTextColor(0,0,0);
			$this->setLineWidth(5);

			$width = $this->getStringWidth($title) + 150;
			$this->cell($width, 100, $title, 1, 1, 'C', 1);
			$this->ln(10);

		}
		function footer(){
			$this->setY(-15);
			$this->setFont("Arial", 'I', 8);
			$this->cell(0, 10,
			"This is the page footer -> Page {$this->pageNo()}/{nb}", 0, 0, 'C');

		}
	}



	// create an object for the FPDF library
	$pdf = new PDF_Extended('L','pt','Legal'); // page is set to be Landscape, measured in pt, size of paper is Legal
	// create a page
	$pdf->addPage();
	// sets the font to Arial bold 43pt
	$pdf->setFont("Arial", 'B', 43);
	$gotoTOP = $pdf->addLink(); // set a variable for an internal link
	$gotoBOTTOM = $pdf->addLink();
	// display a text 70 in width 400 in height -> sizes of textbox not the text itself
	
	$pdf->setLink($gotoTOP); // set an internal link to here
	$pdf->cell(470, 400, "Hello Out There!",1,1, 'C'); // border set to 1,has 1 line, centered
	$pdf->ln(); // create a new line goes to next page if page is full
	
	$pdf->cell(0,0,"Im out of line here",1,0,'R');
	$pdf->ln();
	
	$pdf->setFont("Arial", '', 12);
	$pdf->cell(100,50,"Im Arial");
	$pdf->ln();
	
	$pdf->write(5, "Click "); // write just appends the string
	$pdf->write(5, "here", $gotoBOTTOM); // go to the internal link
	$pdf->write(5, " to go to the Last Page");
	
	$pdf->setFont("Helvetica", '', 12);
	$pdf->cell(100,50,"Im Helvetica");
	$pdf->ln();
	
	$pdf->setFont("Courier", '', 12);
	$pdf->cell(100,50,"Im Courier");
	$pdf->ln();
	
	$pdf->setFont("Times", '', 12);
	$pdf->cell(100,50,"Im Times");
	$pdf->ln();
	
	$pdf->setFont("Symbol", '', 12);
	$pdf->cell(100,50,"Im Symbol");
	$pdf->ln();
	
	$pdf->setFont("ZapfDingbats", '', 12);
	$pdf->cell(100,50,"Im ZapfDingbats");
	$pdf->setFont("Arial", '', 12);
	$pdf->ln();
	
	$pdf->setTextColor(255,255,255);
	$pdf->cell(100,50,"Im White");
	$pdf->ln();
	
	$pdf->setTextColor(255,0,0);
	$pdf->cell(100,50,"Im Red");
	$pdf->ln();
	
	$pdf->setTextColor(0,255,0);
	$pdf->cell(100,50,"Im Green");
	$pdf->ln();
	
	$pdf->setTextColor(0,0,255);
	$pdf->cell(100,50,"Im Blue");
	$pdf->ln();
	
	$pdf->setTextColor(255,255,0);
	$pdf->cell(100,50,"Im Yellow");
	$pdf->ln();
	
	$pdf->setTextColor(255,0,255);
	$pdf->cell(100,50,"Im Pink");
	$pdf->ln();
	
	$pdf->setTextColor(0,255,255);
	$pdf->cell(100,50,"Im Blue-Green");
	$pdf->ln();
	
	$pdf->setTextColor(0,0,0);
	$pdf->cell(100,50,"Im Black");
	$pdf->ln();
	
	$pdf->image("pic2.jpg",500,250,200,250,'','http://facebook.com/nikkiromz'); // creates an image at 500(x) 250(y) 200 width 250 height with a link to Romz Profile :)
	
	$pdf->write(5, "Click "); // write just appends the string
	$pdf->write(5, "here", $gotoTOP); // go to the internal link
	$pdf->write(5, " to go to the Top Page");
	$pdf->setLink($gotoBOTTOM);
	
	$pdf->output();

?>