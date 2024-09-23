<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# inicializar nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

// indicar que queremos recibir resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la petición
y guardar el resultado
*/
$result = curl_exec($ch);

// una alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL); //si sólo quieres hacer un GET de una API


# Verificar si hubo un error en la solicitud cURL
if ($result === false) {
    $error = curl_error($ch);
    echo "Error en la solicitud cURL: $error";
} else {
    # Transformar y guardar en un array asociativo
    $data = json_decode($result, true);

    if ($data === null) {
        echo "Error al decodificar JSON: " . json_last_error_msg();
    }
}

# Cerrar sesión
curl_close($ch);
?>

<head>
    <meta charset="UTF-8"/>
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Centered viewport -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main>
    <h1>Página que te dice cuándo se estrenará la próxima película de Marvel</h1>
    <section>

        <img src="<?= $data["poster_url"]; ?> " alt="Poster de <?= $data["title"]; ?>" width="300" style="border-radius: 10px;">
    </section>

    <hgroup>
        <h3> <?= $data["title"]?> se estrenará en <?= $data["days_until"]?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>

</main>

<footer> <p>Esta es la primera página que he hecho en mi primer día aprendiendo
   <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-php"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M17 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M11 21v-6" /><path d="M14 15v6" /><path d="M11 18h3" /></svg></p>
    </footer>



<style>

    :root {
        color-scheme: light dark
    }

    body {
        display: grid;
        place-content: center
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;

    }

    hgroup {
        display: flex;
        flex-direction: column;
    justify-content: center;
    text-align: center}

    h1 {
        text-align: center;
        border-bottom: 1px solid #6c6a6a; /* Línea suave debajo del h1 */
    }

    img {
        margin: 0 auto;


    }

    footer {
        margin-top: 20px;
        font-size: 0.8rem;
        border-top: 1px solid #6c6a6a; /* Línea suave debajo del h1 */
    }
</style>