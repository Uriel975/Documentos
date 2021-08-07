<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class InscripcionController extends Controller
{
    public function inscripcion(){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

$paragraphStyleName = 'pStyle';
$phpWord->addParagraphStyle($paragraphStyleName, array('name' => 'TeamViewer15','size' => 1,'color' => '#00008B','bold' => true, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER,));
$section = $phpWord->addSection();

$header = $section->createHeader();
//Absolute positioning
$header->addText(
    '                              SECRETERIA DE EDUCACION PÚBLICA ',
    array(
        'size' => 10,
        'color' => '#000000',
        'bold' => true,
        'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER,)
);
$header->addText(
    '                    ES.SEC.PART.INC,   "FRAY DIEGO DE LANDA"  No.64',
    array(
        'name' => 'Activa-BoldItal',
        'size' => 11,
        'color' => '#000000',
        'bold' => true,)
);
$header->addText(
    '                                                       Clave:  31PES0079A',
    array('name' => 'TeamViewer15', 'size' => 9,'color' => '#000000')
);

$header->addText(
    '                          ACUERDO 208 DE FECHA 29 DE JULIO DE 1994 ',
    array('name' => 'TeamViewer15', 'size' => 10, 'color' => '#000000','bold' => true)
);
$header->addText(
    '                C 23 No.206-D x 30 y 32  TEL. (93) 1 07 37  HUNUCMÁ,YUCATÁN',
    array('name' => 'TeamViewer15', 'size' => 10,'color' => '#000000')
);
$header->addText(
    '                                        e-mail: fray_diego64@hotmail.com',
    array('name' => 'TeamViewer15', 'size' => 10,'color' => '#000000')
);

$header->addImage(
    'Logo/LogoFray.png',
    array(
        'width'            => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.5),
        'height'           => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.9),
        'positioning'      => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
        'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_RIGHT,
        'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_MARGIN,
        'posVerticalRel'   => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
        'marginLeft'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(15.5),
        'marginTop'        => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.55),
    )
);


$fancyTableStyleName = 'Prueba Con Tablas';
$fancyTableStyle = array('borderSize' => 1, 'borderColor' => 'a9acb4', 'cellMargin' => 0,);
$fancyTableFirstRowStyle = array('borderBottomSize' => 6, 'borderBottomColor' => '000000',);
$fancyTableCellStyle = array('valign' => 'center');
$fancyTableFontStyle = array('bold' => true);
$phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);
$table = $section->addTable($fancyTableStyleName);
$table->addRow(1000);
$table->addCell(1000, $fancyTableCellStyle)->addText('FOTO', $fancyTableFontStyle);


$section->addText('                                  SOLICITUD DE INSCRIPCION',
array('name'=>'TeamViewer15', 'size'=>13,'bold'=>true));

$section->addText('                                   20_________  -  20________',
array('name'=>'TeamViewer15', 'size'=>13,'bold'=>true));



$section->addText('                                                                                                             FECHA:____________',
array('bold'=>true));
$section->addText('                                                                                                       INSCRIPCION A:___________');
$section->addText('                                                                                                       FECHA DE BAJA____________',
array('bold'=>true));

$section->addText('NOMBRE DEL ALUMNO:___________________________________________________                                      ');
$textrun = $section->addTextRun();
$textrun->addText('                                                                     APELLIDO  PATERNO             MATERNO                  NOMBRE (S)', array('superScript' => true));



$section->addText('FECHA                                                                                                                                                                 NACIMIENTO______________
EDAD: ________  SEXO: _______   CURP: ________________________',
array('size'=>9));

$section->addText('PRIMARIA__________________  CCT_________________________ T_________                         FOLIO CERTIFICADO_______________________       PROMEDIO: _______________');
$section->addText('ESCUELA                                                                                                                                                                 PROCEDENCIA______________
CCT: ________  T _______ 1°_______  2°: ______________',
array('size'=>9));
$section->addText('DOMICILIO________________________________________________    E-MAIL: ________________',array('size'=>9));
$textrun = $section->addTextRun();
$textrun->addText('                                   CALLE   No.  CRUZAMIENTOS      COLONIA         LOCALIDAD',
array('superScript' => true));

$section->addText('CELULAR__________________  LAPTOP____ TABLET____      COMP________       TV: _____
HERMANOS____________  EDAD:________________');


$fancyTableStyleName2 = 'Prueba Con Tablas';
$fancyTableStyle2 = array('borderSize' => 1, 'borderColor' => 'a9acb4', 'cellMargin' => 0,);
$fancyTableFirstRowStyle2 = array('borderBottomSize' => 6, 'borderBottomColor' => '000000',);
$fancyTableCellStyle2 = array('valign' => 'both');
$fancyTableFontStyle2 = array('name'=>'Tahoma','size'=>8);
$phpWord->addTableStyle($fancyTableStyleName2, $fancyTableStyle2, $fancyTableFirstRowStyle2);
$table = $section->addTable($fancyTableStyleName2);
$table->addRow(2200);
$table->addCell(4900, $fancyTableCellStyle2)->addText('

____   COPIA  DE  ACTA  DE  NACIMIENTO
                          ____   COPIA   CURP
                                                                  ____   4  FOTOS   T/INFANTIL
                                                ____   CONSTANCIA DE ESTUDIO O INSCRIPCION
                           ____  COMPROBANTE  DE  DOMICILIO
                                                ____   COPIA  CURP DEL TUTOR
                                                ____  COPIA   DE  CERTIFICADO  DE  PRIMARIA
                                             ____ORIGINAL  Y  COPIA  DE  LA  BOLETA  DE  CALIF. 6°  PRIM
            _____ CONSTANCIA DE BUENA CONDUCTA

', $fancyTableFontStyle2);
$table->addCell(4700, $fancyTableCellStyle2)->addText('

____ORIGINAL  Y  COPIA  DE  LA  BOLETA  DE  CALIF. 1°  2°  SEC.
                          ____   CONSTANCIA   DE  TRASLADO
                                                ____CONSTANCIA  E E R  (EXAM .EXTRAORDINARIO REGULARIZACION)
                                                        ____   CONSTANCIA  DISCAPACIDAD (en su caso)
                           ____  CONSTANCIA MEDICA ALERGIAS O PADECIMIENTO
            _____ OTROS

', $fancyTableFontStyle2);

$section-> addTextBreak ( 5 );

/////////        TABLA TRANSPARENTE          //////////////////

$fancyTableStyleName3 = 'Prueba Tablas';
$fancyTableStyle3 = array('borderColor' => 'a9acb4', 'cellMargin' => 0,);
$fancyTableFirstRowStyle3 = array('borderBottomSize' => 6, 'borderBottomColor' => '000000',);
$fancyTableCellStyle3 = array('valign' => 'both');
$fancyTableFontStyle3 = array('name'=>'Tahoma','size'=>11);
$phpWord->addTableStyle($fancyTableStyleName3, $fancyTableStyle3, $fancyTableFirstRowStyle3);
$table = $section->addTable($fancyTableStyleName3);
$table->addRow(2500);

$table->addCell(5000, $fancyTableCellStyle3)->addText('

NOMBRE TUTOR__________________

OCUPACION__________________
                                                GRADO ESTUDIO__________________

TELEFONO__________________

CURP.TUTOR__________________

DOMICILIO__________________

', $fancyTableFontStyle3);



$table->addCell(7000, $fancyTableCellStyle3)->addText('

Acepto y me comprometo a cumplir con las siguientes responsabilidades:
                                                     1.- A pagar la Colegiatura en los primeros 10
     días hábiles de cada mes.
                                 *De no cumplir con este punto se pagará un recargo.
                                                   *Adeudar 2 Colegiaturas, obliga a la
              suspensión del servicio educativo
                               *En su caso, el pago de inscripción, no es de carácter devolutivo
                                              2.- A traer completos los documentos requeridos
      para la inscripción.


', $fancyTableFontStyle3);

//////////    CUADRITO PEQUEÑO        //////////////////
$section->addText('EMAIL');
$fancyTableStyleName4 = 'Prueba Con Tablas';
$fancyTableStyle4 = array('borderSize' => 1, 'borderColor' => 'a9acb4', 'cellMargin' => 0,);
$fancyTableFirstRowStyle4 = array('borderBottomSize' => 6, 'borderBottomColor' => '000000',);
$fancyTableCellStyle4 = array('valign' => 'both');
$fancyTableFontStyle4 = array('name'=>'Tahoma','size'=>8);
$phpWord->addTableStyle($fancyTableStyleName4, $fancyTableStyle4, $fancyTableFirstRowStyle4);
$table = $section->addTable($fancyTableStyleName4);
$table->addRow(200);

$table->addCell(4400, $fancyTableCellStyle4)->addText('
PLAYERA POLO:                         (#     )

', $fancyTableFontStyle4);




$section->addText('                                                                                             FIRMA
',
array('size'=>9));
$section->addText('                                                                                    DE CONFORMIDAD__________________
');




// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('Generación del documento de inscripción.docx');

// Saving the document as ODF file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
$objWriter->save('Generación del documento de inscripción.odt');

// Saving the document as HTML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');

return response()->download('Generación del documento de inscripción.docx');

    }

}
