<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>welcome </title>
    </head>
      
    <style>
      body{
        margin:0px;
        padding:0px;
        font-family: sans-serif;
        
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
    

 #left{
          flex-basis:10%;
          background-color:#EEE;
          height:1100px;
        }
        .container{
         display:flex;
         height:695px;
         
        }
        
        a:link{
          text-decoration:none;
          black;
        }
        li{
         
          margin:10px;
          padding:0px;
          background-color:#008CBA;
          text-align:center;
          border-radius:12px; 
          box-shadow: 6px 6px 10px Black;
          
        }
        li a{
          color:white;
        }
       
 header{
  text-align: center;
  background-color: #EEE;
  border: 1px solid #EEE;
 }
 
  *, ::before, ::after {
    box-sizing: border-box ;
    margin:0;
    padding:0;

 }
 .galerie{
  display:flex;
  max-width: 1300px;/*a refaire*/
  width:80%;
  margin:70px  auto;
  flex-wrap: wrap;
  justify-content: center;

 }
 .item{
  width:300px;
  height:200px;
  margin:10px;
  overflow: hidden ;
  flex-shrink: 0;
 
 }
 
 #titre{
  text-align: center;

 }
 * {box-sizing: border-box;}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  
  
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  margin-bottom: 10px;
 
}

.topnav .search-container button {
  float: center;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}


        
      </style> 
      <header>
      
        <h1>EPO's Store</h1>
      </header>  
    <body>
      
    <div class="container">
    <div id="left" >
      <ul id="menu">
        <li>
        <a  href="#"><h3>Accueil</h3></a>
          </li>
        <li>
        <a  href="#"><h3>Vente</h3></a>
        </li>
        <li>
        <a  href="#"><h3>Etat de vente site</h3></a>
        </li>
        <li>
        <a  href="#"><h3>Etat de vente particuliers</h3></a>
      </li>
      </ul>
    </div>
  

   <div id="right">
   <div class="topnav">
  <!-- <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Rechercher</button>
    </form>
  </div>-->
  </div>
   <h1 id="titre">Nos Articles</h1>
   <div class="galerie">
    <div class="item"><img src="image1_modifie.jpg" ></div>
    <div class="item"><img src="image2_modifie.jpg"></div>
    <div class="item"><img src="image3_modifie.jpg" ></div>
    <div class="item"><img src="image4_modifie.jpg" ></div>

    <div class="item"><img src="image5_modifie.jpg"></div>
    <div class="item"><img src="image6_modifie.jpg" ></div>
    <div class="item"><img src="image7_modifie.jpg" ></div>
    <div class="item"><img src="image8_modifie.jpg" ></div>

    <div class="item"><img src="image9_modifie.jpg" ></div>
    <div class="item"><img src="image10_modifie.jpg" ></div>
    <div class="item"><img src="image11_modifie.jpg" ></div>
    <div class="item"><img src="image12_modifie.jpg" ></div>
   </div>
    </div>
</div>
    </body>
    
</html>
