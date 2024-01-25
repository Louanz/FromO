<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Orco.css">       
        <script type="text/javascript" src="Affichage.js"></script>
        <title>FormO</title>

        <style>
    .test {
      text-align: center;
        background:white;
        position: fixed;
        display: block;
        width: 300px;
        padding: 80px;
        top: 50%;
        left: 87%;
        transform: translate(-50%, -50%);
        color:azure;
        border-radius: 40px;
        box-shadow:
        -webkit-box-shadow:0px 0px 45px 6px rgba(12,103,136,0.87);
-moz-box-shadow: 0px 0px 45px 6px rgba(12,103,136,0.87);
box-shadow: 0px 0px 45px 6px rgba(12,103,136,0.87);
        color:#12165f;
    }

    @media (max-width: 1060px) {
      .test {
        text-align: center;
        font-size: 18px;
    left: 80%;
    top: 90%;
    padding: 47px;
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
  
  .toggle-label {
    position: absolute;
    top: 0;
    left: 0;
    width: 58px;
    height: 26px;
    border-radius: 26px;
    background-color: #ccc;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .toggle-text {
    position: absolute;
    top: 0px;
    left: 0px;
    font-size: 14px;
    color: #fff;
    user-select: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;

  }
  
  
  .toggle-container {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 20px;
    left:7px;

  }
  
  .toggle-checkbox {
    display: none;
  }
  
  .toggle-label {
    position: absolute;
    top: 0;
    left: 0;
    width: 58px;
    height: 26px;
    border-radius: 26px;
    background-color: #ccc;
    cursor: pointer;
    transition: background-color 0.3s ease;

  }
  
  .toggle-text {
    position: absolute;$
    top: 3px;
    right: 300px;
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
  background-color: #f2f2f2;
  padding: 10px;
  cursor: pointer;
}

#element {
  position: fixed;
  margin-left: -500px;
  margin-top:-360px;
}
#element {
  display: none;
}
#element:target {
  display: block;
}

 .tooltip {
  position: relative;
  display: inline-block;
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

<th>  <H3>Total TVA </H3>
<div id="totalTVA"></div> </th>

</br>
    <th><H3>Total</H3>
<div id="totalCost"></div> </th>
</div>

<div class="logg">
<p> lal</p>
</div>



</header>


<section id="LSEO">


<table>

  <thead>
    <tr>
      <th>Licence SEO</th>
      <th> 


    <th> <p> L1 </p> </th>
    <th> <p> L2 </p> </th>
    <th> <p> L3 </p> </th>

    
    <div class="ch">

    <div id="arrow">▸</div>
<div id="element">

<div class="toggle-container">
            <input type="checkbox" id="toggle" class="toggle-checkbox">
            <label for="toggle" class="toggle-label"> </label>
            <span class="toggle-text"></span>
            
</div> 


<script>
        document.addEventListener('click', function(event) {
            const container = event.target.closest('.toggle-container')
            if (container) {
                const checkbox = container.querySelector('.toggle-checkbox')
                if (checkbox.checked) {
                    window.location.href = 'index.php'
                } else {
                    window.location.href = 'WFrom.php'
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
    <div class="tooltip" data-tooltip="Message personnalisé 1">🛈</div>
      </h4>

</div>  
</br>   
<div>
 <h4>
    <input type="checkbox" id="checkbox2" class="save-checkbox" value="Soumission moteurs et annuaires" />
    <label for="checkbox2">Soumission moteurs et annuaires</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>    </h4>         
</div>
</br>   

<div>
  <h4>
    <input type="checkbox" id="checkbox3" class="save-checkbox" value="Gestion par pages SEO avancé" />
    <label for="checkbox3">Gestion par pages SEO avancé</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox4" class="save-checkbox" value="Autopublication Facebook" />
    <label for="checkbox4">Autopublication Facebook</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox5" class="save-checkbox" value="Amélioration référencement par script Personnalisé" />
    <label for="checkbox5">Amélioration référencement</br>par script Personnalisé</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>    </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox6" class="save-checkbox" value="Amélioration du chargement des pages" />
    <label for="checkbox6">Amélioration du chargement des pages</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox7" class="save-checkbox" value="Statistiques" />
    <label for="checkbox7">Statistiques</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>   </h4>
</div>
<br />

<div>
  <h4>
    <input type="checkbox" id="checkbox8" class="save-checkbox" value="Référencement local dans 25 annulaires + navigateurs" />
    <label for="checkbox8">Référencement local</br>dans 25 annulaires + navigateurs</label>
    <div class="tooltip" data-tooltip="Message personnalisé z">🛈</div>
</div>    </h4>
</div>

<script>
const tooltips = document.querySelectorAll('.tooltip');

tooltips.forEach(tooltip => {
  tooltip.addEventListener('click', () => {
    alert(tooltip.getAttribute('data-tooltip'));
  });
});
</script>

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


<table>

  <thead>
    <tr>
      <th>Licence Sécurité </th>
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
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox10" class="save-checkbox" value="Accélérateur de performance & CDN" />
  <label for="checkbox10">Accélérateur de performance & CDN</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox11" class="save-checkbox" value="Antispam" />
  <label for="checkbox11">Antispam</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox12" class="save-checkbox" value="Protection de force brute" />
  <label for="checkbox12">Protection de force brute</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox13" class="save-checkbox" value="Vérification des modifications" />
  <label for="checkbox13">
    Vérification des modifications <br />
    <br /> FTP&SQL non légitime
  </label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox14" class="save-checkbox" value="Réseau de protection de force brute" />
  <label for="checkbox14">Réseau de protection de force brute</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox15" class="save-checkbox" value="Protection salage" />
  <label for="checkbox15">Protection salage </label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox16" class="save-checkbox" value="Blocage des utilisateurs exploit" />
  <label for="checkbox16">Blocage des utilisateurs exploit</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox17" class="save-checkbox" value="Refonte du site en cas de problème" />
  <label for="checkbox17">Refonte du site en cas de problème</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />
               
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



<table>

  <thead>
    <tr>
      <th>Hébergement Sur le serveur dédié</th>
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
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox19" class="save-checkbox" value="Nom de domaine .fr" />
  <label for="checkbox19">Nom de domaine .fr</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox20" class="save-checkbox" value="SQL 512ram/ SSL (Https)" />
  <label for="checkbox20">SQL 512ram/ SSL (Https) </label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox21" class="save-checkbox" value="Sauvegarde J+15 et J+30" />
  <label for="checkbox21">
    Sauvegarde J+15 et J+30 <br />
    <br /> (sur des hébergeurs différents )
  </label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox22" class="save-checkbox" value="Administration Réseaux par nos soins" />
  <label for="checkbox22">Administration Réseaux par nos soins </label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox23" class="save-checkbox" value="Gestion de DNS" />
  <label for="checkbox23">Gestion de DNS</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
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



<table>

  <thead>
    <tr>
      <th>Module sur mesure Mise à jour</th>
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

<thead>

</thead>
</table>
    </thead>
</section>

<section id="Intrg">

<table>

  <thead>
    <tr>
      <th>Integarteur / réparation respective </th>
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
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox25" class="save-checkbox" value="Réparation du squelette du site" />
  <label for="checkbox25">Réparation du squelette du site</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox26" class="save-checkbox" value="Adaptation sur différents navigateurs internet" />
  <label for="checkbox26">Adaptation sur différents navigateurs internet</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox27" class="save-checkbox" value="Réparation de bugs entre versions" />
  <label for="checkbox27">Réparation de bugs entre versions</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
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

</br>

<section id="Webmaster">

<table>

  <thead>
    <tr>
      <th>Webmaster / Assistance </th>
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
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox29" class="save-checkbox" value="Mise à jour CMS + Modules" />
  <label for="checkbox29">Mise à jour CMS + Modules</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox30" class="save-checkbox" value="Support, gestion administrative" />
  <label for="checkbox30">Support, gestion administrative</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox31" class="save-checkbox" value="Modification du contenu sur demande" />
  <label for="checkbox31">Modification du contenu sur demande</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox32" class="save-checkbox" value="Correction & Gestion des formulaires personnalisés" />
  <label for="checkbox32">Correction & Gestion des formulaires personnalisés</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox33" class="save-checkbox" value="Téléphone/mail d'urgence weekend et jour férié" />
  <label for="checkbox33">Téléphone/mail d'urgence weekend et jour férié</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox34" class="save-checkbox" value="Formation à l'administration" />
  <label for="checkbox34">Formation à l'administration</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

<div>
  <input type="checkbox" id="checkbox35" class="save-checkbox" value="Gestion de l'ensemble des factures" />
  <label for="checkbox35">Gestion de l'ensemble des factures</label>
  <span class="tooltip" data-tooltip="Ceci est un outil d'information">🛈</span>
</div>
<br />

    <td><td><input type="radio" name="WebAss" class="save-radio" value="25">25€</td>
<td><input type="radio" name="WebAss"class="save-radio" value="25">25€</td>
<td><input type="radio" name="WebAss" class="save-radio" value="30">30€ </td>
</td>

    <tr>
      <th>Temps </th>
      <th> 
   <div>

     
    <td>
   <td> <div class="btn-group" data-toggle="buttons">
            <input type="radio" name="temps " checked value="25"> 30min
            </div>
        </td>

<td>
            <div class="btn-group" data-toggle="buttons">
            <input type="radio" name="temps " checked value="10"> 1h
            </div>
        </td>
    </div>
</td>


  </th>
    </tr>

  </thead>





</thead>
</table>
</div>







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

</script>



<section id="choix">
<?php

$bdd = new PDO("mysql:host=localhost;dbname=formoro", "root", "formoroBd01.");

// Assuming 'myTable' is the name of your table , ici pour les "save"
$checkbox_values = $_POST['save-checkbox'];
$radio_value = $_POST['save-radio'];

foreach ($checkbox_values as $checkbox_value) {
  // Use prepared statements to avoid SQL injection
  $stmt = $bdd->prepare("INSERT INTO save (checkbox_column) VALUES (:checkbox_value)");
  $stmt->bindParam(':checkbox_value', $checkbox_value);
  if ($stmt->execute()) {
    echo "Data successfully inserted";
  } else {
    echo "Error: " . $stmt->errorInfo()[2]; // Display the error message
  }
}

// Same for radio value
$stmt = $bdd->prepare("INSERT INTO myTable (radio_column) VALUES (:radio_value)");
$stmt->bindParam(':radio_value', $radio_value);
if ($stmt->execute()) {
  echo "Data successfully inserted";
} else {
  echo "Error: " . $stmt->errorInfo()[2]; // Display the error message
}
?>


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



// $pdo = new PDO('mysql:');


// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $stmt = $pdo->prepare('INSERT INTO saved_elements (element_id) VALUES (:id)');
// $stmt->bindParam(':id', $id);
// $id = $_POST['id'];
// $stmt->execute();
// echo 'Enregistrement dans la base de données réussi';
// ?> -->

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
