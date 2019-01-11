<?php
    if(is_numeric($_POST['num01']) && is_numeric($_POST['num02']) ){ 
    if(isset($_POST['submit'])){//to cheak submition of the page
        $result1 = $_POST['num01'];
        $result2 = $_POST['num02'];
            if(!empty($_POST['calculation'])){
                if($_POST['calculation']=='addition'){
                    echo "<h1 style='text-align:center'>The addition of the {$result1} and {$result2} is :" . ($result1 + $result2) ."</h1>";
                    header('Refresh: 5; URL=Q1.php');
                }
                elseif ($_POST['calculation']=='subtraction') {
                    echo "<h1 style='text-align:center'>The subtraction of the {$result1} and {$result2} is :" . ($result1 - $result2) ."</h1>";
                    header('Refresh: 5; URL=Q1.php');
                }
                elseif ($_POST['calculation']=='multifly') {
                    echo "<h1 style='text-align:center'>The multifly of the {$result1} and {$result2} is :" . ($result1 * $result2) ."</h1>";
                    header('Refresh: 5; URL=Q1.php');
                }
                elseif ($_POST['calculation']=='divide') {
                    echo "<h1 style='text-align:center'>The divide of the {$result1} and {$result2} is :" . ($result1 / $result2) ."</h1>";
                    header('Refresh: 5; URL=Q1.php');
                }
                
            }
        else{
            echo "<h1 style='color:red';>Please select correct operation !!!<h1>";
            header('Refresh: 5; URL=Q1.php'); 
            }               
    }
}else{
    echo "<h1 style='color:red';>Please enter the correct numeric value to the both text box<h1>";
            header('Refresh: 5; URL=Q1.php'); 
   } 
?>
