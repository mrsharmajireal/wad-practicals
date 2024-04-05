<?php
function primechk($nmber)
{
if
($number==1)
return 0;
for($i=2;$i<=$number;$i++)
{
if(number
%$i==0)
return 0;
}
return 1;
}
$number=31;
$flag=primecheck($number);if($flag==1)
echo"
prime
";else
echo"Not prime";
?>