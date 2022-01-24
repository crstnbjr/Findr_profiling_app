<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css">

        <!-- 3D Model Viewer -->
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

        <style>
          .Hotspot{
            font-weight: 100;
            opacity: 0;
          }
          .Hotspot:hover{
            font-weight: 100;
            opacity: 100;
          }

          .cont-map-left {
            flex: 60%;
          }

          /* Map Right Side */
          .cont-map-right {
            flex: 40%;
          }

          #map-pic{
            width: 85%;
            height: 70%;
            margin-top: 50px;
            margin-left: 8%;
          }
        </style>
    </head>

      <!-- Navigation Bar -->
      <header>
        <div class="navbar">
          <img id="logo1" src="../assets/findr-logo.png">
          <ul>
            <li><a  href="home-page.php">Home</a></li>
            <li><a class="active" href="map-page.php">Map</a></li>
            <li><a href="list-page.php">List</a></li>
            <li><a href="program-page.php">Programs</a></li>
          </ul>
          
      </header>

      <body>
        <div class="map-flex-container">
            <div class="cont-map-left">
            <model-viewer bounds="tight" src="3D/final.glb" ar ar-modes="webxr scene-viewer quick-look" 
            camera-controls environment-image="3D/environment1.hdr"  
            shadow-intensity="1" exposure="1" auto-rotate>
                                                                                                  <button class="Hotspot" slot="hotspot-1" data-position="-15.565874174653697m 2.12591737586463m -12.366140907641523m" data-normal="-0.9999996157291173m 0m 0.0008766650546560011m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">1 CRUSADA, B</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-2" data-position="-31.944197917240167m 1.6744548891499438m 26.752756368056616m" data-normal="-0.006216478988546661m 0m 0.9999806775078133m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">2 ROCKWELL, E</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-5" data-position="-27.5056129475062m 2.123555327000935m 26.856476680468365m" data-normal="-0.006216478988546661m 0m 0.9999806775078133m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">3 EBRADO, N</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-6" data-position="-20.177496678045422m 2.14712682854895m 26.855782409571525m" data-normal="-0.006216478988546661m 0m 0.9999806775078133m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">4 MONDILLA, C</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-7" data-position="-13.157612837761473m 2.119403392325612m 26.855869511049356m" data-normal="-0.006216478988546661m 0m 0.9999806775078133m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">5 BANGOT, A</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-8" data-position="-8.122398321193472m 2.319765503823975m 26.873864148903884m" data-normal="-0.006216478988546772m 0m 0.9999806775078133m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">6 MACABALE, M</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-9" data-position="-0.2382225990295428m 2.1364935736009887m 25.20910008772675m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">7 PAGULONG, N</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-10" data-position="-21.684338337630983m 2.1737291821956255m 19.05256208456496m" data-normal="-0.999777233126085m 0m -0.021106494800173684m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">8 YU, R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-11" data-position="-23.52222231436991m 2.130241571168508m 15.462349603722627m" data-normal="0.02412278380667372m 0m 0.999709003311172m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">9 CUARESMA, A</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-12" data-position="-27.536750483706516m 2.07316219942914m 15.46970270984841m" data-normal="0.02412278380667372m 0m 0.999709003311172m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">10 BACALSO, W</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-13" data-position="-33.063175282778346m 2.1001531274563647m 13.873032925832533m" data-normal="-0.999974740781513m 0m -0.0071075874209219365m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">11 MACARANAS, A</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-14" data-position="-33.06347937107998m 2.086430757336443m 10.348876108719914m" data-normal="-0.999974740781513m 0m -0.0071075874209219365m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">12 DAVE, W</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-15" data-position="-33.06321405179216m 2.094080765803874m 6.681624209038716m" data-normal="-0.999974740781513m 0m -0.0071075874209219365m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">13 RANAS, F</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-16" data-position="-31.629344772207574m 1.4867020858976487m 1.223858163764369m" data-normal="-1.343588383329042e-7m 0m -0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">14 SAMBAAN, P</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-17" data-position="-27.421110648634926m 1.4220030011279015m 1.2238581408688685m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">15 GOLOSINDA, C</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-18" data-position="-23.70672778495943m 1.5932386003595154m 1.2238581228371537m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">16 LIBRE, J</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-19" data-position="-19.46248904951065m 1.867503811167637m 1.2238581338214942m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">17 ARBAS, D</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-20" data-position="-15.034741341906347m 2.1425449494528466m 1.2238581188979305m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">18 ANTIVO, S</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-21" data-position="-22.205932593469672m 1.60559553189006m 9.656997002889304m" data-normal="0.9996947720619054m 0m -0.024705519870978476m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">19 BALDO, R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-22" data-position="-15.155457244522733m 1.7179768402928084m 9.492137210739749m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">20 CANARES, P</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-23" data-position="-11.042780167793364m 1.5025136671104822m 7.145015002899221m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">21 ORCALES, M</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-24" data-position="-6.786667875948883m 1.5962651953803308m 9.693143409906622m" data-normal="-1.3435883838841536e-7m 0m -0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">22 BONGCAWIL, R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-25" data-position="-0.23822259902954057m 1.4463737348857055m 6.652935032321972m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">23 OCARIZA, I</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-26" data-position="-0.2382225990295419m 2.0389585187078403m 10.789187443993429m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">24 FERNANDEZ, R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-27" data-position="-0.23822259902954013m 1.7237760636379402m 14.173571710657118m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">25 ESTO, S</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-28" data-position="-0.29238414764404386m 1.47354720548641m 17.718776191328566m" data-normal="1m 0m 5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">26 POLINAR, E</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-29" data-position="-0.29939007759094416m 1.3424002285531271m 20.991380066400694m" data-normal="1m 0m 0m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">27 MANAGING, R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-30" data-position="5.06470108709102m 1.7612105903803097m 6.146083469664589m" data-normal="-0.9999999999999962m 0m 8.742277657347586e-8m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">28 MANAGING, R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-31" data-position="6.4556632285822175m 2.031164867368179m 26.618523307768246m" data-normal="-1.3435883849943766e-7m 0m 0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">29 BONGAS, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-32" data-position="15.689156352222227m 1.8777637749624525m 26.618523316099015m" data-normal="-1.3435883849943766e-7m 0m 0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">30 ABONITALLA, J</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-33" data-position="26.837720656307518m 2.063148436672763m 26.618523317045533m" data-normal="-1.3435883849943766e-7m 0m 0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">31 AMPOLITOD , R</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-34" data-position="33.564866876585505m 1.9927381094426366m 26.61852334072917m" data-normal="-1.3435883849943766e-7m 0m 0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">32 CABINGAS, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-35" data-position="37.00414414654692m 1.7256358215227694m 17.251769096172367m" data-normal="5.551115123125784e-17m 0.002976670417137655m 0.9999955697068001m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">33 ALINOG, N</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-36" data-position="37.05120897293091m 1.890797657634604m 3.6757378874561937m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">34 ERCILLO, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-37" data-position="27.648176407821197m 1.6562283473832784m 8.00438335137843m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">35 GALEON, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-38" data-position="23.540421065507914m 1.7094967150411218m 12.111164346997768m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">36 LODOVICO, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-39" data-position="5.059778087094503m 1.734269871710192m -5.571750964970882m" data-normal="-0.9990734555257672m 0m 0.04303754713971237m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">37 LUNTAYAO, J</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-40" data-position="8.97622870047342m 1.9302578690055172m -26.900665992811206m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">38 MACAHILOS, E</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-41" data-position="22.590561873676606m 2.016355317377684m -26.89307091150674m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">39 MORALES, N</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-42" data-position="27.359027090106295m 1.8631823577026938m -26.840725646026748m" data-normal="-1.3435883844392651e-7m 0m -0.999999999999991m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">40 NACALABAN, S</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-43" data-position="37.051208972930915m 2.023930519989821m -25.699615948374547m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">41 NARBAY, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-44" data-position="37.051208972930915m 2.0827889027038724m -18.615381465860214m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">42 EBANALO, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-45" data-position="37.05120897293092m 1.8736023526086307m -13.662765283282127m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">43 CAPILI, L</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-46" data-position="36.98273771875739m 1.8186142107001513m -4.2584728099644575m" data-normal="1m 0m -5.551115123125784e-17m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">44 POLINAR, C</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-47" data-position="29.49444510417728m 1.7279201756546838m -2.747957513403076m" data-normal="-1.3435883849943766e-7m 0m 0.9999999999999911m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">45 SILVESTRE, S</div>
                                                                                                  </button><button class="Hotspot" slot="hotspot-48" data-position="22.68603304471913m 2.9041997666025856m -4.996702631117026m" data-normal="0.7814943612389299m 0m 0.6239123042157104m" data-visibility-attribute="visible">
                                                                                                      <div class="HotspotAnnotation">BRGY HALL</div>
                                                                                                  </button>
</model-viewer>


              </button>
          </model-viewer>

            </div>

            <div class="cont-map-right" >
                  <form action="map-search.php" method="POST">
                      <div class="form1" style="">
                      <input id="map-input" placeholder="First Name" type="text" name="Fname" required/>
                      </div>
                      
                      <div class="form2">
                      <input id="map-input" placeholder="Last Name"type="text" name="Lname" required/>
                      </div>
          
                      <div class="form3">
                      <button id="map-submit" class="submit" >FIND</button>
                      </div>
                  </form>
              <img id="map-pic" src="../assets/map-people.png">
            </div>
        </div>
      </body>
</html>