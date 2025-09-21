<style>
    /* Estilos para el pie de página */
    footer {
        background-image: ; /* Puedes agregar una imagen de fondo si lo deseas */
        color: #000000;
        padding: 20px 0;
        text-align: center;
        font-family: Arial, sans-serif;
        border: 2px solid #000000;
        border-radius: 10%;
    }
</style>
<?php
// Array multidimensional con nombres en español
$es = [
    'dias' => [
        ['nombre' => 'domingo'],
        ['nombre' => 'lunes'],
        ['nombre' => 'martes'],
        ['nombre' => 'miércoles'],
        ['nombre' => 'jueves'],
        ['nombre' => 'viernes'],
        ['nombre' => 'sábado']
    ],
    'meses' => [
        1 => ['nombre' => 'enero'],
        2 => ['nombre' => 'febrero'],
        3 => ['nombre' => 'marzo'],
        4 => ['nombre' => 'abril'],
        5 => ['nombre' => 'mayo'],
        6 => ['nombre' => 'junio'],
        7 => ['nombre' => 'julio'],
        8 => ['nombre' => 'agosto'],
        9 => ['nombre' => 'septiembre'],
        10 => ['nombre' => 'octubre'],
        11 => ['nombre' => 'noviembre'],
        12 => ['nombre' => 'diciembre']
    ]
];

// Obtener el nombre del día y mes en español usando el array multidimensional
$diaSemana = $es['dias'][date('w')]['nombre'];
$mes = $es['meses'][date('n')]['nombre'];

// Obtener el día y el año
$dia = date('d');
$anio = date('Y');

// Mostrar la fecha y tu nombre en formato español
echo "$diaSemana, $dia de $mes de $anio<br>";
echo "Pablo Solis Valdelvira";
?>
