<?php
require_once 'calculator.php';
$obj=new Calculator();
?>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <form action="calculator_view.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>First Number</td>
                <td>
                    <input type="text" name="first_number" value="<?php 
                                                                   if(isset($_POST['first_number']))                                                         
                                                                    echo $_POST['first_number'];?>"> 
                </td>
            </tr>
            
            <tr>
                <td>Second Number</td>
                <td>
                    <input type="text" name="second_number" value="<?php if(isset($_POST['second_number']))                                                         
                                                                    echo $_POST['second_number'];?>"> 
                </td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" name="btn" value="+"> 
                    <input type="submit" name="btn" value="-"> 
                    <input type="submit" name="btn" value="*"> 
                    <input type="submit" name="btn" value="/"> 
                    <input type="submit" name="btn" value="%"> 
                </td>
            </tr>
            <?php
                //echo '<pre>';
                //print_r($_POST);
                $result=array('','');
                
                if(isset($_POST['btn']))
                {
                    if($_POST['btn']=='+')
                    {
                        $result=$obj->add($_POST['first_number'],$_POST['second_number']);
                    }
                    if($_POST['btn']=='-')
                    {
                        $result=$obj->sub($_POST['first_number'],$_POST['second_number']);
                    }
                    if($_POST['btn']=='*')
                    {
                        $result=$obj->mul($_POST['first_number'],$_POST['second_number']);
                    }
                    if($_POST['btn']=='/')
                    {
                        
                        $result=$obj->div($_POST['first_number'],$_POST['second_number']);;
                        
                    }
                    if($_POST['btn']=='%')
                    {
                        
                        $result=$obj->rim($_POST['first_number'],$_POST['second_number']);
                        
                    }
                }
            ?>
            <tr>
                <td><?php echo $result[0];?></td>
                <td>
                    <input type="text" value="<?php echo $result[1];?>" > 
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>