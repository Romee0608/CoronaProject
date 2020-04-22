<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Header Coronet</title>
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
    #headerContainer
    {
        width:100%;
        height: 100px;
        background-color:#1D2730;
    }

    .headerContent
    {
        width: 85%;  
        height: 100%;
        margin: 0 auto;
    }

    .headerLogo
    {
        width:20%;
        height: 100%;
        float: left;
    }

    .headerLogo img
    {
        height:100%;
    }

    .headerMenu
    {
        width: 80%;
        height: 100%;
        float:right;

    }

    .headerMenu ul
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        float:right;
    }

    .headerMenu li
    {
        float: left;
        padding:36px 0 36px 115px;
        font-size: 24px;
    }

    .headerMenu a
    {
        text-decoration: none;
        color:#efefef;
    }

    .headerMenu a:hover
    {
        text-shadow: 0 0 10px #efefef;
               
    }

</style>


</head>

<body>
    
 @section ("header")
    <div id="headerContainer">
        <div class="headerContent">
            <div class="headerLogo">
                <a href="#"><img src="images/LOGO.JPG" alt="Coronet Logo"></a>
            </div>
            <div class="headerMenu">
                <ul>  
                    <li><a href="#">Richtlijnen</a></li>
                    <li><a href="#">Nieuws</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
 

    
</body>
</html>
