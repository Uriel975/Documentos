<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConstanciaServ;
use League\CommonMark\Converter;


class ConstanciaServController extends Controller
{
    public function Servicio(){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Nota: cualquier elemento que agregue a un documento debe residir dentro de una Section */
// Agregar una sección vacía al documento...
$paragraphStyleName = 'pStyle';
$phpWord->addParagraphStyle($paragraphStyleName, array('name' => 'TeamViewer15','size' => 10,'color' => '#00008B','bold' => true, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'spaceAfter' => 100));
$section = $phpWord->addSection();

$header = $section->createHeader();
//Absolute positioning
$header->addText(
    '            SECRETERIA DE EDUCACION PÚBLICA DEL ESTADO DE YUCATAN',
    array(

        'size' => 10,
        'color' => '#00008B',
        'bold' => true,
        'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER)
);
$header->addText(
    '                 DIRECCIÓN GENERAL DE EDUCACIÓN BASICA',
    array(

        'name' => 'Activa-BoldItal',
        'size' => 12,
        'color' => '#00008B',
        'bold' => true,)
);
$header->addText(
    '           ESCUELA SECUNDARIA PARTICULAR INCORPORADA ',
    array('name' => 'TeamViewer15', 'size' => 12, 'color' => '#00008B','bold' => true)
);
$header->addText(
    '                  “FRAY DIEGO DE LANDA” No. 64',
    array('name' => 'TeamViewer15', 'size' => 15,'bold' => true,'color' => '#4169E1')
);
$header->addText(
    '                                       Clave:  31PES0079A',
    array('name' => 'TeamViewer15', 'size' => 12,'bold' => true,'color' => '#4169E1')
);
$header->addText(
    '                                 ACUERDO 208 DE FECHA  29 DE JULIO DE 1994',
    array('name' => 'TeamViewer15', 'size' => 9, 'color' => '#00008B')
);
$header->addImage(
    'Logo/Esquina1.png',
    array(
        'width'            => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(5),
        'height'           => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(3),
        'positioning'      => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
        'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
        'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
        'posVerticalRel'   => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
        'marginLeft'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(15.5),
        'marginTop'        => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.55),
    )
);
$header->addImage(
    'Logo/LogoFray.png',
    array(
        'width'            => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(2.4),
        'height'           => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(3.1),
        'positioning'      => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
        'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_RIGHT,
        'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_MARGIN,
        'posVerticalRel'   => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
        'marginLeft'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(15.5),
        'marginTop'        => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.55),
    )
);


$section->addImage('Logo/MarcaAgua.png',

    array(
        'width'         => 340,
        'height'        => 480,
        'marginTop'     => 60,
        'marginLeft'    => 90,
        'wrappingStyle' => 'behind',
        'positioning' => 'absolute',

));

// Adding Text element with font customized using named font style...
// Agregar elemento de texto con fuente personalizada usando un estilo de fuente con nombre ...
$fontStyleName = 'oneUserDefinedStyle';
$phpWord->addFontStyle(
    $fontStyleName,
    array('name' => 'Tahoma', 'size' => 11,)
);
$section->addText(
    '                                                                                           MAYO  17   DE   2019',
    $fontStyleName
);

$textrun = $section->addTextRun();
$textrun->addText('                                                                                ASUNTO:',array('name' => 'Tahoma', 'size' => 10));
$textrun->addText('CONSTANCIA  DE  SERVICIO.*',
 array('name' => 'Tahoma', 'size' => 10,'marginLeft'=>190,'underline' => \PhpOffice\PhpWord\Style\Font::UNDERLINE_SINGLE,));

$sources = file_get_contents('Logo/MarcaAgua.png');





$section-> addTextBreak ( 2 );
$section->addText('AQUIEN CORRESPONDA:',
array('name' => 'Tahoma', 'size' => 11,)
);
//Saltos para las letras
$section-> addTextBreak ( 1 );
$section->addText('El suscrito, Profr. Juan José Martínez Leyva, Director de la Escuela Secundaria
Particular Incorporada, “FRAY DIEGO DE LANDA”, por medio de la presente hago
constar que la  PROFRA. ANGELES  MARGARITA  BALAM  KOYOC,  labora en esta
Institución impartiendo la asignatura de  Matemáticas II, desde  el  catorce de
septiembre de dos mil  diecisiete hasta  la presente fecha. Demostrando
responsabilidad  en  su  trabajo.',
array('name' => 'Latha', 'size' => 12,'spaceAfter'=>100)
);

$section-> addTextBreak ( 1 );

$section->addText('A solicitud de la parte interesada se expide la presente CONSTANCIA para los fines legales correspondientes.',
array('name'=>'Latha', 'size'=>12)
);

$section-> addTextBreak ( 2 );
$section->addText('                                                      A t e n t a m e n t e',
array('name'=>'Tahoma','size'=>11,'aline'=>'center')
);
$section->addText('                                                           El  Director',
array('name'=>'Tahoma','size'=>11,'aline'=>'center')
);


$footer = $section->addFooter();
$footer->addImage(
    'Logo/PgPie.png',
    array(
        'width'            => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(17),
        'height'           => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(2.1),
        'positioning'      => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
        'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
        'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,

    )
);
$section-> addTextBreak ( 4 );
$section->addText('                                       PROFR.  JUAN  JOSE  MARTINEZ  LEYVA',
array('name'=>'Tahoma','size'=>11,)
);


// Adding Text element with font customized using explicitly created font style object...
// Agregar elemento de texto con fuente personalizada utilizando un objeto de estilo de fuente creado explícitamente ...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();


// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('Constancia.Laboral.docx');

// Saving the document as ODF file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
$objWriter->save('Constancia.Laboral.odt');

// Saving the document as HTML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');

return response()->download('Constancia.Laboral.docx');

    }

}
