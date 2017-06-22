 
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

    </head>
    
    <body>
    
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
                <a-asset-item id="rakbukuos" src="models/rakbukuos2.obj"></a-asset-item>
                <a-asset-item id="rakbukuos-mtl" src="models/rakbukuos2.mtl"></a-asset-item>  

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
                <a-asset-item id="alas" src="models/alas1.obj" ></a-asset-item>
                <a-asset-item id="alas-mtl" src="models/alas1.mtl"></a-asset-item>

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
                <a-asset-item id="display" src="models/display.obj"></a-asset-item>
                <a-asset-item id="display-mtl" src="models/display.mtl"></a-asset-item>

            <!-- penanda -->

             <!-- artikel -->
                <a-asset-item id="arrowartikel" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowartikel-mtl" src="models/arrow2.mtl"></a-asset-item>

     
                <!-- desainkiri -->
                <a-asset-item id="arrowdesainkiri" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowdesainkiri-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- desain -->
                <a-asset-item id="arrowdesain" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowdesain-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- os -->
                <a-asset-item id="arrowos" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowos-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- ta -->
                <a-asset-item id="arrowta" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowta-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- jaringan -->
                <a-asset-item id="arrowjaringan" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowjaringan-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- alpro -->
                <a-asset-item id="arrowalpro" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowalpro-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- web -->
                <a-asset-item id="arrowweb" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowweb-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- robotika -->
                <a-asset-item id="arrowrobotika" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowrobotika-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- mppl -->
                <a-asset-item id="arrowmppl" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowmppl-mtl" src="models/arrow2.mtl"></a-asset-item>

                <!-- data mining -->
                <a-asset-item id="arrowdm" src="models/arrow2.obj"></a-asset-item>
                <a-asset-item id="arrowdm-mtl" src="models/arrow2.mtl"></a-asset-item>


        <!-- Video -->
                <video id="video" autoplay loop="true" src="video/rbtc.mp4"></video>

        <!-- images -->
        <img id="dalpro" src="images/alpro.png">
        <img id="dartikel" src="images/artikel.png">
        <img id="ddatamining" src="images/datamining.png">
        <img id="ddesain" src="images/desain.png">
        <img id="dgame" src="images/game.png">
        <img id="djaringan" src="images/jaringan.png">
        <img id="dkp" src="images/kp.png">
        <img id="dmppl" src="images/mppl.png">
        <img id="dpaper" src="images/paper.png">
        <img id="dpweb" src="images/peweb.png">
        <img id="drobotika" src="images/robotika.png">
        <img id="dso" src="images/so.png">
        <img id="dvrar" src="images/vrar.png">

            </a-assets>
            
        <!-- Video -->
            <a-video src="#video" width="7" height="4" position="-14.189 13.152 12.408" rotation="0 90 0" scala="0.806 0.830 1.00"></a-video>

        <!-- image -->
        <a-image position="14.706 8.637 -26.257" width="1.75" height="0.75"  rotation="0 0 0" src="#dalpro" ></a-image>
        <a-image position="13.465 9.240 3.519" width="1.75" height="0.75"  src="#dartikel" ></a-image>
        <a-image position="40.141 8.637 -1.571" width="1.75" height="0.75"  rotation="0 270 0" src="#ddatamining" ></a-image>
        <a-image position="-14.870 7.596 3.592" width="1.75" height="0.75"  rotation="0 90 0" src="#ddesain" ></a-image>
        <a-image position="-14.870 7.788 -14.417" width="1.75" height="0.75"  rotation="0 90 0" src="#dgame" ></a-image>
        <a-image position="5.048 8.637 -26.257" width="1.75" height="0.75"  rotation="0 0 0" src="#djaringan" ></a-image>
        <a-image position="-14.870 7.195 -21.375" width="1.75" height="0.75"  rotation="0 90 0" src="#dkp" ></a-image>
        <a-image position="40.141 8.637 -12.020" width="1.75" height="0.75"  rotation="0 270 0" src="#dmppl" ></a-image>
        <a-image position="15.408 9.240 44.587" width="1.75" height="0.75"  rotation="0 180 0" src="#dpaper" ></a-image>
        <a-image position="24.075 8.637 -26.257" width="1.75" height="0.75"  rotation="0 0 0" src="#dpweb" ></a-image>
        <a-image position="34 8.637 -26.257" width="1.75" height="0.75"  rotation="0 0 0" src="#drobotika" ></a-image>
        <a-image position="-4.704 8.637 -26.257" width="1.75" height="0.75"  rotation="0 0 0" src="#dso" ></a-image>
        <a-image position="40.141 8.637 -22.102" width="1.75" height="0.75"  rotation="0 270 0" src="#dvrar" ></a-image>

         <!-- penanda -->
            
            <!-- artikel -->
            <a-obj-model src="#arrowartikel" mtl="#arrowartikel-mtl" travel-node="transition: move" position="13 0 12.245" ></a-obj-model>
         
            <!-- desain kiri -->
            <a-obj-model src="#arrowdesainkiri" mtl="#arrowdesainkiri-mtl" travel-node="transition: move" position="-9.9 0 5.725" ></a-obj-model>
            <!-- desain -->
             <a-obj-model src="#arrowdesain" mtl="#arrowdesain-mtl" travel-node="transition: move" position="-10.010 0 -10.939" ></a-obj-model>
             <!-- ta -->
             <a-obj-model src="#arrowta" mtl="#arrowta-mtl" travel-node="transition: move" position="19.850 0 37.248" ></a-obj-model>
            <!-- os -->
             <a-obj-model src="#arrowos" mtl="#arrowos-mtl" travel-node="transition: move" position="-5.576 0 -19.84" ></a-obj-model>
             <!-- jaringan -->
             <a-obj-model src="#arrowjaringan" mtl="#arrowjaringan-mtl" travel-node="transition: move" position="5.638 0 -19.84" ></a-obj-model>
             <!-- alpro -->
             <a-obj-model src="#arrowalpro" mtl="#arrowalpro-mtl" travel-node="transition: move" position="14.293 0 -19.84" ></a-obj-model>
             <!-- web -->
             <a-obj-model src="#arrowweb" mtl="#arrowweb-mtl" travel-node="transition: move" position="24.329 0 -19.84" ></a-obj-model>
             <!-- robotika -->
             <a-obj-model src="#arrowrobotika" mtl="#arrowrobotika-mtl" travel-node="transition: move" position="33.681 0 -20" ></a-obj-model>
             <!-- mppl -->
             <a-obj-model src="#arrowmppl" mtl="#arrowmppl-mtl" travel-node="transition: move" position="33.681 0 -11.190" ></a-obj-model>
             <!-- data mining -->
             <a-obj-model src="#arrowdm" mtl="#arrowdm-mtl" travel-node="transition: move" position="33.681 0 -1.565" ></a-obj-model>

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
            <a-obj-model  src="#dinding" mtl="#dinding-mtl" static-body></a-obj-model>
        
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
            <a-obj-model src="#display" mtl="#display-mtl" ></a-obj-model>
            

        
       <!-- langit -->
        <a-gradient-sky material="shader: gradient; topColor: 46 144 201; bottomColor: 182 216 236;"></a-gradient-sky>
       
        <!-- lampu -->

        <a-entity light="type: ambient; color: #FFFFFF intensity: 5"></a-entity>
     
         <a-entity camera universal-controls  kinematic-body="height: 8"  position="13 8 15" height="20">  <a-cursor color="#4CC3D9"></a-cursor></a-entity>

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