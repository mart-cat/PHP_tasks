<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($rows as $row): ?>
    <form method="POST" action="">
        <?= $row['NAME']?> <?= $row['TEL'] ?> 
        <?php $checked = ($row['DONE'] == 1) ? 'checked' : ''; ?>
        <input type="hidden" name="id" value="<?= ($row['ID']) ?>">
        <input type="checkbox" name="done" <?= $checked ?> onchange="this.form.submit()">
    </form>
    <br><br>
<?php endforeach; ?>

</body>
</html>
