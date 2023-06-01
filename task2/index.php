<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$header = [ 'Email',  'Full name', 'Age', 'Experience' ];
$data = [
    ['devsobirov@gmail.com', 'Otabek Sobirov', '30', '~5 years'],
    ['john@gmail.com', 'John Doe', '33', '~4 years'],
    ['ivan@gmail.com', 'Ivan Ivanov', '28', '~3 years'],
];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->fromArray($header, null, 'A1');
$sheet->fromArray($data, null, 'A2');

$baseDir = __DIR__. '/files';
$filename = time() .'_doc.xlsx';
if (!file_exists($baseDir)) {
    mkdir($baseDir);
}
$writer = new Xlsx($spreadsheet);
$writer->save($baseDir. '/'. $filename);

echo  "Download created file here: <a href='./files/$filename' download=''>$filename</a>";

highlight_file(__DIR__. DIRECTORY_SEPARATOR. 'index.php');