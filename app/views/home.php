<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>This is Home.</h1>
    <form>
        <select>
            <?php foreach($params as $value): ?>
                <option><?php echo $value['useremail']; ?></option>
            <?php endforeach; ?>
        </select>
    </form>
</body>
</html>