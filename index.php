 
<!DOCTYPE html>
<html>
    <head>
        <meta name="apple-mobile-web-app-capable" content="yes">
        
     
        <script src="js/aframe.0.5.0.min.js"></script>
        <script src="js/aframe-extras.min.js"></script>
        <script src="js/aframe-hyperlink.js"></script>
        <script src="js/aframe-travel-component.js"></script>

    </head>
    
    <body>
       <a-scene>

  
            <a-assets>
        
           	<!--object buku -->	

           	 <!-- rakbukuvr -->
                <a-asset-item id="rakbukuvrar" src="models/rakbukuvrar.obj"></a-asset-item>
                <a-asset-item id="rakbukuvrar-mtl" src="models/rakbukuvrar.mtl"></a-asset-item>

			 <!-- rakbukumppl -->
                <a-asset-item id="rakbukumppl1" src="models/rakbukumppl1.obj"></a-asset-item>
                <a-asset-item id="rakbukumppl1-mtl" src="models/rakbukumppl1.mtl"></a-asset-item>

             <!-- rakbukudatamining -->
                <a-asset-item id="rakbukudmin" src="models/rakbukudmin.obj"></a-asset-item>
                <a-asset-item id="rakbukudmin-mtl" src="models/rakbukudmin.mtl"></a-asset-item>
			 
			 <!-- lemariselatan -->
                <a-asset-item id="lemariselatan" src="models/lemariselatan.obj"></a-asset-item>
                <a-asset-item id="lemariselatan-mtl" src="models/lemariselatan.mtl"></a-asset-item>

              <!-- rakbukualpro -->
                <a-asset-item id="rakbukupro" src="models/rakbukupro.obj"></a-asset-item>
                <a-asset-item id="rakbukupro-mtl" src="models/rakbukupro.mtl"></a-asset-item>  
            
           	 <!-- rakbukujaringan -->
                <a-asset-item id="rakbukujaringan" src="models/rakbukujaringan.obj"></a-asset-item>
                <a-asset-item id="rakbukujaringan-mtl" src="models/rakbukujaringan.mtl"></a-asset-item>  

             <!-- rakbukurobotika -->
                <a-asset-item id="rakbukurobotika" src="models/rakbukurobotika.obj"></a-asset-item>
                <a-asset-item id="rakbukurobotika-mtl" src="models/rakbukurobotika.mtl"></a-asset-item>  

             <!-- rakbukuos -->
                <a-asset-item id="rakbukuos" src="models/rakbukuos.obj"></a-asset-item>
                <a-asset-item id="rakbukuos-mtl" src="models/rakbukuos.mtl"></a-asset-item>  

             <!-- rakbukuweb -->
                <a-asset-item id="rakbukuweb" src="models/rakbukuweb.obj"></a-asset-item>
                <a-asset-item id="rakbukuweb-mtl" src="models/rakbukuweb.mtl"></a-asset-item> 

             <!-- rakbukudesain -->
                <a-asset-item id="rakbukudesain" src="models/rakbukudesain.obj"></a-asset-item>
                <a-asset-item id="rakbukudesain-mtl" src="models/rakbukudesain.mtl"></a-asset-item>

             <!-- rakbukukp-->
                <a-asset-item id="rakbukukp" src="models/rakbukukp.obj"></a-asset-item>
                <a-asset-item id="rakbukukp-mtl" src="models/rakbukukp.mtl"></a-asset-item>

              <!-- rakbukudesainkiri -->
                <a-asset-item id="rakbukudesainkiri" src="models/rakbukudesainkiri.obj"></a-asset-item>
                <a-asset-item id="rakbukudesainkiri-mtl" src="models/rakbukudesainkiri.mtl"></a-asset-item>

               <!-- rakartikel -->
                <a-asset-item id="rakartikel" src="models/rakartikel.obj"></a-asset-item>
                <a-asset-item id="rakartikel-mtl" src="models/rakartikel.mtl"></a-asset-item>


 			<!-- object lain -->

              <!-- ruangan -->
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

                <!-- mejakursi1 -->
                <a-asset-item id="mejakursi1" src="models/mejakursi1.obj"></a-asset-item>
                <a-asset-item id="mejakursi1-mtl" src="models/mejakursi1.mtl"></a-asset-item>

                 <!-- mejareservasi -->
                <a-asset-item id="mejareservasi" src="models/mejareservasi.obj"></a-asset-item>
                <a-asset-item id="mejareservasi-mtl" src="models/mejareservasi.mtl"></a-asset-item>

                <!-- rakbarat -->
                <a-asset-item id="rakbarat" src="models/rakbarat.obj"></a-asset-item>
                <a-asset-item id="rakbarat-mtl" src="models/rakbarat.mtl"></a-asset-item>

                 <!-- rakbukuselatan -->
                <a-asset-item id="rakbukuselatan" src="models/rakbukuselatan.obj"></a-asset-item>
                <a-asset-item id="rakbukuselatan-mtl" src="models/rakbukuselatan.mtl"></a-asset-item>

                <!-- raktimur -->
                <a-asset-item id="raktimur" src="models/raktimur.obj"></a-asset-item>
                <a-asset-item id="raktimur-mtl" src="models/raktimur.mtl"></a-asset-item>

                <!-- raktimur1 -->
                <a-asset-item id="raktimur1" src="models/raktimur1.obj"></a-asset-item>
                <a-asset-item id="raktimur1-mtl" src="models/raktimur1.mtl"></a-asset-item>

                <!-- raktv -->
                <a-asset-item id="raktv" src="models/raktv.obj"></a-asset-item>
                <a-asset-item id="raktv-mtl" src="models/raktv.mtl"></a-asset-item>

                <!-- raktv -->
                <a-asset-item id="tangga" src="models/tangga.obj"></a-asset-item>
                <a-asset-item id="tangga-mtl" src="models/tangga.mtl"></a-asset-item>

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

            </a-assets>

   
        <!--object buku -->	

            <!-- rakbukuvr -->
            <a-obj-model  src="#rakbukuvrar" mtl="#rakbukuvrar-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=6"></a-obj-model>

            <!-- rakmppl -->
            <a-obj-model  src="#rakbukumppl1" mtl="#rakbukumppl1-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=8"></a-obj-model>

            <!-- rakdatamining -->
            <a-obj-model  src="#rakbukudmin" mtl="#rakbukudmin-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=1"></a-obj-model>

            <!-- lemariselatan -->
            <a-obj-model  src="#lemariselatan" mtl="#lemariselatan-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=9"></a-obj-model>

            <!-- rakbukualpro -->
            <a-obj-model  src="#rakbukupro" mtl="#rakbukupro-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=7"></a-obj-model>

            <!-- rakbukujaringan -->
            <a-obj-model  src="#rakbukujaringan" mtl="#rakbukujaringan-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=3"></a-obj-model>

            <!-- rakbukujaringan -->
            <a-obj-model  src="#rakbukurobotika" mtl="#rakbukurobotika-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=13"></a-obj-model>

            <!-- rakbukuos -->
            <a-obj-model  src="#rakbukuos" mtl="#rakbukuos-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=11"></a-obj-model>

            <!-- rakbukuweb -->
            <a-obj-model  src="#rakbukuweb" mtl="#rakbukuweb-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=12"></a-obj-model>

            <!-- rakbukudesain -->
            <a-obj-model  src="#rakbukudesain" mtl="#rakbukudesain-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=4"></a-obj-model>

            <!-- rakbukudesain -->
            <a-obj-model  src="#rakbukukp" mtl="#rakbukukp-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=10"></a-obj-model>
            
            <!-- rakbukudesainkiri -->
            <a-obj-model  src="#rakbukudesainkiri" mtl="#rakbukudesainkiri-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=2"></a-obj-model>
        
            <!-- rakartikel -->
            <a-obj-model  src="#rakartikel" mtl="#rakartikel-mtl" href="http://localhost/ta/selectgenrebuku.php?rak_id=5"></a-obj-model>
        
 		<!-- object lain -->

 			<!-- ruangan -->
            <a-obj-model  src="#dinding" mtl="#dinding-mtl"></a-obj-model>

            <!-- lantai -->
            <a-obj-model  src="#ubin" mtl="#ubin-mtl"></a-obj-model>

            <!-- alas -->
            <a-obj-model  src="#alas" mtl="#alas-mtl"></a-obj-model>

			<!-- lemaripenyimpanan -->
            <a-obj-model  src="#lemaripenyimpanan" mtl="#lemaripenyimpanan-mtl"></a-obj-model>

            <!-- lemariujung -->
            <a-obj-model  src="#lemariujung" mtl="#lemariujung-mtl"></a-obj-model>

            <!-- mejaduduk -->
            <a-obj-model  src="#mejaduduk" mtl="#mejaduduk-mtl"></a-obj-model> 
            
            <!-- mejakomputer -->
            <a-obj-model  src="#mejakomputer" mtl="#mejakomputer-mtl"></a-obj-model> 

            <!-- mejakursi -->
            <a-obj-model  src="#mejakursi" mtl="#mejakursi-mtl" ></a-obj-model> 
                   
            <!-- mejakursi1 -->
            <a-obj-model src="#mejakursi1" mtl="#mejakursi1-mtl" ></a-obj-model>   

            <!-- mejareservasi -->
            <a-obj-model  src="#mejareservasi" mtl="#mejareservasi-mtl"></a-obj-model> 

            <!-- rakbarat -->
            <a-obj-model  src="#rakbarat" mtl="#rakbarat-mtl"></a-obj-model>

            <!-- rakbukuselatan -->
            <a-obj-model  src="#rakbukuselatan" mtl="#rakbukuselatan-mtl"></a-obj-model>
            
            <!-- raktimur -->
            <a-obj-model  src="#raktimur" mtl="#raktimur-mtl"></a-obj-model>
            
            <!-- raktimur1 -->
            <a-obj-model  src="#raktimur1" mtl="#raktimur1-mtl"></a-obj-model>
            
            <!-- raktv -->
            <a-obj-model src="#raktv" mtl="#raktv-mtl" travel-node="transition: fade" ></a-obj-model>
            
            <!-- tangga -->
            <!-- <a-obj-model src="#tangga" mtl="#tangga-mtl" ></a-obj-model> -->
        

        <!-- penanda -->

 			<!-- a-algo -->
            <a-obj-model position="16.272 0 -14.666." src="#a-algo" mtl="#a-algo-mtl" travel-node="transition: fade" ></a-obj-model>
    		
    		<!-- a-artikel -->
            <a-obj-model position="9.660 0 12.047" src="#a-artikel" mtl="#a-artikel-mtl" travel-node="transition: fade" ></a-obj-model>
   			
			<!-- a-artikel1 -->
            <a-obj-model position=" 11.059 0 -0,075 " src="#a-artikel1" mtl="#a-artikel1-mtl" travel-node="transition: fade" ></a-obj-model>
            
			<!-- a-desain -->
            <a-obj-model position="-2.361 0 3.609" src="#a-desain" mtl="#a-desain-mtl" travel-node="transition: fade" ></a-obj-model>

			<!-- a-dm -->
            <a-obj-model position="27.546 0 -2.656" src="#a-dm" mtl="#a-dm-mtl" travel-node="transition: fade" ></a-obj-model>
 
			<!-- a-game -->
            <a-obj-model position="6.561 0 -14.666" src="#a-game" mtl="#a-game-mtl" travel-node="transition: fade" ></a-obj-model>
               


	   <!-- langit -->
        <a-sky color="#ECECEC"></a-sky>
        
        <!-- lampu -->
        <a-entity light="type: ambient; color: #FFFFFF"></a-entity>
        <a-entity light="type: directional; color: #FFF; intensity: 0.10" position="-0.5 1 1"></a-entity>
        
        <!-- posisi kamera -->
        <a-entity >
            <a-camera position="6 6 15" wasd-control="acceleration: 100">
                <a-cursor color="#4CC3D9"></a-cursor>
            </a-camera>
        </a-entity> 
       </a-scene>

       
    </body>
</html>