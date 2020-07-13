<?php

include_once 'PDFUargFlow.php';

Class PDFAlumno extends PDFUargFlow {

    function setContenidoHtml() {
        ob_start();
        include_once '../Vista/alumno.pdf.php';
        $this->contenidoHtml = ob_get_clean();
        $this->mpdf->writeHtml($this->contenidoHtml, \Mpdf\HTMLParserMode::HTML_BODY);
    }

    function __construct() {

        $this->mpdf = new \Mpdf\Mpdf([]);
        $this->setContenidoHtml();
    }

    Function generaPdf() {
        $this->mpdf->Output();
    }

    Function setContenidoCss() {
        ob_start();
        include_once 'ruta del archivo CSS';
        $this->contenidoCss = ob_get_clean();
        $this->mpdf->writeHtml($this->ContenidoCss, \Mpdf\HTMLParserMode::HEADER_CSS);
    }

}

//$mpdf = new PDFAlumno('../Vista/alumno.ver_1.php');

$mpdf = new PDFAlumno();
$mpdf->generaPdf();



