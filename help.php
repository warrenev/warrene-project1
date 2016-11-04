<?php include 'header.php'?>
<div id="page-wrapper" style="min-height: 680px;">
	<div class="container">
			
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">REGISTRATION</a></li>
				<li><a data-toggle="tab" href="#menu1">SIGN IN</a></li>
				<li><a data-toggle="tab" href="#menu2">ACCOUNT MANAGEMENT</a></li>
				<li><a data-toggle="tab" href="#menu3">EMAIL SUBSCRIPTION</a></li>
				<li><a data-toggle="tab" href="#menu4">FINDING PRODUCTS AND SELLERS</a></li>
				<li><a data-toggle="tab" href="#menu5">PRODUCT CHECKOUT AND DELIVERY</a></li>
				<li><a data-toggle="tab" href="#menu6">PROMOTION</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
				<?php include 'registration.php' ?>
				</div>
				<div id="menu1" class="tab-pane fade">
				<?php include 'signin.php' ?>
				</div>
				<div id="menu2" class="tab-pane fade">
				<?php include 'accountmanagement.php' ?>
				</div>
				<div id="menu3" class="tab-pane fade">
				<?php include 'emailsub.php' ?>
				</div>
				<div id="menu4" class="tab-pane fade">
				<?php include 'findprod.php' ?>
				</div>
				<div id="menu5" class="tab-pane fade">
				<?php include 'prodcheck.php' ?>
				</div>
				<div id="menu6" class="tab-pane fade">
				<?php include 'promotion.php' ?>
				</div>
			</div>
		</div>
	</div>
</div>