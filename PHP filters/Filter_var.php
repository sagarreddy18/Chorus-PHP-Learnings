<?php
$int=12342333;
if(!filter_var($int,FILTER_VALIDATE_INT))    // Validate Integer or not!
{
echo "Integer is not valid";
} else {
echo "Integer is valid";
}

// $var = '3333hhh4h444hk558ndjd090';
// var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));   // Santize numbers





// https://www.youtube.com/watch?v=pfY9LwcsH3A
// ------------------------------------------
$var=100;
$int_options=array(
"options"=>array
(
"min_range"=>0,
"max_range"=>256
)
);
if(!filter_var($var,FILTER_VALIDATE_INT,$int_options)){
echo "Integer is not valid";
} else {
echo "Integer is valid";
}