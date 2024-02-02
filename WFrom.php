<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Orco.css">       
        <script type="text/javascript" src="Affichage.js"></script>
        <title>FormO</title>

        <style>
          /* h1 {
  margin-top: 1em;
}

p {
  margin-bottom: 1em;
} */

*{
    margin:0; 
    padding:0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-decoration: none;
    scroll-behavior: smooth;

}
 
  body > *  {
    margin: auto;
  }  


header{
    position:fixed;
    top:0;
    left:0;
    right: 0;
    z-index: 1000;
    background:#0c6688;
    padding: 20px;
    text-align: left;
    text-indent :100px;
    font-size: 17px;
    background-color: transparent;
    margin-top:10px;


}

@media (max-width: 1370px) { 

    header {
       line-height: 40px;
       text-align: right;
        } }


header nav a.active,
header nav a{
    padding:10px 25px;
    color: white;
    font-size: 18px;
    text-transform: capitalize;

}
header nav a:hover{

}
@media (max-width: 1000px) { 
    header nav a.active,
    header nav a {
      color: white;

    }

        } 
      


section{

    min-height: 100vh;
    display:flex;
    align-items: center;
    justify-content: center;
    font-weight: bolder;
    padding-bottom: 10px;
    text-transform: uppercase;
}



#LSEO-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}

#LSEO {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}


#LS-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}

#LS {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}



#Heb-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}

#Heb {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}



#MJS-video{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}


#MJS{
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}


 #Intrg-video{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}


 #Intrg{
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}


  #Webmaster-video{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}


  #Webmaster{
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}



  #choix-video{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  object-fit: cover;
}

  #choix{
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
}






/* @media (max-width: 1000px) {
  #LSEO-video {
   
  }

  #LSEO {
    position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bolder;
  padding-bottom: 10px;
  text-transform: uppercase;
  }
} */



/* @media (max-width: 1000px) {
    
    section{
       
        min-height: 100vh;
        display:flex;
        align-items: center;
        justify-content: center;
        background:rgba(233, 239, 240, 0.925);
        font-weight: bolder;
        padding-bottom: 10px;
        text-transform: uppercase;
    }
    }
 */

/* scroll-behavior: auto; */


.I1 {
    width : 10px;
    height : 15px;
    }


/* code table */
table {
    width: 45%;
    margin: 0;
    text-align: left;
    background: linear-gradient(90deg, rgba(122,180,201,1) 32%, rgba(135,163,202,1) 63%);
    color:#12165f;
    border-radius: 40px;
    font-size: 15px;

    
}

/* @media (max-width: 1000px) {
    
    table{
        width: 20%;
        text-align: center;
        background: hsl(232, 22%, 90%);
        color: rgb(57, 57, 109);
        border-radius: 40px;
        

    }
} */


th, td {
    padding: 23px;
  }
 
  @media (max-width: 1000px) {
    
    th{
        text-align: right;
    }
}

h4{
    margin-left: 40px;

}

h5{
  font-size:23px;

}




/* Cacher la case à cocher native */


    .test {
      text-align: center;
        background:azure;
        position: fixed;
        display: block;
        width: 340px;
        padding: 80px;
        top: 50%;
        left: 87%;
        transform: translate(-50%, -50%);
        color:azure;
        border-radius: 40px;
        box-shadow:
        -webkit-box-shadow: 2px 3px 16px 11px #15075E; 
box-shadow: 2px 3px 16px 11px #15075E;
        color:#12165f;
        z-index: 1;

    }

    @media (max-width: 1060px) {
      .test {
        text-align: center;
        font-size: 18px;
    left: 80%;
    top: 90%;
    padding: 47px;
    z-index: 1;

  }
    }

  img {
    float: left;
    height: 64px;
  }
  @media (max-width: 1370px) {
    img {
           height: 55px;

    }
  }

/* Toogle */

  .toggle-checkbox {
    display: none;
  }
  
  .toggle-container {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 20px;
  }
  
  .toggle-label {
    position: relative;
    margin-top: 0;
   margin-left: 0;
    width: 58px;
    height: 26px;
    border-radius: 26px;
    cursor: pointer;
    transition: background-color 0.3s ease;

  }
  
  .toggle-text {
    position: absolute;
    top: 4px;
    font-size: 14px;
    color: #fff;
    user-select: none;
  }
  
  .toggle-checkbox:checked + .toggle-label {
    background-color: #2196F3;

  }
  
  
  .toggle-checkbox:checked + .toggle-label ~ .toggle-text:before {
    content: "ON";
    display: inline;
    cursor: pointer;

  }
  
  .toggle-checkbox:not(:checked) + .toggle-label ~ .toggle-text:before {
    content: "OFF";
    display: inline;
    cursor: pointer;

  }
  
  #arrow {
  position: fixed;
  left: 0;
  top: 120px;
  transform: translateY(-50%);
  background-color: transparent;
  padding: 10px;
  cursor: pointer;
}

#element {
  position: fixed;
  margin-left: -480px;
  margin-top:-345px;
}
#element {
  display: none;
}
#element:target {
  display: block;
}

@media (max-width: 1699px) {
    #element {
      position: fixed;
  margin-left: 350px;
  margin-top:-300px;
  }

}

@media (max-width: 820px) {
    #element {
      position: fixed;
  margin-left: -100px;
  margin-top:-400px;
  }

}

@media (max-width: 820px) {
  #arrow {
  position: fixed;
  left: 0;
  top: 200px;
  transform: translateY(-50%);
  background-color: transparent;
  padding: 10px;
  cursor: pointer;
}

}



 .tooltip {
  position: relative;
  display: inline-block;
}

.modal {
  cursor: help;
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  cursor: help;
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  max-width: 400px; 
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  border-radius: 20px;
  margin-left: 1020px;
  text-align:left;
}
@media (max-width: 1400px) {
  .modal-content {
    margin-left: 400px;

    margin-top: 300px;&
    width: 500px;
  }
}




    </style>

<form method="post" action="traitement.php"> 
    </head>
    <body>
    <!-- <form method="post" action="enregistrement.php"> -->
    <form method="post" action="Oroc.php">

    <header>
      
<div class="aaa"> <img src="logo.png"> </div>

<nav> 
  <a class="active" href="#LSEO">License SEO</a>  
  <a href="#LS">License Sécurité</a>
  <a href="#Heb">Hébergement</a>
  <a href="#MJS">Module sur mesure</a>
  <a href="#Intrg">Integrateurs/réparation</a>
  <a href="#Webmaster">Webmaster/Assistance </a>
  <a href="#choix">Choix</a>


</nav>



</header>
<div class="test">

<th>  <H3>Total avec TVA </H3>
<div id="totalTVA"></div> </th>

</br>
    <th><H3>Total hors TVA</H3>
<div id="totalCost"></div> </th>
</div>

<div class="logg">
</div>



</header>


<section id="LSEO">
<video autoplay muted loop id="LSEO-video">
    <source src="Video.mp4" type="video/mp4">
  </video>

<table>

  <thead>
    <tr>
      <th> <h5> Licence SEO </h5> </th>
      <th> 


    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>

    
    <div class="ch">

    <div id="arrow">▸</div>
<div id="element">

<div class="toggle-container" >
            <input type="checkbox" id="toggle" class="toggle-checkbox">
            <label for="toggle" class="toggle-label"> </label>
            <span class="toggle-text"></span>
            
</div> 


<script>
        document.addEventListener('click', function(event) {
            const container = event.target.closest('.toggle-container')
            if (container) {
                const checkbox = container.querySelector('.toggle-checkbox')
                if (checkbox.checked) {n  
                    window.location.href = 'WFrom.php'
                } else {
                    window.location.href = 'index.php'
                }
            }
        })
    </script>
<script>
document.addEventListener('click', function(event) {
    const container = event.target.closest('.toggle-container');
    if (container) {
      container.querySelector('.toggle-checkbox').click();
    }
  });

// Iic pour le bouton one/off
</script>


</div>

<script>
  var arrow = document.getElementById("arrow");
var element = document.getElementById("element");

arrow.addEventListener("click", function() {
  if (element.style.display === "none") {
    element.style.display = "block";
  } else {
    element.style.display = "none";
  }
});

</script>



  </th>
    </tr>

  </thead>     

  <tbody>

  <tr>
      <td>
      <div>
      <h4>
    <input type="checkbox" id="checkbox1" class="save-checkbox" value="Robots, sitmaps, flux Rss" />
    <label for="checkbox1">Robots, sitmaps, flux Rss</label>
    <!-- <div class="tooltip" data-tooltip="Message personnalisé 1">🛈</div> -->
    
    <button id="open-modal-btn1" data-target="modal1" style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal1" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>description de"Robots, sitmaps, flux Rss" </p>

  </div>
</div>

      </h4>

</div>   
</br>   
<div>
 <h4>
    <input type="checkbox" id="checkbox2" class="save-checkbox" value="Soumission moteurs et annuaires" />
    <label for="checkbox2">Soumission moteurs et annuaires</label>

    <button id="open-modal-btn2" data-target="modal2"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal2" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 2.</p>
   
  </div>
</div>

  </div>    </h4>         
</div>
</br>   

<div>
  <h4>
    <input type="checkbox" id="checkbox3" class="save-checkbox" value="Gestion par pages SEO avancé" />
    <label for="checkbox3">Gestion par pages SEO avancé</label>
    <button id="open-modal-btn3" data-target="modal3"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal3" class="modal">
  <div class="modal-content">
    <span class="close" >&times;</span>
    <p>Voici le contenu du modal 3.</p>
  </div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox4" class="save-checkbox" value="Autopublication Facebook" />
    <label for="checkbox4">Autopublication Facebook</label>
    <button id="open-modal-btn4" data-target="modal4"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal4" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 4.</p>
  </div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox5" class="save-checkbox" value="Amélioration référencement par script Personnalisé" />
    <label for="checkbox5">Amélioration référencement</br>par script Personnalisé</label>
    <button id="open-modal-btn5" data-target="modal5"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal5" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 5.</p>
  </div>
</div>    </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox6" class="save-checkbox" value="Amélioration du chargement des pages" />
    <label for="checkbox6">Amélioration du chargement des pages</label>
    <button id="open-modal-btn6" data-target="modal6"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal6" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 6.</p>
  </div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox7" class="save-checkbox" value="Statistiques" />
    <label for="checkbox7">Statistiques</label>
    <button id="open-modal-btn7" data-target="modal7"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal7" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 7.</p>
  </div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox8" class="save-checkbox" value="Référencement local dans 25 annulaires + navigateurs" />
    <label for="checkbox8">Référencement local</br>dans 25 annulaires + navigateurs</label>
    <button id="open-modal-btn8" data-target="modal8"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal8" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 8.</p>
  </div>
</div>    </h4>
</br>


</div>


    <td>
    <td><input type="radio" name="LSEO" class="save-radio" value="25">25€</th>
     <th><input type="radio" name="LSEO" class="save-radio" value="30">30€</th>
     <th><input type="radio" name="LSEO" class="save-radio" value="40">40€ </th>
</td>

<thead>

</thead>
</table>
    </thead>
</section>


<section id="LS">
<video autoplay muted loop id="LS-video">&
    <source src="Video2.mp4" type="video/mp4">
  </video>

<table>

  <thead>
    <tr>
      <th> <h5> Licence Sécurité </h5></th>
      <th> 
    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>

    

  </th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td>

      <div>
  <input type="checkbox" id="checkbox9" class="save-checkbox" value="Firewall & SSL" />
  <label for="checkbox9">Firewall & SSL</label>
  <button id="open-modal-btn9" data-target="modal9"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal9" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 9.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox10" class="save-checkbox" value="Accélérateur de performance & CDN" />
  <label for="checkbox10">Accélérateur de performance & CDN</label>
  <button id="open-modal-btn10" data-target="modal10"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal10" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 10.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox11" class="save-checkbox" value="Antispam" />
  <label for="checkbox11">Antispam</label>
  <button id="open-modal-btn11" data-target="modal11"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal11" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 11.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox12" class="save-checkbox" value="Protection de force brute" />
  <label for="checkbox12">Protection de force brute</label>
  <button id="open-modal-btn12" data-target="modal12"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal12" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 12.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox13" class="save-checkbox" value="Vérification des modifications" />
  <label for="checkbox13">
    Vérification des modifications <br />
    <br /> FTP&SQL non légitime
  </label>
  <button id="open-modal-btn13" data-target="modal13"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal13" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 13.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox14" class="save-checkbox" value="Réseau de protection de force brute" />
  <label for="checkbox14">Réseau de protection de force brute</label>
  <button id="open-modal-btn14" data-target="modal14"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal14" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 14.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox15" class="save-checkbox" value="Protection salage" />
  <label for="checkbox15">Protection salage </label>
  <button id="open-modal-btn15" data-target="modal5"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal5" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 15.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox16" class="save-checkbox" value="Blocage des utilisateurs exploit" />
  <label for="checkbox16">Blocage des utilisateurs exploit</label>
  <button id="open-modal-btn16" data-target="modal16"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal5" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 16.</p>
  </div></div>
<br/>
<br/>

<div>
  <input type="checkbox" id="checkbox17" class="save-checkbox" value="Refonte du site en cas de problème" />
  <label for="checkbox17">Refonte du site en cas de problème</label>
  <button id="open-modal-btn17" data-target="modal17"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal17" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 17.</p>
  </div></div>
<br/>
<br/>

</td>
    
     <td>
   <td><input type="radio" name="LS" class="save-radio" value="20">20€</td>
     <td><input type="radio" name="LS" class="save-radio" value="25">25€</td>
     <td><input type="radio" name="LS" class="save-radio" value="35">35€ </td>
        
</td>


      </tr>

</table>
</section>


<section id="Heb">
<video autoplay muted loop id="Heb-video">
    <source src="Video.mp4" type="video/mp4">
  </video>


<table>

  <thead>
    <tr>
      <th><h5> Hébergement Sur le serveur dédié</h5></th>
      <th> 
    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>

    

  </th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td>

      <div>
  <input type="checkbox" id="checkbox18" class="save-checkbox" value="CPU attribué & SSD" />
  <label for="checkbox18">CPU attribué & SSD</label>
  <button id="open-modal-btn18" data-target="modal18"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal18" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 18.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox19" class="save-checkbox" value="Nom de domaine .fr" />
  <label for="checkbox19">Nom de domaine .fr</label>
  <button id="open-modal-btn19" data-target="modal19"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal19" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 19.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox20" class="save-checkbox" value="SQL 512ram/ SSL (Https)" />
  <label for="checkbox20">SQL 512ram/ SSL (Https) </label>
  <button id="open-modal-btn20" data-target="modal20"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal20" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 20.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox21" class="save-checkbox" value="Sauvegarde J+15 et J+30" />
  <label for="checkbox21">
    Sauvegarde J+15 et J+30 <br />
    <br /> (sur des hébergeurs différents )
  </label>
  <button id="open-modal-btn21" data-target="modal21"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal21" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 21.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox22" class="save-checkbox" value="Administration Réseaux par nos soins" />
  <label for="checkbox22">Administration Réseaux par nos soins </label>
  <button id="open-modal-btn10" data-target="modal10"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal10" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 22.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox23" class="save-checkbox" value="Gestion de DNS" />
  <label for="checkbox23">Gestion de DNS</label>
  <button id="open-modal-btn10" data-target="modal23"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal23" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 23.</p>
  </div></div>
<br/>
<br />



     
    <td>
    <th><input type="radio" name="Heb" class="save-radio" value="20">20€</th>
<th><input type="radio" name="Heb" class="save-radio" value="25">25€</th>
<th><input type="radio" name="Heb"class="save-radio" value="30">30€ </th>
     
</td>

<thead>

</thead>
</table>
    </thead>
</section>




<section id="MJS">
<video autoplay muted loop id="Heb-video">
    <source src="Video2.mp4" type="video/mp4">
  </video>


<table>

  <thead>
    <tr>
      <th><h5>Module sur mesure Mise à jour </h5></th>
      <th> 
    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>
    

  </th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td>

    <td>
    <th> <p>/</p></th>
    <th><input type="radio" name="MJS" value="15">15€</th>
<th><input type="radio" name="MJS" value="25">25€</th>

</td>

</table>
    </thead>
</section>

<section id="Intrg">
<video autoplay muted loop id="Heb-video">
    <source src="Video.mp4" type="video/mp4">
  </video>
<table>

  <thead>
    <tr>
      <th><h5> Integarteur / réparation respective </h5> </th>
      <th> 
    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>

    

  </th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td>

      <div>
  <input type="checkbox" id="checkbox24" class="save-checkbox" value="Réparation du design reponsive" />
  <label for="checkbox24">Réparation du design reponsive</label>
  <button id="open-modal-btn24" data-target="modal24"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal24" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 24.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox25" class="save-checkbox" value="Réparation du squelette du site" />
  <label for="checkbox25">Réparation du squelette du site</label>
  <button id="open-modal-btn25" data-target="modal25"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal25" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 25.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox26" class="save-checkbox" value="Adaptation sur différents navigateurs internet" />
  <label for="checkbox26">Adaptation sur différents navigateurs internet</label>
  <button id="open-modal-btn26" data-target="modal26"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal26" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 26.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox27" class="save-checkbox" value="Réparation de bugs entre versions" />
  <label for="checkbox27">Réparation de bugs entre versions</label>
  <button id="open-modal-btn27" data-target="modal27"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal27" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 27.</p>
  </div></div>
<br/>
<br />

  

     
    <td>
    <td><input type="radio" name="Intr" class="save-radio" value="10">10€</td>
<td><input type="radio" name="Intr" class="save-radio" value="10">10€</td>
<td><input type="radio" name="Intr"  value="20">20€ </td>
      
</td>

<thead>

</thead>
</table>
    </thead>

</section>


<section id="Webmaster">
<video autoplay muted loop id="Heb-video">
    <source src="Video2.mp4" type="video/mp4">
  </video>
<table>

  <thead>
    <tr>
      <th><h5> Webmaster / Assistance</h5> </th>
      <th> 
    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>

    

  </th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td>
      <div>
  <input type="checkbox" id="checkbox28" class="save-checkbox" value="Suivi récurrent" />  <label for="checkbox28">Suivi récurrent</label>
  <button id="open-modal-btn10" data-target="modal10"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal10" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 28.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox29" class="save-checkbox" value="Mise à jour CMS + Modules" />
  <label for="checkbox29">Mise à jour CMS + Modules</label>
  <button id="open-modal-btn29" data-target="modal29"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal29" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 29.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox30" class="save-checkbox" value="Support, gestion administrative" />
  <label for="checkbox30">Support, gestion administrative</label>
  <button id="open-modal-btn30" data-target="modal30"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal30" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 30.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox31" class="save-checkbox" value="Modification du contenu sur demande" />
  <label for="checkbox31">Modification du contenu sur demande</label>
  <button id="open-modal-btn10" data-target="modal10"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal31" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 31.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox32" class="save-checkbox" value="Correction & Gestion des formulaires personnalisés" />
  <label for="checkbox32">Correction & Gestion des formulaires personnalisés</label>
  <button id="open-modal-btn10" data-target="modal32"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal32" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 32.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox33" class="save-checkbox" value="Téléphone/mail d'urgence weekend et jour férié" />
  <label for="checkbox33">Téléphone/mail d'urgence weekend et jour férié</label>
  <button id="open-modal-btn33" data-target="modal33"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal33" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 33.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox34" class="save-checkbox" value="Formation à l'administration" />
  <label for="checkbox34">Formation à l'administration</label>
  <button id="open-modal-btn34" data-target="modal34"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="moda34" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 34.</p>
  </div></div>
<br/>
<br />

<div>
  <input type="checkbox" id="checkbox35" class="save-checkbox" value="Gestion de l'ensemble des factures" />
  <label for="checkbox35">Gestion de l'ensemble des factures</label>
  <button id="open-modal-btn35" data-target="modal35"style=" height: 18px; width: 18px; border-radius: 100px; cursor: pointer; border-style: none;">i</button>
    <div id="modal35" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Voici le contenu du modal 35.</p>
  </div></div>
<br/>
<br />

    <td>
      <td><input type="radio" name="WebAss" class="save-radio" value="25">25€</td>
<td><input type="radio" name="WebAss"class="save-radio" value="25">25€</td>
<td><input type="radio" name="WebAss" class="save-radio" value="30">30€ </td>
</td>

    <tr> 

      <th> temps <td> <div class="btn-group" data-toggle="buttons">
            <input type="radio" name="temps " checked value="25"> 30min
            </div>
        </td>

<td>
            <div class="btn-group" data-toggle="buttons">
            <input type="radio" name="temps " checked value="10"> 1h
            </div>
        </td>
    </div> </th>
      <th> 
   <div>

     
    <td>
   
</td>


  </th>
    </tr>
    
  </thead>




</thead>
</table>
</div>



<script>
function showModal(targetId) {
  const modal = document.getElementById(targetId);
  modal.style.display = 'block';
}

const openModalBtns = document.querySelectorAll('button[data-target]');

openModalBtns.forEach(btn => {
  btn.addEventListener('click', (event) => {
    event.preventDefault(); // Empêche le comportement par défaut du bouton
    const targetId = btn.getAttribute('data-target');
    showModal(targetId);
  });
});

// Fermeture des modals
const closeBtns = document.querySelectorAll('.modal .close');

closeBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const modal = btn.closest('.modal');
    modal.style.display = 'none';
  });
});

// Fermeture des modals en cliquant en dehors
window.addEventListener('click', (event) => {
  const modals = document.querySelectorAll('.modal');
  if (event.target == modals) {
    modals.forEach(modal => {
      modal.style.display = 'none';
    });
  }
});

// description de chaque élément
</script>



<!-- <style>
        .choix {
          text-align: center;
        }
        .choix input[type="checkbox"] {
            margin-center: 10px;
        }
        #choix div {
            padding: 50px 17px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

    </style>
<script>
let checkboxes = document.querySelectorAll('input[type="checkbox"]');
let choixSection = document.getElementById('choix');

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        let label = this.parentNode.querySelector('label').innerText;
        let divs = choixSection.getElementsByTagName('div');
        let found = false;

        for (let i = 0; i < divs.length; i++) {
            if (divs[i].textContent === label) {
                if (this.checked) {
                    found = true;
                } else {
                    choixSection.removeChild(divs[i]);
                }
                break;
            }
        }

        if (!found && this.checked) {
            let newDiv = document.createElement('div');
            newDiv.textContent = label;
            choixSection.appendChild(newDiv);
            // choixSection.appendChild(document.createElement('br'));

            
        }


    });
}); -->


</script> 
</section>

<section id="choix">
<video autoplay muted loop id="Heb-video">
    <source src="Video.mp4" type="video/mp4">
  </video>

  <!-- afficher selection -->
<table>
  <thead>
    <tr>
      <th>
      <H1>Vous avez sélectionné : </H1>
</br>


<p id="selected-item1"></p>
</br>
<p id="selected-item2"></p>
</br>
<p id="selected-item3"></p>
</br>
<p id="selected-item4"></p>
</br>
<p id="selected-item5"></p>
</br>
<p id="selected-item6"></p>
</br>
<p id="selected-item7"></p>
</br>
<p id="selected-item8"></p>
</br>
<p id="selected-item9"></p>
</br>
<p id="selected-item10"></p>
</br>
<p id="selected-item11"></p>
</br>
<p id="selected-item12"></p>
</br>
<p id="selected-item13"></p>
</br>
<p id="selected-item14"></p>
</br>
<p id="selected-item15"></p>
</br>
<p id="selected-item16"></p>
</br>
<p id="selected-item17"></p>
</br>
<p id="selected-item18"></p>
</br>
<p id="selected-item19"></p>
</br>
<p id="selected-item20"></p>
</br>
<p id="selected-item21"></p>
</br>
<p id="selected-item22"></p>
</br>
<p id="selected-item23"></p>
</br>
<p id="selected-item24"></p>
</br>
<p id="selected-item25"></p>
</br>
<p id="selected-item26"></p>
</br>
<p id="selected-item27"></p>
</br>
<p id="selected-item28"></p>
</br>
<p id="selected-item29"></p>
</br>
<p id="selected-item30"></p>
</br>
<p id="selected-item31"></p>
</br>
<p id="selected-item32"></p>
</br>
<p id="selected-item33"></p>
</br>
<p id="selected-item34"></p>
</br>
<p id="selected-item35"></p>
</br>

</div>
  </th>
    </tr>

  </thead>

  <tbody>
   

</table>
  </thead>





<script>
  const checkboxes = document.querySelectorAll('.save-checkbox');
  const selectedItems = document.querySelectorAll('p[id^="selected-item"]');

  checkboxes.forEach((checkbox, index) => {
    checkbox.addEventListener('change', () => {
      if (checkbox.checked) {
        selectedItems[index].textContent = `"${checkbox.value}"`;
      } else {
        selectedItems[index].textContent = '';
      }
    });
  });
</script>
</section>

<div id="totalCost"></div>




<script>
function updateTotalCost() {
    let totalCost = Array.from(document.querySelectorAll('input[name="LSEO"]:checked, input[name="LS"]:checked, input[name="Intr"]:checked, input[name="WebAss"]:checked, input[name="MJS"]:checked, input[name="Heb"]:checked')).reduce(function(sum, el) 
    
    {
        return sum + parseInt(el.value);
    }, 0);

    document.getElementById('totalCost').textContent = totalCost + '€';
}

document.querySelectorAll('input[name="LSEO"], input[name="LS"],  input[name="Intr"], input[name="WebAss"], input[name="MJS"], input[name="Heb"]').forEach(function(el) {
    el.addEventListener('click', function() {
        updateTotalCost();
    });
});

</script>



<div id="totalTVA"></div>

<script>
function updateTotalTVA() {
    let totalTVA = Array.from(document.querySelectorAll('input[name="LSEO"]:checked, input[name="LS"]:checked, input[name="Intr"]:checked, input[name="WebAss"]:checked, input[name="MJS"]:checked, input[name="Heb"]:checked')).reduce(function(sum, el) 
    
    {
        return sum + parseInt(el.value);
    }, 0);

    let totalTVAWithTax = totalTVA * 1.20;
    document.getElementById('totalTVA').textContent = totalTVAWithTax + '€';
}

document.querySelectorAll('input[name="LSEO"], input[name="LS"], input[name="Intr"], input[name="WebAss"], input[name="MJS"], input[name="Heb"]').forEach(function(el) {
    el.addEventListener('click', function() {
        updateTotalTVA();
    });
});

// calculer et afficher le coût total et le coût total avec la TVA
</script>




</div>
</body>




</th> 
 </a>
</p> 
</tr>
</div>
</thead>
</form>
</p>
      </tr>
    </tbody>
 </table>

<!-- <script type="text/javascript">
  

  function toggleCheckbox(checkboxxId, textId) {
 document.getElementById(checkboxxId).addEventListener('change', function() {
    var text = document.getElementById(textId);
    
    if (this.checked) {
      text.style.display = 'block';
    } else {
      text.style.display = 'none';
    }
 });
}

var checkboxes = [ 
 { id: 'checkbox', textId: 'text' },
 { id: 'checkbox2', textId: 'text2' },
 { id: 'checkbox3', textId: 'text3' },
 { id: 'checkbox4', textId: 'text4' },
 { id: 'checkbox5', textId: 'text5' },
 { id: 'checkbox6', textId: 'text6' },
 { id: 'checkbox7', textId: 'text7' },
 { id: 'checkbox8', textId: 'text8' },
 { id: 'checkbox9', textId: 'text9' },
 { id: 'checkbox10', textId: 'text10' },
 { id: 'checkbox11', textId: 'text11' },
 { id: 'checkbox12', textId: 'text12' },
 { id: 'checkbox13', textId: 'text13' },
 { id: 'checkbox14', textId: 'text14' },
 { id: 'checkbox15', textId: 'text15' },
 { id: 'checkbox16', textId: 'text16' },
 { id: 'checkbox17', textId: 'text17' },
 { id: 'checkbox18', textId: 'text18' },
 { id: 'checkbox19', textId: 'text19' },
 { id: 'checkbox20', textId: 'text20' },
 { id: 'checkbox21', textId: 'text21' },
 { id: 'checkbox22', textId: 'text22' },
 { id: 'checkbox23', textId: 'text23' },
 { id: 'checkbox24', textId: 'text24' },
 { id: 'checkbox25', textId: 'text25' },
 { id: 'checkbox26', textId: 'text26' },
 { id: 'checkbox27', textId: 'text27' },
 { id: 'checkbox28', textId: 'text28' },
 { id: 'checkbox29', textId: 'text29' },
 { id: 'checkbox30', textId: 'text30' },
 { id: 'checkbox31', textId: 'text31' },
 { id: 'checkbox32', textId: 'text32' },
 { id: 'checkbox33', textId: 'text33' },
 { id: 'checkbox34', textId: 'text34' },
 { id: 'checkbox35', textId: 'text35' },



];

for (var i = 0; i < checkboxes.length; i++) {
 toggleCheckbox(checkboxes[i].id, checkboxes[i].textId);
} -->

<!-- // document.getElementById('checkbox').addEventListener('change', function() {
//  var text = document.getElementById('text');
 
//  if (this.checked) {
//     text.style.display = 'block';
//  } else {
//     text.style.display = 'none';
//  }
// });

// document.getElementById('checkbox2').addEventListener('change', function() {
//  var text = document.getElementById('text2');
 
//  if (this.checked) {
//     text.style.display = 'block';
//  } else {
//     text.style.display = 'none';
//  }
// });

</script> -->






<!-- <?php

$bdd = new P("mysql:hostlocalhost;dbnameformoro", "root", "7yp~I26u");

$checkbox_values = $_POST['save-checkbox'];

foreach ($checkbox_values as $checkbox_value) {
  $stmt = $bdd->prepare("INSERT INTO selected_items (checkbox_column) VALUES (:checkbox_value)");
  $stmt->bindParam(':checkbox_value', $checkbox_value);
  if ($stmt->execute()) {
    echo "Data successfully inserted";
  } else {
    echo "Error: " . $stmt->errorInfo()[2]; 
  }
}

?> -->


</section>

 



<!-- // <script>
// $(document).ready(function() {
//   $('.save-checkbox, .save-radio').click(function() {
//     var elementId = $(this).data('id');
//     $('#saved-elements').append('<p id="element-' + elementId + '">Enregistré : ' + elementId + '</p>');
//     $.post('save.php', { id: elementId }, function(data) {
//       console.log('Enregistrement dans la base de données : ' + data);
//     });
//   });
// });
// </script>

 <?php

$bdd = new PDO("mysql:host=localhost;dbname=formoro", "root", "17yp~I26u");

$checkbox_values = $_POST['save-checkbox'];
$radio_value = $_POST['save-radio'];

foreach ($checkbox_values as $checkbox_value) {
  $stmt = $bdd->prepare("INSERT INTO save (checkbox_column) VALUES (:checkbox_value)");
  $stmt->bindParam(':checkbox_value', $checkbox_value);
  if ($stmt->execute()) {
    echo "Data successfully inserted";
  } else {
    echo "Error: " . $stmt->errorInfo()[2]; 
  }
}


$stmt = $bdd->prepare("INSERT INTO myTable (radio_column) VALUES (:radio_value)");
$stmt->bindParam(':radio_value', $radio_value);
if ($stmt->execute()) {
  echo "Data successfully inserted";
} else {
  echo "Error: " . $stmt->errorInfo()[2];   
}
?>  


// $pdo = new PDO('mysql:');


// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $stmt = $pdo->prepare('INSERT INTO saved_elements (element_id) VALUES (:id)');
// $stmt->bindParam(':id', $id);
// $id = $_POST['id'];
// $stmt->execute();
// echo 'Enregistrement dans la base de données réussi';
// ?> 
-->
</section>

<!-- <script>
document.addEventListener('click', function(event) {
    const container = event.target.closest('.toggle-container');
    if (container) {
      container.querySelector('.toggle-checkbox').click();
    }
  });


</script> -->






</div>


    </body>

    
</html>
