<!DOCTYPE html>
<html>
<head>
    <meta charset="uft8" />
    <title>Title</title>
</head>
<body>
<?php

 $UAN = $_GET['calc_amount'];
 
 $courses = array(
 'usd'=>25.08,
 'rub'=>0.41,
 'byn'=>1.119,
 'grn'=>1,
 'eur'=>27.66,
 );

?>
<div class="calc_body">
    <span>РљР°Р»СЊРєСѓР»СЏС‚РѕСЂ СЃС‚РѕРёРјРѕСЃС‚Рё</span>
    <form name="calc_form" action="" id="calc_formid">
        <label for="calc_amount">CСѓРјРјР° РІ $:</label>
        <input name="calc_amount" value="1" size="4" />
        <div class="calc_clear"></div>
        <label for="calc_rates">Р’Р°Р»СЋС‚Р°:</label>
        <select name="calc_rates" id="ratesoption">

    <?php 
    foreach($courses as $key=>$cours){
        echo '<option value="'.$key.'">'.strtoupper ($key).'</option>';
    }
    ?>
    
        </select>
        <div class="calc_clear"></div>
        <input type="submit" value="Р Р°СЃС‡РµС‚" name="calc_do" class="calc_button" />
    </form>
    <label>Р РµР·СѓР»СЊС‚Р°С‚: </label><input name="result" id="calc_result" value="" disabled="disabled" size="4" />
    <div class="calc_clear"></div>
    <div id="calc_error"></div>
</div>

<?php 

var_dump($_GET);

echo ($courses[$_GET['calc_rates']]*$UAN);  ?>
<table border="2">
<?php 


    foreach($courses as $key=>$cours){
        echo '<tr><td>'.strtoupper ($key).'</td><td>'.$cours*$UAN.'</td></tr>';
    }
    ?>


</table>
</body>
</html>