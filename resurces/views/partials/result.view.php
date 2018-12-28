<?php if($lastResult): ?>

				<?php foreach($numbers as $number): ?>

					<?php 
						$condition = $winningTicket && in_array($number, $numbersInput);
						$correct = $condition ? 'correct' : '';
						
					?>

					<div class="col-2 main-results <?= $correct ?>">

						<span class="digit"><?= $number ?></span>

					</div>

				<?php endforeach; ?>

				<?php 

					$bonusCondition = $winningTicket && ($bonusInput == $lastResult[0]->bonus_number);
					$bonusEqual = $bonusCondition ? 'correct' : '';
				?>

				<div class="col-2 main-results <?= $bonusEqual ?>" id="main-results-bonus">
				
					<span class="digit"><?= $bonusNumber ?></span>

				</div>

				<?php $_SESSION['numbers'] = false;?>

			<?php else: ?>

				<div class="col-12 text-center">
					<span>Nema izvučenih brojeva!</span>
				</div>

			

			<?php endif; ?>	