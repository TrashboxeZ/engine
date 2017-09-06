<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Portal</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/aboutus">About us</a></li>
    </ul>
    
    <div class="content">
       
        <?php var_dump($view); ?>
       
        <?php include_once APP . 'views/' . $view . '.php'; ?>    
    </div>
    
</body>
</html>