<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificador da acesso</title>
</head>

<body>
    <?php
    class Tabla
    {
        private $matriz = array();
        private $cantFilas;
        private $cantColumnas;

        public function __construct($cantFilas, $cantColumnas)
        {
            $this->cantFilas = $cantFilas;
            $this->cantColumnas = $cantColumnas;
        }

        public function cargar($fila, $columna, $valor)
        {
            $this->matriz[$fila][$columna] = $valor;
        }

        private function inicioTabla()
        {
            echo "<table border='1'>";
        }

        private function inicioFila()
        {
            echo '<tr>';
        }

        private function mostrar($fila, $columna)
        {
            echo "<td style='padding:10px; border:1px;background-color:#005500;color:#fff;'>" . $this->matriz[$fila][$columna] . "</td>";
        }

        private function finFila()
        {
            echo '</tr>';
        }

        private function finTabla()
        {
            echo '</table>';
        }

        public function graficar()
        {
            $this->inicioTabla();
            for ($f = 1; $f <= $this->cantFilas; $f++) {
                $this->inicioFila();
                for ($c = 1; $c <= $this->cantColumnas; $c++) {
                    $this->mostrar($f, $c);
                }
                $this->finFila();
            }
            $this->finTabla();
        }
    }

    $tabla1 = new Tabla(2, 3);
    $tabla1->cargar(1, 1, "1");
    $tabla1->cargar(1, 2, "2");
    $tabla1->cargar(1, 3, "3");
    $tabla1->cargar(2, 1, "4");
    $tabla1->cargar(2, 2, "5");
    $tabla1->cargar(2, 3, "6");
    $tabla1->graficar();

    //tabla2
    echo "<hr>";
    $tabla2 = new Tabla(2, 4);
    $tabla2->cargar(1, 1, "20");
    $tabla2->cargar(1, 2, "10");
    $tabla2->cargar(1, 3, "40");
    $tabla2->cargar(1, 4, "70");

    $tabla2->cargar(2, 1, "10");
    $tabla2->cargar(2, 2, "50");
    $tabla2->cargar(2, 3, "320");
    $tabla2->cargar(2, 4, "10");

    $tabla2->graficar();



    ?>
</body>

</html>