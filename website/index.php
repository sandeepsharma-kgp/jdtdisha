<html>

<head>

    <title>Polymer Workshop</title>


    <meta name="viewport"
    content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="app.css">

    <script src="../components/webcomponentsjs/webcomponents.js">
    </script>
    <script src="bower_components/platform/platform.js"></script>

    <link rel="import"
      href="../components/font-roboto/roboto.html">

    <link rel="import"
      href="../components/core-header-panel/core-header-panel.html">

    <link rel="import"
      href="../components/core-drawer-panel/core-drawer-panel.html">

    <link rel="import"
      href="../components/core-icon-button/core-icon-button.html">

    <link rel="import"
      href="../components/core-toolbar/core-toolbar.html">

    <link rel="import"
      href="../components/paper-icon-button/paper-icon-button.html">

    <link rel="import"
      href="../components/paper-button/paper-button.html">

    <link rel="import"
      href="../components/paper-shadow/paper-shadow.html">

    <link rel="import"
      href="../components/paper-input/paper-input.html">

    <link rel="import"
      href="../components/paper-ripple/paper-ripple.html">

    <link rel="import"
      href="../components/core-icons/core-icons.html">

    <link rel="import"
      href="../components/core-menu/core-menu.html">

    <link rel="import"
      href="../components/core-item/core-item.html">

    <link rel="import"
      href="../components/polymer-simple-slider/src/simple-slider.html">

    <link rel="import"
      href="../components/polymer-elements/polymer-elements.html">

</head>

<body fullbleed layout vertical unresolved>
    <core-drawer-panel id='drawerPanel' responsiveWidth="10000px">
        <core-header-panel drawer>
            <core-toolbar>
                <paper-icon-button id='back' icon='arrow-back'></paper-icon-button>
                <core-item label='MENU'></core-item>
            </core-toolbar>
            <core-menu>
                <core-item icon='home'>
                    <div>HOME</div>
                    <a href='index.php'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>MISSION</div>
                    <a href='mission.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>APPROACH</div>
                    <a href='approach.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>HISTORY</div>
                    <a href='history.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>MODEL</div>
                    <a href='model.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>DISHA IN ACTION</div>
                    <a href='DIA.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>COMMUNITY PARTICIPATION</div>
                    <a href='ComPar.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>VOLUNTEERS</div>
                    <a href='volu.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>DISHA'S ACHIEVEMENTS</div>
                    <a href='DAs.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>TRUSTEES</div>
                    <a href='trustees.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
                <core-item icon='account-circle'>
                    <div>DONATIONS</div>
                    <a href='donate.html'><paper-ripple fit></paper-ripple></a>
                </core-item>
              
                <core-item class='nocolor'>
                    <div></div>
                </core-item>
                <core-item icon='account-circle'>
                    <div>Link to <a href='http://ourdisha.org/'>ourdisha.org<paper-ripple fit></paper-ripple></a></div>

                </core-item>
            </core-menu>
        </core-header-panel>

        <core-header-panel main>
            <core-toolbar>
                <paper-icon-button id='navicon' icon='menu'></paper-icon-button>
                <div>Jyoti Development Trust</div>
                <span flex></span>
                <!--
                    <paper-input label='xyz'></paper-input>
                -->
                <paper-icon-button icon='search'></paper-icon-button>
            </core-toolbar>

            <div class='content' style="align:center; margin: 1em;">
               <polymer-element name="image-slider">
                  <template>
                    <style>
                      * {
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        -ms-box-sizing: border-box;
                        box-sizing: border-box;
                      }

                      #slider {
                        max-width: 500px;
                        text-align: center;
                        margin: 0 auto;
                      }

                      #overflow {
                        width: 100%;
                        overflow: hidden;
                      }

                      #slides .inner {
                        width: 400%;
                      }

                      #slides .inner img {
                        border-radius: 5px;
                        width: 100%;
                        height: auto;
                      }

                      #slides .inner {
                        -webkit-transform: translateZ(0);
                        -moz-transform: translateZ(0);
                        -o-transform: translateZ(0);
                        -ms-transform: translateZ(0);
                        transform: translateZ(0);

                        -webkit-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -moz-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -o-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -ms-transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        transition: all 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);

                        -webkit-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -moz-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -o-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        -ms-transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                        transition-timing-function: cubic-bezier(0.770, 0.000, 0.175, 1.000);
                      }

                      #slides article {
                        width: 25%;
                        float: left;
                      }

                      #slide0:checked ~ #slides .inner {
                        margin-left: 0;
                      }

                      #slide1:checked ~ #slides .inner {
                        margin-left: -100%;
                      }

                      #slide2:checked ~ #slides .inner {
                        margin-left: -200%;
                      }

                      #slide3:checked ~ #slides .inner {
                        margin-left: -300%;
                      }

                      #slide4:checked ~ #slides .inner {
                        margin-left: -400%;
                      }

                      #slide5:checked ~ #slides .inner {
                        margin-left: -500%;
                      }

                      #slide6:checked ~ #slides .inner {
                        margin-left: -600%;
                      }

                      #slide7:checked ~ #slides .inner {
                        margin-left: -700%;
                      }

                      #slide8:checked ~ #slides .inner {
                        margin-left: -800%;
                      }

                      #slide9:checked ~ #slides .inner {
                        margin-left: -900%;
                      }

                      #slide10:checked ~ #slides .inner {
                        margin-left: -1000%;
                      }

                      input[type="radio"] {
                        display: none;
                      }

                      label {
                        background: #CCC;
                        display: inline-block;
                        cursor: pointer;
                        width: 10px;
                        height: 10px;
                        border-radius: 5px;
                      }

                      #slide0:checked ~ label[for="slide0"],
                      #slide1:checked ~ label[for="slide1"],
                      #slide2:checked ~ label[for="slide2"],
                      #slide3:checked ~ label[for="slide3"],
                      #slide4:checked ~ label[for="slide4"],
                      #slide5:checked ~ label[for="slide5"],
                      #slide6:checked ~ label[for="slide6"],
                      #slide7:checked ~ label[for="slide7"],
                      #slide8:checked ~ label[for="slide8"],
                      #slide9:checked ~ label[for="slide9"],
                      #slide10:checked ~ label[for="slide10"] {
                        background: #333;
                      }
                    </style>
                    <div id="slider">
                      <template repeat="{{ image, i in images }}">
                        <template bind if="{{ i == 0 }}">
                          <input type="radio" name="slider" id="slide{{i}}" checked>
                        </template>
                        <template bind if="{{ i != 0 }}">
                          <input type="radio" name="slider" id="slide{{i}}">
                        </template>
                      </template>
                      <div id="slides">
                        <div id="overflow">
                          <div class="inner">
                            <template repeat="{{ image in images }}">
                              <article><img src="{{image.image}}" alt="{{image.alt}}"></article>
                            </template>
                          </div>
                        </div>
                      </div>
                      <template repeat="{{ image, i in images }}">
                        <label for="slide{{i}}"></label>
                      </template>
                    </div>
                  </template>
                  <script>

                  var imgArray = [];

                    // grab images from custom element
                    function _grabImages(id){
                      var dynamicImages = document.getElementById(id).getElementsByTagName("img");

                      for (var i = 0; i < dynamicImages.length; i++) {
                        imgArray.push({
                          image: dynamicImages[i].src,
                          alt: dynamicImages[i].alt
                        });
                      }
                      return imgArray;
                    }

                    Polymer('image-slider', {
                      images : imgArray,
                      domReady : function(){
                        _grabImages("img-slider");
                      }
                    });

                  </script>
                </polymer-element>

                <image-slider id="img-slider">
                  <img src="img/DSC02600.JPG" alt="rock">
                  <img src="img/DSC03462.jpg" alt="grooves">
                  <img src="img/Image0931.jpg" alt="arch">
                  
                </image-slider>

            </div>
            <div class='footer' layout horizontal>
                <div><paper-shadow z='3' class='span-shadow'>Sameer<paper-ripple fit></paper-ripple></paper-shadow></div>
                <div><paper-shadow z='3' class='span-shadow'>Sameer<paper-ripple fit></paper-ripple></paper-shadow></div>
                <div><paper-shadow z='3' class='span-shadow'>Sameer<paper-ripple fit></paper-ripple></paper-shadow></div>
                <div><paper-shadow z='3' class='span-shadow'>Sameer<paper-ripple fit></paper-ripple></paper-shadow></div>
                <div><paper-shadow z='3' class='span-shadow'>Sameer<paper-ripple fit></paper-ripple></paper-shadow></div>
            </div>
        </core-header-panel>
    </core-drawer-panel>
    <script src="app.js">
    </script>
</body>

</html>
