<form action="/submit" method="POST" id="number-input" >

				<div class="form-wrapper">

					<h1 id="form-h1">Odaberite brojeve:</h1>

					<div id="main-input">
						<?php for ($i=1; $i <= 46; $i++): ?>
							
							<label class="numbers" for="main-number-<?=$i?>"> <?= $i ?> </label>

							<input type="checkbox" name="<?=$i?>" value="<?=$i?>" id="main-number-<?=$i?>" data-parsley-multiple="main-number" 
							data-parsley-mincheck="5" data-parsley-maxcheck="5" data-parsley-validate-if-empty>
						
						<?php endfor; ?>
					</div>

					<hr>

					<?php for ($i=1; $i <= 9; $i++): ?>
						
						<label class="numbers" for="bonus-number-<?=$i?>"> <?= $i ?> </label>

						<input type="checkbox" name="bonus" value="<?=$i?>" id="bonus-number-<?=$i?>" data-parsley-multiple="bonus-number" 
							data-parsley-mincheck="1" data-parsley-maxcheck="1" data-parsley-validate-if-empty>
					
					<?php endfor; ?>

						<br>

						<button class="btn btn-primary"	type="submit" id="submit-btn">Provjeri</button>

				</div>

</form>