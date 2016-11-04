<?php include 'header.php'?>
<div id="page-wrapper" style="min-height: 680px;">
	<div class="container">
			
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">All</a></li>
				<li><a data-toggle="tab" href="#menu1">Pending</a></li>
				<li><a data-toggle="tab" href="#menu2">Processing</a></li>
				<li><a data-toggle="tab" href="#menu3">Completed</a></li>
				<li><a data-toggle="tab" href="#menu4">Cancelled</a></li>
				<li><a data-toggle="tab" href="#menu5">Delivered</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
				<?php include 'All.php' ?>
				</div>
				<div id="menu1" class="tab-pane fade">
				<?php include 'Pending.php' ?>
				</div>
				<div id="menu2" class="tab-pane fade">
				<?php include 'Processing.php' ?>
				</div>
				<div id="menu3" class="tab-pane fade">
				<?php include 'Completed.php' ?>
				</div>
				<div id="menu4" class="tab-pane fade">
				<?php include 'Cancelled.php' ?>
				</div>
				<div id="menu5" class="tab-pane fade">
				<?php include 'Delivered.php' ?>
				</div>
			</div>
		</div>
	</div>
</div>