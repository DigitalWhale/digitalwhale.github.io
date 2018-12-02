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

    // navigator.getUserMedia  �   window.URL.createObjectURL (������� ������� ���������� ������������ 2012)
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    window.URL.createObjectURL = window.URL.createObjectURL || window.URL.webkitCreateObjectURL || window.URL.mozCreateObjectURL || window.URL.msCreateObjectURL;

    // ����������� ���������� �� ������ � ��������� ����� ������
    navigator.getUserMedia({video: true}, function (stream) {
        // ���������� �� ������������ ��������
        // �������� ���������
        allow.style.display = "none";
        // �������� url ��������� �����
        videoStreamUrl = window.URL.createObjectURL(stream);
        // ������������� ��� �������� ��� video
        video.src = videoStreamUrl;
    }, function () {
        console.log('���-�� �� ��� � ������������ ��� ������������ �������� ��� ������������ :P');
    });
</script>

</body>
</html>