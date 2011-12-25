<script type="text/javascript"> 
		<!--
		$(function(){
			$(document).ready( function () {  //Cette fonction nous permettra d'effectuer des menus déroulants dans le menu de gauche vers les éléments du premier degré.
				// On cache les sous-menus : 
				$(".navigation ul.subMenu").hide(); 
				// On sélectionne tous les items de liste portant la classe "toggleSubMenu" 
				// et on remplace l'élément span qu'ils contiennent par un lien : 
				$(".navigation li.toggleSubMenu span").each( function () { 
				    // On stocke le contenu du span : 
				    var TexteSpan = $(this).text(); 
				    $(this).replaceWith('<a href="" >' + TexteSpan + '<\/a>') ; 
				} ) ; 
			     
				// On modifie l'évènement "click" sur les liens dans les items de liste 
				// qui portent la classe "toggleSubMenu" : 
				$(".navigation li.toggleSubMenu > a").click( function () { 
				    // Si le sous-menu était déjà ouvert, on le referme : 
				    if ($(this).next("ul.subMenu:visible").length != 0) { 
					$(this).next("ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") }); 
				    } 
				    // Si le sous-menu est caché, on ferme les autres et on l'affiche : 
				    else { 
					$(".navigation ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") }); 
					$(this).next("ul.subMenu").slideDown("normal", function () { $(this).parent().addClass("open") }); 
				    } 
				    // On empêche le navigateur de suivre le lien : 
				    return false; 
				}); 
			} ) ;   /* Un Grand Merci au site Alsacréations, et plus particulièrement à son membre Thomas D. grâce auxquels j'ai appris comment faire ce menu déroulant !! ;)*/
		})
		
		// --> 
</script>
<div id="menu_gauche">
	<nav class="nav_gauche">
		<p class="navg_title">Un moyen de télécommunication</p>
		<ul class="navigation">
			<li><a href="revolution_ondes.php">La révolution des Ondes</a></li>
			<li><a href="premieres_utilisations.php">Les premières utilisations de la TSF</a></li>
			<li><a href="premiere_guerre_mondiale.php">La 1°G.M., ou un développement massif de la radio</a></li>
		</ul>
	</nav>
	
	<nav class="nav_gauche">
		<p class="navg_title">Un nouveau média est né</p>
		<ul class="navigation">
			<li><a href="entre_deux_guerres.php">L'entre-deux-guerres, ou la naissance d'un média</a></li>
			<li><a href="resistance.php">La radio, un moyen de guerre pour la Résistance</a></li>
			<li><a href="propagande.php">La radio, un instrument de propagande pour les dictatures fascistes</a></li>
		</ul>
</ul>
</nav>
</div>