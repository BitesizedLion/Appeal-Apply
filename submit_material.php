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
<div class="row">
    <div class="col s12 m4 offset-m4">
        <div class="card">

        <div class="card action teal lighen-1 white-text center-align">
            <h3>Appeal System</h3>
        </div>

        <div class="card-content">
            <div class="form-field">
                <p>
                    Hey there! We'd just like to congratulate you on submitting an appeal!
                </p>
                <p>
                    We at ApexPvP sure do hope your appeal request gets accepted, in the meanwhile read the FAQ below if you have any questions.
                </p>
            </div><br>

            <div class="form-field">
                <ul class="collapsible">
                    <li>
                    <div class="collapsible-header"><i class="material-icons">access_time</i>How long will it take for my appeal to be reviewed?</div>
                    <div class="collapsible-body"><span>It could take up to 7 days for your appeal to be reviewed and decided upon.</span></div>
                    </li>
                    
                    <li>
                    <div class="collapsible-header"><i class="material-icons">chat</i>Does ApexPvP have a discord server?</div>
                    <div class="collapsible-body"><span>Yes, ApexPvP has a discord server at <a href="https://discord.gg/kpRpHNu">https://discord.gg/kpRpHNu</a></span></div>
                    </li>
                </ul>
            </div><br>
        </div>
        </div>
    </div>
</div>
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