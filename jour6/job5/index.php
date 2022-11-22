<html>


<head></head>
<body>
<form  method="post">
      <select name="style-choix">
      	<option>Style 1</option>
      	<option>Style 2</option>
      	<option>Style 3</option>
      </select>

      <input type="submit" value="Envoyer">
      
</form>
</head>
</body>
</html>



      <?php
            echo '<link rel="stylesheet" type="text/css" href="';
            foreach($_POST as $valeur){
            switch ($valeur)
            {
                  case 'Style 1':
                        echo 'style.1.css" />';
    
                        break;
                  case 'Style 2':
                        echo 'style.2.css" />';
                        break;
                  case 'Style 3':
                        echo 'style.3.css" />';
                        break; 
                        default:
                        echo 'style1.css" />';
            }
        }
      ?>
