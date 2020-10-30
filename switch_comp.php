<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>switchを使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>switchを使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php 
		$value = "A";
		// $value = $_POST["inputVal"];
		switch ( $value ) {
			case "A":
				echo "Aが入力されました";
				break;
			case "B":
				echo "Bが入力されました";
				break;
			case "":
				echo "何も入力されていません";
				break;
			default:
				echo "A、B以外が入力されました";
				break;
		}
		?>
	</div>
</body>
</html>
