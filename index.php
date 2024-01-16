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
        background:#0c6688;
        position: fixed;
        display: block;
        width: 300px;
        padding: 80px;
        border: none;
        top: 50%;
        left: 87%;
        transform: translate(-50%, -50%);
        color:white;
        border-radius: 30px;
        box-shadow: 13px 6px 6px #27011E;
    }

    @media (max-width: 1060px) {
      .test {
        text-align: center;
    left: 70%;
    width: 200px;
    top: 80%;


  }
    }

  img {
    float: left;
    height: 64px;
  }
  @media (max-width: 800px) {
    img {
      float: left;
      height: 50px;
      
    }
  }

    </style>

    </head>
    <body>
    <!-- <form method="post" action="enregistrement.php"> -->
    <form method="post" action="Oroc.php">

    <header>

<img src="logo.png"/> 
<nav> 
  <a class="active" href="#LSEO">LSEO</a>  
  <a href="#LS">LS</a>
  <a href="#Heb">Heb</a>
  <a href="#MJS">MJS</a>
  <a href="#Intrg">Integrateurs</a>
  <a href="#Webmaster">Webmaster</a>
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

  </th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td>

      <div>
  
                    <h4> <input type="checkbox" id="checkbox"  class="save-checkbox" value="Robots, sitmaps, flux Rss ">
                    <label for="checkbox"> Robots, sitmaps, flux Rss </label>
                    <p id="text" style="display: none;"> Explication ici </p> </h4>
</div>  
</br>   
<div>
<h4> <input type="checkbox" id="checkbox2" class="save-checkbox" value="Soumission moteurs  et annuaires" >
                    <label for="checkbox">Soumission moteurs  </br>   </br> annuaires</label>
                    <p id="text2" style="display: none;"> Explication ici </p> </h4>
</div>
</br>   

<div>
<h4> <input type="checkbox" id="checkbox3" class="save-checkbox" value="Gestion par pages SEO avancé ">
                    <label for="checkbox"> Gestion par pages SEO avancé </label>
                    <p id="text3" style="display: none;"> Explication ici </p> </h4>
</div>
</br>   

<div>
<h4> <input type="checkbox" id="checkbox4" class="save-checkbox" value="Autopublication Facebook">
                    <label for="checkbox"> Autopublication Facebook </label>
                    <p id="text4" style="display: none;"> Explication ici </p> </h4>
</div>
</br>   

<div>
<h4><input type="checkbox" id="checkbox5" class="save-checkbox"  value="Amélioration référencement par script Personnalisé">
                    <label for="checkbox"> Amélioration référencement </br>   </br> par script Personnalisé </label>
                    <p id="text5" style="display: none;"> Explication ici </p> </h4>
</div>
</br>  


<div>
<h4><input type="checkbox" id="checkbox6" class="save-checkbox" value="Amélioration du chargement des pages ">
                    <label for="checkbox"> Amélioration du chargement des pages </label>
                    <p id="text6" style="display: none;"> Explication ici </p> </h4>
</div>
</br>   

<div>
<h4><input type="checkbox" id="checkbox7" class="save-checkbox" value="Statistiques">
                    <label for="checkbox"> Statistiques </label>
                    <p id="text7" style="display: none;"> Explication ici </p> </h4>
</div>
</br>   

<div>
<h4><input type="checkbox" id="checkbox8" class="save-checkbox" value="Réferencement local dans 25 annulaires + navigateurs" >
                    <label for="checkbox"> Réferencement local </br>   </br> dans 25 annulaires + navigateurs  </label>
                    <p id="text8" style="display: none;"> Explication ici </p> </h4>
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
                    <input type="checkbox" id="checkbox9" class="save-checkbox" value="Firewall & SSL" >
                    <label for="checkbox">Firewall & SSL</label>
                    <p id="text9" style="display: none;"> Explication ici </p>
</div>  
</br>   
      <div>
                    <input type="checkbox" id="checkbox10" class="save-checkbox"  value="Accélérateur de performance & CDN" >
                    <label for="checkbox">Accélérateur de performance & CDN</label>
                    <p id="text10" style="display: none;"> Explication ici </p>
</div>  
</br>   
      <div>
                    <input type="checkbox" id="checkbox11" class="save-checkbox"  value="Antispam" >
                    <label for="checkbox">Antispam</label>
                    <p id="text11" style="display: none;"> Explication ici </p>
</div>  
</br>   
      <div>
                    <input type="checkbox" id="checkbox12" class="save-checkbox"  value="Protection de force brute" >
                    <label for="checkbox">Protection de force brute</label>
                    <p id="text12" style="display: none;"> Explication ici </p>
</div>  
</br> 
  <div>
                    <input type="checkbox" id="checkbox13" class="save-checkbox"  value=" Vérification des modifications ">
                    <label for="checkbox">Vérification des modifications </br>   </br> FTP&SQL non légitime</label>
                    <p id="text13" style="display: none;"> Explication ici </p>
</div> 
 </br>  
 <div>
                    <input type="checkbox" id="checkbox14" class="save-checkbox"  value="Réseau de protection de force brute" >
                    <label for="checkbox">Réseau de protection de force brute</label>
                    <p id="text14" style="display: none;"> Explication ici </p>
</div>  
 
 
</br> 
<div>
                    <input type="checkbox" id="checkbox15" class="save-checkbox"  value="Protection salage">
                    <label for="checkbox">Protection salage </label>
                    <p id="text15" style="display: none;"> Explication ici </p>
</div>    
</br>   <div>
                    <input type="checkbox" id="checkbox16" class="save-checkbox"  value="Blocage des utilisateurs exploit">
                    <label for="checkbox">Blocage des utilisateurs exploit</label>
                    <p id="text16" style="display: none;"> Explication ici </p>
</div>  
</br>     <div>
                    <input type="checkbox" id="checkbox17" class="save-checkbox"  value="Refonte du site en cas de problème" >
                    <label for="checkbox">Refonte du site en cas de problème</label>
                    <p id="text17" style="display: none;"> Explication ici </p>
</div>  
</br>   

               
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
                    <input type="checkbox" id="checkbox18" class="save-checkbox"  value="">
                    <label for="checkbox">CPU attribué & SSD</label>
                    <p id="text18" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox19"  class="save-checkbox"  value="">
                    <label for="checkbox">Nom de dommaine .fr</label>
                    <p id="text19" style="display: none;"> Explication ici </p>
</div>
</br>   
<div>
                    <input type="checkbox" id="checkbox20"  class="save-checkbox"  value="">
                    <label for="checkbox">SQL 512ram/ SSL (Https) </label>
                    <p id="text20" style="display: none;"> Explication ici </p>
</div>
</br>  
<div>
                    <input type="checkbox" id="checkbox21"  class="save-checkbox"  value="" >
                    <label for="checkbox"> Sauvegarde J+15 et J+30 </br>   </br> (sur des hébergeurs différents )</label>
                    <p id="text21" style="display: none;"> Explication ici </p>
</div>
</br>  
<div>
                    <input type="checkbox" id="checkbox22"  class="save-checkbox"  value="">
                    <label for="checkbox">Administration Réseaux par nos soins </label>
                    <p id="text22" style="display: none;"> Explication ici </p>
</div>
</br>  
<div>
                    <input type="checkbox" id="checkbox23"  class="save-checkbox"  value="">
                    <label for="checkbox">Gestion de DNS</label>
                    <p id="text23" style="display: none;"> Explication ici </p>
</div>
</br>  



     
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

</section>
<section id="Intrg">

<table>

  <thead>
    <tr>
      <th>Integarteur </th>
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
                    <input type="checkbox" id="checkbox24"  class="save-checkbox"  value="">
                    <label for="checkbox">Réparation du design reponsive</label>
                    <p id="text24" style="display: none;"> Explication ici </p>
</div>  
</br> 

<div>
                    <input type="checkbox" id="checkbox25" class="save-checkbox"  value="">
                    <label for="checkbox">Réparation du squelette du site</label>
                    <p id="text25" style="display: none;"> Explication ici </p>
</div>  
</br>

<div>
                    <input type="checkbox" id="checkbox26" class="save-checkbox"  value="">
                    <label for="checkbox">Adaptation sur différents navigateurs internet</label>
                    <p id="text26" style="display: none;"> Explication ici </p>
</div>  
</br>

<div>
                    <input type="checkbox" id="checkbox27" class="save-checkbox"  value="">
                    <label for="checkbox">Réparation de bugs entre versions </label>
                    <p id="text27" style="display: none;"> Explication ici </p>
</div>  
</br>

  

     
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
                    <input type="checkbox" id="checkbox28" class="save-checkbox"  value="">
                    <label for="checkbox">Suivi récurrent</label>
                    <p id="text28" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox29" class="save-checkbox"  value="">
                    <label for="checkbox"> Mise à jour CMS + Modules</label>
                    <p id="text29" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox30" class="save-checkbox"  value="">
                    <label for="checkbox">Support, gestion administrative</label>
                    <p id="text30" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox31" class="save-checkbox"  value="">
                    <label for="checkbox">Modification du contenu sur demande </label>
                    <p id="text31" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox32" class="save-checkbox"  value="">
                    <label for="checkbox">Correction & Gestion </br>   </br> des formulaires personnalisés</label>
                    <p id="text32" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox33" class="save-checkbox"  value="">
                    <label for="checkbox">Téléphone/mail d'urgence </br>   </br>weekend et jour férié</label>
                    <p id="text33" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>
                    <input type="checkbox" id="checkbox34" class="save-checkbox"  value="">
                    <label for="checkbox">Formation à l'administration </label>
                    <p id="text34" style="display: none;"> Explication ici </p>
</div>  
</br>   
<div>               
                     
                    <input type="checkbox" id="checkbox35" class="save-checkbox"  value="">
                    <label for="checkbox36"> Gestion de l'ensemble des factures</label>
                    <p id="text35" style="display: none;"> Explication ici </p>
</div>  
</br>   


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




<script type="text/javascript">
  

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
}

// document.getElementById('checkbox').addEventListener('change', function() {
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

</script>

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

$bdd = new PDO("mysql:host=localhost;dbname=formoro","formoro","17yp~I26u");

// $con = mysqli_connect('formoro','formoro','17yp~I26u');

// mysqli_select_db('formoro', $con)

$checkbox_values = $_POST['save-checkbox']; 
$radio_value = $_POST['save-radio']; 

foreach ($checkbox_values as $checkbox_value) {
  $sql = "INSERT INTO myTable (checkbox_column) VALUES ('$checkbox_value')";
  if ($conn->query($sql) === TRUE) {
    echo "donnée bien enrgistré";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$sql = "INSERT INTO myTable (radio_column) VALUES ('$radio_value')";
if ($conn->query($sql) === TRUE) {
  echo "donnée bien enrgistré";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
lala
?>   


// <!-- <script>
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
// ?>

</section>
  

</div>


    </body>

    
</html>
