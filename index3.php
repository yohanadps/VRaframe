<!DOCTYPE html>
<html>
  <head>
    
    <title>Cecropia's The Hall VR in A-Frame</title>

    <link rel="stylesheet"  href="style.css">

    <script src="js/aframe.0.5.0.min.js"></script>
    <script src="js/aframe-extras.min.js"></script>
  </head>

  <body>
 

    <!--<a-scene stats>-->

    <a-scene>

      <a-entity mobile></a-entity>

      <a-entity light="type: directional; color: #FFF; intensity: 0.5" position="2 20 0"></a-entity>
      <a-entity light="type: ambient; color: #FFF"></a-entity>


      <a-sky color="#EEEEFF" material="src: #sky_sphere-texture"></a-sky>
         <a-assets>
    <!-- rakartikel -->
                <a-asset-item id="rakartikel" src="models/rakartikel.obj"></a-asset-item>
                <a-asset-item id="rakartikel-mtl" src="models/rakartikel.mtl"></a-asset-item>
                

                <a-asset-item id="tumbuhan" src="models/tumbuhan4.obj"></a-asset-item>
                <a-asset-item id="tumbuhan-mtl" src="models/tumbuhan4.mtl"></a-asset-item>

                   </a-assets>

                      <!-- rakartikel -->
            <a-obj-model  src="#tumbuhan" mtl="#tumbuhan-mtl" href="selectgenrebuku.php?rak_id=5"></a-obj-model>
        
            <a-obj-model  src="#rakartikel" mtl="#rakartikel-mtl" href="selectgenrebuku.php?rak_id=5"></a-obj-model>
        
     <a-entity >
            <a-camera position="6 6 15" wasd-control="acceleration: 100">
                <a-cursor color="#4CC3D9"></a-cursor>
            </a-camera>
        </a-entity> 


        <a-entity id="navcubeRot" position="" rotation="" scale="" visible="">
            <a-image data-array-link="nav" data-array="persist_ui" src="images/menu.png" position="-2.1 -2 -1.9" width="1" height=".5" rotation="-45 0 0" material="" geometry="" scale="" visible=""></a-image>
        </a-entity>

    </a-scene>
 
  </body>

</html>
