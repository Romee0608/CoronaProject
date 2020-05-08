<?php require 'headerFinal.html' ?>

    <div id="smallBanner">

        <div id="smallFilter">
            <div class="bannerText">
                <h1>Richtlijnen</h1>
            </div>
        </div>

    </div>

    <div id="contentContainer">

        <div id="introDiv">

            <div id="introGrid">
                <div id="introTextDiv">
                    <h2>Richtlijnen</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget ultricies ligula. Ut gravida eros non turpis sollicitudin, in sollicitudin tellus tempus. 
                      Nulla at ligula tempus, elementum risus quis, gravida tellus. Duis vestibulum velit quis convallis fermentum. Nullam elit nulla, varius eu purus a, tincidunt 
                      elementum nisi. Morbi mollis molestie dolor, a elementum nunc posuere non. Praesent ultrices tellus quis nisi ullamcorper, a dignissim risus luctus. Aenean 
                      semper ullamcorper sodales. Donec vitae aliquet magna. In id odio a ligula ornare porta sit amet ac eros.<br> Nunc tempus eros id risus vestibulum pharetra. Cras 
                      gravida, est sed consequat vestibulum, felis felis venenatis tortor, quis eleifend elit tortor vitae mauris. Vivamus est nisl, varius 
                      a risus sit amet, suscipit ultricies ex. Nulla ac, eget tristique mi. Duis ut ultrices maximus efficitur.</p>
                </div>
                <div id="introImageDiv">
                    <img src="images/richtlijnen.jpg">
                </div>
            </div>

        </div>

        <div id="standaardAdvContainer">

            <div class="standaardAdvTitle">
                <h2>Standaard adviezen</h2>
                <hr>
            </div>
            <div id="standaardAdvGrid">
                <div class="standaardAdvPost">
                    <div class="standaardAdvThumbnail">
                        <img src="images/article.jpg">
                    </div>
                    <div class="standaardAdvContent">
                        <h3>Wat is COVID-19?</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum eros at nibh tempor tempor. Donec congue vestibulum tristique. Ut pulvinar tellus sed ipsum faucibus, ut tempor nisl hendrerit. Nullam lacinia ante tortor, ut finibus orci elementum non. </p>
                    </div>
                </div>
                <div class="standaardAdvPost">
                    <div class="standaardAdvThumbnail">
                        <img src="images/article2.jpg">
                    </div>
                    <div class="standaardAdvContent">
                        <h3>Wel of geen mondkapjes?</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum eros at nibh tempor tempor. Donec congue vestibulum tristique. Ut pulvinar tellus sed ipsum faucibus, ut tempor nisl hendrerit. Nullam lacinia ante tortor, ut finibus orci elementum non. </p>
                    </div>
                </div>
                <div class="standaardAdvPost">
                    <div class="standaardAdvThumbnail">
                        <img src="images/article3.jpg" >
                    </div>
                    <div class="standaardAdvContent">
                        <h3>Stop de versprijding</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum eros at nibh tempor tempor. Donec congue vestibulum tristique. Ut pulvinar tellus sed ipsum faucibus, ut tempor nisl hendrerit. Nullam lacinia ante tortor, ut finibus orci elementum non. </p>
                    </div>
                </div>
            </div>

        </div>

        <div id="voorlopigeMaatContainer">

            <div class="voorlopigeMaatTitle">
                <h2>Standaard adviezen</h2>
                <hr>
            </div>
            <div id="voorlopigeMaatGrid">
                <div class="voorlopigeMaatContent">
                    <h3>Verboden</h3>
                    <hr>
                    <p>Samenkomen met 3 of meer personen. (Gezinnen uitgezonderd)</p>
                    <p>Alle evenementen met een vergunnings- en meldplicht zijn verboden tot 1 september 2020.</p>
                    <p>Alle andere samenkomsten zijn tot 15 juni 2020 verboden, zoals culturele instellingen waarbij publiek samenkomt. <br> <a id="uitzonderingen" onclick="toggleShow()">Uitzonderingen</a></p>
                    <div id="uitzonderingenText">
                        <p>Er zijn enkele uitzonderingen:</p>
                        <p>Uitvaarten en huwelijksvoltrekkingen kunnen doorgaan als er maximaal 30 personen bij elkaar zijn en er 1,5 meter afstand tot elkaar kan worden gehouden.</p>
                        <p>Religieuze en levensbeschouwelijke bijeenkomsten vinden bij voorkeur online plaats; ze kunnen fysiek alleen doorgang vinden als er maximaal 30 personenbij elkaar zijn die altijd 1,5 meter afstand houden.</p>
                        <p>Wettelijk verplichte bijeenkomsten, zoals raadsvergaderingen of aandeelhoudersvergaderingen, kunnen alleen plaatsvinden als er maximaal 100 personen zijn die 1,5 meter afstand kunnen houden.</p>
                        <p>Werkgerelateerde bijeenkomsten kunnen doorgaan met maximaal 100 personen en als er 1,5 meter afstand tot elkaar kan worden gehouden. Het gaat daarbij om samenkomsten die noodzakelijk zijn voor de continuering van de dagelijkse werkzaamheden van instellingen, bedrijven en andere organisaties.</p>
                    </div>
                </div>
                <div class="voorlopigeMaatContent">
                    <h3>Adviezen</h3>
                    <hr>
                    <p>Vermijd uw huis verlaten zoveel mogelijk, ga alleen naar buiten als het echt nodig is.</p>
                    <p>Ontvang zo min mogelijk bezoek</p>
                    <p>Vermijd alle contact met risicogroepen: ouderen en mensen met een kwetsbare gezondheid.</p>
                </div>
            </div>

        </div>

    </div>

    <script>

        function toggleShow() {
            let element = document.getElementById('uitzonderingenText');
            element.classList.toggle("uitzonderingenToggle");
        } 

    </script>
   
<?php require 'footerFinal.html' ?>