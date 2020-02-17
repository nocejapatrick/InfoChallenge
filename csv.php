<?php 

// 
// 
require 'vendor/autoload.php';
use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\Writer;



$writer = Writer::createFromFileObject(new SplTempFileObject());



$csv = Reader::createFromPath($_FILES["file"]["tmp_name"], 'r');
$csv->setHeaderOffset(0); //set the CSV header offset


//get 25 records starting from the 11th row
$stmt = (new Statement());

 $records = $stmt->process($csv);


 $arraybefore = ['USER ID'=>' USER ID','FIRST NAME'=>'FIRST NAME','LAST NAME'=>'LAST NAME','CONTENT TITLE'=>'CONTENT TITLE'];




if(isset($_POST["AddColumns"])){
 $columns = $_POST["AddColumns"];
}

if(!empty($_POST["UserID"])){
    $userId = $_POST["UserID"];

    $tempArray = $records;
    $records = [];
    foreach ($tempArray as $record) 
    {
        if(strtolower($record['USER ID']) == strtolower($userId)){
            array_push($records,$record);
        }
    }
}

if($_POST["Status"]!="SELECTSTATUS"){
    $stats = $_POST["Status"];

    $tempArray = $records;
    $records = [];
    foreach ($tempArray as $record) 
    {
        if(strtolower($record['STATUS']) == strtolower($stats)){
            array_push($records,$record);
        }
    }
}


if(isset($_POST["AddColumns"])){
    foreach($columns as $column){
       $arraybefore[$column] = $column;
    }
}
$array = [$arraybefore];

foreach ($records as $record) {
    $filteredRecord['USER ID'] = $record['USER ID'];
    $filteredRecord['FIRST NAME'] = $record['FIRST NAME'];
    $filteredRecord['LAST NAME'] = $record['LAST NAME'];
    $filteredRecord['CONTENT TITLE'] = $record['CONTENT TITLE'];

    
    if(isset($_POST["AddColumns"])){
        foreach($_POST["AddColumns"] as $column){
            $filteredRecord[$column] = $record[$column];
        }   
    }

    array_push($array,$filteredRecord);
   
}

usort($array, function ($item1, $item2) {
    return $item1['USER ID'] <=> $item2['USER ID'];
});

$final = [];

foreach ($array as $record) {

    if(array_search($record['USER ID'], array_column($final, 'USER ID'))){
        $record['USER ID'] = '';
        $record['FIRST NAME'] = '';
        $record['LAST NAME'] = '';
    }
    array_push($final,$record);
}

   $writer->insertAll($final);
    $writer->output("name-for-your-file.csv");



?>