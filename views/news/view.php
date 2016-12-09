<html>
<header>
    <title>TEST</title>
</header>
<body>

<h1 style="text-align: center;">Статья</h1>

<table border='1' align='center' cellpadding='5'>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $article['id']; ?></td>
            <td><?php echo $article['title']; ?></td>
            <td><?php echo $article['description']; ?></td>
            <td><?php echo $article['date']; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>