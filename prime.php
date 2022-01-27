<?php
$no=readline("enter a number :");
$n=0;
for($i=2;$i<$no;$i++)
{
    if($no%$i==0)
    {
        $n++;
        break;
    }
    
}
if($n==0)
{
    echo "this number is prime !!";
}else{
    echo "this is not prime number !";
}

?>