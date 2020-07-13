<?php

include_once '../vendor/autoload.php';

class PDFUargFlow {

    /**
     * @var Mpdf
     */
    protected $mpdf;
    protected $contenidoHtml;
    protected $contenidoCss;

    function __construct() {
        $this->mpdf = new \Mpdf\Mpdf([]);
        $this->setContenidoHtml();
    }

}
