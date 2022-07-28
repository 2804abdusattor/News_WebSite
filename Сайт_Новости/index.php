<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Новости обо всем";
		require_once "blocks/head.php"
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id="wrapper">
		<div id="leftCol">
			<div id="bigArticle">
				<img src="/Сайт_Новости/img/article_1.jpg" alt="Статья 1" title="Статья 1">
				<h2>Статья 1</h2>
				<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>
				<a href="/article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="clear"><br></div>

			<div class="article">
				<img src="/Сайт_Новости/img/article_2.jpg" alt="Статья 2" title="Статья 2">
				<h2>Статья 2</h2>
				<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>
				<a href="/article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="article">
				<img src="/Сайт_Новости/img/article_3.jpg" alt="Статья 3" title="Статья 3">
				<h2>Статья 3</h2>
				<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </p>
				<a href="/article.php">
					<div class="more">Далее</div>
				</a>
			</div>

		</div>
		<?php require_once "blocks/rightCol.php"  ?>
	</div>
	
	<?php require_once "blocks/footer.php"  ?>
</body>
</html>
