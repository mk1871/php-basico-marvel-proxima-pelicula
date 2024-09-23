<?php $name = 'Manuel';
$isDev = true;
$age = 36;
$isOld = $age > 40;
$output = "Hola, $name tengo la edad $age";
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
const NOMBRE = 'Manuel';
$outputAge = match (true) {
    $age < 2 => "Eres un bebé, $name 👶",
    $age < 10 => "Eres un niño, $name 👦",
    $age < 18 => "Eres un adolescente, $name 👧",
    $age === 18 => "Eres mayor de edad, $name 🍻",
    $age <= 40 => "Eres un adulto joven, $name 👨‍🦱",
    $age < 60 => "Eres viejo, $name 👨‍🦲",
    default => "Hueles más a madera que a fruta, $name 👴"
};
$bestLanguages = ["PHP", "Javascript", "Python"];
$bestLanguages[3] = "Java";
$bestLanguages[] = "TypeScript";
$numbers = [1, 2, 3, 4, 5];
$outputAge2 = $isOld ? "Eres viejo, lo siento." : "Eres joven. ¡Felicidades!";
$person = [
        "name" => "Manuel",
        "age" => 36,
        "isDev" => true,
        "languages" => ["PHP", "Javascript", "Python"],];
$person["name"] = "Kas";
$person["Languages"][] = "Java"; ?>

<h1><?= $output ?></h1>
<?php if ($isOld): ?><h2>Eres viejo, lo siento.</h2>
<?php elseif ($isDev): ?><h2>No eres viejo, pero eres dev. Estás jodido.</h2>
<?php else: ?><h2>Eres joven. ¡Felicitaciones!</h2>
<?php endif; ?>

<img alt="PHP Logo" src="<?= LOGO_URL ?>" width="200">
<h2><?= $outputAge ?></h2>
<p><?= $outputAge2 ?></p>
<h3>El mejor lenguaje es <?= $bestLanguages[1] ?></h3>

<ul>
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<ul><?php foreach ($numbers as $number): ?>
        <li><?= $number ?></li>
    <?php endforeach; ?>
</ul>

<style>

    :root {
        color-scheme: light dark
    }

    body {
        display: grid;
        place-content: center
    }
</style>