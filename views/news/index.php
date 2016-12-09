<html>
<header>
	<title>TEST</title>
</header>
<body>
	
	<h1 style="text-align: center;">Статьи</h1>
	<table>
	<tr style="font-weight: bold;">
		<td>id</td>
		<td>title</td>
		<td>date</td>
	</tr>
	<?php foreach ($articles as $item) : ?>
		<?php $item['date'] = substr($item['date'], 0, 10); ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['title']; ?></td>
			<td><?php echo $item['date']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>


</body>
</html>