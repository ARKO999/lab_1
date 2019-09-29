!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function converter($sum, $from, $to)
{

    $currency = array(
            'UAH' = array(
'nominal' = 1,
Курс по отношению к рублю
'value' = 1
)

        'USD' = array(
'nominal' = 1,
Курс по отношению к рублю
'value' = 25.08
)
'EUR' = array(
'nominal' = 1,
'value' = 27,66,
),
'RUB' = array(
'nominal' =1,
'value' = 0,41
),
'BYN' = array(
'nominal' = 1,
'value' =1.119,
),
);

//Если валюты равны, то просто возвращаем сумму
if ($from == $to)
{
return $sum;
}

//Если не существует элемента массива с индексом $from или $to
if (!isset($currency[$from]) || !isset($currency[$to]))
{
return false;
}
//Считаем и возвращаем сконвертированную сумму
return ($sum * $currency[$from]['value'] / $currency[$to]['value'])
/ $currency[$from]['nominal'] * $currency[$to]['nominal'];
}
?>
<div class="calc_body">
    <span>Калькулятор стоимости</span>
    <form name="calc_form" action="" id="calc_formid">
        <label for="calc_amount">Cумма в $:</label>
        <input name="calc_amount" value="1" size="4" />
        <div class="calc_clear"></div>
        <label for="calc_rates">Валюта:</label>
        <select name="calc_rates" id="ratesoption">

            <option value="UAH">UAH</option>
            <option value="RUB">RUB</option>
            <option value="USD">USD</option>
            <option value="BYN">BYN</option>
            <option value="EUR">EUR</option>

        </select>
        <div class="calc_clear"></div>
        <input type="submit" value="Расчет" name="calc_do" class="calc_button" />
    </form>
    <label>Результат: </label><input name="result" id="calc_result" value="" disabled="disabled" size="4" />
    <div class="calc_clear"></div>
    <div id="calc_error"></div>
</div>

</body>
</html>