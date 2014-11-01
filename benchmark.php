<?php

function BenchmarkTimer ($EventMessage = '', $ResetEventTimer = false)
{
    static $StartTime = false;
    static $EventTime = 0;

    // aktuelle Zeit ermitteln
    list($low, $high) = split(' ', microtime());
    $t = $high + $low;

    // bei erstem Aufruf initialisieren
    if ($StartTime == false){
        $StartTime = $t;
        $EventTime = $t;
        }

    // ggf. EventTimer zurŸcksetzen
    if ($ResetEventTimer) {
        $EventTime = $t;
    }

    // verstrichene Zeit seit erstem Aufruf
    $TotalTimeElapsed = $t - $StartTime;


    // verstrichene Zeit seit letztem Aufruf
    $EventTimeElapsed = $t - $EventTime;

    $EventTime = $t;

    $msg = sprintf (
            '<br>%s (%8.4f) (%8.4f)<br>'
            ,$EventMessage
            ,$TotalTimeElapsed
            ,$EventTimeElapsed
            );
    return $msg;
}


$iterations = 400;

$nbr2loop = $iterations;
$dummy = 1;
//print BenchmarkTimer('start A');

while ($nbr2loop-- > 0){
    $dummy += pow($dummy,2);
}
//print BenchmarkTimer('stopA');

$nbr2loop = $iterations;
$dummy = 1;
//print BenchmarkTimer('start B', true);

while ($nbr2loop-- > 0){
    $dummy = $dummy*2;
}
//print BenchmarkTimer('stopB');
print BenchmarkTimer('startBase');
echo array_shift(explode(".",  basename( __FILE__)));
print BenchmarkTimer('stopBase');

//print BenchmarkTimer('startBase2');
//echo explode('.', basename($f), 2)[0];
//print BenchmarkTimer('stopBase2');

?>