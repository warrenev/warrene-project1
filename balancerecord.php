<?php include 'header.php'?>
<div id="page-wrapper" style="min-height: 680px;">
	<div class="container">
			
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Withdrawal</a></li>
				<li><a data-toggle="tab" href="#menu1">Balance Record</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
				<?php include 'withdraw.php' ?>
				</div>
				<div id="menu1" class="tab-pane fade">
				<?php include 'balance.php' ?>
				</div>
			</div>
		</div>
	</div>
</div>