<html>
    <head>
        <title><h1>Conversion:</h1></title>
    </head>
    <body>
        <?php
        function convertir()
        {
            $pesos = $_POST['pesos'];
            $tipo = $_POST['tipo'];
            if($tipo ==  'trump'){
                $valor  = 0.051;
            } else {
                $valor = 0.046;
            }
            $result = $pesos * $valor;
            return $result;
        }
        ?>
        <?php
        echo 'El total es de: ';
        echo convertir();
        ?>
    </body>
</html>