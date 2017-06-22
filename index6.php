 
<!DOCTYPE html>
<html>
    <head>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="aframe-border-component example">
         <title>RBTC</title>
     
        <script src="js/aframe.0.5.0.min.js"></script>
        <script src="js/aframe-extras.min.js"></script>
        <script src="js/aframe-hyperlink.js"></script>
        <script src="js/aframe-travel-component.js"></script>
         <script src="js/gradientsky.min.js"></script>
         <script src="js/aframe-master.js"></script>
         <script src="js/touch-controls.js"></script>

        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
      <div id="container" class="container">
          <div class="info">
            <div class="title">RBTC</div>
            <a class="button" id="start_experience" href="#">start experience</a>
            <div class="instructions">
              <div><strong>VR</strong>: Hand controllers and teleport with trigger.</div>
              <div><strong>Desktop</strong>: Keyboard (WASD/arrows) and mouse.</div>
              <div><strong>Mobile</strong>: Gaze cursor and teleportation.</div>
            </div>
          </div>
        </div>

       <a-scene >

  
            <a-assets>
        
            <!--object buku --> 

             <!-- rakbukuvr -->
                <a-asset-item id="rakbukuvrar" src="models/rakbukuvrar2.obj"></a-asset-item>
                <a-asset-item id="rakbukuvrar-mtl" src="models/rakbukuvrar2.mtl"></a-asset-item>

             <!-- rakbukumppl -->
                <a-asset-item id="rakbukumppl1" src="models/rakbukumppl1.obj"></a-asset-item>
                <a-asset-item id="rakbukumppl1-mtl" src="models/rakbukumppl1.mtl"></a-asset-item>

             <!-- rakbukudatamining -->
                <a-asset-item id="rakbukudmin" src="models/rakbukudm1.obj"></a-asset-item>
                <a-asset-item id="rakbukudmin-mtl" src="models/rakbukudm1.mtl"></a-asset-item>
             
             <!-- lemariselatan -->
                <a-asset-item id="lemariselatan" src="models/lemariselatan2.obj"></a-asset-item>
                <a-asset-item id="lemariselatan-mtl" src="models/lemariselatan2.mtl"></a-asset-item>

              <!-- rakbukurobotika -->
                <a-asset-item id="rakbukurobotika" src="models/rakbukurobotika.obj"></a-asset-item>
                <a-asset-item id="rakbukurobotika-mtl" src="models/rakbukurobotika.mtl"></a-asset-item>  

               <!-- rakbukuweb -->
                <a-asset-item id="rakbukuweb" src="models/rakbukuweb.obj"></a-asset-item>
                <a-asset-item id="rakbukuweb-mtl" src="models/rakbukuweb.mtl"></a-asset-item> 

              <!-- rakbukualpro -->
                <a-asset-item id="rakbukupro" src="models/rakbukualpro.obj"></a-asset-item>
                <a-asset-item id="rakbukupro-mtl" src="models/rakbukualpro.mtl"></a-asset-item>  
            
             <!-- rakbukujaringan -->
                <a-asset-item id="rakbukujaringan" src="models/rakbukujaringan.obj"></a-asset-item>
                <a-asset-item id="rakbukujaringan-mtl" src="models/rakbukujaringan.mtl"></a-asset-item>  

             <!-- rakbukuos -->
                <a-asset-item id="rakbukuos" src="models/rakbukuos.obj"></a-asset-item>
                <a-asset-item id="rakbukuos-mtl" src="models/rakbukuos.mtl"></a-asset-item>  

             <!-- rakbukukp-->
                <a-asset-item id="rakbukukp" src="models/rakbukukp.obj"></a-asset-item>
                <a-asset-item id="rakbukukp-mtl" src="models/rakbukukp.mtl"></a-asset-item>
            
             <!-- rakbukudesain -->
                <a-asset-item id="rakbukudesain" src="models/rakbukudesain.obj"></a-asset-item>
                <a-asset-item id="rakbukudesain-mtl" src="models/rakbukudesain.mtl"></a-asset-item>


              <!-- rakbukudesainkiri -->
                <a-asset-item id="rakbukudesainkiri" src="models/rakbukudesainkiri.obj"></a-asset-item>
                <a-asset-item id="rakbukudesainkiri-mtl" src="models/rakbukudesainkiri.mtl"></a-asset-item>

               <!-- rakartikel -->
                <a-asset-item id="rakartikel" src="models/rakartikel.obj"></a-asset-item>
                <a-asset-item id="rakartikel-mtl" src="models/rakartikel.mtl"></a-asset-item>


            <!-- object lain -->

            <!-- Dinding -->
                <a-asset-item id="dinding" src="models/dinding.obj"></a-asset-item>
                <a-asset-item id="dinding-mtl" src="models/dinding.mtl"></a-asset-item>

              <!-- lantai -->
                <a-asset-item id="ubin" src="models/ubin.obj"></a-asset-item>
                <a-asset-item id="ubin-mtl" src="models/ubin.mtl"></a-asset-item>

               <!-- ruangan -->
                <a-asset-item id="alas" src="models/alas.obj" ></a-asset-item>
                <a-asset-item id="alas-mtl" src="models/alas.mtl"></a-asset-item>

               <!-- lemaripenyimpanan -->
                <a-asset-item id="lemaripenyimpanan" src="models/lemaripenyimpanan.obj"></a-asset-item>
                <a-asset-item id="lemaripenyimpanan-mtl" src="models/lemaripenyimpanan.mtl"></a-asset-item>

                <!-- lemariujung -->
                <a-asset-item id="lemariujung" src="models/lemariujung.obj"></a-asset-item>
                <a-asset-item id="lemariujung-mtl" src="models/lemariujung.mtl"></a-asset-item>

                <!-- mejaduduk -->
                <a-asset-item id="mejaduduk" src="models/mejaduduk.obj"></a-asset-item>
                <a-asset-item id="mejaduduk-mtl" src="models/mejaduduk.mtl"></a-asset-item>

                <!-- mejakomputer -->
                <a-asset-item id="mejakomputer" src="models/mejakomputer.obj"></a-asset-item>
                <a-asset-item id="mejakomputer-mtl" src="models/mejakomputer.mtl"></a-asset-item>

                <!-- mejakursi -->
                <a-asset-item id="mejakursi" src="models/mejakursi.obj"></a-asset-item>
                <a-asset-item id="mejakursi-mtl" src="models/mejakursi.mtl"></a-asset-item>

                 <!-- mejareservasi -->
                <a-asset-item id="mejareservasi" src="models/mejareservasi4.obj"></a-asset-item>
                <a-asset-item id="mejareservasi-mtl" src="models/mejareservasi4.mtl"></a-asset-item>

                 <!-- kursi -->
                <a-asset-item id="kursi1" src="models/kursi3.obj"></a-asset-item>
                <a-asset-item id="kursi1-mtl" src="models/kursi3.mtl"></a-asset-item>

                <!-- kursi -->
                <a-asset-item id="kursi2" src="models/kursi4.obj"></a-asset-item>
                <a-asset-item id="kursi2-mtl" src="models/kursi4.mtl"></a-asset-item>
 
                 <!-- rakbukuselatan -->
                <a-asset-item id="raktengah" src="models/raktengah.obj"></a-asset-item>
                <a-asset-item id="raktengah-mtl" src="models/raktengah.mtl"></a-asset-item>
                
                <!-- raktimur -->
                <a-asset-item id="raktimur3" src="models/raktimur5.obj"></a-asset-item>
                <a-asset-item id="raktimur3-mtl" src="models/raktimur5.mtl"></a-asset-item>

                <!-- tumbuhan -->
                <a-asset-item id="tumbuhan" src="models/tumbuhan4.obj"></a-asset-item>
                <a-asset-item id="tumbuhan-mtl" src="models/tumbuhan4.mtl"></a-asset-item>

                 <!-- tumbuhan -->
                <a-asset-item id="tumbuhan5" src="models/tumbuhan5.obj"></a-asset-item>
                <a-asset-item id="tumbuhan-mtl5" src="models/tumbuhan5.mtl"></a-asset-item>

                  <!-- tumbuhan -->
                <a-asset-item id="tumbuhan6" src="models/tumbuhan6.obj"></a-asset-item>
                <a-asset-item id="tumbuhan-mtl6" src="models/tumbuhan6.mtl"></a-asset-item>

                <!-- raktv -->
                <a-asset-item id="raktv" src="models/raktv5.obj"></a-asset-item>
                <a-asset-item id="raktv-mtl" src="models/raktv5.mtl"></a-asset-item>

                <!-- tv -->
                <a-asset-item id="tv" src="models/tv.obj"></a-asset-item>
                <a-asset-item id="tv-mtl" src="models/tv.mtl"></a-asset-item>

            <!-- penanda -->

             <!-- a-algo -->
                <a-asset-item id="a-algo" src="models/penanda/a-algo.obj"></a-asset-item>
                <a-asset-item id="a-algo-mtl" src="models/penanda/a-algo.mtl"></a-asset-item>

             <!-- a-artikel -->
                <a-asset-item id="a-artikel" src="models/penanda/a-artikel.obj"></a-asset-item>
                <a-asset-item id="a-artikel-mtl" src="models/penanda/a-artikel.mtl"></a-asset-item>

            <!-- a-artikel1 -->
                <a-asset-item id="a-artikel1" src="models/penanda/a-artikel1.obj"></a-asset-item>
                <a-asset-item id="a-artikel1-mtl" src="models/penanda/a-artikel1.mtl"></a-asset-item>

            <!-- a-desain -->
                <a-asset-item id="a-desain" src="models/penanda/a-desain.obj"></a-asset-item>
                <a-asset-item id="a-desain-mtl" src="models/penanda/a-desain.mtl"></a-asset-item>

            <!-- a-dm -->
                <a-asset-item id="a-dm" src="models/penanda/a-dm.obj"></a-asset-item>
                <a-asset-item id="a-dm-mtl" src="models/penanda/a-dm.mtl"></a-asset-item>

            <!-- a-game -->
                <a-asset-item id="a-game" src="models/penanda/a-game.obj"></a-asset-item>
                <a-asset-item id="a-game-mtl" src="models/penanda/a-game.mtl"></a-asset-item>

        <!-- Video -->
                <video id="penguin-sledding" autoplay loop="true" src="video/rbtc.mp4"></video>
        
      
            
        <!-- Video -->
            <a-video src="#penguin-sledding" width="7" height="4" position="-14.148 13.152 12.408" rotation="0 90 0" scala="0.806 0.830 1.00"></a-video>

    
        <!--object buku --> 

            <!-- rakbukuvr -->
            <a-obj-model  src="#rakbukuvrar" mtl="#rakbukuvrar-mtl"  href="selectgenrebuku.php?rak_id=6" static-body></a-obj-model>

            <!-- rakmppl -->
            <a-obj-model  src="#rakbukumppl1" mtl="#rakbukumppl1-mtl" href="selectgenrebuku.php?rak_id=8" static-body></a-obj-model>

            <!-- rakdatamining -->
            <a-obj-model  src="#rakbukudmin" mtl="#rakbukudmin-mtl"  href="selectgenrebuku.php?rak_id=1" static-body></a-obj-model>

            <!-- lemariselatan -->
            <a-obj-model  src="#lemariselatan" mtl="#lemariselatan-mtl" href="selectgenrebuku.php?rak_id=9" static-body></a-obj-model>

            <!-- rakbukualpro -->
            <a-obj-model  src="#rakbukupro" mtl="#rakbukupro-mtl" href="selectgenrebuku.php?rak_id=7" static-body></a-obj-model>

            <!-- rakbukujaringan -->
            <a-obj-model  src="#rakbukujaringan" mtl="#rakbukujaringan-mtl" href="selectgenrebuku.php?rak_id=3" static-body></a-obj-model>

            <!-- rakbukurobotika -->
            <a-obj-model  src="#rakbukurobotika" mtl="#rakbukurobotika-mtl" href="selectgenrebuku.php?rak_id=13" static-body></a-obj-model>

            <!-- rakbukuos -->
            <a-obj-model  src="#rakbukuos" mtl="#rakbukuos-mtl" href="selectgenrebuku.php?rak_id=11" static-bodystatic-body></a-obj-model>

            <!-- rakbukuweb -->
            <a-obj-model  src="#rakbukuweb" mtl="#rakbukuweb-mtl" href="selectgenrebuku.php?rak_id=12" static-body ></a-obj-model>

            <!-- rakbukudesain -->
            <a-obj-model  src="#rakbukudesain" mtl="#rakbukudesain-mtl" href="selectgenrebuku.php?rak_id=10" static-body></a-obj-model>

            <!-- rakbukukp -->
            <a-obj-model  src="#rakbukukp" mtl="#rakbukukp-mtl" href="selectgenrebuku.php?rak_id=4" static-body ></a-obj-model>
            
            <!-- rakbukudesainkiri -->
            <a-obj-model  src="#rakbukudesainkiri" mtl="#rakbukudesainkiri-mtl"  href="selectgenrebuku.php?rak_id=2" static-body ></a-obj-model>
        
            <!-- rakartikel -->
            <a-obj-model  src="#rakartikel" mtl="#rakartikel-mtl" href="selectgenrebuku.php?rak_id=5" static-body></a-obj-model>
        
        <!-- object lain -->
            <!-- dinding -->
            <a-obj-model  src="#dinding" mtl="#dinding-mtl"static-body></a-obj-model>

        
            <!-- lantai -->
            <a-obj-model    src="#ubin" mtl="#ubin-mtl"></a-obj-model>

            <!-- alas -->
            <a-obj-model  src="#alas" mtl="#alas-mtl"></a-obj-model>

            <!-- lemaripenyimpanan -->
            <a-obj-model  src="#lemaripenyimpanan" mtl="#lemaripenyimpanan-mtl" static-body></a-obj-model>

            <!-- lemariujung -->
            <a-obj-model  src="#lemariujung" mtl="#lemariujung-mtl" static-body></a-obj-model>

            <!-- mejaduduk -->
            <a-obj-model  src="#mejaduduk" mtl="#mejaduduk-mtl" static-body ></a-obj-model> 
            
            <!-- mejakomputer -->
            <a-obj-model  src="#mejakomputer" mtl="#mejakomputer-mtl" static-body ></a-obj-model> 

            <!-- mejakursi -->
            <a-obj-model  src="#mejakursi" mtl="#mejakursi-mtl"></a-obj-model> 
      
            <!-- mejareservasi -->
            <a-obj-model  src="#mejareservasi" mtl="#mejareservasi-mtl" static-body></a-obj-model> 

            <!-- mejareservasi -->
            <a-obj-model  src="#kursi1" mtl="#kursi1-mtl" static-body></a-obj-model> 

            <!-- mejareservasi -->
            <a-obj-model  src="#kursi2" mtl="#kursi2-mtl"  static-body></a-obj-model> 

            <!-- rakbukuselatan -->
            <a-obj-model  src="#rakkecil" mtl="#rakkecil-mtl"  static-body></a-obj-model>

            <!-- raktengah -->
            <a-obj-model  src="#raktengah" mtl="#raktengah-mtl" static-body ></a-obj-model>
            
             <!-- raktimur3 -->
            <a-obj-model  src="#raktimur3" mtl="#raktimur3-mtl" static-body></a-obj-model>
  
            <!-- raktv -->
            <a-obj-model  position="5 0 0" src="#raktv" mtl="#raktv-mtl" static-body></a-obj-model>
            
            <!-- tumbuhan -->
            <a-obj-model  src="#tumbuhan" mtl="#tumbuhan-mtl" static-body></a-obj-model>
             
               <!-- tumbuhan -->
            <a-obj-model  src="#tumbuhan5" mtl="#tumbuhan-mtl5"  static-body></a-obj-model>
             
                <!-- tumbuhan -->
            <a-obj-model  src="#tumbuhan6" mtl="#tumbuhan-mtl6" static-body></a-obj-model>
             
             <!-- tv -->
            <a-obj-model src="#tv" mtl="#tv-mtl" ></a-obj-model>
            
            <!-- tangga -->
            <!-- <a-obj-model src="#tangga" mtl="#tangga-mtl" ></a-obj-model> -->
        

      
               

       <!-- langit -->
        <a-gradient-sky material="shader: gradient; topColor: 46 144 201; bottomColor: 182 216 236;"></a-gradient-sky>
       

        <!-- lampu -->
        <a-entity light="type: ambient; color: #FFFFFF"></a-entity>
        <a-entity light="type: directional; color: #FFF; intensity: 0.1" position="-0.5 1 1"></a-entity>
        <a-entity light="type: directional; color: #FFF; intensity: 0.1" position="2 20 0"></a-entity>
        <a-entity light="type: directional; color: #FFF; intensity: 0.1" position="2 20 0"></a-entity>

        <!-- posisi kamera -->
        <!-- <a-entity >
            <a-camera  camera universal-controls  kinematic-body="radius: 2.22; height: 6">
                <a-cursor color="#4CC3D9"></a-cursor>
            </a-camera>
        </a-entity>  -->

         <a-entity camera universal-controls  kinematic-body="height: 8"  position="13 8 15" height="20"> </a-cursor></a-entity>

       </a-scene>
       <script src="main.js"></script>
    </body>
</html>