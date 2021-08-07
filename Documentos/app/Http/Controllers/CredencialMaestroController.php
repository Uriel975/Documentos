<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class CredencialMaestroController extends Controller
{
    //
    public function Maestro(){
        $templateWord = new TemplateProcessor('Logo/PlantillaMaestro.docx');


        ////====== ASIGANMOS LOS VALORES ======////
        $escuela = 'ESC.SEC. PART. INC';
        $fray = 'FRAY DIEGO DE LANDA';
        $ctt = 'CTT. 31PES0079A';
        $docente = 'LOREMI BEATRIZ MENDEZ EK';
        $centro ='      Docente';
        $prof = 'PROFR.JUAN JOSE MARTINEZ LEYVA
        DIRECTOR DE LAESCUELA';
        $calle = 'CALLE 23 No.206D ENTRE 30 Y 32';
        $hunuc = 'HUNUCMA, YUC.';
        $Tel = 'TEL. 93 1 07 37';



        //===== Asignar los Valores ====////
        $templateWord->setValue('escuela',$escuela);
        $templateWord->setValue('fray',$fray);
        $templateWord->setValue('ctt',$ctt);
        $templateWord->setValue('docente',$docente);
        $templateWord->setValue('centro',$centro);
        $templateWord->setValue('prof',$prof);
        $templateWord->setValue('calle',$calle);
        $templateWord->setValue('hunuc',$hunuc);
        $templateWord->setValue('Tel',$Tel);



        ////============= Guardar Archivo ============////
        $templateWord->saveAs('Credencial_Maestro.docx');

        header("Content-Disposition: attachment;filename=Credencial_Maestro.docx; charset=iso-8859-1");
        echo file_get_contents('Credencial_Maestro.docx');

    }
}
