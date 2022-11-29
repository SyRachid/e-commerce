<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>welcome</title>
    </head>
      
    <style>
      body{
        margin:0px;
        padding:0px;
        font-family:sans-serif;
        
      }
      #menu{
        list-style-type: none;
        padding:0px;
        margin:0px;
      }
      li:hover{
        opacity:0.7;
      }
        #right{
          flex-basis:90%;
          position: relative;
          margin: 0 auto;/* debut diaporama*/
        }
        .diaporama{
          margin: 0 auto;
    width:100%;
    background-image: url("deux_modifie.jpg");
    background-size:cover;
-webkit-animation-name:diapo1;
-webkit-animation-duration: 9s;
-webkit-animation-timing-function:linear;
-webkit-animation-iteration-count: infinite;
-webkit-animation-direction:normal;

-moz-animation-name:diapo1;
-moz-animation-duration: 9s;
-moz-animation-timing-function:linear;
-moz-animation-iteration-count: infinite;
-moz-animation-direction:normal;

animation-name:diapo1;
animation-duration: 9s;
animation-timing-function:linear;
animation-iteration-count: infinite;
animation-direction:normal;

}
@-webkit-keyframes diapo1{
0%{background-image: url("deux_modifie.jpg");
   background-size:cover;}
33%{background-image: url("ordi_modifie.jpg");background-size:cover;}
66%{background-image: url("porte_modifie.jpg");background-size:cover;}
}

@-moz-keyframes diapo1{
0%{background-image: url("deux_modifie.jpg");background-size:cover;}
33%{background-image: url("ordi_modifie.jpg");background-size:cover;}
66%{background-image: url("porte_modifie.jpg");background-size:cover;}
}

@keyframes diapo1{
0%{background-image: url("deux_modifie.jpg");background-size:cover;}
33%{background-image: url("ordi_modifie.jpg");background-size:cover;}
66%{background-image: url("porte_modifie.jpg");background-size:cover;}
}
.color{
  position: absolute;
  top: 0;
  background: rgb(0, 0, 0) ; /* Fallback color */
  background: rgba(0, 0, 0, 0.5) ; /* Black background with 0.5 opacity */
  background-size:cover;
  color: #f1f1f1;
  width: 1174px;
  height:652px;
  padding: 20px;
        }
 #left{
          flex-basis:10%;
          background-color:#EEE;
          height:695px;
        }
        .container{
         display:flex;
         height:695px;
         
        }
        image{
          position:relative;
        }
        a:link{
          text-decoration:none;
          black;
        }
        li{
         
          margin:10px;
          padding:0px;
          text-align:center;
          border-radius:12px ; 
          box-shadow: 6px 6px 10px Black;
          background-color:#008CBA;
        }
        li a{
          color:white;
        }
       
  #bienvenu{
   text-align: center;
   margin-top:300px;
    font-family: fantasy; 
    font-size:500%  
  }
        
      </style>   
    <body>
    <div class="container">
    <div id="left" >
      <ul id="menu">
        <li>
          <a href="/Accueil"><h3>Accueil<h3></a>
          </li>
        <li>
        <a href="#"><h3>Vente</h3></a>
        </li>
        <li>
        <a href="#"><h3>Etat de vente site</h3></a>
        </li>
        <li>
        <a href="#"><h3>Etat de vente particuliers</h3></a>
      </li>
      </ul>
      
    </div>
   
    <div id="right" class="diaporama">
    <!--<img src="porte_modifie.jpg" style="width:100%;"> -->
      <div class="color"><h1 id="bienvenu">Bienvenu sur EPO's Store</h1></div>
    </div>
    </div>
    </body>
    
</html>
