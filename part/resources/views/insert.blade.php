<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input id="myName" type="text" placeholder="your name"> <br><br>
<input id="myroll" type="text" placeholder="your roll"> <br><br>
<input id="myClass" type="text" placeholder="your class"> <br><br>

<button onclick="senddata()">Insert</button>



<script src="{{ asset('axios.min.js') }}"></script>
<!-- <script src="{{ asset('axios.min.js.map') }}"></script> -->

<script src="{{ asset('custom.js') }}"></script>
</body>
</html>