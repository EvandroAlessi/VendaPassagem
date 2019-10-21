<!DOCTYPE HTML><?php include "app.php"; ?>
<html lang="pt-br">
	<head>
		<?=$appHeader?>
		<title><?=$data["name"]?></title>
		<meta property="og:site_name" content="<?=$data["name"]?>">
	</head>
	<body>
		<div id="app" class="PS | APP " p><div c>
			<div id="page" class="PAGE | grow" p><div c>
				<div class="ESTRUTURA-DEFAULT | grow" p><div c>
					<?php include "partials/header.php"; ?>
					<?php include "partials/slider.php"; ?>
					<?php include "partials/suitcase.php"; ?>
					<?php include "partials/parceiros.php"; ?>
					<?php include "partials/footer.php"; ?>
				</div><div b></div></div>
			</div><div b></div></div>
		</div><div b></div></div>
	</body>
</html>