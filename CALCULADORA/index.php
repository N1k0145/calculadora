<?php
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;
    $calcular = 'som';
    if(isset($_GET['num1'], $_GET['num2'], $_GET['calcular'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $calcular = $_GET['calcular'];
 
        switch($calcular){
            case 'som':
                $resultado = $num1 + $num2;
                break;
            case 'sub':
                $resultado = $num1 - $num2;
                break;
            case 'mul':
                $resultado = $num1 * $num2;
                break;
            case 'div':
                $resultado = $num1 / $num2;
                break;
        }
    }
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
</head>
<body>
    <form>
        Primeiro Número <br>
        <input type="number" name="num1"><br>
        Segundo Número <br>
        <input type="number" name="num2"><br><br>
        <select name="calcular">
            <option value="som">Somar</option>
            <option value="sub">Subtrair</option>
            <option value="mul">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        <input type="submit" value="calcular">
        <br><br>
        <p>O resultado é <?= $resultado ?></p>
    </form>
</body>
</html>