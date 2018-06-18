<?php 
if(isset($_GET['filtro'])){
	$filtro = $_GET['filtro'];
}
else{
	$filtro = TRUE;
}
?>

<div class="col-sm-9 text-center">
	<h2>As Melhores cervejas</h2>
	<form method="POST" action="?pg=filtrar">

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Procure:</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="busca" placeholder="Encontre sua marca favorita" value="">		
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Tipo:</label>
			<div class="col-sm-10">
				<select name="tipo" class="form-control" id="tipo">
					<option value=""> - </option>
					<option value="nacional"> Nacional </option>
					<option value="importadas"> importadas </option>						
				</select>		
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Preço:</label>
			<div class="col-sm-10">
				<select name="preco" class="form-control" id="preco">
					<option value=""> - </option>
					<option value="menor"> Menor Preço </option>
					<option value="maior"> Maior Preço </option>						
				</select>		
			</div>
		</div>

		<button type="submit" class="btn btn-primary btn-lg btn-block" name="fazBusca">Pesquisar</button> 
		
	</form>
</div>
	
	<?php	

		$query = "SELECT * FROM cervejas ".$filtro;		
		$sql = mysqli_query($link, $query);
		$tr = 0;
		// echo "<textarea>".$query."</textarea>";
		
		if (mysqli_num_rows($sql) > 0) {
			while($row = mysqli_fetch_assoc($sql)) {
				$img = "img/" . $row["img"]. ".png";

				if($tr == 0){
					echo "<div class = 'row'> ";
				}
				echo "<div class='col-4 center'>  
						<figure class='figure'>
					   		<img class='figure-img img-fluid rounded' src='".$img."' height='150' width='150' align= 'center'/><br> 
							<figcaption class='figure-caption text-justify'>
							Figura ilustrativa da cerveja ".$row["img"]."<br>
							Preço: R$ " . $row["valor"]. "<br> 
							Nome: " . $row["nome"]. "<br> 
							Descrição: " . $row["descricao"]. "<br> 
							</figcaption>
						</figure>
					</div>";
				$tr++;

				if($tr >= 3){
					echo "</div> ";
					$tr = 0;
				}
				// echo $img;
			}
		} else {
			echo "0 results";
		}		
		
	?>


<!-- <a href="?pg=cervejas&filtro="> > Mostrar todos</a> -->