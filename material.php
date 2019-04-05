<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
  body {
    overflow:hidden;
  }
</style>
</head>
<body>

<form action="submit.php" method="post" class="col s12">
   <div class="row">
      <div class="col s12 m4 offset-m4">
         <div class="card">
            <div class="card action teal lighen-1 white-text center-align">
               <h3>Appeal System</h3>
            </div>
            <div class="card-content">
               <div class="form-field">
                  <label for="ign">In Game Name</label>
                  <input type="text" name="ign" required/>
               </div><br>

               <div class="form-field">
                  <label for="discorduser">Discord User</label>
                  <input type="text" name="discorduser" required/>
               </div><br>
               
               <div class="form-field">
                  <label for="type">Type of Punishment</label>
                  <select name="type" required>
                     <option>Ban</option>
                     <option>Mute</option>
                  </select>
               </div><br>
                           
               <div class="form-field">
                  <label for="reason">Reason for Punishment</label>
                  <textarea type="text" name="reason" class="materialize-textarea" required></textarea>
               </div><br>
                                       
               <div class="form-field">
                  <label for="reason">Length of Punishment</label>
                  <input type="text" name="length" required/>
               </div><br>
                                                   
               <div class="form-field">
                  <label for="unban_reason">Reason you should be unbanned</label>
                  <textarea type="text" name="unban_reason" class="materialize-textarea" required></textarea>
               </div><br>
                                                                  
               <div class="form-field">
                  <button class="btn waves-red waves-light" type="submit" name="submit">Submit
                     <i class="material-icons right">send</i>
                  </button>
               </div><br>
            </div>
         </div>
      </div>
   </div>
</form>

<!--
<form action="submit.php" method="post" class="col s12 center-align">

   <div class="row">
      <div class="input-field col s6 center-align">
         <input type="text" name="ign"/>
         <label for="ign">In Game Name</label>
      </div>
   </div>

   <div class="row">
      <div class="input-field col s6 center-align">
         <input type="text" name="discorduser"/>
         <label for="discorduser">Discord User</label>
      </div>
   </div>

   <div class="row">
      <div class="input-field col s6 center-align">
         <select name="type">
            <option>Ban</option>
            <option>Mute</option>
         </select>
         <label for="type">Type of Punishment</label>
      </div>
   </div>

   <div class="row">
      <div class="input-field col s6 center-align">
         <input type="text" name="reason"/>
         <label for="reason">Reason for Punishment</label>
      </div>
   </div>

   <div class="row">
      <div class="input-field col s6 center-align">
         <input type="text" name="length"/>
         <label for="reason">Length of Punishment</label>
      </div>
   </div>

  <button class="btn waves-red waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>

    <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">help</i>What is this?</div>
      <div class="collapsible-body"><span>This is the easy to use appeal and apply web interface for the ApexPvP Server.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>



</form>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('select').formSelect();
    $('.collapsible').collapsible();
    $('.modal').modal();
  });
</script>
</body>
</html>