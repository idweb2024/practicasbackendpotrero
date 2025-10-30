<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico N°3 - PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Trabajo Práctico N°3</h1>
        <p>ESTRUCTURAS DE CONTROL: PARTE 2</p>
        <p class="autor">Alumno: Inti Fernández</p>
    </header>

    <main>
        <section class="ejercicio">
            <h2>Ejercicio 1</h2> 
            <p>Mostrar los números del 1 al 100.</p>
            <div class="codigo"><?php   // Ejercicio 1
                    $i = 1;
                   while ($i <= 100) {
                    print "$i\n";
                    
                    $i++;
                   }
                ?>
            </div>
        </section>

        <section class="ejercicio">
            <h2>Ejercicio 2</h2>
            <p>Mostrar los números del 100 al 1.</p>
            <div class="codigo"><?php  // Ejercicio 2 (Probando sentencia "do")
                $i = 100;
                do {
                    print "$i\n";
                    $i--;
                } while ($i >= 1);
             
                ?>
            </div>
        </section>

        <section class="ejercicio">
            <h2>Ejercicio 3</h2>
            <p>Mostrar los números pares del 1 al 100.</p>
            <div class="codigo"><?php // Ejercicio 3
                $i = 2;
                while ($i <= 100) {
                    print "$i\n";
                    $i += 2; 
                }
                
                ?>
            </div>
        </section>

        <section class="ejercicio">
            <h2>Ejercicio 4</h2>
            <p>Mostrar los números impares del 1 al 100.</p>
            <div class="codigo"><?php // Ejercicio 4
                $i = 1; 
                while ($i <= 100) {
                    print "$i\n";
                    $i += 2; 
                }                  
                ?>
            </div>
        </section>

        <section class="ejercicio">
            <h2>Ejercicio 5</h2>
            <p>Mostrar la suma de los números de 1 a 20.</p>
            <div class="codigo"><?php // Ejercicio 5
                $suma = 0;
                for ($i = 1; $i <= 20; $i++) {
                    $suma += $i;
                }
                echo "La suma de los números del 1 al 20 es: $suma";
                ?>
            </div>
        </section>

        <section class="ejercicio">
            <h2>Ejercicio 6</h2>
            <p>Mostrar la suma de números pares de 1 a 20.</p>
            <div class="codigo"><?php // Ejercicio 6
                $sumaDePares = 0;
                for ($i = 2; $i <= 20; $i += 2) {
                    $sumaDePares += $i;
                }
                echo "La suma de los números pares del 1 al 20 es: $sumaDePares";                
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Materia: Programación Back End | Año: 2025</p>
    </footer>

</body>
</html>




