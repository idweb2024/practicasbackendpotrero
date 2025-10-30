<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Practica1 php</h1>
    <?php
    //  Ejercicio 1:
    // Imprime un string
    echo "Ejercicio 1:\n";
    echo "Hola Mundo". "<br>";
    echo " " . "<br>";
    
    // Ejercicio 2:
    // Imprime un string guardado en una variable
    echo "Ejercicio 2:\n";
    $saludo = "Hola Mundo";
    echo $saludo . "<br>";
    echo " " . "<br>";
    
    // Ejercicio 3:
    /* Crear 2 variables con números enteros e
    imprimir por pantalla los resultados de las operaciones
    matemáticas.
    */
    // Variables
    $numero1 = 5;
    $numero2 = 2;

    echo "Ejercicio 3:" . "<br>";
    echo "Operaciones:" . "<br>";
    echo "---------------" . "<br>";
    
    // Operaciones:
    echo "Suma:\n";
    echo $numero1 + $numero2 . "<br>";
    echo "Resta:\n";
    echo $numero1 -  $numero2 . "<br>";
    echo "Multiplicación:\n";
    echo $numero1 * $numero2 . "<br>";
    echo "Division:\n";
    echo $numero1 / $numero2 . "<br>";
    echo "Resto:\n";
    echo $numero1 % $numero2 . "<br>";             
    
    echo "---------------" . "<br>";
    echo "<br>";

    // Ejercicio 4:
    /*
    Realizar la transformación de grados Celsius a Fahrenheit, 
    para el valor 20°C y luego lo imprima por pantalla.
    */

    // Formula: (GradosCelcius * 1.8) + 32
    $gradosCelsius = 20;
    $conversionAFahrenheit = ($gradosCelsius * 1.8) + 32;
    echo "Ejercicio 4:\n" . "<br>";
    echo "Formula: (GradosCelcius * 1.8) + 32" . "<br>";
    echo "Grados Celsius: 20 °C" . "<br>";
    echo "Grados Fahrenheit: \n"; 
    echo "$conversionAFahrenheit °F" . "<br>";
    
    echo "<br>";
    
    // Ejercicio 5:
    /*
    a) Calcular el perímetro y
    el área de un rectángulo, dado que su base es 18cm 
    y su altura 12cm. 
    
    b) Calcular el perímetro y 
    el área de un círculo dado que su 
    radio es de 30cm.
    */
    echo "Ejercicio 5:\n" . "<br>";
    
    // Formulas:
    // Perimetro Rectangulo: P = (2 * base) + (2 * altura)
    // Área: base × altura
    echo "a) Perimetro y área de Rectangulo:" . "<br>";
    echo "Base: 18cm | Altura: 12cm " . "<br>";
    $baseRectangulo = 18;
    $alturaRectangulo = 12;

    $perimetroRectangulo = (2 * $baseRectangulo) + (2 * $alturaRectangulo);
    $areaRectangulo = $baseRectangulo * $alturaRectangulo;

    echo "Perimetro: $perimetroRectangulo cm" . "<br>";
    echo "Área: $areaRectangulo cm" . "<br>";

    echo "<br>";
    


    // Formulas:
    // Perimetro Circulo: (Radio * 2) * pi
    // Area: pi * r al cuadrado
    echo "b) Perimetro y área de Círculo:" . "<br>";
    echo "Radio: 30cm " . "<br>";
    $radioCirculo = 30;
    $valorDePi = 3.14;

    $perimetroCirculo = ($radioCirculo * 2) * $valorDePi;
    $areaCirculo = $valorDePi * ($radioCirculo ** 2);

    echo "Perimetro: $perimetroCirculo cm" . "<br>";
    echo "Área: $areaCirculo cm" . "<br>";

    echo "<br>";
    ?>
</body>
</html>