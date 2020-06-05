<?php

function showEnvironment() {
	?>

<section>
<div class="w3-row">
<div class="w3-col l2">&nbsp;</div>
<style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}
</style>

<style>
#loader {
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<div id="loader" class="w3-col l10 w3-container w3-display-middle"></div>

<div class="embed-container w3-col l10" style="visibility:hidden"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Nitrogen Dioxide Pollution" src="//www.arcgis.com/apps/Embed/index.html?webmap=d422e33158cb46a3a0de07e735bcc1bb&extent=-180,-70.7434,180,78.4114&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe></div>
</div>
</section>

<script>
document.querySelector("iframe").addEventListener( "load", function(e) {
	this.style.visibility = "visible";
	setTimeout(function() {
		document.getElementById("loader").style.display = "none";}, 3000);
} );
</script>

<?php
}
