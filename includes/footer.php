<br>
<style>
.ir-arriba {
	display:none;
	padding:15px;
	background:#000;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;
	border-radius: 50%;
	opacity: 0.5;
}

.social {
	position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
	left: -30px; /* Establecemos la barra en la izquierda */
	top: 33%; /* Bajamos la barra 200px de arriba a abajo */
	z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 
	.social ul {
		list-style: none;
	}
 
	.social ul li a {
		display: inline-block;
		color:#fff;
		background: #000;
		padding: 10px 15px;
		text-decoration: none;
		-webkit-transition:all 500ms ease;
		-o-transition:all 500ms ease;
		transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
	}
 
	.social ul li a:hover {
		background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
		padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
	}


</style>
<span class="ir-arriba icon icon-circle-up"></span>
<img src="images/footer_transitionTop.png" style="width: 100%">
<!--<div style="color: white;padding: 0.5em;background: transparent;text-align: right;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
<p style="margin-bottom: 0.3em;font-size: 0.8em;text-transform: capitalize;">https://viralize.000webhostapp.com/ Es un Portal de entretenimiento. </p>
			</div>
			
	</div>
</div></div>-->

	<div class="social d-none d-sm-none d-md-block">
		<ul>
			<li><a href="" target="_blank" class="icon icon-attachment" style="background:transparent;color: #2b2b2b;font-size: 3em"></a></li>
			<li><a href="" target="_blank" class="icon icon-whatsapp" style="background:transparent;color: #2b2b2b;font-size: 3em"></a></li>

		</ul>
	</div>