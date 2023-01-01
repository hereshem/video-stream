<!doctype html>
<html>
  <head>
    <title>Video Stream</title>
    <link href="video-js.css" rel="stylesheet" />
    <script src="video.min.js"></script>
  </head>
  <body>
    <center>
      <h1 id="name">Video Stream</h1>
      <p id="list">Channels</p>
      <video height="480px" id="video" class="video-js" controls poster="poster.png">
      </video>
    </center>
    <script>
        var channels = [
            {
                "name": "Beautiful Nepal",
                "url": "https://stream.ayaanshtech.com.np/vod/nepal/playlist.m3u8"
            },
            {
                "name": "Galaxy 4K TV",
                "url": "https://6176ea7a4605e.streamlock.net/Galaxy/ngrp:tv_all/playlist.m3u8"
            },
            {
                "name": "Kantipur TV",
                "url": "https://ktvhdsg.ekantipur.com:8443/ktv_desktop_02347834/hd/playlist.m3u8"
            },
            {
                "name": "Aaaj Tak",
                "url": "https://feeds.intoday.in/aajtak/api/master.m3u8"
            },
            {
                "name": "India Today",
                "url": "https://indiatodaylive.akamaized.net/hls/live/2014320/indiatoday/indiatodaylive/playlist.m3u8"
            }
        ];
        var player = videojs('video');
        var playStream = function(index){
            var stream = channels[index];
            document.getElementById('name').innerHTML = stream.name;
            document.title = stream.name;
            player.src(stream.url);
            player.play();
        };
        for (var i = 0; i < channels.length; i++) {
            document.getElementById('list').innerHTML += " | <a href='#' onclick='playStream("+i+")' id='media"+i+"'>"+channels[i].name+"</a>"; 
        }
        player.src("<?php echo $_GET['src']?:'https://stream.ayaanshtech.com.np/vod/nepal/playlist.m3u8'; ?>");
        player.play();
    </script>
</body>
</html>
