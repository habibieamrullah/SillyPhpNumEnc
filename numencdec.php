<?php
//Silly Number Encoder and Decoder
$numdef = array(
    "1-hsdfDN",
    "2-jNffFM",
    "3-IJfmsJ",
    "4-pofjBN",
    "5-juidfB",
    "6-lNNdls",
    "7-KghBGk",
    "8-dsNASw",
    "9-LJgsHb",
    "0-kljHLT",
);

function encnum($num, $numdef){
	$num = (string)$num;
    $result = "";
    for($i = 0; $i < strlen($num); $i++){
        for($x = 0; $x < count($numdef); $x++){
			if($num{$i} == explode("-", $numdef[$x])[0]){
                $result .= explode("-", $numdef[$x])[1] . "-";
            }
        }
    }
    return $result;
}

function decnum($encnum, $numdef){
	$encnum = (string)$encnum;
    $result = "";
    $todecode = explode("-", $encnum);
    for($i = 0; $i < count($todecode); $i++){
        for($x = 0; $x < count($numdef); $x++){
            if($todecode[$i] == explode("-", $numdef[$x])[1]){
                $result .= explode("-", $numdef[$x])[0];
            }
        }
    }
    return $result;
}

echo encnum(123, $numdef);
echo "<br>";
echo decnum("hsdfDN-jNffFM-IJfmsJ-", $numdef);
