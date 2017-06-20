
<div id="register">
  <form  action="<?php echo site_url('Data/connexion'); ?>" autocomplete="off" method="POST" >
    <h1 id="registerh1">Connexion</h1>
    <p> 
      <label for="login" class="login"  > Login </label>
      <input id="login" name="login" required="required" type="text" placeholder="login ou email"/>
    </p>
    <p> 
      <label for="password" class="password" > Mot de passe </label>
      <input id="password" name="password" required="required" type="password" placeholder="ex. X8df!90EO" /> 
    </p>
    <p class="keeplogin"> 
      <input type="checkbox" name="loginkeeping" id="loginkeeping" value="Resté connecté" /> 
      <label for="loginkeeping">Resté connecté</label>
    </p>
    <p class="login button"> 
      <input type="submit" value="Connexion" /> 
    </p>
    <p class="change_link">
      Pas encore membre?
      
     <a href="<?php echo site_url('Liens/subscribe'); ?>" class="to_register">Rejoignez-nous</a>




    </p>
  </form>
</div>