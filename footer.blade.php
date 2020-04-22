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
        height: 250px;
        background-color:#192127;
        border-top: 2px solid #029F82;
        margin-top: 50px;
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

    .footerContent
    {
        width: 80%;
        height: 200px;
        margin: 0 auto; 
        font-size: 12px;

    }

    .footerContentAboutUs
    {
        width:33%;
        height:100%;
        float: left;
       
    }

    
    .footerContentAboutUs img
    {
        height: 30%;
        margin-top: 10px;
    }

    .footerContentAboutUs p
    {
        padding-right: 75px;
       
    }

    .footerContentContact
    {
        width:33%;
        height:100%;
        float: left;
    }

    .footerContentContact li
    {
        list-style: none;
        clear: left;
    }

    .footerContentMenu
    {
        width:33%;
        height:100%;
        float: left;
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

            <div class="footerContentAboutUs">

                <a href="#"><img src="images/LOGO.JPG" alt="Coronet Logo"></a>
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
        <div class="copyrightContent">
            <p> © 2020 Coronet - Alle rechten voorbehouden</p>
        </div>
    </div>

 

@endsection
</body>
</html>
