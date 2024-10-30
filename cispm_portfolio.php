<?php
/*
Plugin Name: Portfolio CISPM
Plugin URI: http://www.vaynceweb.com/blog/creation-dun-plugin-wordpress/
Description: Cispm Mail Contact est un formulaire de contact entièrement personnalisable via le panneau d’administration de votre blog Wordpress. Par ce plugin, vous pouvez via un formulaire de permettre aux visiteur de votre de blog de vous contacter par mail. Opter pour la personnalisation graphique et des libellés des champs du formulaire, ou pour le thème par défault. Un plugin unique, qui sait répondre aux besoins de vous, blogger et acteur du Web 2.0. Pour installer le plugin, activez le et rendez-vous sur la page d'administration du formulaire (Réglages>Formulaire de contact).
Version: 1.0
Author: Vincent Lachambre et Julien Rousselle
Author URI: http://www.vaynceweb.com/

	Copyright 2010  Vincent Lachambre et Julien Rousselle  (email : cispm.contact@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
	
function init_method_portfolio_cispm() {
	wp_register_style('cispm-style',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/css/cispm-style.css', false, '');
	wp_enqueue_style('cispm-style');
	wp_register_style('jquery-ui-1.8.custom',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/css/flick/jquery-ui-1.8.custom.css', false, '');
	wp_enqueue_style('jquery-ui-1.8.custom');
	wp_register_style('jquery.fancybox-1.3.1',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/fancybox/jquery.fancybox-1.3.1.css', false, '');
	wp_enqueue_style('jquery.fancybox-1.3.1');  
	wp_enqueue_script('jquery');  
    wp_enqueue_script('jquery-ui-core'); 
	wp_enqueue_script('interface');
	wp_register_script('jquery-ui-1.8.custom.min',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/js/jquery-ui-1.8.custom.min.js', false, '');
    wp_enqueue_script('jquery-ui-1.8.custom.min'); 
	wp_register_script('jquery.mousewheel-3.0.2.pack',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/fancybox/jquery.mousewheel-3.0.2.pack.js', false, '');
	wp_enqueue_script('jjquery.mousewheel-3.0.2.pack');
	wp_register_script('jquery.fancybox-1.3.1.pack',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/fancybox/jquery.fancybox-1.3.1.pack.js', false, '');
	wp_enqueue_script('jquery.fancybox-1.3.1.pack');
	wp_register_script('jquery.jplayer',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/js/jquery.jplayer.js', false, '');
	wp_enqueue_script('jquery.jplayer');
	wp_register_script('jquery.mycolorpicker',get_bloginfo('wpurl').'/wp-content/plugins/cispm-portfolio/js/jquery.mycolorpicker.js', false, '');
	wp_enqueue_script('jquery.mycolorpicker');
}

add_action('init', 'init_method_portfolio_cispm');


//*************** PAGE PORTFOLIO ***************//
function remplacer_texte_portfolio_cispm($texte) {

	$cispm_nom_onglet1 = get_option('cispm_nom_onglet1');
	$cispm_largeur_fancybox_onglet1 = get_option('cispm_largeur_fancybox_onglet1');
	$cispm_hauteur_fancybox_onglet1 = get_option('cispm_hauteur_fancybox_onglet1');
	$cispm_position_fancybox_onglet1 = get_option('cispm_position_fancybox_onglet1');
	$cispm_transition_fancybox_onglet1 = get_option('cispm_transition_fancybox_onglet1');
	$cispm_colonne_fancybox_onglet1 = get_option('cispm_colonne_fancybox_onglet1');
	$cispm_soustitre_onglet1 = get_option('cispm_soustitre_onglet1');
	
	$cispm_nom_onglet2 = get_option('cispm_nom_onglet2');
	$cispm_largeur_fancybox_onglet2 = get_option('cispm_largeur_fancybox_onglet2');
	$cispm_hauteur_fancybox_onglet2 = get_option('cispm_hauteur_fancybox_onglet2');
	$cispm_position_fancybox_onglet2 = get_option('cispm_position_fancybox_onglet2');
	$cispm_transition_fancybox_onglet2 = get_option('cispm_transition_fancybox_onglet2');
	$cispm_soustitre_onglet2 = get_option('cispm_soustitre_onglet2');
	
	$cispm_nom_onglet3 = get_option('cispm_nom_onglet3');
	$cispm_position_fancybox_onglet3 = get_option('cispm_position_fancybox_onglet3');
	$cispm_transition_fancybox_onglet3 = get_option('cispm_transition_fancybox_onglet3');
	$cispm_soustitre_onglet3 = get_option('cispm_soustitre_onglet3');
	
	$cispm_nom_onglet4 = get_option('cispm_nom_onglet4');
	$cispm_largeur_fancybox_onglet4 = get_option('cispm_largeur_fancybox_onglet4');
	$cispm_hauteur_fancybox_onglet4 = get_option('cispm_hauteur_fancybox_onglet4');
	$cispm_position_fancybox_onglet4 = get_option('cispm_position_fancybox_onglet4');
	$cispm_transition_fancybox_onglet4 = get_option('cispm_transition_fancybox_onglet4');
	$cispm_soustitre_onglet4 = get_option('cispm_soustitre_onglet4');
	if($cispm_largeur_fancybox_onglet4 == "") {
		$cispm_largeur_fancybox_onglet4 = '300';
	}
	
	if($cispm_hauteur_fancybox_onglet4 == "") {
		$cispm_hauteur_fancybox_onglet4 = '300';
	}
	
	$checkbox_onglet1 = get_option('checkbox_onglet1');
	$checkbox_onglet2 = get_option('checkbox_onglet2');
	$checkbox_onglet3 = get_option('checkbox_onglet3');
	$checkbox_onglet4 = get_option('checkbox_onglet4');
	$cispm_background_onglet = get_option('cispm_background_onglet');
	$cispm_bordure_onglet = get_option('cispm_bordure_onglet');
	$cispm_texte_onglet = get_option('cispm_texte_onglet');
	$cispm_background_survol_onglet = get_option('cispm_background_survol_onglet');
	$onglet_survol = get_option('onglet_survol');
	
	/*** Personnalisation du lecteur mp3 ***/
	$cispm_jmp3_back = get_option('cispm_jmp3_back');
	$cispm_jmp3_fore = get_option('cispm_jmp3_fore');
	$cispm_jmp3_repeat = get_option('cispm_jmp3_repeat');
	$cispm_jmp3_download = get_option('cispm_jmp3_download');
	$cispm_jmp3_volume = get_option('cispm_jmp3_volume');	
	$cispm_jmp3_width = get_option('cispm_jmp3_width');
	if($cispm_jmp3_width == "") {
		$cispm_jmp3_width = '20';
	}
	
	if($cispm_jmp3_download == "cispm_jmp3_download") {
		$cispm_jmp3_download = 'true';
	} else {
		$cispm_jmp3_download = 'false';
	}
	
	if($cispm_jmp3_repeat == "cispm_jmp3_repeat") {
		$cispm_jmp3_repeat = 'yes';
	} else {
		$cispm_jmp3_repeat = 'no';
	}
	
	if($onglet_survol == "onglet_survol_oui") {
		$onglet_survol_texte = "event: 'mouseover'";
	} else {
		$onglet_survol_texte = "";
	}
	
	$chemin_test = WP_PLUGIN_URL.'/cispm-portfolio/';
?>



<script language="Javascript">	
	//DD_roundies.addRule('div.arrondi', '15px');
	jQuery.fn.jmp3 = function(passedOptions){
		// hard-wired options
		var playerpath = "<?php echo $chemin_test; ?>";			// SET THIS FIRST: path to singlemp3player.swf

		// passable options
		var options = {
			"filepath": "",			// path to MP3 file (default: current directory)
			"backcolor": "<?php echo $cispm_jmp3_back;?>",									// background color
			"forecolor": "<?php echo $cispm_jmp3_fore;?>",								// foreground color (buttons)
			"width": <?php echo $cispm_jmp3_width;?>,										// width of player
			"repeat": "<?php echo $cispm_jmp3_repeat;?>",										// repeat mp3?
			"volume": "<?php echo $cispm_jmp3_volume;?>",										// mp3 volume (0-100)
			"autoplay": "false",								// play immediately on page load?
			"showdownload": "<?php echo $cispm_jmp3_download;?>",								// show download button in player
			"showfilename": "false"								// show .mp3 filename after player
		};
		
		// use passed options, if they exist
		if (passedOptions) {
			jQuery.extend(options, passedOptions);
		}
		
		// iterate through each object
		return this.each(function(){
			// filename needs to be enclosed in tag (e.g. <span class='mp3'>mysong.mp3</span>)
			var filename = options.filepath + jQuery(this).html();
			//alert(filename);
			// do nothing if not an .mp3 file
			var validfilename = filename.indexOf(".mp3");
			if (validfilename == -1) { return false; }
			// build the player HTML
			var mp3html = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" ';
			mp3html += 'width="' + options.width + '" height="20" ';
			mp3html += 'codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">';
			mp3html += '<param name="movie" value="' + playerpath + 'singlemp3player.swf?';
			mp3html += 'showDownload=' + options.showdownload + '&file=' + filename + '&autoStart=' + options.autoplay;
			mp3html += '&backColor=' + options.backcolor + '&frontColor=' + options.forecolor;
			mp3html += '&repeatPlay=' + options.repeat + '&songVolume=' + options.volume + '" />';
			mp3html += '<param name="wmode" value="transparent" />';
			mp3html += '<embed wmode="transparent" width="' + options.width + '" height="20" ';
			mp3html += 'src="' + playerpath + 'singlemp3player.swf?'
			mp3html += 'showDownload=' + options.showdownload + '&file=' + filename + '&autoStart=' + options.autoplay;
			mp3html += '&backColor=' + options.backcolor + '&frontColor=' + options.forecolor;
			mp3html += '&repeatPlay=' + options.repeat + '&songVolume=' + options.volume + '" ';
			mp3html += 'type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
			mp3html += '</object>';
			// don't display filename if option is set
			if (options.showfilename == "false") { jQuery(this).html(""); }
			jQuery(this).prepend(mp3html+"&nbsp;");
			
			// Eolas workaround for IE (Thanks Kurt!)
			if(jQuery.browser.msie){ this.outerHTML = this.outerHTML; }
		});
	};
	
	jQuery(document).ready(function($){
		$("#cispm-tabs").tabs({
			<?php echo $onglet_survol_texte; ?>
		});
			
		nb_web = $("#cispm_web_nb_jquery").val();
		if(nb_web == "") {
			nb_web = 0;
		}
	
		for(i=1;i<=nb_web;i++) {
			variable_web = "#cispm_web_lien_jquery"+i;
			
			$(variable_web).fancybox({
				'width'				: '<?php echo $cispm_largeur_fancybox_onglet1; ?>%',
				'height'			: '<?php echo $cispm_hauteur_fancybox_onglet1; ?>%',
				'autoScale'			: false,
				'transitionIn'		: '<?php echo $cispm_transition_fancybox_onglet1; ?>',
				'transitionOut'		: '<?php echo $cispm_transition_fancybox_onglet1; ?>',
				'type'				: 'iframe',
				'titlePosition'		: '<?php echo $cispm_position_fancybox_onglet1; ?>'
			});	
		}
		
		nb_mus = $("#cispm_mus_nb_jquery").val();
		if(nb_mus == "") {
			nb_mus = 0;
		}
	
		for(i=1;i<=nb_mus;i++) {
			variable_mus = "#cispm_mus_lien_jquery2"+i;

			$(variable_mus).fancybox({
				'titlePosition'		: '<?php echo $cispm_position_fancybox_onglet2; ?>',
				'transitionIn'		: '<?php echo $cispm_transition_fancybox_onglet2; ?>',
				'transitionOut'		: '<?php echo $cispm_transition_fancybox_onglet2; ?>'
			});	
			
			variable_mus2 = "#cispm_mus_lien_player"+i;

			$(variable_mus2).jmp3();
		}

		nb_img = $("#cispm_img_nb_jquery").val();
		if(nb_img == "") {
			nb_img = 0;
		}
		
		for(i=1;i<=nb_img;i++) {
			variable_img = "a#cispm_img_lien_jquery"+i;
			
			$(variable_img).fancybox({
				'titleShow'		: true,
				'transitionIn'		: '<?php echo $cispm_transition_fancybox_onglet3; ?>',
				'transitionOut'		: '<?php echo $cispm_transition_fancybox_onglet3; ?>',
				'titlePosition'		: '<?php echo $cispm_position_fancybox_onglet3; ?>'
			});
		}

		$("a#cispm-tip4").click(function() {
			$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: '<?php echo $cispm_transition_fancybox_onglet4; ?>',
					'transitionOut'	: '<?php echo $cispm_transition_fancybox_onglet4; ?>',
					'title'			: this.title,
					'width'			: <?php echo $cispm_largeur_fancybox_onglet4; ?>,
					'height'		: <?php echo $cispm_hauteur_fancybox_onglet4; ?>,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
						 'wmode'		: 'transparent',
						'allowfullscreen'	: 'true'
					}
			});
			return false;
		});
	});
</script>

<style>
	<!--
	
	#cispm-tabs-1 {

	}
	
	.ui-widget-header {
		background-color:#<?php echo $cispm_background_onglet;?>;
		border:1px solid #<?php echo $cispm_bordure_onglet;?>;
		color:#444444;
		font-weight:bold;
	}
	
	.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
		color:yellow;
	}
	
	.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
		color:#<?php echo $cispm_texte_onglet;?>;
	}
	.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus{
		background:#<?php echo $cispm_background_survol_onglet;?>;
		border: 1px solid #<?php echo $cispm_background_survol_onglet;?>;
	}
	
	#table_onglet1 {
		
	}
	
	#table_onglet2 {
	
	}
	
	#cispm-tabs ul {
		list-style-type: inherit;
		text-indent:0px;
	}
	
	h3 .titre_cispm {
		padding: 0;
		margin: 0;
	}
	
	#cispm-tabs ul li, #cispm-tabs ol li {
		list-style-position:inside;
		padding-left:10px;
	}
	
	#table_onglet2 tr td {
		border:none;
	}
	
	#table_onglet2 {
		border:none;
	}
	-->
</style>

<?php
		$cispm_plugindir = PLUGINDIR.'/cispm-portfolio/';
		$formulaire .= '
		<div id="cispm-tabs">
			<ul>';
				if($checkbox_onglet1 == "onglet1") {
					$formulaire .= '<li><a href="#cispm-tabs-1">'.$cispm_nom_onglet1.'</a></li>';
				}
				
				if($checkbox_onglet2 == "onglet2") {
					$formulaire .= '<li><a href="#cispm-tabs-2">'.$cispm_nom_onglet2.'</a></li>';
				}
				
				if($checkbox_onglet3 == "onglet3") {
					$formulaire .= '<li><a href="#cispm-tabs-3">'.$cispm_nom_onglet3.'</a></li>';
				}
				
				if($checkbox_onglet4 == "onglet4") {
					$formulaire .= '<li><a href="#cispm-tabs-4">'.$cispm_nom_onglet4.'</a></li>';
				}
			$formulaire .= '</ul>';
			
			if($checkbox_onglet1 == "onglet1") {
				$formulaire .= '<div id="cispm-tabs-1">';
					$formulaire .= '<h3 class="titre_cispm">'.$cispm_soustitre_onglet1.'</h3>';
					$formulaire .= '<hr style="color:#EEE;"/>';
					$formulaire .= '<table id="table_onglet1" width="100%">';
					
					$cispm_web_nb = get_option('cispm_web_nb');
					
					print "<input type='hidden' value='".$cispm_web_nb."' name='cispm_web_nb_jquery' id='cispm_web_nb_jquery'/>";
					
					$cpt_colonne = 0;
					if($cispm_colonne_fancybox_onglet1 == 2) {
						$cpt_colonne = 1;
						$width1 = "20";
						$width2 = "30";
					} else {
						$width1 = "20";
						$width2 = "80";
					}
					for($i=1; $i<=$cispm_web_nb; $i++) {							
						$cispm_pos_web = 'premier_pos_'.$i;
						$cispm_pos_web_texte = get_option($cispm_pos_web);
									
						$cispm_titre_web = 'premier_titre_'.$i;
						$cispm_titre_web_texte = get_option($cispm_titre_web);
						
						$cispm_descr_web = 'premier_descr_'.$i;
						$cispm_descr_web_texte = get_option($cispm_descr_web);
									
						$cispm_url_lien_web = 'premier_url_lien_'.$i;
						$cispm_url_lien_web_texte = get_option($cispm_url_lien_web);
									
						$cispm_url_vign_web = 'premier_url_vign_'.$i;
						$cispm_url_vign_web_texte = get_option($cispm_url_vign_web);
						
						$cispm_web_lien_jquery = "cispm_web_lien_jquery".$i;
						
						if($cpt_colonne == 0) {
							if($cispm_colonne_fancybox_onglet1 != 2) {
								$formulaire .= '<tr>';
							}
						} else {
							$formulaire .= '<tr>';
						}
						
							$formulaire .= '<td style="width:'.$width1.'%"><a id="'.$cispm_web_lien_jquery.'" href="'.$cispm_url_lien_web_texte.'"><img alt="'.$cispm_titre_web_texte.'" src="'.$cispm_url_vign_web_texte.'" /></a></td>';
							$formulaire .= '<td style="width:'.$width2.'%;padding:12px 2px 0 11px;"><p><i><a href="'.$cispm_url_lien_web_texte.'">'.$cispm_titre_web_texte.'</a></i></p>';
							$formulaire .= '<p style="text-align:left;">'.$cispm_descr_web_texte.'</p></td>';
							
						if($cpt_colonne == 0) {
							$formulaire .= '</tr>';
							if($cispm_colonne_fancybox_onglet1 == 2) {
								$cpt_colonne = 1;
							}
						} else {
							$cpt_colonne = 0;
						}
					}
					$formulaire .= '</table>';
				$formulaire .= '</div>';
			}
			
			if($checkbox_onglet2 == "onglet2") {
				$formulaire .= '<div id="cispm-tabs-2">
				<h3 class="titre_cispm">'.$cispm_soustitre_onglet2.'</h3>
				<hr style="color:#EEE;"/>
				<p><table id="table_onglet2" border="0">';
					$cispm_web_nb_deuxieme = get_option('cispm_web_nb_deuxieme');
					
					print "<input type='hidden' value='".$cispm_web_nb_deuxieme."' name='cispm_mus_nb_jquery' id='cispm_mus_nb_jquery'/>";
					
					for($i=1; $i<=$cispm_web_nb_deuxieme; $i++) {							
						$cispm_pos_mus = 'deuxieme_pos_'.$i;
						$cispm_pos_web_texte = get_option($cispm_pos_mus);
									
						$cispm_titre_mus = 'deuxieme_titre_'.$i;
						$cispm_titre_mus_texte = get_option($cispm_titre_mus);
						
						$cispm_descr_mus = 'deuxieme_descr_'.$i;
						$cispm_descr_mus_texte = get_option($cispm_descr_mus);
									
						$cispm_url_lien_mus = 'deuxieme_url_lien_'.$i;
						$cispm_url_lien_mus_texte = get_option($cispm_url_lien_mus);
									
						$cispm_url_vign_mus = 'deuxieme_url_vign_'.$i;
						$cispm_url_vign_mus_texte = get_option($cispm_url_vign_mus);
						
						$cispm_mus_lien_jquery = "cispm_mus_lien_jquery".$i;
						$cispm_mus_lien_jquery2 = "cispm_mus_lien_jquery2".$i;
						$cispm_mus_lien_player = "cispm_mus_lien_player".$i;
						
						$formulaire .= '<tr>';
						$formulaire .= '<td><div style="display: none;">
							<div id="'.$cispm_mus_lien_jquery.'" style="width:'.$cispm_largeur_fancybox_onglet2.'px;height:'.$cispm_hauteur_fancybox_onglet2.'px;overflow:auto;">
								'.$cispm_descr_mus_texte.'
							</div>
						</div>
						'.$cispm_titre_mus_texte.' </td></tr><tr><td> <span id="'.$cispm_mus_lien_player.'" class="mp3">'.$cispm_url_lien_mus_texte.'</span> 
						<a id="'.$cispm_mus_lien_jquery2.'" href="#'.$cispm_mus_lien_jquery.'" title="'.$cispm_titre_mus_texte.'"><i>Détail</i></a>
						</td>';
						$formulaire .= '</tr>';
					}
				$formulaire .= '</table>';
				$formulaire .= '</p>
				</div>';
				
			}
			
			if($checkbox_onglet3 == "onglet3") {
				$formulaire .= '<div id="cispm-tabs-3">';
					$formulaire .= '<h3 class="titre_cispm">'.$cispm_soustitre_onglet3.'</h3>';
					$formulaire .= '<hr style="color:#EEE;"/>';
						$formulaire .= '<p>';
						
						$cispm_web_nb_troisieme = get_option('cispm_web_nb_troisieme');
						
						print "<input type='hidden' value='".$cispm_web_nb_troisieme."' name='cispm_img_nb_jquery' id='cispm_img_nb_jquery'/>";
						
						for($i=1; $i<=$cispm_web_nb_troisieme; $i++) {							
							$cispm_pos_img = 'troisieme_pos_'.$i;
							$cispm_pos_img_texte = get_option($cispm_pos_img);
										
							$cispm_titre_img = 'troisieme_titre_'.$i;
							$cispm_titre_img_texte = get_option($cispm_titre_img);
							
							$cispm_descr_img = 'troisieme_descr_'.$i;
							$cispm_descr_img_texte = get_option($cispm_descr_img);
										
							$cispm_url_lien_img = 'troisieme_url_lien_'.$i;
							$cispm_url_lien_img_texte = get_option($cispm_url_lien_img);
										
							$cispm_url_vign_img = 'troisieme_url_vign_'.$i;
							$cispm_url_vign_img_texte = get_option($cispm_url_vign_img);
							
							$cispm_img_lien_jquery = "cispm_img_lien_jquery".$i;
							
							$formulaire .= '<a rel="img_group" id="'.$cispm_img_lien_jquery.'" href="'.$cispm_url_lien_img_texte.'" title="Google"><img alt="'.$cispm_titre_img_texte.'" src="'.$cispm_url_vign_img_texte.'" /></a>';
						}
						$formulaire .= '</p>
				</div>';
			}
			
			if($checkbox_onglet4 == "onglet4") {
				$formulaire .= '<div id="cispm-tabs-4">';
					$formulaire .= '<h3 class="titre_cispm">'.$cispm_soustitre_onglet4.'</h3>';
					$formulaire .= '<hr style="color:#EEE;"/>';
						$formulaire .= '<p>';
						
						$cispm_web_nb_quatrieme = get_option('cispm_web_nb_quatrieme');
						
						for($i=1; $i<=$cispm_web_nb_quatrieme; $i++) {							
							$cispm_pos_video = 'quatrieme_pos_'.$i;
							$cispm_pos_video_texte = get_option($cispm_pos_video);
										
							$cispm_titre_video = 'quatrieme_titre_'.$i;
							$cispm_titre_video_texte = get_option($cispm_titre_video);
							
							$cispm_descr_video = 'quatrieme_descr_'.$i;
							$cispm_descr_video_texte = get_option($cispm_descr_video);
										
							$cispm_url_lien_video = 'quatrieme_url_lien_'.$i;
							$cispm_url_lien_video_texte = get_option($cispm_url_lien_video);
										
							$cispm_url_vign_video = 'quatrieme_url_vign_'.$i;
							$cispm_url_vign_video_texte = get_option($cispm_url_vign_video);
							
							$formulaire .= '<a rel="video_group" id="cispm-tip4" title="'.$cispm_titre_video_texte.'" href="'.$cispm_url_lien_video_texte.'"><img alt="'.$cispm_titre_video_texte.'" src="'.$cispm_url_vign_video_texte.'" /></a>';
						}
						$formulaire .= '</p>
				</div>';
			}
			$formulaire .= '</div>';
		$texte = str_replace('[cispm-portfolio]', $formulaire, $texte);
		return $texte;
}

//*************** PAGE D'ADMINISTRATION ***************
function cispm_admin_portfolio_cispm() {
	include('cispm_portfolio_admin.php');
}

function cispm_admin_actions_portfolio_cispm() {
    $formulaire = __('Cispm portfolio','cispm-portfolio');
    add_options_page("Portfolio", $formulaire, 1, "Portfolio", "cispm_admin_portfolio_cispm");
}

add_action('admin_menu', 'cispm_admin_actions_portfolio_cispm');

add_filter('the_content','remplacer_texte_portfolio_cispm');

?>