<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>

<body>
        <h1 id="img1">my image 1</h1>
        <button onclick="fadeImg()">fade</button>

    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" type="text/javascript"></script>
    <script>
    function fadeImg(){
       $('#img1').fadeToggle(1000)
    }
    </script>
</body>
</html>