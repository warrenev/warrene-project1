<?php include 'header.php'?>
<div id="page-wrapper" style="min-height: 680px;">
	<div class="container">
			
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Sales Report</a></li>
				<li><a data-toggle="tab" href="#menu1">Earning</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
				<?php include 'salesreport.php' ?>
				</div>
				<div id="menu1" class="tab-pane fade">
				<?php include 'earning.php' ?>
				</div>
			</div>
		</div>
	</div>
</div>