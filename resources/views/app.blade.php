<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practical Vue Components - MyNotePaper</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" type="text/css" rel="stylesheet"/>
</head>
<body>

    <div id="app">
        <carousel>
            <img src="images/cv1.png" height="400px" width="50%">
            <img src="images/cv2.png" height="400px" width="50%">
            <img src="images/cv3.png" height="400px" width="50%">
            <img src="images/cv4.png" height="400px" width="50%">
            <img src="images/cv5.png" height="400px" width="50%">
            <img src="images/cv6.png" height="400px" width="50%">
        </carousel>

    </div>

    <!-- JavaScript -->
    <script src="js/app.js"></script>
</body>
</html>
