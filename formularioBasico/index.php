<link rel="stylesheet" href="styles.css">

<?php
$nombre = filter_input(INPUT_POST, 'nombre');
$genero = filter_input(INPUT_POST,'hm');
$edad = filter_input(INPUT_POST, 'edad');

$outputEdad = match (true) {
    $edad < 10 => "Eres un Niño $nombre  ",
    $edad < 20 => "Eres un Adolecente $nombre",
    $edad < 60 => "Eres un Adulto $nombre",
    $edad > 60 => "Eres un Abuelo $nombre",
};
?>

<div class="formulario">
<form action="index.php" method="post">
    <p>Nombre:</p>
    <label for="nombre">
        <input class="input-text" type="text" name="nombre" size="40" >
    </label>
    <p>Genero:</p>
    <label for="typesex">
        <input type="radio" name="hm" value="Hombre"> Hombre
        <input type="radio" name="hm" value="Mujer"> Mujer
    </label>
    <p>Edad:</p>
    <label for="edad">
        <input class="input-text" type="number" name="edad">
    </label>
    <p><input class="input-text" type="submit" value="Enviar"></p>
</form>
</div>

<div class="resultados">
<?php if ( ! empty($nombre . $genero . $edad) ) {
    echo "Hola $nombre, tu genero es $genero, tu edad es $edad. <br> <br> $outputEdad ";
 }
?>

    
</div>