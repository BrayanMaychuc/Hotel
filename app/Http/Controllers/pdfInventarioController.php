<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

use App\Models\InventariosTuul;
use App\Models\Datos_Encargado;
use App\Models\BlancoTuul;




class pdfInventarioController extends Controller
{
    public function inventarios(){

        // 
        $inventarios=InventariosTuul::all();
        $datos=Datos_Encargado::all();
        $blancos=BlancoTuul::all();

        

        $pdf=new Fpdf('P', 'mm', 'Letter');

        $pdf->AddPage();

        $pdf->setFont('Arial', 'B', 12);
        $pdf->Ln(2);
        $pdf->Cell(175, 6, 'Inventarios', 1, 0, 'C');

        $pdf->Ln(10);
        //CUERPO DE LA TABLA
        $pdf->cell(35,8, 'Elaborado por:', 1, 0 );
        $pdf->Cell(35,8,'Folio:',1,0);
        $pdf->Cell(48,8, 'Fecha de Elaboracion:', 1, 1);

        

        foreach ($datos as $dato) {
            $pdf->Cell(35,8,$dato->elaborado, 1, 0);
            $pdf->Cell(35,8,$dato->folio, 1, 0);
            $pdf->Cell(48,8,$dato->fecha_elaboracion, 1, 1);
        }

        $pdf->Ln(4);
        $pdf->setFont('Arial', 'B', 6);

        $pdf->cell(15,8, 'id_blanco:', 1, 0 );
        $pdf->Cell(35,8,'Descripcion:',1,0);
        $pdf->Cell(20,8, 'Marca:', 1, 0);
        $pdf->cell(20,8, 'Unidad:', 1, 0 );
        $pdf->Cell(20,8,'Stock:',1,0);
        $pdf->Cell(20,8, 'Piso:', 1, 0);
        $pdf->cell(25,8, 'Surtido:', 1, 0 );
        $pdf->Cell(20,8,'Total:',1,0);
        $pdf->Cell(30,8, 'Observaciones:', 1, 1);

        foreach ($blancos as $blanco) {
            $pdf->cell(15,8, $blanco->id_blancos3, 1, 0 );
            $pdf->Cell(35,8, $blanco->descripcion,1,0);
            $pdf->Cell(20,8, $blanco->marca, 1, 0);
            $pdf->cell(20,8, $blanco->unidad, 1, 0 );
            $pdf->Cell(20,8, $blanco->stock,1,0);
            $pdf->Cell(20,8, $blanco->piso, 1, 0);
            $pdf->cell(25,8, $blanco->surtido, 1, 0 );
            $pdf->Cell(20,8, $blanco->total,1,0);
            $pdf->Cell(30,8, $blanco->observaciones, 1, 1);
            
        }

       
        

        $pdf->Output();
        Exit;
    }
}
