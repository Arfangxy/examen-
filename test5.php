
<html>
<head>
   
    
    <title>mon site</title>
    
    
</head>
<body>
<center>
<table width="25%" border="4">
          <tbody><tr align="left" valign="right"> 
  <td><center><img src="arfang.jpeg" width="30%" border="2"></center>
  <hr  width="100%">

<?php
     $prenom="arfang";
     $nom="sow";
      $age=14;
     $email="sowarfang98@gmail.com";
     $adresse="khombole";
 $personne=array (
        "nom"=>"sow",
        "prenom"=>"arfang",
        "age"=>"14",
        "email"=>"sowarfang98@gmail.com",
        "adresse"=>"khombole");
    
   foreach($personne as $key =>$value){
       echo  $key. ":" .$value."<br/>";
   }
    
    ?>
    </td>

</tr>


    </tbody>
    </table>
    </center>
</body>
</html>