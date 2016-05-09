<style type="text/css">
   /* Reset all styles */
   #include * {
      text-align: left;
      border: 0; padding: 0; margin: 0;
      font: 12px Verdana,Arial,Tahoma;
      color: #eee;
      font-weight: normal;
      background: transparent;
      text-decoration: none;
      display: inline;
   }
   #include p {
      margin: 4px 0 0 10px;
      display: block;
   }
   #include b {
      font-weight: bold;
   }
   #include script {
      display:none;
   }
   
   /* Style the mini-form div */
   #include {
      border-top: 3px solid #ce6c1c;
      border-bottom: 3px solid #ce6c1c;
      background: #0b1933;
      position: fixed;
      bottom:0;
      left:0;
      width: 100%;
      height: 50px;
      z-index: 1000100000;
   }
   
   /* Mini-form elements */
   #include a {
      color: #ce6c1c;
   }
   #include a:hover {
      color: #ccc;
   }
   #include .url-input {
      padding: 2px;
      background: #eee;
      color: #111;
      border: 1px solid #ccc;
   }
   #include .url-input:focus {
      background: #fff;
      border: 1px solid #ce6c1c;
   }
   #include .url-button {
      font-weight: bold;
      border-style: outset;
      font-size: 11px;
      line-height: 10px;
   }

.menu-wrapper{
  width: 55px; 
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 0px 2px 5px #666;
  z-index: 2000000000;
}
.menu {
  position: absolute;
    top: 7px;
    right: 12px;
  width: 30px;
  height: 30px;
  cursor: pointer;
  transition: all 0.3s;
  border-bottom: 4px solid #e3e3e3;
}

 .menu:before, .menu:after {
  content: "";
  position: absolute;
  transition: all 0.3s;
}
.menu:before, .menu:after {
  background-color: #e3e3e3;
  height: 4px;
  width: 30px;
  top: 50%;
  left: 50%;
  margin-left: -15px;
}
.menu:before {
  margin-top: -10px;
}
.menu:after {
  margin-top: 3px;
}

.menu-active:before, .menu-active:after {
  background-color: #e3e3e3 !important;
  margin-left: -15px !important;
  margin-top: -2px !important;
}
.menu-active{
  border: 0;
    top: 13px;
    right: 12px;
}
.menu-active:before {
  transform: rotate(45deg) !important;
}
.menu-active:after {
  transform: rotate(-45deg) !important;
}
</style>
<div class="menu-wrapper">
  <div class="menu"></div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var menu = $('.menu');
  $('#include').hide();
  menu.on('click', function() {
    $(this).toggleClass('menu-active');
    $('#include').toggle();
  })
});

</script>
<div id="include" style="display: none;">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT
   <form action="{$proxy}/includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">

      <p>
         
         <b>URL:</b>
         <input type="text" name="u" size="40" value="{$url}" class="url-input" style="width:50%;" />
         <input type="submit" value="Go" class="url-input url-button" />
         
         [<a href="{$proxy}/index.php" target="_top">home</a>]
         [<a href="{$proxy}/includes/process.php?action=clear-cookies&return={$return}" target="_top">clear cookies</a>]
         
      </p>
      
      <p>
         <b>Options:</b>
OUT;

// Loop through the options and print with appropriate checkedness
foreach($toShow as $details) { 
   echo <<<OUT
         <input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']} />
         <label for="{$details['name']}">{$details['title']}</label>

OUT;
}
?>
      </p>
      
   </form>

</div>

<!--[proxied]-->
