<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type='text/css' media='all' href="#" />
    
        <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background:#0c6688;
    position:relative;
  }

  .container{
    display: flex;
    align-items: center;
  }
  
  
  section {
    width: 370px;
    background-color: azure;
    height: 390px;
    border-radius: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 26px;

  }
  
  form {
    display: flex;
    flex-direction: column;
    width: 50%;
    border-radius: 10px;
    text-align: center;
    color: #0c6688;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;


  }
  
  label {
    margin-bottom: 5px;
    text-align: center;
    color: #0c6688;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;



  }
  select#role {
    width: 185px;
    font-size: 15px;
    text-align: center;
    border-radius: 10px;
    padding: 5px;
    font-family:serif;
    color: #0c6688;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;


  }
  
  input[type="password"] {
    margin-bottom: 10px;
    width: 180px;
    height: 20px;
    border-radius: 10px;
    color: #0c6688;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;


  }
  
  input[type="submit"] {
   
    margin-top: 10px;
    align-self: center;
    border-radius: 20px;
    width: 70px;
    height: 30px;
    border-radius: 10px;
    color: #0c6688;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 15px;


    
  }

  H1{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background: linear-gradient(to right,  #08074d, #000982, #1e3cc2, #2f00ff);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    font-size: 30px;
    font-weight: bold;
    margin-left: 100px;

  }

  img{
    width : 70px;
height : 70px;
margin-top:-75px;
margin-right:270px;


  }

 

  .toggle-checkbox {
    display: none;
  }
  
  .toggle-label {
    position: relative;
    top: 0;
    left: 0;
    width: 58px;
    height: 26px;
    border-radius: 26px;
    background-color: #2196F3;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .toggle-text {
    position: absolute;
    top: 2px;
    left: 21px;
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
    left:-650px;
    top:-157px;
    
  }

  
  .toggle-checkbox:checked + .toggle-label {
    background-color: #ccc;

  }
  
  
  .toggle-checkbox:checked + .toggle-label ~ .toggle-text:before {
    content: "OFF";
    display: inline;
    cursor: pointer;

  }
  
  .toggle-checkbox:not(:checked) + .toggle-label ~ .toggle-text:before {
    content: "ON";
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
  margin-left: -500px;
  margin-top:-360px;
}
#element {
  display: none;
}
#element:target {
  display: block;
}

@media (max-width: 1669px) {
    
  #element {
    position: fixed;
         margin-right: -100px;
         margin-left:20px;
    }
    }

    @media (max-width: 820px) {
    
    #element {
      position: fixed;
           margin-right: -570px;
           margin-top:-625px;

      }
      } 

      @media (max-width: 768px) {
    
    #element {
      position: fixed;
           margin-right: -620px;
           margin-top:-485px;

      }
      } 
      @media (max-width:377px) {
    
    #element {
      position: fixed;
  margin-left: -700px;
  margin-top:-600px;
      }
      } 
      
</style>
   
    </head>
    <body>

        
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

    <section>
    <H1> Identifiez-vous </H1> 
    <img src="logo2.png">

    <form action="traitement.php" method="post">
        
        <label for="role">Role:</label>

        <select name="role" id="role">
        </br>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
</br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <input type="submit" name="submit" value="Login">
</br>

    </form>
</section>



</body>
</html>


 
 
