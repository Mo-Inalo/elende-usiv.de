<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }

        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<video autoplay unmuted loop id="myVideo">
    <source src="/videos/winter.MP4" type="video/mp4" >
    Your browser does not support HTML5 video.
</video>

<div class="content">
    <h1>Studio</h1>
    <p> I'm Elende Usiv, a Cologne-based composer and music editor for media who has
        worked on films and commercials.
        You can hear some of my music on YouTube, Soundcloud and Spotify.
        At the same time as my film music career, I composed and arranged many pop songs for various Kurdish singers.
        who have supported my journey and career as a film music composer.</p>
    <button id="myBtn" onclick="myFunction()">Pause</button>
</div>

<script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
</script>

</body>
</html>
