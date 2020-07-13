<?php

include_once 'PDFUargFlow.php';

Class PDFAlumno extends PDFUargFlow {

    function __construct() {
        parent::__construct();
    }

    function setContenidoHtml() {
        ob_start();
        include_once '../Vista/alumno.pdf.php';
        $this->contenidoHtml = ob_get_clean();
        $this->mpdf->writeHtml($this->contenidoHtml, \Mpdf\HTMLParserMode::HTML_BODY);
    }

    function setContenidoCss() {
        ob_start();
        include_once 'ruta del archivo CSS';
        $this->contenidoCss = ob_get_clean();
        $this->mpdf->writeHtml($this->ContenidoCss, \Mpdf\HTMLParserMode::HEADER_CSS);
    }

    function generaPdf() {
        $this->mpdf->Output();
    }

}