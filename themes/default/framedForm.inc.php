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

html, body {
  background-color: #212121;
}

.wrapper {
  width: 600px;
  margin: 50px auto;
}

.menu-1, .menu-2,
.menu-3, .menu-4 {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: 50px;
  cursor: pointer;
  transition: all 0.3s;
}
.menu-1:before, .menu-1:after, .menu-2:before, .menu-2:after,
.menu-3:before,
.menu-3:after, .menu-4:before, .menu-4:after {
  content: "";
  position: absolute;
  transition: all 0.3s;
}

.menu-4 {
  top: -10px;
  width: 30px;
  height: 30px;
  border-bottom: 4px solid #e3e3e3;
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

.menu-3 {
  background-color: #e3e3e3;
  width: 50px;
  height: 50px;
}
.menu-3:hover {
  background-color: orange;
}
.menu-3:before, .menu-3:after {
  background-color: #212121;
  height: 4px;
  width: 30px;
  top: 50%;
  left: 50%;
  margin-left: -15px;
}
.menu-3:before {
  margin-top: -6px;
}
.menu-3:after {
  margin-top: 4px;
}

.menu-3-active {
  border-radius: 40px;
  background-color: red !important;
}
.menu-3-active:before, .menu-3-active:after {
  background-color: #e3e3e3;
  margin-left: -15px !important;
  margin-top: -2px !important;
}
.menu-3-active:before {
  transform: rotate(45deg) !important;
}
.menu-3-active:after {
  transform: rotate(-45deg) !important;
}

.menu-2 {
  border: 4px solid #e3e3e3;
}
.menu-2:hover {
  border-color: aqua;
}
.menu-2:before, .menu-2:after {
  background-color: #e3e3e3;
  height: 4px;
  width: 30px;
  top: 50%;
  left: 50%;
  margin-left: -15px;
}
.menu-2:before {
  margin-top: -6px;
}
.menu-2:after {
  margin-top: 4px;
}

.menu-2-active {
  transform: rotate(45deg);
  border-color: red !important;
  background-color: red !important;
}
.menu-2-active:before, .menu-2-active:after {
  margin-left: -15px !important;
  margin-top: -2px !important;
}
.menu-2-active:after {
  transform: rotate(-90deg) !important;
}

.menu-1 {
  border: 4px solid #e3e3e3;
  border-radius: 50px;
}
.menu-1:hover {
  border-color: limegreen;
  background-color: limegreen;
}
.menu-1:before, .menu-1:after {
  width: 60px;
  height: 4px;
  background-color: #e3e3e3;
  left: 50%;
  margin-left: -30px;
}
.menu-1:before {
  top: 50%;
  margin-top: -8px;
}
.menu-1:after {
  top: 50%;
  margin-top: 4px;
}

.menu-1-active {
  background-color: red !important;
  border-color: red !important;
}
.menu-1-active:before, .menu-1-active:after {
  margin-top: -2px;
}
.menu-1-active:before {
  transform: rotate(45deg);
}
.menu-1-active:after {
  transform: rotate(-45deg);
}


</style>
<div class="wrapper">
  <!-- <div class="menu-1" data-menu="1"></div>
  <div class="menu-2" data-menu="2"></div>
  <div class="menu-3" data-menu="3"></div> -->
  <div class="menu-4" data-menu="4"></div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
var menu = $('.wrapper div');

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
