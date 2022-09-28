<?php
// Contenido del fichero /application/controllers/jugadores.php 
defined('BASEPATH') OR exit('No direct script access allowed');   
class ClientsExcel extends CI_Controller {       
  public function __construct(){ 
    parent::__construct();         
    // Models
    $this->load->model('ClientsExcel_model');
           
    // Libraries         
    $this->load->library('excel');
  }

     

  public function exportar2excel() {
    $config = array();

    $config["clients"] = $this->ClientsExcel_model->get_clients();


    $this->excel->setActiveSheetIndex(0);         
    $this->excel->getActiveSheet()->setTitle('test worksheet');
    $this->excel->getActiveSheet()->setCellValue('C4', 'Nombre');
    $this->excel->getActiveSheet()->setCellValue('D4', 'Apellido');
    $this->excel->getActiveSheet()->setCellValue('E4', 'Cédula');
    $this->excel->getActiveSheet()->setCellValue('F4', 'Fecha de Nacimiento');
    $this->excel->getActiveSheet()->setCellValue('G4', 'Dirección');
    $this->excel->getActiveSheet()->setCellValue('H4', 'Hijos');
    $this->excel->getActiveSheet()->setCellValue('I4', 'Nietos');
    $this->excel->getActiveSheet()->setCellValue('J4', 'Teléfono');
    $this->excel->getActiveSheet()->setCellValue('K4', 'email');
    $this->excel->getActiveSheet()->getStyle('C4:L4')->getFont()->setSize(12);
    $this->excel->getActiveSheet()->getStyle('C4:L4')->getFont()->setBold(true);

    $client_row = 5;


    foreach ($config["clients"] as $client) {
        $this->excel->getActiveSheet()->setCellValue('C'.$client_row, $client->client_name);
        $this->excel->getActiveSheet()->setCellValue('D'.$client_row, $client->client_lastname);
        $this->excel->getActiveSheet()->setCellValue('E'.$client_row, $client->cedularif);
        $this->excel->getActiveSheet()->setCellValue('F'.$client_row, $client->birthdate);
        $this->excel->getActiveSheet()->setCellValue('G'.$client_row, $client->address);
        $this->excel->getActiveSheet()->setCellValue('H'.$client_row, $client->children_qty);
        $this->excel->getActiveSheet()->setCellValue('I'.$client_row, $client->grandchildren_qty);
        $this->excel->getActiveSheet()->setCellValue('J'.$client_row, $client->phone);
        $this->excel->getActiveSheet()->setCellValue('K'.$client_row, $client->email);
        $client_row = $client_row + 1;
    }

    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
    


    // Para centrar los encabezados
    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $this->excel->getActiveSheet()->getStyle("C4:K4")->applyFromArray($style);


    header('Content-Type: application/vnd.ms-excel');         
    header('Content-Disposition: attachment;filename="Lista de Clientes Control de Acceso Salta.xls"');
    header('Cache-Control: max-age=0'); //no cache         
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');         
    
    // Forzamos a la descarga         
    $objWriter->save('php://output');


    
  }


  public function exportar2excel2() {
    $config = array();

    $config["clients_invoices"] = $this->ClientsExcel_model->get_clients_and_invoices();    
    
    $this->excel->setActiveSheetIndex(0);         
    $this->excel->getActiveSheet()->setTitle('test worksheet');
    $this->excel->getActiveSheet()->setCellValue('C4', 'Nombre');
    $this->excel->getActiveSheet()->setCellValue('D4', 'Apellido');
    $this->excel->getActiveSheet()->setCellValue('E4', 'Cédula');
    $this->excel->getActiveSheet()->setCellValue('F4', 'Fecha de Nacimiento');
    $this->excel->getActiveSheet()->setCellValue('G4', 'Dirección');
    $this->excel->getActiveSheet()->setCellValue('H4', 'Hijos');
    $this->excel->getActiveSheet()->setCellValue('I4', 'Nietos');
    $this->excel->getActiveSheet()->setCellValue('J4', 'Teléfono');
    $this->excel->getActiveSheet()->setCellValue('K4', 'email');
    $this->excel->getActiveSheet()->setCellValue('L4', 'Número de Factura');
    $this->excel->getActiveSheet()->setCellValue('M4', 'Tipo de Carnet');
    $this->excel->getActiveSheet()->getStyle('C4:M4')->getFont()->setSize(12);
    $this->excel->getActiveSheet()->getStyle('C4:M4')->getFont()->setBold(true);

    $client_row = 5;


    foreach ($config["clients_invoices"] as $client) {
        $this->excel->getActiveSheet()->setCellValue('C'.$client_row, $client->client_name);
        $this->excel->getActiveSheet()->setCellValue('D'.$client_row, $client->client_lastname);
        $this->excel->getActiveSheet()->setCellValue('E'.$client_row, $client->idtype.$client->cedularif);
        $this->excel->getActiveSheet()->setCellValue('F'.$client_row, $client->birthdate);
        $this->excel->getActiveSheet()->setCellValue('G'.$client_row, $client->address);
        $this->excel->getActiveSheet()->setCellValue('H'.$client_row, $client->children_qty);
        $this->excel->getActiveSheet()->setCellValue('I'.$client_row, $client->grandchildren_qty);
        $this->excel->getActiveSheet()->setCellValue('J'.$client_row, $client->phone);
        $this->excel->getActiveSheet()->setCellValue('K'.$client_row, $client->email);
        $this->excel->getActiveSheet()->setCellValue('L'.$client_row, $client->inumber);

        if ($client->cardtype == 1) {
            $this->excel->getActiveSheet()->setCellValue('M'.$client_row, 'Silver');
        } 

        elseif ($client->cardtype == 2) {
            $this->excel->getActiveSheet()->setCellValue('M'.$client_row, 'Gold');
        } else {
            $this->excel->getActiveSheet()->setCellValue('M'.$client_row, 'Black');
        }

        $client_row = $client_row + 1;
    }

    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
    $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
    


    // Para centrar los encabezados
    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $this->excel->getActiveSheet()->getStyle("C4:M4")->applyFromArray($style);



    header('Content-Type: application/vnd.ms-excel');         
    header('Content-Disposition: attachment;filename="Lista de Clientes y Facturas Control de Acceso Salta.xls"');
    header('Cache-Control: max-age=0'); //no cache         
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');         
    
    // Forzamos a la descarga         
    $objWriter->save('php://output');


    
  }


}