<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Inscription administrateur</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			    <label for="name">Nom</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Nom">
			  </div>
			  <div class="form-group">
			    <label for="email">Address email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Mot de passe</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirmer Mot de passe</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Mot de passe">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
	 <button type="button" class="btn btn-primary register-btn">S'inscrire</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
