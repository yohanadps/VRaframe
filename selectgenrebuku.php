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

      <a-entity mixin="marker" position="-2.5 0.7 0.01"></a-entity>

      <!-- Animations. -->
      <a-entity id="opacity" position="-2.5 0.7 0"
                text="color: white; align: center; value: Animating opacity; width: 1.5">
      </a-entity>
  
      <a-entity mixin="marker" position="2.5 0.7 0.01"></a-entity>
      <a-entity id="size" position="2.5 0.7 0"
                text="color: white; align: center; value: Animating size; width: 1.5">
      </a-entity>
 
      <?php
        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
        $db = mysql_select_db("ta", $connection); // Selecting Database
        //MySQL Query to read data
        $query = mysql_query("select * from buku where rak_id=".$_GET['rak_id'], $connection);
        $y=2.5;
        while ($row = mysql_fetch_array($query)) {
       echo "<a-entity href=\"{$row['lokasi_file']}.pdf\" mixin=\"marker\" position=\"-1 {$y} 0.01\"></a-entity>";
        echo "<a-entity href=\"{$row['lokasi_file']}.pdf\" position=\"-1 {$y} 0\" text=\"width: 2; color: white;value:{$row['nama_buku']}\">
        </a-entity> ";
        $y=$y-0.5;
        }
        ?>
 
      </a-entity>

      <a-sky color="#222"></a-sky>

       <a-entity >
            <a-camera position="-1 0 2" camera look-controls wasd-control="acceleration: 100">
                <a-cursor color="#4CC3D9"></a-cursor>
            </a-camera>
        </a-entity> 
    </a-scene>



<?php
mysql_close($connection); // Closing Connection with Server
?>
    
  </body>
</html>
