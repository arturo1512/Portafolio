<?php

/**
 *
 */
class Cexcel extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model('mListaCita');
      $this->load->database();
      $this->load->library('Excel');
   }

   public function dExcel() {
      $result = $this->mListaCita->selectCitaCliente();
      $this->excel->to_excel($result, 'Citas');
   }

   public function generar_excel($i_pk_id_cita = null) {

      $llamadas = $this->mListaCita->selectCitaCliente($i_pk_id_cita);
      if (count($llamadas) > 0) {

         //Cargamos la librería de excel.
         $this->load->library('excel');
         $this->excel->setActiveSheetIndex(0);
         $this->excel->getActiveSheet(0)->freezePaneByColumnAndRow(0, 2);
         $style = array('font' => array('name' => 'Verdana', 'size' => 14, 'bold' => true, 'color' => array('rgb' => '0000ff'),));

         //apply the style on column A row 1 to Column B row 1
         $this->excel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($style);
         /*unidon de tablas*/
         /* $this->excel->getActiveSheet()->mergeCells('A1:B1');*/
         /*Colores:*/

         /*
         $objPHPExcel->getActiveSheet()->getStyle('A1:A1')->applyFromArray(array('font' => array('size' => 18,'bold' => true,'color' => array('rgb' => '0000ff'))));
         $objPHPExcel->getActiveSheet()->getStyle('B1:B1')->applyFromArray(array('font' => array('size' => 14,'bold' => true,'color' => array('rgb' => 'ff0000'))));
         $objPHPExcel->getActiveSheet()->getStyle('C1:C1')->applyFromArray(array('font' => array('size' => 9,'bold' => true,'color' => array('rgb' => '00ff00'))));
         $objPHPExcel->getActiveSheet()->getStyle('A2:A2')->applyFromArray(array('font' => array('size' => 24,'bold' => true,'color' => array('rgb' => 'eeeeee'))));*/
         $this->excel->getActiveSheet()->setTitle('CITAS');
         //Contador de filas
         $contador = 1;
         //Le aplicamos ancho las columnas.

         $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
         $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);

         //Le aplicamos negrita a los títulos de la cabecera.
         $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont();
         $this->excel->getActiveSheet()->getStyle("D{$contador}")->getFont();


         //Definimos los títulos de la cabecera.<th style="border:1px #888 solid;background-color:#F00;color:white;">'.$key.'</th>

         $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Número de Cita');

         $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Fecha Inicio');
         $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Fecha Final');
         $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'Hora');


         //Definimos la data del cuerpo.
         foreach ($llamadas as $l) {
            //Incrementamos una fila más, para ir a la siguiente.
            $contador++;
            //Informacion de las filas de la consulta.

            $this->excel->getActiveSheet()->setCellValue("B{$contador}", $l->i_pk_id_cita);
            $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->dt_fechaInicio);
            $this->excel->getActiveSheet()->setCellValue("D{$contador}", $l->dt_fechaFinal);
            $this->excel->getActiveSheet()->setCellValue("E{$contador}", $l->dt_hora);

         }
         //Le ponemos un nombre al archivo que se va a generar.
         $archivo = "CITAS_EXCEL_{$i_pk_id_cita}.xls";
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