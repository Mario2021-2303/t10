<?php 

class plantilla {
    public static $instancia = null;

    public static function aplicar() {
        if (self::$instancia == null) {
            self::$instancia = new plantilla();
        }
    }

    function __construct() {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/diseño.css">
            <script src="lib/html2pdf.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <title>Tarea 10: Colorin</title>
        </head>

        <header>
      
        </header>
        <body class="">

            </body>
        </html>

        <?php
    }
}
