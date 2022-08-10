<?php

require_once 'includes/functions.php';
if (isset($_POST['calculate'])) {
    $result = calculate($_POST['inputOne'], $_POST['inputTwo'], $_POST['calculate']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calco by Grow Tech</title>
    <link rel="shortcut icon" href="assets/images/calculator.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/calculator.png">

    <!-- CSS Links -->
    <link rel="stylesheet" href="assets/app.css">
    <link rel="manifest" href="manifest.json">
</head>
<body>
    <!-- App Area -->
    <main id="app">
        <!-- Box Area -->
        <div class="flex h-100">
            <div class="card">
                <div class="card-data">
                    <h1>PHP Calculator</h1>
                    <p>
                        Calculate anything what you want.
                    </p>
                </div>
                <form action="" method="post" class="calculator <?php if (isset($result)) { echo 'd-none'; } ?>">
                    <div class="flex">
                        <div class="form-group">
                            <label for="inputOne">Input:</label>
                            <input type="number" name="inputOne" id="inputOne">
                        </div>
                        <div class="form-group">
                            <label for="inputTwo">Input:</label>
                            <input type="number" name="inputTwo" id="inputTwo">
                        </div>
                    </div>
                    <div class="flex">
                    <button class="btn" value="plus" type="submit" name="calculate">+</button>
                    <button class="btn" value="minus" type="submit" name="calculate">-</button>
                    <button class="btn" value="into" type="submit" name="calculate">*</button>
                    <button class="btn" value="devide" type="submit" name="calculate">/</button>
                    </div>
                </form>
                <div class="card-data d-none <?php if (isset($result)) { echo 'd-block'; } ?>">
                    <h1>Your result is '<?= number_format($result, 2); ?>'</h1>
                    <a href="">Calculate something new!</a>
                </div>
            </div>
        </div>

        <!-- Copyright Area -->
        <div class="copyright" id="copy">
            <p>Developed with ❤️ by <a href="https://facebook.com/muhaiminshihab">Muhaimin Shihab</a></p>
        </div>
    </main>

    <!-- JS Links -->
    <script src="assets/app.js"></script>
    <script>
        // PWA Installation
        if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service_worker.js', { scope: '/' }).then(function(reg) {

            if(reg.installing) {
            console.log('Service worker installing');
            } else if(reg.waiting) {
            console.log('Service worker installed');
            } else if(reg.active) {
            console.log('Service worker active');
            }

        }).catch(function(error) {
            console.log('Registration failed with ' + error);
        });
        }
    </script>
</body>
</html>