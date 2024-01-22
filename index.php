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

 

  .toggle-container {
    position: absolute;
    display: inline-block;
    left:0;
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
    background-color: #2196F3;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .toggle-text {
    position: absolute;
    top: 2px;
    left: 1px;
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
    left:1070px;
    top:-340px;
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
    background-color:#2196F3;
    cursor: pointer;
    transition: background-color 0.3s ease;

  }
  
  .toggle-text {
    position: absolute;
    top: 5px;
    left: 20px;
    font-size: 14px;
    color: #fff;
    user-select: none;
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
</style>
   
    </head>
    <body>

        <div class="toggle-container">
            <input type="checkbox" id="toggle" class="toggle-checkbox">
            <label for="toggle" class="toggle-label"> </label>
            <span class="toggle-text"></span>
          </div>

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

<script>
document.addEventListener('click', function(event) {
    const container = event.target.closest('.toggle-container');
    if (container) {
      container.querySelector('.toggle-checkbox').click();
    }
  });


</script>
<script>
        document.addEventListener('click', function(event) {
            const container = event.target.closest('.toggle-container')
            if (container) {
                const checkbox = container.querySelector('.toggle-checkbox')
                if (checkbox.checked) {
                    window.location.href = 'WFrom.php'
                } else {
                    window.location.href = 'index.php'
                }
            }
        })
    </script>

</body>
</html>


 