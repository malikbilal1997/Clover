<!-- This is a demo code -->
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
    <?php foreach($params as $value): ?>
        <h1><?php echo $value['post_title']; ?></h1>
        <p><?php echo $value['post_content']; ?></p>
    <?php endforeach; ?>       
</body>
</html>
