<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
            <a href="index.html"><span class="enlaces_izq">Inicio</span></a>
            <a href="firmar.html"><span class="enlaces_izq">Firmar</span></a>
            <a href="https://fundacionloyola.com/vguadalupe/"></a><img id="img_nav" src="img/logotipo.png"></a>
        </nav>
        <header>
            Formulario
        </header>
        <main>
            <article>
                <?php
                    echo $_POST["nombre"];
                    echo "<br>";
                    echo $_POST["apellido1"];
                    echo "<br>";
                    echo $_POST["apellido2"];
                    echo "<br>";
                    echo $_POST["sexo"];
                    echo "<br>";
                    if (isset($_POST["firmas"])) {
                        foreach ($_POST["firmas"] as $elemento) {
                            echo $elemento . "<br>";
                        }
                    }
                    if (isset($_POST["terminos"])) {
                        echo $_POST["terminos"];
                    }
                ?>
            </article>
        </main>
        <footer>
        <div id="arbol">
            <table>
                <tr id="table_container">
                    <td class="border_right"><a href="index.html">Inicio</a></td>
                    <td><a href="firmar.html">Información</a></td>
                </tr>
            </table>
        </div>
        <div id="copy">
            Página realizada por Rubén Sancho Jiménez en la ESC. Virgen de guadalupe.<br>
            <br>
            © Rubén_DAW 2023
        </div>
    </footer>
    </body>
</html>