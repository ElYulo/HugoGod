<nav>
    <ul class="nav-menu">
        <li><a href="?view=servicios">Servicios</a></li>
        <li><a href="?view=proyectos">Proyectos</a></li>
        <li><a href="?view=sobreMi">Sobre mi</a></li>
        <li><a href="?view=contactos">Contactos</a></li>
    </ul>
</nav>

<?php

$view = $_GET['view'];

if ($view == 'servicios') {
    echo '
    <nav class="nav2">
        <ul class="nav-menu2">
            <li><a href="?view=home">Home</a></li>
            <li><a href="?view=servicios">Servicios</a></li>
        </ul>
    </nav>
    ';
} elseif ($view == 'proyectos') {
    echo '
    <nav class="nav2">
        <ul class="nav-menu2">
            <li><a href="?view=home">Home</a></li>
            <li><a href="?view=proyectos">Proyectos</a></li>
        </ul>
    </nav>
    ';
} elseif ($view == 'sobreMi') {
    echo '
    <nav class="nav2">
        <ul class="nav-menu2">
            <li><a href="?view=home">Home</a></li>
            <li><a href="?view=sobreMi">Sobre mi</a></li>
        </ul>
    </nav>
    ';
} elseif ($view == 'contactos') {
    echo '
    <nav class="nav2">
        <ul class="nav-menu2">
            <li><a href="?view=home">Home</a></li>
            <li><a href="?view=contactos">Contactos</a></li>
        </ul>
    </nav>
    ';
} else {
    echo '
    <nav class="nav2">
        <ul class="nav-menu2">
            <li><a href="?view=home">Home</a></li>
        </ul>
    </nav>
    ';
}

?>

<h5 class="hiddenView" id="<?php if ($view) echo $view ?>"></h5>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
<link rel="stylesheet" href="./res/css/navbar.css" />
<script src="./scripts/navbar.js?v1.0.0"></script>