<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Footer Coronet</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

<style>

    *{transition: all 0.4s}

    body
    {
        margin: 0;
        font-family: Montserrat;
        color: #efefef;
    }



    #footerContainer
    {
        width:100%;
        height: minmax(250px auto);
        background-color:#192127;
        border-top: 2px solid #029F82;
        margin-top: 50px;
    }

    .footerContent
    {
        width: 80%;
        height: 80%;
        margin: 0 auto; 
        font-size: 12px;

    }

    @media screen and (max-width: 750px) /* on mobile*/
    {
        .footerGrid
        {
            display: grid;
            grid-auto-rows: 200px;
            grid-column-gap: 20px;
            height:100%;

            grid-template-areas: 
            "contentAboutUs"
            "contentContact" 
            "contentMenu";
        }
    }
    

    @media screen and (min-width:750px) /* on tablet*/
    {
        .footerGrid
        {
            display: grid;
            grid-template-columns:  repeat(2, 1fr);
            grid-auto-rows: 200px;
            grid-column-gap: 20px;
            height:100%;

            grid-template-areas: 
            "contentAboutUs contentAboutUs"
            "contentContact contentMenu";
        }
    }

    @media screen and (min-width: 1250px) /* on desktop/laptop*/
    {
        .footerGrid
        {
            display: grid;
            grid-template-columns:  repeat(3, 1fr);
            grid-auto-rows: 200px;
            grid-column-gap: 20px;
            height:100%;

            grid-template-areas: 
            "contentAboutUs contentContact contentMenu";
        }
    }


    .footerContentAboutUs
    {
        grid-area: contentAboutUs;
        width: 100%;
        padding: 0;
    }

    .footerContentAboutUs img
    {
        height: 30%;
        margin-top: 10px;
    }

    .footerContentAboutUs p
    {
        text-align: justify;
    }

    .footerContentContact
    {
        grid-area: contentContact;
    }
    
    .footerContentContact li
    {
        list-style: none;
        clear: left;
    }

    .footerContentMenu
    {
        grid-area: contentMenu;
    }

    .footerContentMenu ul
    {
        clear:left;
        list-style: none;
        margin: 5px 0 0 0;
    }

    .footerContentMenu li
    {
        margin: 0 0 7px 0;
    }

    .footerContentMenu a
    {
        text-decoration: none;
        color:#efefef;
    }

    .footerContentMenu a:hover
    {
        text-shadow: 0 0 10px #efefef;
               
    }

    .centerFooterContent{
        margin: 0 auto;
        width: 60%;
    }
  

    #footerContainer hr
    {
        width: 50px;
        height: 5px;
        border:none;
        background-color:#029F82;
        float: left;
        margin: 0 4px 20px 4px;
    }

    #footerContainer h3
    {
        font-size: 18px;
        margin: 20px 4px 4px 4px;
    }

    .copyrightContent
    {
        width: 100%;
        height: 50px;
        background-color: #151B20;
        
      
    }
    .copyrightContent p
    {
        text-align: center;
        font-size: 10px;
        padding: 20px 0 20px 0;
        
    }

</style>


</head>

<body>
@section ('footer')
    <div id="footerContainer">

        <div class="footerContent">

            <div class="footerGrid">

            <div class="footerContentAboutUs">

                <a href="#"><img src="images/LOGO.JPG" alt="Coronet Logo" style="max-height: 50px;"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed condimentum eros at nibh tempor tempor. 
                    Donec congue vestibulum tristique. 
                    Ut pulvinar tellus sed ipsum faucibus, ut tempor nisl hendrerit. 
                    Nullam lacinia ante tortor, ut finibus orci elementum non. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed condimentum eros at nibh tempor.</p>

            </div>

            <div class="footerContentContact">

                <div class="centerFooterContent">
                        <h3>Contact</h3>
                    <hr>
                    <ul>
                        <li>
                            <b>@</b>
                        </li>
                        <li>
                            emailadres@loremipsum.com
                        </li>
                        <li>
                            <b>Telefoon</b>
                        </li>
                        <li>
                            +31 6 12345678
                        </li>
                        <li>
                            <b>Adres </b>
                        </li>
                        <li>
                            J.F. Kennedylaan 49
                        </li>
                        <li>
                            7001 EA
                        </li>
                        <li>
                            Doetinchem
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footerContentMenu">
                <div class="centerFooterContent">  
                    <h3>Menu</h3>
                    <hr>

                    <ul>  
                        <li><a href="#">Richtlijnen</a></li>
                        <li><a href="#">Nieuws</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacyverklaring</a></li>
                        <li><a href="#">Algemene voorwaarden</a></li>

                    </ul>
                </div>
            </div>
        </div>

           
        </div>

        <div class="copyrightContent">
                        <p> © 2020 Coronet - Alle rechten voorbehouden</p>
        </div>
    </div>

 @endsection

</body>
</html>
