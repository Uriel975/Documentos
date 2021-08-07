<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Element\Field;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;
use PhpOffice\PhpWord\TemplateProcessor;


class CredencialAluController extends Controller
{
    public function Credencial(){


        $templateWord = new TemplateProcessor('Logo/PlantillaCrede.docx');
//         $paragraphStyleName = 'pStyle';
// $phpWord->addParagraphStyle($paragraphStyleName, array('name' => 'TeamViewer15','size' => 1,'color' => '#00008B','bold' => true, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER,));
// $section = $phpWord->addSection();
// $boldFontStyleName = 'BoldText';

////// ======= Asignacion de los valores =======//////
$nombre = 'HILDA PAOLA OCHOA SÁNCHEZ';
$grado = '2° DE SECUNDARIA';
$curso = 'CURSO ESCOLAR 2018 - 2019';
$lugar = 'HUNUCMÁ, YUCATÁN';
$director = 'DIRECTOR
LIC.JUAN JOSE MARTINES LEYVA';
$calle = 'Calle 23 No.206-D x 30 y 32
Tel.(93) 1 07 37
Hunucmá, Yuc.
email: fray_diego64@hotmail.com';
$vigencia = 'Vigencia : Agosto 2019';



////  ============= Asignamos valores =========== /////
$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('grado',$grado);
$templateWord->setValue('curso',$curso);
$templateWord->setValue('lugar',$lugar);
$templateWord->setValue('director',$director);
$templateWord->setValue('calle',$calle);
$templateWord->setValue('vigencia',$vigencia);



 /////// Guardar documento ///

$templateWord->saveAs('Credencial_Alumno.docx');

header("Content-Disposition: attachment;filename=Credencial_Alumno.docx; charset=iso-8859-1");
echo file_get_contents('Credencial_Alumno.docx');



///// Maybe you could be the ligth, that opens up my eyes





// // Saving the document as OOXML file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
// $objWriter->save('Credencial Alumno.docx');

// // Saving the document as ODF file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
// $objWriter->save('Credencial Alumno.odt');

// // Saving the document as HTML file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');

// return response()->download('Credencial Alumno.docx');
//     }



  }
}
