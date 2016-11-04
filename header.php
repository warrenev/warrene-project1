<!DOCTYPE html>
<html lang="en">
<head>


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AttiGo Merchant</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<!--tabs toogle-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>document.body.className += ' fade-out';</script>
	

	
	
	

    <link href="Main/bootstrap.min.css" rel="stylesheet">
    <link href="Main/metisMenu.min.css" rel="stylesheet">
    <link href="Main/timeline.css" rel="stylesheet">
    <link href="Main/sb-admin-2.css" rel="stylesheet">
    <link href="Main/morris.css" rel="stylesheet">
    <link href="Main/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="Main/jquery-ui.css">
	<link rel="stylesheet" href="Main/summernote.css">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	
	
	
	<!--Graph-->
	<script type="text/javascript" src="/assets/script/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/assets/script/jquery.canvasjs.min.js"></script>
	<script type="text/javascript">
	$(function () {
		//Better to construct options first and then pass it as a parameter
		var options = {
			title: {
				text: "Spline Chart using jQuery Plugin"
			},
					animationEnabled: true,
			data: [
			{
				type: "spline", //change it to line, area, column, pie, etc
				dataPoints: [
					{ x: 10, y: 10 },
					{ x: 20, y: 12 },
					{ x: 30, y: 8 },
					{ x: 40, y: 14 },
					{ x: 50, y: 6 },
					{ x: 60, y: 24 },
					{ x: 70, y: -4 },
					{ x: 80, y: 10 }
				]
			}
			]
		};

		$("#chartContainer").CanvasJSChart(options);

	});
	</script>
	<!--end Graph-->
	
		<script>
					$(function() {
			$('body').removeClass('fade-out');
		});
		</script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="attigo.php"style="color:#fff;">AttiGo Merchant</a>
            </div>
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
						<li>
                            <a href="attigo.php"><i class="fa fa-dashcube"></i> Dashboard</a>
                        </li>
						
						<li>
                            <a href="merchantInfo.php"><i class="fa fa-users"></i> Merchant Information</a>
                        </li> 
						
						<li>
                            <a href="transaction.php"><i class="fa fa-first-order"></i> Transaction</a>
                        </li>
						
						<li>
                            <a href="uploadprod.php"><i class="fa fa-product-hunt"></i> Product Management</a>
                        </li>
						
						<li>
                            <a href="warehouse.php"><i class="fa fa-home"></i> Warehouse List</a>
                        </li>
						
						<li>
                            <a href="balancerecord.php"><i class="fa fa-balance-scale"></i> Balance Record</a>
                        </li>
						
						<li>
                            <a href="report.php"><i class="fa fa-file-text-o"></i> Reports</a>
                        </li>
						
						<li>
                            <a href="setting.php"><i class="fa fa-cogs"></i> Settings</a>
                        </li>
						
						<li>
                            <a href="help.php"><i class="fa fa-info-circle"></i> Help</a>
                        </li>
                    </ul>
                </div>
            </div>            
        </nav>
		<br />
		
		
		<script>
					$(function() {
			$('body').removeClass('fade-out');
		});
		</script>
	</div>