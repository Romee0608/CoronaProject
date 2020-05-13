<?php

    include'databaseConnection.php';

    $articleQuery = "SELECT * FROM articles ORDER BY `published_at` DESC LIMIT 4"; 
    $result = $connect->query($articleQuery);

    require 'headerFinal.html'

?>
    
    <div id="banner" >

        <div id="filter">
            <div class="bannerText">
                <h1>Highlights persconferentie</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                Ut gravida libero mauris, ut mattis nibh convallis ut.<br>
                Consectetur adipiscing elit, lorem ipsum dolor sit amet.<br>
                Ut mattis nibh convallis ut, ut gravida libero mauris.<br>
                </p>
                <button>Read More</button>
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
                    Nulla at ligula tempus, elementum risus quis, gravida tellus. Duis vestibulum velit quis convallis fermentum. Nullam elit nulla, varius eu purus a, tincidunt elementum nisi. 
                    Morbi mollis molestie dolor, a elementum nunc posuere non. Praesent ultrices tellus quis nisi ullamcorper, a dignissim risus luctus. Aenean semper ullamcorper sodales. 
                    Donec vitae aliquet magna. In id odio a ligula ornare porta sit amet ac eros.<br>
                    Nunc tempus eros id risus vestibulum pharetra. Cras gravida, est sed consequat vestibulum, felis felis venenatis tortor, quis eleifend elit tortor vitae mauris. 
                    Vivamus est nisl, varius a risus sit amet, suscipit ultricies ex. Nulla ac, eget tristique mi. Duis ut ultrices maximus efficitur.
                    </p>
                    <button>Lees Meer</button>
                </div>
                <div id="introImageDiv">
                    <img src="images/richtlijnen.jpg">
                </div>
            </div>

        </div>

        <div id="newsContainer">

            <div class="newsHighlightsTitle">
                <h2>Nieuws Highlights</h2>
                <hr>
            </div>
            <div id="newsGrid">
                <?php if ($result->num_rows > 0) {
                    // output data of each row
                    while($article = $result->fetch_assoc()) { ?>
                        <div class="newsPost">
                            <div class="articleThumbnail">
                                <img src="images/<?php echo $article['img']?>" alt='<?php echo $article['img'] ?>'>
                            </div>
                            <div class="articleContent">
                                <h3><?php echo $article['title']?></h3>
                                <hr>
                                <p><?php echo $article['excerpt']?></p>
                                <p class="readMore"><a href="article.php?id=<?php echo $article['id'] ?>">Lees meer ></p>
                                <p class="bron">Bron: <a href="<?php echo $article['bron']?>" target="_blank"><?php echo $article['bron_naam']?></a></p>
                            </div>
                        </div>
                    <?php }
                } ?>
              
                <div class="goNewsPage">
                    <p><a href="#">Ga naar nieuws ></a></p>
                </div>
            </div>

        </div>

    </div>

<?php require 'footerFinal.html' ?>
