<?php

    require('./assets/php/requests/signed.php');
    if(!$signed) header('Location: ./login');

    require __DIR__ . '/vendor/autoload.php';

    $options = array(
        'cluster' => 'us2',
        'useTLS' => true
    );

    $pusher = new Pusher\Pusher(
        'd4a8a4b20401f50b5012',
        'bddc88e5032c900ef290',
        '1147389',
        $options
    );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php @include('./assets/php/heads/main_head.php'); ?>
    <title>Tell-Me • Home</title>
</head>
<body>

    <div class="fixed-top w-100 h-100 y-scroll">
        
    </div>

</body>
</html>