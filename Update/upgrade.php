<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>AMXBans # Gm 1.6 - Upgrade</title>

	<link rel="stylesheet" href="upgrade/main.css" />

	<script src="http://storage.gm-community.net/js/jquery.js"></script>
	<script>
		var step = 1;
		$(document).ready(function(){
			var $result = $( "#result" );

			$('#mainForm').bind('submit', function(){
				switch (step)
				{
					case 1:
						$.getJSON('upgrade.inc.php', {step: 1, login: $('#name').attr('value'), password:$('#password').attr('value')},function(data,status){
							$result.show( );
							$('#result').html(data.message);
							
							if (data.result)
							{
								$('#mainForm').html('<input type="submit" id="step2" class="submit" name="step2" value="Next" />');
								$('h1').html('Status:');

								step = 2;
							}						
						});
						break;
					case 2:
						$.getJSON('upgrade.inc.php', {step: 2},function(data,status){

							$('#result').html(data.message);
							if (data.result)
							{
								$('#mainForm').replaceWith('');
								step = 3;
							}	
						});
				}
				return false;
			});
		
		
		});
	</script>
</head>
<body>
	<div class="majic"> 
		<div id="page">
			<div id="title">
				<span>
					<a href="http://gm-community.net">AMXBans # Gm: Aktualizator</a>
				</span>
			</div>
			<h1>Enter data</h1>
			<div id="result">Status info</div>
			<form method="GET" id="mainForm">
				<input type="text" class="login" id="name" name="name" placeholder="Database user" /><br />
				<input type="text" class="login" id="password" name="password" placeholder="Database password" />
				<input type="submit" class="submit" value="Login" />
			</form>
			<div style="background: transparent url(upgrade/strike.gif) repeat-x scroll 0 0;" align="right">
				<br />
				<a href="http://gm-community.net">
					<img style="border:none" src="http://storage.gm-community.net/images/gm.png" alt="Larte? Stay tuned, coming soon.">
				</a>
			</div> 
		</div>
	</div>
</body>
</html>