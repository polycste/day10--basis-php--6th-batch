<html>
    <head>
        <title>fibo</title>
    </head>   
    <body>
<?php

function fibonacci($n)
{
if($n == 0)
return 0;
elseif ($n == 1)
return 1;
else
return fibonacci($n - 1) + fibonacci($n - 2);
}

for($i = 0; $i < 15; $i++)
{
echo fibonacci($i) . "<br />";
}

?>
    </body>
</html>