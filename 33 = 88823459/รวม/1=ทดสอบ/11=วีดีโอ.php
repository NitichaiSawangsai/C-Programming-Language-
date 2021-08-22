<!DOCTYPE html> 
<html> 
<body> 

<button onclick="getPlaySpeed()" type="button">What is the default playback speed?</button>
<button onclick="setPlaySpeed()" type="button">Set video to be play in slow motion</button><br> 

<video id="myVideo" width="320" height="176" controls>
  <source src="mov_bbb.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>

<script>
var vid = document.getElementById("myVideo");

function getPlaySpeed() { 
    alert(vid.defaultPlaybackRate);
} 

function setPlaySpeed() { 
    vid.defaultPlaybackRate = 0.5;
    vid.load();
} 
</script> 

<p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.</p>

</body> 
</html>
