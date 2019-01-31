<?php

/**
 *
 */
class CexcelFactura extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model('mFactura');
      $this->load->model('mlogin');
      $this->load->database();
      $this->load->library('Excel');
   }

   public function dExcel() {
      $result = $this->mFactura->selectFactura();
      $this->excel->to_excel($result, 'factura');
   }

   public function generar_excel($i_pk_idFactura = null) {

      $llamadas = $this->mFactura->selectFactura($i_pk_idFactura);
      if (count($llamadas) > 0) {

         //Cargamos la librería de excel.
         $this->load->library('excel');
         $this->excel->setActiveSheetIndex(0);
         $this->excel->getActiveSheet(0)->freezePaneByColumnAndRow(0, 2);
         $style = array('font' => array('name' => 'Arial', 'size' => 14, 'bold' => true, 'color' => array('rgb' => '0000ff'),));

         //apply the style on column A row 1 to Column B row 1
         $this->excel->getActiveSheet()->getStyle('A1:N1')->applyFromArray($style);
         /*unidon de tablas*/
         /* $this->excel->getActiveSheet()->mergeCells('A1:B1');*/
         /*Colores:*/

         /*
         $objPHPExcel->getActiveSheet()->getStyle('A1:A1')->applyFromArray(array('font' => array('size' => 18,'bold' => true,'color' => array('rgb' => '0000ff'))));
         $objPHPExcel->getActiveSheet()->getStyle('B1:B1')->applyFromArray(array('font' => array('size' => 14,'bold' => true,'color' => array('rgb' => 'ff0000'))));
         $objPHPExcel->getActiveSheet()->getStyle('C1:C1')->applyFromArray(array('font' => array('size' => 9,'bold' => true,'color' => array('rgb' => '00ff00'))));
         $objPHPExcel->getActiveSheet()->getStyle('A2:A2')->applyFromArray(array('font' => array('size' => 24,'bold' => true,'color' => array('rgb' => 'eeeeee'))));*/
         $this->excel->getActiveSheet()->setTitle('FACTURA');
         //Contador de filas
         $contador = 1;
         //Le aplicamos ancho las columnas.

         $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(25);
         $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(35);

         //Le aplicamos negrita a los títulos de la cabecera.
         $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("E{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("F{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("G{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("H{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("I{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("J{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("K{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("L{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("M{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("N{$contador}")->getFont();


         //Definimos los títulos de la cabecera.<th style="border:1px #888 solid;background-color:#F00;color:white;">'.$key.'</th>

         $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Número de Fatura');
         $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Fecha RFC');
         $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Fecha Nombre');
         $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'Apellido Paterno');
         $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'Apellido Materno');
         $this->excel->getActiveSheet()->setCellValue("G{$contador}", 'Calle');
         $this->excel->getActiveSheet()->setCellValue("H{$contador}", 'Numero');
         $this->excel->getActiveSheet()->setCellValue("I{$contador}", 'Codigo Postal');
         $this->excel->getActiveSheet()->setCellValue("J{$contador}", 'Ciudad');
         $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'Estado');
         $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'Correo');
         $this->excel->getActiveSheet()->setCellValue("M{$contador}", 'Numero De ticket');
         $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'Telefono');


         //Definimos la data del cuerpo.
         foreach ($llamadas as $l) {
            //Incrementamos una fila más, para ir a la siguiente.
            $contador++;
            //Informacion de las filas de la consulta.

            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $l->i_pk_idFactura);
            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->vc_rfc);
            $this->excel->getActiveSheet()->setCellValue("D{$contador}", $l->vc_nombre);
            $this->excel->getActiveSheet()->setCellValue("E{$contador}", $l->vc_apepat);
            $this->excel->getActiveSheet()->setCellValue("F{$contador}", $l->vc_apemat);
            $this->excel->getActiveSheet()->setCellValue("G{$contador}", $l->vc_calle);
            $this->excel->getActiveSheet()->setCellValue("H{$contador}", $l->i_numero);
            $this->excel->getActiveSheet()->setCellValue("I{$contador}", $l->d_codPostal);
            $this->excel->getActiveSheet()->setCellValue("J{$contador}", $l->vc_ciudad);
            $this->excel->getActiveSheet()->setCellValue("K{$contador}", $l->vc_estado);
            $this->excel->getActiveSheet()->setCellValue("L{$contador}", $l->vc_mail);
            $this->excel->getActiveSheet()->setCellValue("N{$contador}", $l->d_tel);
            $this->excel->getActiveSheet()->setCellValue("M{$contador}", $l->i_fk_idTicket);

         }

         //Le ponemos un nombre al archivo que se va a generar.

         $archivo = "Factura_{$i_pk_idFactura}.xls";
         header('Content-Type: application/vnd.ms-excel');
         header('Content-Disposition: attachment;filename="' . $archivo . '"');
         header('Cache-Control: max-age=0');
         $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
         //Hacemos una salida al navegador con el archivo Excel.
         $objWriter->save('php://output');
      } else {
         echo 'No se han encontrado llamadas';
         exit;
      }

   }

}

?>