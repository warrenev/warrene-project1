<?php include 'header.php'?>
<div id="page-wrapper" style="min-height: 680px;">
			
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">General Information</a></li>
			<li><a data-toggle="tab" href="#menu1">Store Address</a></li>
			<li><a data-toggle="tab" href="#menu2">Bank Account Information</a></li>
			<li><a data-toggle="tab" href="#menu3">Legal Information</a></li>
			<li><a data-toggle="tab" href="#menu4">Account Information</a></li>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
			<?php include 'generalinfo.php' ?>
			</div>
			<div id="menu1" class="tab-pane fade">
			<?php include 'storeaddress.php' ?>
			</div>
			<div id="menu2" class="tab-pane fade">
			<?php include 'bankinfo.php' ?>
			</div>
			<div id="menu3" class="tab-pane fade">
			<?php include 'legalinfo.php' ?>
			</div>
			<div id="menu4" class="tab-pane fade">
			<?php include 'accountinfo.php' ?>
			</div>
		</div>
	</div>
</div>
