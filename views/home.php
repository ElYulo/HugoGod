<h1>Home</h1>

<div class="g-recaptcha" data-sitekey="6LfJKGUgAAAAAPdkfsLnyZzjyQlBmyNeM5Qck-QF" data-callback="verifyCaptcha"></div>
<p id="g-recaptcha-error" style="color:red; display: none;">Esta validación es requerida.</p>
<a class="waves-effect waves-light btn" id="submitForm" style="width: 32%;">Enviar</a>

<form>
    <select id="accion">
        <option value="modificar">modificar</option>
        <option value="color">color</option>
    </select>
    <select id="posicionSelect">
        <option disabled>Posicion</option>
    </select>
    <select id="colorSelect">
        <option>red</option>
        <option>blue</option>
        <option>green</option>
    </select>
    <!-- <input type="text" id="posicion" placeholder="Posicion"> -->
    <input type="text" id="valor" placeholder="Valor">
</form>
<button id="btn">Modificar</button>
<button id="btnc">Modificar</button>

<div id="h5">
    <h5>Soy el pirmer h5</h5>
    <h5>Soy el segundo h5</h5>
    <h5>Soy el tercero h5</h5>
    <h5>Soy el cuerto h5</h5>
    <h5>Soy el quinto h5</h5>
</div>

<script async src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="./scripts/home.js?v1.0.0"></script>