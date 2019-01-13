<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js\Ejercicio7p2.js"></script>
	<link href="css\ejercicio7.css" rel="stylesheet" type="text/css">
	<title>Ejercicio 7</title>

</head>
<body>

	<article id="main">
		<section class="wrapper style5">

			<div class="inner">

				<div>
					<h4 style="text-align: center;">Captura de datos dianamicos</h4>

					<form method="post" action="#">
										<div class="row uniform">

											<div class="2u 12u$(xsmall)">
												<input type="text" name="cantidad" id="cantidad" value="" placeholder="cantidad" onkeyup="format(this)" onchange="format(this)"/>
											</div>

											<div class="6u 12u$(xsmall)">
												<input type="text" name="descripcion" id="descripcion" value="" placeholder="Descripcion Producto"/>
											</div>


											<div class="2u$ 12u$(xsmall)">
												<input type="text" name="importe" id="importe" value="" placeholder="importe" onkeyup="format(this)" onchange="format(this)"/>
											</div>								
										</div>
										<br>
										<div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="Agregar" class="principal" id="add_row"/></li>
											</ul>
										</div>
										<br>
										<br>

										<table>
											<tr>
												<th>Total a pagar: <input type="text" name="Nombre"  id="escribit1" readonly="readonly" onpaste="return false" required></th>
												
											</tr>
										</table>

										<br>

										<div class="table-wrapper">
											<table id="tabla_factura">
												<thead>

													<tr>
					
														<td colspan="3" ">Cliente: <input type="text" name="Nombre"  id="escribit" required></td>
													</tr>
													<tr>
														<td colspan="3" >Dirección: <input type="text" name="Nombre" id="escribit"  required></td>
													</tr>

													<tr id="last">
														<td >Cantidad</td>
														<td id="desc">Descripción</td>
														<td id="impo">Importe</td>
													</tr>


												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
														<td></td>
														<td></td>

													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2">Total:</td>
														<td id="total_total">0.00</td>

													</tr>
												</tfoot>
											</table>
											
											<button onclick="quitar()">Quitar</button>
										</div>
									</form>

									
				</div>
			</div>


		</section>
	</article>



		



</body>
</html>