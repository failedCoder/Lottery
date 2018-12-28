<?php if($lastResult): ?>

				<?php foreach($numbers as $number): ?>

					<div class="col-2 main-results">

						<span class="digit"><?= $number ?></span>

					</div>

				<?php endforeach; ?>

				<div class="col-2 main-results" id="main-results-bonus">
				
					<span class="digit"><?= $bonusNumber ?></span>

				</div>

			<?php else: ?>

				<div class="col-12 text-center">
					<span>Nema izvučenih brojeva!</span>
				</div>

<?php endif; ?>	