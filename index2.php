<html>
  <head>
    <title>Text</title>
    <meta name="description" content="Text - A-Frame">
        <script src="js/aframe.0.5.0.min.js"></script>
        <script src="js/aframe-extras.min.js"></script>
          <script src="js/aframe-hyperlink.js"></script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <a-mixin
          id="marker"
          geometry="primitive: plane; width: 0.02; height: 0.02"
          material="color: red"
        ></a-mixin>
      </a-assets>

    

        <a-assets>
          <video id="penguin-sledding" autoplay loop="true" src="video/bbb.mp4"></video>
        </a-assets>
        <!-- Using the asset management system. -->
        <a-video src="#penguin-sledding" width="16" height="9" position="0 0 -20"></a-video>
        <!-- Defining the URL inline. Not recommended but more comfortable for web developers. -->
        <!-- <a-video src="video/bbb.mp4"></a-video> -->

        <a-sky color="pink"></a-sky>

       <a-entity >
            <a-camera position="0 0 2" camera look-controls wasd-control="acceleration: 100">
                <a-cursor color="#4CC3D9"></a-cursor>
            </a-camera>
        </a-entity> 
    </a-scene>

  </body>
</html>
