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