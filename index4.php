<html>
  <head>
    <title>Text</title>
    <meta name="description" content="Text - A-Frame">
        <script src="js/aframe.0.5.0.min.js"></script>
        <script src="js/aframe-extras.min.js"></script>
          <script src="js/aframe-hyperlink.js"></script>
          <script src="js/aframe-master.js"></script>
           <script src="js/touch-controls.js"></script>

  </head>
  <body>
     <a-scene >
      <a-assets>
        <a-mixin
          id="marker"
          geometry="primitive: plane; width: 0.02; height: 0.02"
          material="color: red"
        ></a-mixin>
      </a-assets>
 
        <a-assets>
          <video id="video" src="video/rbtc.mp4"></video>
        </a-assets>
        <a-video src="#video" width="16" height="9" position="0 0 -20"></a-video >
         
    

<!--         <a-assets>
          <video id="penguin-sledding" autoplay loop="true" src="video/bbb.mp4"></video>
        </a-assets>
        Using the asset management system.
        <a-video src="#penguin-sledding" width="16" height="9" position="0 0 -20"></a-video> -->
        <!-- Defining the URL inline. Not recommended but more comfortable for web developers. -->
        <!-- <a-video src="video/bbb.mp4"></a-video> -->

        <a-sky color="pink"></a-sky>

       <!-- <a-entity >
            <a-camera position="0 0 2" camera look-controls wasd-control="acceleration: 100">
                <a-cursor color="#4CC3D9"></a-cursor>
            </a-camera>
        </a-entity>  -->
 <a-entity camera
          universal-controls="movementControls: custom, gamepad;"
          custom-controls></a-entity>
    </a-scene>

<script type="text/javascript">
    var scene = document.querySelector("a-scene");
    var vid = document.getElementById("video");

    if (scene.hasLoaded) {
      run();
    } else {
      scene.addEventListener("loaded", run);
    }

    function run () {
        scene.querySelector(".a-enter-vr-button").addEventListener("click", function(e){
            console.log("VR Mode entered");
            this.style.display = "none";
            vid.play();
        }, false);
    }
</script>
  </body>
 
</html>
