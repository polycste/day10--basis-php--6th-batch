<?php
require_once 'function_def.php';
$obj=new Function_Def();
/*function add($x, $y) {
    $res = $x + $y;
    return $res;
}

echo add(300, 500);
echo "<br/>";
echo add(700, 300);
*/
?>
<html>
    <head>
        <title>Function Example</title>
    </head>
    <body>
        <form action="function_example.php" method="post">
            <input type="text" name="search_text">
            <input type="submit" name="sbtn" value="Search">
        </form>
<?php

if (isset($_POST['sbtn'])) {
    echo $obj->search($_POST['search_text']);
    echo "<br/>";
    echo $obj->generate_password();
}
?>
    </body>
</html>
