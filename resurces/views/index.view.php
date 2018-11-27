<?php require_once "resurces/views/partials/header.view.php"; ?>

<div class="container">

	<div class="row">
		
		<div class="col-lg-4 col-md-5 col-sm-6 mx-auto">

			<form action="/submit" method="POST" id="numbers-form" id="number-input">

				<div class="form-wrapper">

					<h1>Odaberite brojeve:</h1>

					<div>
						<?php for ($i=1; $i <= 46; $i++): ?>
							
							<label class="numbers" for="main-number-<?=$i?>"> <?= $i ?> </label>

							<input type="checkbox" name="<?=$i?>" value="<?=$i?>" id="main-number-<?=$i?>">
						
						<?php endfor; ?>
					</div>

					<hr>

					<?php for ($i=1; $i <= 9; $i++): ?>
						
						<label class="numbers" for="bonus-number-<?=$i?>"> <?= $i ?> </label>

						<input type="checkbox" name="bonus" value="<?=$i?>" id="bonus-number-<?=$i?>">
					
					<?php endfor; ?>

						<br>

						<button class="btn btn-primary"	type="submit" id="submit-btn">Provjeri</button>

				</div>

			</form>
			
		</div>

	</div>
	
</div>


    

<?php require_once "resurces/views/partials/footer.view.php"; ?>