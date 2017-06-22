<html>
  <head>
    <title>Text</title>
    <meta charset="utf-8">
    <meta name="description" content="aframe-border-component example">
        <script src="js/aframe.0.5.0.min.js"></script>
        <script src="js/aframe-extras.min.js"></script>
          <script src="js/aframe-hyperlink.js"></script>
          <script src="js/aframe-master.js"></script>
           <script src="js/touch-controls.js"></script>
  

  </head>
  <body>
     <a-scene fog="type: linear; color: #FFEBDE; far:195">
      <a-assets>
        <a-mixin
          id="marker"
          geometry="primitive: plane; width: 0.02; height: 0.02"
          material="color: red"
        ></a-mixin>
      </a-assets>
 
<!--         <a-assets>
          <video id="video" src="video/bbb.mp4"></video>
        </a-assets>
        <a-video src="#video" width="16" height="9" position="0 0 -20"></a-video >
 -->


<!-- ruangan -->
<a-asset-item id="dinding1" src="models/lemaripenyimpanan.obj"></a-asset-item>
<a-asset-item id="dinding1-mtl" src="models/lemaripenyimpanan.mtl"></a-asset-item>
  
<!-- ruangan -->
<a-obj-model  src="#dinding1" mtl="#dinding1-mtl" static-body ></a-obj-model>


<!-- ruangan -->
<a-asset-item id="dinding" src="models/dinding2.obj"></a-asset-item>
<a-asset-item id="dinding-mtl" src="models/dinding2.mtl"></a-asset-item>
  
<!-- ruangan -->
<a-obj-model  src="#dinding" mtl="#dinding-mtl" static-body></a-obj-model>

        <a-sky color="pink"></a-sky>

      
        </a-entity>  
 <a-entity camera universal-controls  kinematic-body="radius: 2.22; height: 6" position="6 6 0" height="20"></a-entity>



    </a-scene>

  </body>
 
</html>
