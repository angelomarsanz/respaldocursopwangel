<!DOCTYPE html>
	<html lang="es">
		<body>
			<p>Este texto de HTML está fuera de las etiquetas de PHP, por lo tanto es ignorado por el analizador de PHP</p>

			<?php echo 'Este texto si se encuentra entre las etiquetas de PHP, por lo tanto es tomado en cuenta por el analizador de PHP' ?>

			<p>Este texto de HTML también está fuera de las etiquetas de PHP y por supuesto que es ignorado por el analizador de PHP</p>
		</body>
	</html>
