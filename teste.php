<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @media(max-width: 768px){
    .max-header{
        
        height: 80px;
       
    }
    .min-header{
        
        height: 60px;
    }
    .container-h{
        position: relative;
        padding: 0 60px;
        grid-template-areas: "log ... mnu";
    }
    .max-logo img{
        width: 115px;
    }
    .min-logo img{
        width: 90px;
    }
    .nav-bar{
        position: absolute;
        left: 0;
        width: 100%;
        background-color: #000;
        transform: translateX(-100%);
        transition: all 0.4s ease-out;
    }
    .max-nav{
        top:80px;
        height: calc(100vh - 80px);
    }
    .min-nav{
        top:60px;
        height: calc(100vh - 60px);
    }
    .menu-opened{
        transform: translateX(0);
    }
    .nav-bar ul{
        justify-content: center;
        grid-auto-flow: row;
        grid-gap: 80px;
    }
    .nav-bar li{
        text-align: center;
    }
    .menu{
        grid-area: mnu;
        display: grid;
        align-content: center;
    }
    .hamburguer{
        position: relative;
        width: 28px;
        height: 3px;
        transition: all 0.4s ease-out;
        background-color: #99d836;
    }
    
    .hamburguer::before{
        position: absolute;
        top: -8px;
        left: 0;
        content: "";
        width: 100%;
        height: 100%;
        transition: all 0.4s ease-out;
        background-color:#99d836;

    }
    .hamburguer::after{
        position: absolute;
        top: 8px;
        left: 0;
        content: "";
        width: 100%;
        height: 100%;
        transition: all 0.4s ease-out;
        background-color: #99d836;

    }
    .max-hamburguer,.max-hamburguer::before, .max-hamburguer::after{
        background-color: #99d836;
    }
    .min-hamburguer,.min-hamburguer::before, .min-hamburguer::after{
        background-color: #ffff;
    }

    .min-nav a{
        font-size: 0.875em;
        color: #99d836;
    }
    .close-btn{
        width: 32px;
        transform: rotateZ(45deg);
    }

    .close-btn::before , .close-btn::after{
        top: 0;
        transform: rotateZ(90deg);
    }
}
    
   </style>
</head>
<body>
    <header class="max-header">
        <div class="container-h">
            <div class="logo max-logo">
                <img src="" class="" alt="">
            </div>
            <div class="menu">
                <div class="hamburguer max-hamburguer "></div>
            </div>
            <nav class="nav-bar max-nav ">
               <ul>
                    <li><a href="#sobre">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#contato">Contato</a></li>
               </ul>
            </nav>
        </div>
    </header>
    
</body>
</html>
              


