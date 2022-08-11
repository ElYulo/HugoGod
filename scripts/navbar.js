var view = $(".hiddenView").attr("id");

if (view == "home") {
  $("#breadcrumbHome").show(0);
} else if (view == "servicios") {
  $("#breadcrumbServicios").show(0);
} else if (view == "proyectos") {
  $("#breadcrumbProyectos").show(0);
} else if (view == "sobreMi") {
  $("#breadcrumbSobreMi").show(0);
} else if (view == "contactos") {
  $("#breadcrumbContactos").show(0);
} else {
}


/* 
<!-- Breadcrumb -->
<nav>
    <div>
        <!-- BreadcrumbHome -->
        <div id="breadcrumbHome" style="display: none;" class="linear">
            <a href="?view=home" class="breadcrumb">Home</a>
        </div>

        <!-- BreadcrumbServicios -->
        <div id="breadcrumbServicios" style="display: none;" class="linear">
            <a href="?view=home" class="breadcrumb">Home</a>
            <a href="?view=servicios" class="breadcrumb">>Servicios</a>
        </div>

        <!-- BreadcrumbProyectos -->
        <div id="breadcrumbProyectos" style="display: none;" class="linear">
            <a href="?view=home" class="breadcrumb">Home</a>
            <a href="?view=proyectos" class="breadcrumb">>Proyectos</a>
        </div>

        <!-- BreadcrumbSobreMi -->
        <div id="breadcrumbSobreMi" style="display: none;" class="linear">
            <a href="?view=home" class="breadcrumb">Home</a>
            <a href="?view=sobreMi" class="breadcrumb">>Sobre mi</a>
        </div>

        <!-- BreadcrumbContactos -->
        <div id="breadcrumbContactos" style="display: none;" class="linear">
            <a href="?view=home" class="breadcrumb">Home</a>
            <a href="?view=contactos" class="breadcrumb">>Contactos</a>
        </div>

    </div>

</nav> */