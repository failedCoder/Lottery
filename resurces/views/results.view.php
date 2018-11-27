<?php require_once "resurces/views/partials/header.view.php"; ?>

<div class="container">
	
	<div class="row" id="result-title">
		
		<h1>Rezultati:</h1>

	</div>

	<div class="row">

		<div class="table-responsive">

			 <table class="table">
			 	<thead>
					<tr>
			 			<th scope="col">Kolo</th>
						<th scope="col">Datum</th>
						<th scope="col">Brojevi</th>
						<th scope="col"></th>
					</tr>
				</thead>			     	
				<tbody>
				<?php if (count($results)): ?>

					<?php foreach ($results as $result): ?>
					  	
						    <tr>
						      <th scope="row"><?= $result->id ?></th>
						      <td><?= $result->on_date ?></td>
						      <td>| <?= $result->numbers ?> |</td>
						      <td>dopunski broj:<?= $result->bonus_number ?></td>
						    </tr>
						 
					<?php endforeach; ?>

				<?php endif; ?>

				</tbody>
			</table>
		</div>	

	</div>

</div>


<?php require_once "resurces/views/partials/footer.view.php"; ?>