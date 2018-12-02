<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div class="item">
    <span> video </span>
    <video id="video" width="320" height="240" autoplay="autoplay" ></video>
</div>
<div class="item">
    <span> canvas </span>
    <canvas id="canvas" width="320" height="240" ></canvas>
</div>

<script>
//    window.onload = function () {
//            var canvas = document.getElementById('canvas');
//        }

    // navigator.getUserMedia  и   window.URL.createObjectURL (смутные времена браузерных противоречий 2012)
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    window.URL.createObjectURL = window.URL.createObjectURL || window.URL.webkitCreateObjectURL || window.URL.mozCreateObjectURL || window.URL.msCreateObjectURL;

    // запрашиваем разрешение на доступ к поточному видео камеры
    navigator.getUserMedia({video: true}, function (stream) {
        // разрешение от пользователя получено
        // скрываем подсказку
        allow.style.display = "none";
        // получаем url поточного видео
        videoStreamUrl = window.URL.createObjectURL(stream);
        // устанавливаем как источник для video
        video.src = videoStreamUrl;
    }, function () {
        console.log('что-то не так с видеостримом или пользователь запретил его использовать :P');
    });
</script>

</body>
</html>