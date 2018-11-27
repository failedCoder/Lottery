<?php require_once "resurces/views/partials/header.view.php"; ?>

<div class="container">

	<div class="row">
		
		<div class="col-lg-4 col-md-5 col-sm-6 mx-auto">

			<?php require_once "resurces/views/partials/number-form.view.php"; ?>
			
		</div>

	</div>

	<hr>

	<div class="row">
		
		<div class="col-6 mx-auto">
			
			<form method="POST" action="/generate" id="draw-form">
				
				<button type="submit" class="btn btn-info btn-block">Izvlačenje!</button>

			</form>

		</div>

	</div>

	<div class="row mx-auto" id="results">

			<div class="col-2 main-results">

				<span class="digit">10</span>

			</div>

			<div class="col-2 main-results">

				<span class="digit">10</span>

			</div>

			<div class="col-2 main-results">

				<span class="digit">10</span>

			</div>

			<div class="col-2 main-results">

				<span class="digit">10</span>

			</div>


			<div class="col-2 main-results">

				<span class="digit">10</span>

			</div>


			<div class="col-2 main-results" id="main-results-bonus">
				
				<span class="digit">10</span>

			</div>



	</div>
	
</div>


    

<?php require_once "resurces/views/partials/footer.view.php"; ?>