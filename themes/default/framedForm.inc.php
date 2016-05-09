<style type="text/css">
   /* Make room for the mini-form */
   html body { margin-top: 60px; }
   
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
      position: absolute;
      top:0; left:0;
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

.menu-4 {
  position: absolute;
  display: inline-block;
  width: 40px;
  height: 40px;
  cursor: pointer;
  transition: all 0.3s;
}
 .menu-4:before, .menu-4:after {
  content: "";
  position: absolute;
  transition: all 0.3s;
}

.menu-4 {
  top: 10px;
  right: 10px;
  width: 30px;
  height: 30px;
  border-bottom: 4px solid #e3e3e3;
  z-index: 2000000000;
}
.menu-4:hover {
  border-bottom-color: hotpink;
}
.menu-4:hover:before, .menu-4:hover:after {
  background-color: hotpink;
}
.menu-4:before, .menu-4:after {
  background-color: #e3e3e3;
  height: 4px;
  width: 30px;
  top: 50%;
  left: 50%;
  margin-left: -15px;
}
.menu-4:before {
  margin-top: -10px;
}
.menu-4:after {
  margin-top: 3px;
}

.menu-4-active {
  top: 0;
  margin-left: 38px;
  height: 50px;
  width: 50px;
  border: 0;
  background-color: red;
}
.menu-4-active:before, .menu-4-active:after {
  background-color: #e3e3e3 !important;
  margin-left: -15px !important;
  margin-top: -2px !important;
}
.menu-4-active:before {
  transform: rotate(45deg) !important;
}
.menu-4-active:after {
  transform: rotate(-45deg) !important;
}
</style>

  <div class="menu-4" data-menu="4"></div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
var menu = $('.menu-4');

menu.on('click', function() {
  var menuNum = $(this).data('menu');
  $(this).toggleClass('menu-'+ menuNum +'-active');
  $('#include').toggle();
})

</script>
<div id="include">
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
