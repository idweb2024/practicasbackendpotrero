<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico N°4 - PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Trabajo Práctico N°4</h1>
        <p>MATRICES</p>
        <p class="autor">Alumno: Inti Fernández</p>
    </header>

    <main>
        <section class="ejercicio">
            <h2>Ejercicio 1</h2> 
            <p>Almacenar en un array los 10 primeros 
                números pares y mostrar en pantalla uno debajo del otro.
            </p>
            <p>$paresHastaEl20 = [2,4,6,8,10,12,14,16,18,20];</p>

            <div class="codigo"><?php   // Ejercicio 1
            $paresHastaEl20 = [2,4,6,8,10,12,14,16,18,20]; // Array indexado
            // Mostrando por pantalla
            foreach ($paresHastaEl20 as $numero) {
            print "$numero \n";
                }
                ?>
            </div>

        </section>

        <section class="ejercicio">
            <h2>Ejercicio 2</h2>
            <p>Crear un array e introducir los siguientes 
            valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
            matriz. Mostrar el esquema del array con print_r().</p>
            <p>$arrayDeValores = ["Pedro", "Ana", 34, 1];</p>
            
            <div class="codigo"><?php  // Ejercicio2 (Array de valores sin asignar índice)
            $arrayDeValores = ["Pedro", "Ana", 34, 1];
            print "\n";
            print_r($arrayDeValores);
                ?>
            </div>

        </section>

        <section class="ejercicio">
            <h2>Ejercicio 3</h2>
            <p>Crear un array asociativo e introducir los siguientes valores: </p>
            <ul>
                <li><strong>Nombre:</strong> Pedro</li>
                 <li><strong>Apellido:</strong> Torres</li>
                 <li><strong>Dirección:</strong> Av. Mayor 3703</li>
                 <li><strong>Teléfono:</strong> 1122334455</li>
                 </ul>

            <div class="codigo-sin-scroll">
            <!--Ejercicio 3
            Observación:    
                    1. Etiqueta <pre> "Le dice al navegador que no toque los espacios, 
                                        saltos de línea o tabulaciones dentro de ella."
                    2. Etiqueta <code> "Sirve para indicar que el texto dentro es código fuente."
                    3. Como no se trabajó con este array decidí simplemente mostrar
                        el codigo por pantalla.
            -->
            <pre><code>
            $arrayAsociativo = [
             'Nombre' => "Pedro",
             'Apellido' => "Torres",
             'Dirección' => "Av. Mayor 3703", 
             'Teléfono' => 1122334455 
             ];
            </code></pre>
            </div>

        </section>

        <section class="ejercicio">
            <h2>Ejercicio 4</h2>
            <p>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, 
                New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, 
                muestra el contenido del array. <strong> Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</strong></p>
            
            <p>$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];</p>
            
            <div class="codigo"><?php // Ejercicio 4
                $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
                print "\n";
                print "La ciudad con el Índice 0 tiene el nombre: $ciudades[0].";
                ?>
            </div>

        </section>

        <section class="ejercicio">
            <h2>Ejercicio 5</h2>
            <p>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
            LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.  
            <strong>Ejemplo: El índice de Madrid es MD.</strong></p>

            <div class="codigo"><?php // Ejercicio 5

            $ciudadesConIndice = [
                        'MD' =>  "Madrid", 
                        'BLC' => "Barcelona", 
                        'LD'=>  "Londres", 
                        'NY' =>  "New York", 
                        'LA' =>   "Los Ángeles", 
                        'CGC' =>  "Chicago"
                    ];

        print "\n";
        /* Observación: 
        1.
        Encontre una función llamada "array_search()" que
        su proposito es devolver el índice que corresponde al valor que le pases por
        parametro. EJ: array_search(valorDelIndiceQueQueresSaber, nombreDeLArray)
        
        2. El valor de que devolvió la función lo guarde en la variable
        "$indiceDeCiudad" para luego poder llamarlo en el print e imprimirlo por
        patalla.
        
        */

        $indiceDeCiudad = array_search('Madrid', $ciudadesConIndice); 
        print "El índice de Madrid es: $indiceDeCiudad.";
         
        
        /* Acá volví a utilizar la etiqueta <pre> y llame y utilicé
        la función print_r para mostrar por pantalla directamente el array
        asociativo */
        print "<pre>";           
        print_r($ciudadesConIndice);
        print "</pre>";
                ?>
                </div>

        </section>

    </main>

    <footer>
        <p>Materia: Programación Back End | Año: 2025</p>
    </footer>

</body>
</html>




