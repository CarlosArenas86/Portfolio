<section class="contacto" id="contacto">
			<div class="contenedor">
				<h3 id="contact-me" class="titulo">Contact</h3>
				<form action= "enviar.php" method="post" name="form" onsubmit="return validateForm()" class="formulario" method="post">
					<input type="text" placeholder="Name" name="name" required>
					<input type="email" placeholder="Email" name="email" required>
					<textarea name="message" placeholder="Message:"></textarea>
					<input id="submit-form" class="boton" type="submit" value="Send">
				</form>
			</div>
		</section>