<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    sfdsfsf


    <?php
    // Initialize a cURL session
    $ch = curl_init();
    print_r($ch);

    // Set the URL to fetch
    curl_setopt($ch, CURLOPT_URL, "https://www.example.com");

    // Set the option to return the response as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL session
    $response = curl_exec($ch);

    print_r($response);

    // Check for errors
    if ($response === false) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        echo "cURL Response: " . htmlspecialchars($response);
    }

    // Close the cURL session
    curl_close($ch);
    ?>

    ddddd
</body>

</html>