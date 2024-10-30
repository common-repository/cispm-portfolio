<?php

//Administration du portfolio
echo "<h2>" . __( 'Administration du portfolio', 'cispm-portfolio' ) . "</h2>";

	//Si envoie du formulaire, alors enregistrement des variables dans wordpress
	if(isset($_POST['cispm_nb_form'])) {	
	
		/*** Premier onglet ***/
		
		$cispm_nom_onglet1 = $_POST['cispm_nom_onglet1'];
		update_option('cispm_nom_onglet1', $cispm_nom_onglet1);
		
		$cispm_soustitre_onglet1 = $_POST['cispm_soustitre_onglet1'];
		update_option('cispm_soustitre_onglet1', $cispm_soustitre_onglet1);
		
		$cispm_largeur_fancybox_onglet1 = $_POST['cispm_largeur_fancybox_onglet1'];
		update_option('cispm_largeur_fancybox_onglet1', $cispm_largeur_fancybox_onglet1);
		
		$cispm_hauteur_fancybox_onglet1 = $_POST['cispm_hauteur_fancybox_onglet1'];
		update_option('cispm_hauteur_fancybox_onglet1', $cispm_hauteur_fancybox_onglet1);
		
		$cispm_position_fancybox_onglet1 = $_POST['cispm_position_fancybox_onglet1'];
		update_option('cispm_position_fancybox_onglet1', $cispm_position_fancybox_onglet1);
		
		$cispm_transition_fancybox_onglet1 = $_POST['cispm_transition_fancybox_onglet1'];
		update_option('cispm_transition_fancybox_onglet1', $cispm_transition_fancybox_onglet1);	
		
		$cispm_colonne_fancybox_onglet1 = $_POST['cispm_colonne_fancybox_onglet1'];
		update_option('cispm_colonne_fancybox_onglet1', $cispm_colonne_fancybox_onglet1);
	
		$cispm_nb_post = $_POST['cispm_nb_ligne'];
		if($cispm_nb_post > 100) {
			$cispm_nb_post = 100;
		}
		update_option('cispm_web_nb', $cispm_nb_post);
		
		for($i=1; $i<=$cispm_nb_post;$i++) {
			$cispm_pos_web = 'premier_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_web];
			update_option($cispm_pos_web, $cispm_pos_post);
			
			$cispm_titre_web = 'premier_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_web];
			update_option($cispm_titre_web, $cispm_titre_post);
			
			$cispm_descr_web = 'premier_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_web];
			update_option($cispm_descr_web, $cispm_descr_post);
			
			$cispm_url_lien_web = 'premier_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_web];
			update_option($cispm_url_lien_web, $cispm_url_lien_post);
			
			$cispm_url_vign_web = 'premier_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_web];
			update_option($cispm_url_vign_web, $cispm_url_vign_post);
		}
		
		$nb_ligne_form = $cispm_nb_post+1;
		
		for($i=$nb_ligne_form;$i<100;$i++) {
			$cispm_pos_web = 'premier_pos_'.$i;
			delete_option($cispm_pos_web);
			
			$cispm_titre_web = 'premier_titre_'.$i;
			delete_option($cispm_titre_web);
			
			$cispm_descr_web = 'premier_descr_'.$i;
			delete_option($cispm_descr_web);
			
			$cispm_url_lien_web = 'premier_url_lien_'.$i;
			delete_option($cispm_url_lien_web);
			
			$cispm_url_vign_web = 'premier_url_vign_'.$i;
			delete_option($cispm_url_vign_web);
		}
		
		//Affichage d'un message comme quoi les nouveaux paramètres sont correctment enregistrés
		?>
		<div id="message" class="updated fade">
			<p><strong><?php _e('Modification du nombre de ligne apport&eacute;e avec succ&egrave;s.','cispm-portfolio'); ?></strong></p>
		</div>
		<?php
	}
	
	if(isset($_POST['cispm_nb_form_deuxieme'])) {	
		
		/*** Deuxième onglet ***/
		
		$cispm_nom_onglet2 = $_POST['cispm_nom_onglet2'];
		update_option('cispm_nom_onglet2', $cispm_nom_onglet2);
		
		$cispm_soustitre_onglet2 = $_POST['cispm_soustitre_onglet2'];
		update_option('cispm_soustitre_onglet2', $cispm_soustitre_onglet2);
		
		$cispm_largeur_fancybox_onglet2 = $_POST['cispm_largeur_fancybox_onglet2'];
		update_option('cispm_largeur_fancybox_onglet2', $cispm_largeur_fancybox_onglet2);
		
		$cispm_hauteur_fancybox_onglet2 = $_POST['cispm_hauteur_fancybox_onglet2'];
		update_option('cispm_hauteur_fancybox_onglet2', $cispm_hauteur_fancybox_onglet2);
		
		$cispm_position_fancybox_onglet2 = $_POST['cispm_position_fancybox_onglet2'];
		update_option('cispm_position_fancybox_onglet2', $cispm_position_fancybox_onglet2);
		
		$cispm_transition_fancybox_onglet2 = $_POST['cispm_transition_fancybox_onglet2'];
		update_option('cispm_transition_fancybox_onglet2', $cispm_transition_fancybox_onglet2);
		
		$cispm_nb_post_deuxieme = $_POST['cispm_nb_ligne_deuxieme'];
		if($cispm_nb_post_deuxieme > 100) {
			$cispm_nb_post_deuxieme = 100;
		}
		update_option('cispm_web_nb_deuxieme', $cispm_nb_post_deuxieme);
		
		for($i=1; $i<=$cispm_nb_post_deuxieme;$i++) {
			$cispm_pos_mus = 'deuxieme_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_mus];
			update_option($cispm_pos_mus, $cispm_pos_post);
			
			$cispm_titre_mus = 'deuxieme_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_mus];
			update_option($cispm_titre_mus, $cispm_titre_post);
			
			$cispm_descr_mus = 'deuxieme_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_mus];
			update_option($cispm_descr_mus, $cispm_descr_post);
			
			$cispm_url_lien_mus = 'deuxieme_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_mus];
			update_option($cispm_url_lien_mus, $cispm_url_lien_post);
			
			$cispm_url_vign_mus = 'deuxieme_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_mus];
			update_option($cispm_url_vign_mus, $cispm_url_vign_post);
		}
		
		$nb_ligne_form_deuxieme = $cispm_nb_post_deuxieme+1;
		
		for($i=$nb_ligne_form_deuxieme;$i<100;$i++) {
			$cispm_pos_mus = 'deuxieme_pos_'.$i;
			delete_option($cispm_pos_mus);
			
			$cispm_titre_mus = 'deuxieme_titre_'.$i;
			delete_option($cispm_titre_mus);
			
			$cispm_descr_mus = 'deuxieme_descr_'.$i;
			delete_option($cispm_descr_mus);
			
			$cispm_url_lien_mus = 'deuxieme_url_lien_'.$i;
			delete_option($cispm_url_lien_mus);
			
			$cispm_url_vign_mus = 'deuxieme_url_vign_'.$i;
			delete_option($cispm_url_vign_mus);
		}
	}
	
	if(isset($_POST['cispm_nb_form_troisieme'])) {	
		
		/*** Troisième onglet ***/
		
		$cispm_nom_onglet3 = $_POST['cispm_nom_onglet3'];
		update_option('cispm_nom_onglet3', $cispm_nom_onglet3);
		
		$cispm_soustitre_onglet3 = $_POST['cispm_soustitre_onglet3'];
		update_option('cispm_soustitre_onglet3', $cispm_soustitre_onglet3);
		
		$cispm_position_fancybox_onglet3= $_POST['cispm_position_fancybox_onglet3'];
		update_option('cispm_position_fancybox_onglet3', $cispm_position_fancybox_onglet3);
		
		$cispm_transition_fancybox_onglet3 = $_POST['cispm_transition_fancybox_onglet3'];
		update_option('cispm_transition_fancybox_onglet3', $cispm_transition_fancybox_onglet3);
	
		$cispm_nb_post_troisieme = $_POST['cispm_nb_ligne_troisieme'];
		if($cispm_nb_post_troisieme > 100) {
			$cispm_nb_post_troisieme = 100;
		}
		update_option('cispm_web_nb_troisieme', $cispm_nb_post_troisieme);
		
		for($i=1; $i<=$cispm_nb_post_troisieme;$i++) {
			$cispm_pos_img = 'troisieme_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_img];
			update_option($cispm_pos_img, $cispm_pos_post);
			
			$cispm_titre_img = 'troisieme_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_img];
			update_option($cispm_titre_img, $cispm_titre_post);
			
			$cispm_descr_img = 'troisieme_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_img];
			update_option($cispm_descr_img, $cispm_descr_post);
			
			$cispm_url_lien_img = 'troisieme_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_img];
			update_option($cispm_url_lien_img, $cispm_url_lien_post);
			
			$cispm_url_vign_img = 'troisieme_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_img];
			update_option($cispm_url_vign_img, $cispm_url_vign_post);
		}
		
		$nb_ligne_form_troisieme = $cispm_nb_post_troisieme+1;
		
		for($i=$nb_ligne_form_troisieme;$i<100;$i++) {
			$cispm_pos_img = 'troisieme_pos_'.$i;
			delete_option($cispm_pos_img);
			
			$cispm_titre_img = 'troisieme_titre_'.$i;
			delete_option($cispm_titre_img);
			
			$cispm_descr_img = 'troisieme_descr_'.$i;
			delete_option($cispm_descr_img);
			
			$cispm_url_lien_img = 'troisieme_url_lien_'.$i;
			delete_option($cispm_url_lien_img);
			
			$cispm_url_vign_img = 'troisieme_url_vign_'.$i;
			delete_option($cispm_url_vign_img);
		}
	}
	
	if(isset($_POST['cispm_nb_form_quatrieme'])) {	
		
		/*** Quatrième onglet ***/
		
		$cispm_nom_onglet4 = $_POST['cispm_nom_onglet4'];
		update_option('cispm_nom_onglet4', $cispm_nom_onglet4);
		
		$cispm_soustitre_onglet4 = $_POST['cispm_soustitre_onglet4'];
		update_option('cispm_soustitre_onglet4', $cispm_soustitre_onglet4);
		
		$cispm_largeur_fancybox_onglet4 = $_POST['cispm_largeur_fancybox_onglet4'];
		update_option('cispm_largeur_fancybox_onglet4', $cispm_largeur_fancybox_onglet4);
		
		$cispm_hauteur_fancybox_onglet4 = $_POST['cispm_hauteur_fancybox_onglet4'];
		update_option('cispm_hauteur_fancybox_onglet4', $cispm_hauteur_fancybox_onglet4);
		
		$cispm_position_fancybox_onglet4 = $_POST['cispm_position_fancybox_onglet4'];
		update_option('cispm_position_fancybox_onglet4', $cispm_position_fancybox_onglet4);
		
		$cispm_transition_fancybox_onglet4 = $_POST['cispm_transition_fancybox_onglet4'];
		update_option('cispm_transition_fancybox_onglet4', $cispm_transition_fancybox_onglet4);
	
		$cispm_nb_post_quatrieme = $_POST['cispm_nb_ligne_quatrieme'];
		if($cispm_nb_post_quatrieme > 100) {
			$cispm_nb_post_quatrieme = 100;
		}
		update_option('cispm_web_nb_quatrieme', $cispm_nb_post_quatrieme);
		
		for($i=1; $i<=$cispm_nb_post_quatrieme;$i++) {
			$cispm_pos_video = 'quatrieme_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_video];
			update_option($cispm_pos_video, $cispm_pos_post);
			
			$cispm_titre_video = 'quatrieme_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_video];
			update_option($cispm_titre_video, $cispm_titre_post);
			
			$cispm_descr_video = 'quatrieme_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_video];
			update_option($cispm_descr_video, $cispm_descr_post);
			
			$cispm_url_lien_video = 'quatrieme_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_video];
			update_option($cispm_url_lien_video, $cispm_url_lien_post);
			
			$cispm_url_vign_video = 'quatrieme_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_video];
			update_option($cispm_url_vign_video, $cispm_url_vign_post);
		}
		
		$nb_ligne_form_quatrieme = $cispm_nb_post_quatrieme+1;
		
		for($i=$nb_ligne_form_quatrieme;$i<100;$i++) {
			$cispm_pos_video = 'quatrieme_pos_'.$i;
			delete_option($cispm_pos_video);
			
			$cispm_titre_video = 'quatrieme_titre_'.$i;
			delete_option($cispm_titre_video);
			
			$cispm_descr_video = 'quatrieme_descr_'.$i;
			delete_option($cispm_descr_video);
			
			$cispm_url_lien_video = 'quatrieme_url_lien_'.$i;
			delete_option($cispm_url_lien_video);
			
			$cispm_url_vign_video = 'quatrieme_url_vign_'.$i;
			delete_option($cispm_url_vign_video);
		}
	}
	
	if(isset($_POST['submit'])) {
	
		/*** Premier onglet ***/
		
		$cispm_nom_onglet1 = $_POST['cispm_nom_onglet1'];
		update_option('cispm_nom_onglet1', $cispm_nom_onglet1);
		
		$cispm_soustitre_onglet1 = $_POST['cispm_soustitre_onglet1'];
		update_option('cispm_soustitre_onglet1', $cispm_soustitre_onglet1);
		
		$cispm_largeur_fancybox_onglet1 = $_POST['cispm_largeur_fancybox_onglet1'];
		update_option('cispm_largeur_fancybox_onglet1', $cispm_largeur_fancybox_onglet1);
		
		$cispm_hauteur_fancybox_onglet1 = $_POST['cispm_hauteur_fancybox_onglet1'];
		update_option('cispm_hauteur_fancybox_onglet1', $cispm_hauteur_fancybox_onglet1);
		
		$cispm_position_fancybox_onglet1 = $_POST['cispm_position_fancybox_onglet1'];
		update_option('cispm_position_fancybox_onglet1', $cispm_position_fancybox_onglet1);
		
		$cispm_transition_fancybox_onglet1 = $_POST['cispm_transition_fancybox_onglet1'];
		update_option('cispm_transition_fancybox_onglet1', $cispm_transition_fancybox_onglet1);
		
		
		$cispm_colonne_fancybox_onglet1 = $_POST['cispm_colonne_fancybox_onglet1'];
		update_option('cispm_colonne_fancybox_onglet1', $cispm_colonne_fancybox_onglet1);
	
		$cispm_nb_post = $_POST['cispm_nb_ligne'];

		for($i=1; $i<=$cispm_nb_post;$i++) {
			$cispm_pos_web = 'premier_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_web];
			update_option($cispm_pos_web, $cispm_pos_post);
			
			$cispm_titre_web = 'premier_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_web];
			update_option($cispm_titre_web, $cispm_titre_post);
			
			$cispm_descr_web = 'premier_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_web];
			update_option($cispm_descr_web, $cispm_descr_post);
			
			$cispm_url_lien_web = 'premier_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_web];
			update_option($cispm_url_lien_web, $cispm_url_lien_post);
			
			$cispm_url_vign_web = 'premier_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_web];
			update_option($cispm_url_vign_web, $cispm_url_vign_post);
		}
		
		$nb_ligne_form = $cispm_nb_post+1;
		
		for($i=$nb_ligne_form;$i<100;$i++) {
			$cispm_pos_web = 'pos_'.$i;
			delete_option($cispm_pos_web);
			
			$cispm_titre_web = 'premier_titre_'.$i;
			delete_option($cispm_titre_web);
			
			$cispm_descr_web = 'premier_descr_'.$i;
			delete_option($cispm_descr_web);
			
			$cispm_url_lien_web = 'premier_url_lien_'.$i;
			delete_option($cispm_url_lien_web);
			
			$cispm_url_vign_web = 'premier_url_vign_'.$i;
			delete_option($cispm_url_vign_web);
		}
		
		/*** Deuxième onglet ***/
		
		$cispm_nom_onglet2 = $_POST['cispm_nom_onglet2'];
		update_option('cispm_nom_onglet2', $cispm_nom_onglet2);
		
		$cispm_soustitre_onglet2 = $_POST['cispm_soustitre_onglet2'];
		update_option('cispm_soustitre_onglet2', $cispm_soustitre_onglet2);
		
		$cispm_largeur_fancybox_onglet2 = $_POST['cispm_largeur_fancybox_onglet2'];
		update_option('cispm_largeur_fancybox_onglet2', $cispm_largeur_fancybox_onglet2);
		
		$cispm_hauteur_fancybox_onglet2 = $_POST['cispm_hauteur_fancybox_onglet2'];
		update_option('cispm_hauteur_fancybox_onglet2', $cispm_hauteur_fancybox_onglet2);
		
		$cispm_position_fancybox_onglet2 = $_POST['cispm_position_fancybox_onglet2'];
		update_option('cispm_position_fancybox_onglet2', $cispm_position_fancybox_onglet2);
		
		$cispm_transition_fancybox_onglet2 = $_POST['cispm_transition_fancybox_onglet2'];
		update_option('cispm_transition_fancybox_onglet2', $cispm_transition_fancybox_onglet2);
	
		$cispm_nb_post_deuxieme = $_POST['cispm_nb_ligne_deuxieme'];
		
		for($i=1; $i<=$cispm_nb_post_deuxieme;$i++) {
			$cispm_pos_mus = 'deuxieme_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_mus];
			update_option($cispm_pos_mus, $cispm_pos_mus);
			
			$cispm_titre_mus = 'deuxieme_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_mus];
			update_option($cispm_titre_mus, $cispm_titre_post);
			
			$cispm_descr_mus = 'deuxieme_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_mus];
			update_option($cispm_descr_mus, $cispm_descr_post);
			
			$cispm_url_lien_mus = 'deuxieme_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_mus];
			update_option($cispm_url_lien_mus, $cispm_url_lien_post);
			
			$cispm_url_vign_mus = 'deuxieme_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_mus];
			update_option($cispm_url_vign_mus, $cispm_url_vign_post);
		}
		
		$nb_ligne_form_deuxieme = $cispm_nb_post_deuxieme+1;
		
		for($i=$nb_ligne_form_deuxieme;$i<100;$i++) {
			$cispm_pos_mus = 'deuxieme_pos_'.$i;
			delete_option($cispm_pos_mus);
			
			$cispm_titre_mus = 'deuxieme_titre_'.$i;
			delete_option($cispm_titre_mus);
			
			$cispm_descr_mus = 'deuxieme_descr_'.$i;
			delete_option($cispm_descr_mus);
			
			$cispm_url_lien_mus = 'deuxieme_url_lien_'.$i;
			delete_option($cispm_url_lien_mus);
			
			$cispm_url_vign_mus = 'deuxieme_url_vign_'.$i;
			delete_option($cispm_url_vign_mus);
		}
		
		/*** Troisième onglet ***/
		
		$cispm_nom_onglet3 = $_POST['cispm_nom_onglet3'];
		update_option('cispm_nom_onglet3', $cispm_nom_onglet3);
		
		$cispm_soustitre_onglet3 = $_POST['cispm_soustitre_onglet3'];
		update_option('cispm_soustitre_onglet3', $cispm_soustitre_onglet3);
		
		$cispm_position_fancybox_onglet3 = $_POST['cispm_position_fancybox_onglet3'];
		update_option('cispm_position_fancybox_onglet3', $cispm_position_fancybox_onglet3);
		
		$cispm_transition_fancybox_onglet3 = $_POST['cispm_transition_fancybox_onglet3'];
		update_option('cispm_transition_fancybox_onglet3', $cispm_transition_fancybox_onglet3);
	
		$cispm_nb_post_troisieme = $_POST['cispm_nb_ligne_troisieme'];
		
		for($i=1; $i<=$cispm_nb_post_troisieme;$i++) {
			$cispm_pos_img = 'troisieme_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_img];
			update_option($cispm_pos_img, $cispm_pos_img);
			
			$cispm_titre_img = 'troisieme_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_img];
			update_option($cispm_titre_img, $cispm_titre_post);
			
			$cispm_descr_img = 'troisieme_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_img];
			update_option($cispm_descr_img, $cispm_descr_post);
			
			$cispm_url_lien_img = 'troisieme_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_img];
			update_option($cispm_url_lien_img, $cispm_url_lien_post);
			
			$cispm_url_vign_img = 'troisieme_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_img];
			update_option($cispm_url_vign_img, $cispm_url_vign_post);
		}
		
		$nb_ligne_form_troisieme = $cispm_nb_post_troisieme+1;
		
		for($i=$nb_ligne_form_troisieme;$i<100;$i++) {
			$cispm_pos_img = 'troisieme_pos_'.$i;
			delete_option($cispm_pos_img);
			
			$cispm_titre_img = 'troisieme_titre_'.$i;
			delete_option($cispm_titre_img);
			
			$cispm_descr_img = 'troisieme_descr_'.$i;
			delete_option($cispm_descr_img);
			
			$cispm_url_lien_img = 'troisieme_url_lien_'.$i;
			delete_option($cispm_url_lien_img);
			
			$cispm_url_vign_img = 'troisieme_url_vign_'.$i;
			delete_option($cispm_url_vign_img);
		}
		
		/*** Quatrième onglet ***/
		
		$cispm_nom_onglet4 = $_POST['cispm_nom_onglet4'];
		update_option('cispm_nom_onglet4', $cispm_nom_onglet4);
		
		$cispm_soustitre_onglet4 = $_POST['cispm_soustitre_onglet4'];
		update_option('cispm_soustitre_onglet4', $cispm_soustitre_onglet4);
		
		$cispm_largeur_fancybox_onglet4 = $_POST['cispm_largeur_fancybox_onglet4'];
		update_option('cispm_largeur_fancybox_onglet4', $cispm_largeur_fancybox_onglet4);
		
		$cispm_hauteur_fancybox_onglet4 = $_POST['cispm_hauteur_fancybox_onglet4'];
		update_option('cispm_hauteur_fancybox_onglet4', $cispm_hauteur_fancybox_onglet4);
		
		$cispm_position_fancybox_onglet4 = $_POST['cispm_position_fancybox_onglet4'];
		update_option('cispm_position_fancybox_onglet4', $cispm_position_fancybox_onglet4);
		
		$cispm_transition_fancybox_onglet4 = $_POST['cispm_transition_fancybox_onglet4'];
		update_option('cispm_transition_fancybox_onglet4', $cispm_transition_fancybox_onglet4);
	
		$cispm_nb_post_quatrieme = $_POST['cispm_nb_ligne_quatrieme'];
		
		for($i=1; $i<=$cispm_nb_post_quatrieme;$i++) {
			$cispm_pos_video = 'quatrieme_pos_'.$i;
			$cispm_pos_post = $_POST[$cispm_pos_video];
			update_option($cispm_pos_video, $cispm_pos_post);
			
			$cispm_titre_video = 'quatrieme_titre_'.$i;
			$cispm_titre_post = $_POST[$cispm_titre_video];
			update_option($cispm_titre_video, $cispm_titre_post);
			
			$cispm_descr_video = 'quatrieme_descr_'.$i;
			$cispm_descr_post = $_POST[$cispm_descr_video];
			update_option($cispm_descr_video, $cispm_descr_post);
			
			$cispm_url_lien_video = 'quatrieme_url_lien_'.$i;
			$cispm_url_lien_post = $_POST[$cispm_url_lien_video];
			update_option($cispm_url_lien_video, $cispm_url_lien_post);
			
			$cispm_url_vign_video = 'quatrieme_url_vign_'.$i;
			$cispm_url_vign_post = $_POST[$cispm_url_vign_video];
			update_option($cispm_url_vign_video, $cispm_url_vign_post);
		}
		
		$nb_ligne_form_quatrieme = $cispm_nb_post_quatrieme+1;
		
		for($i=$nb_ligne_form_quatrieme;$i<100;$i++) {
			$cispm_pos_video = 'quatrieme_pos_'.$i;
			delete_option($cispm_pos_video);
			
			$cispm_titre_video = 'quatrieme_titre_'.$i;
			delete_option($cispm_titre_video);
			
			$cispm_descr_video = 'quatrieme_descr_'.$i;
			delete_option($cispm_descr_video);
			
			$cispm_url_lien_video = 'quatrieme_url_lien_'.$i;
			delete_option($cispm_url_lien_video);
			
			$cispm_url_vign_video = 'quatrieme_url_vign_'.$i;
			delete_option($cispm_url_vign_video);
		}
		
		$checkbox_onglet1 = $_POST['checkbox_onglet1'];
		update_option('checkbox_onglet1', $checkbox_onglet1);
		
		$checkbox_onglet2 = $_POST['checkbox_onglet2'];
		update_option('checkbox_onglet2', $checkbox_onglet2);
		
		$checkbox_onglet3 = $_POST['checkbox_onglet3'];
		update_option('checkbox_onglet3', $checkbox_onglet3);
		
		$checkbox_onglet4 = $_POST['checkbox_onglet4'];
		update_option('checkbox_onglet4', $checkbox_onglet4);
		
		$cispm_background_onglet = $_POST['cispm_background_onglet'];
		update_option('cispm_background_onglet', $cispm_background_onglet);
		
		$cispm_bordure_onglet = $_POST['cispm_bordure_onglet'];
		update_option('cispm_bordure_onglet', $cispm_bordure_onglet);
		
		$cispm_texte_onglet = $_POST['cispm_texte_onglet'];
		update_option('cispm_texte_onglet', $cispm_texte_onglet);
		
		$cispm_background_survol_onglet = $_POST['cispm_background_survol_onglet'];
		update_option('cispm_background_survol_onglet', $cispm_background_survol_onglet);
		
		$onglet_survol = $_POST['onglet_survol'];
		update_option('onglet_survol', $onglet_survol);
		
		$cispm_jmp3_back = $_POST['cispm_jmp3_back'];
		update_option('cispm_jmp3_back', $cispm_jmp3_back);
		
		$cispm_jmp3_fore = $_POST['cispm_jmp3_fore'];
		update_option('cispm_jmp3_fore', $cispm_jmp3_fore);
		
		$cispm_jmp3_repeat = $_POST['cispm_jmp3_repeat'];
		update_option('cispm_jmp3_repeat', $cispm_jmp3_repeat);
		
		$cispm_jmp3_volume = $_POST['cispm_jmp3_volume'];
		update_option('cispm_jmp3_volume', $cispm_jmp3_volume);
		
		$cispm_jmp3_width = $_POST['cispm_jmp3_width'];
		update_option('cispm_jmp3_width', $cispm_jmp3_width);
		
		$cispm_jmp3_download = $_POST['cispm_jmp3_download'];
		update_option('cispm_jmp3_download', $cispm_jmp3_download);
		
		//Affichage d'un message comme quoi les nouveaux paramètres sont correctment enregistrés
		?>
		<div id="message" class="updated fade">
			<p><strong><?php _e('Modifications apport&eacute;es avec succ&egrave;s.','cispm-portfolio'); ?></strong></p>
		</div>
		<?php
	}
	
	$cispm_web_nb = get_option('cispm_web_nb');
	if($cispm_web_nb == "") {
		$cispm_web_nb = 10;
	}
	
	$cispm_nom_onglet1 = get_option('cispm_nom_onglet1');
	$cispm_largeur_fancybox_onglet1 = get_option('cispm_largeur_fancybox_onglet1');
	$cispm_hauteur_fancybox_onglet1 = get_option('cispm_hauteur_fancybox_onglet1');
	$cispm_position_fancybox_onglet1 = get_option('cispm_position_fancybox_onglet1');
	$cispm_transition_fancybox_onglet1 = get_option('cispm_transition_fancybox_onglet1');
	$cispm_colonne_fancybox_onglet1 = get_option('cispm_colonne_fancybox_onglet1');
	$cispm_soustitre_onglet1 = get_option('cispm_soustitre_onglet1');
	
	$cispm_web_nb_deuxieme = get_option('cispm_web_nb_deuxieme');
	if($cispm_web_nb_deuxieme == "") {
		$cispm_web_nb_deuxieme = 10;
	}
	
	$cispm_nom_onglet2 = get_option('cispm_nom_onglet2');
	$cispm_position_fancybox_onglet2 = get_option('cispm_position_fancybox_onglet2');
	$cispm_largeur_fancybox_onglet2 = get_option('cispm_largeur_fancybox_onglet2');
	$cispm_hauteur_fancybox_onglet2 = get_option('cispm_hauteur_fancybox_onglet2');
	$cispm_position_fancybox_onglet2 = get_option('cispm_position_fancybox_onglet2');
	$cispm_transition_fancybox_onglet2 = get_option('cispm_transition_fancybox_onglet2');
	$cispm_soustitre_onglet2 = get_option('cispm_soustitre_onglet2');
	
	$cispm_web_nb_troisieme = get_option('cispm_web_nb_troisieme');
	if($cispm_web_nb_troisieme == "") {
		$cispm_web_nb_troisieme = 10;
	}
	
	$cispm_nom_onglet3 = get_option('cispm_nom_onglet3');
	$cispm_position_fancybox_onglet3 = get_option('cispm_position_fancybox_onglet3');
	$cispm_transition_fancybox_onglet3 = get_option('cispm_transition_fancybox_onglet3');
	$cispm_soustitre_onglet3 = get_option('cispm_soustitre_onglet3');
	
	$cispm_web_nb_quatrieme = get_option('cispm_web_nb_quatrieme');
	if($cispm_web_nb_quatrieme == "") {
		$cispm_web_nb_quatrieme = 10;
	}
	
	$cispm_nom_onglet4 = get_option('cispm_nom_onglet4');
	$cispm_largeur_fancybox_onglet4 = get_option('cispm_largeur_fancybox_onglet4');
	$cispm_hauteur_fancybox_onglet4 = get_option('cispm_hauteur_fancybox_onglet4');
	$cispm_position_fancybox_onglet4 = get_option('cispm_position_fancybox_onglet4');
	$cispm_transition_fancybox_onglet4 = get_option('cispm_transition_fancybox_onglet4');
	$cispm_soustitre_onglet4 = get_option('cispm_soustitre_onglet4');
	
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
	
	$cispm_plugindir_portfolio = get_option('siteurl').'/'.PLUGINDIR.'/'.dirname(plugin_basename(__FILE__));
	?>
<style type="text/css">
	<!-- 
	.myColorPicker {
		background:transparent url(<?php echo $cispm_plugindir_portfolio."/image/palette.png";?>) no-repeat 99% center;
		padding-right:20px;
	}
	#myColorPicker {
		background-color:#000;
		border:1px solid #000;
		margin:-1px;
		width:390px;
	}
	#myColorPicker ul {
		width:360px;
		margin-right:30px;
	}
	#myColorPicker * {
		margin:0; padding:0;
	}
	#myColorPicker a {
		cursor:pointer;
		display:block;
		width:10px; height:10px;
	}
	#myColorPicker li {
		float:left;
		list-style:none;
	}
	#myColorPicker a.close {
		background:transparent url(<?php echo $cispm_plugindir_portfolio."/image/close.png";?>) center center;
		position:absolute;
		text-indent:-5000px;
		top:-10px; right:-10px;
		width:20px; height:20px;
	}
	-->
</style>

<script language="Javascript">
	jQuery(document).ready(function($){
		$("#cispm-tabs-admin").tabs();
		//$('.myColorPicker').myColorPicker();
	});
</script>

<form name="oscimp_portfolio" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<div id="cispm-tabs-admin">
			<ul>
				<li><a href="#cispm-tabs-admin-1"><?php echo $cispm_nom_onglet1; ?></a></li>
				<li><a href="#cispm-tabs-admin-2"><?php echo $cispm_nom_onglet2; ?></a></li>
				<li><a href="#cispm-tabs-admin-3"><?php echo $cispm_nom_onglet3; ?></a></li>
				<li><a href="#cispm-tabs-admin-4"><?php echo $cispm_nom_onglet4; ?></a></li>
				<li><a href="#cispm-tabs-admin-5"><?php _e('Param&egrave;tre g&eacute;n&eacute;ral', 'cispm-portfolio' )?></a></li>
			</ul>
			
			<div id="cispm-tabs-admin-1">
			
			<div style="float:left;margin:0;padding:0;">
				<?php    echo "<h4>" . __( 'Param&eacute;trage du premier onglet (Site Web) ', 'cispm-portfolio' ) . "</h4>"; ?>
			</div>
			
			<div style="float:right;margin:0;padding:0;">
				<?php
					print "<input type='text' value='".$cispm_web_nb."' size='2' name='cispm_nb_ligne' id='cispm_nb_ligne'/>";
				?>
				<input type="submit" name="cispm_nb_form" class="button-primary" value="<?php _e('Valider le nombre de ligne', 'cispm-portfolio' )?>" size="30"/>
			</div>
			
			<div style="clear:both;">
			</div>

			<table width="100%">	
				<tr>
					<td width="15%"><?php _e('Nom de l\'onglet ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_nom_onglet1" value="<?php echo $cispm_nom_onglet1; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Titre ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_soustitre_onglet1" value="<?php echo $cispm_soustitre_onglet1; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Largeur en % de la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_largeur_fancybox_onglet1" value="<?php echo $cispm_largeur_fancybox_onglet1; ?>" size="3"/> %</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Hauteur en % de la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_hauteur_fancybox_onglet1" value="<?php echo $cispm_hauteur_fancybox_onglet1; ?>" size="3"/> %</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Position du titre dans la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_position_fancybox_onglet1 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_position_fancybox_onglet1 == "inside") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_position_fancybox_onglet1">
							<option value="" <?php echo $a; ?> > <?php _e('En bas de la fancybox ','cispm-portfolio'); ?> </option>
							<option value="inside" <?php echo $b; ?> > <?php _e('Dessus fancybox ','cispm-portfolio'); ?> </option>
							<option value="over" <?php echo $c; ?> > <?php _e('Dessus fancybox avec effet transparence ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Effet ouverture fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_transition_fancybox_onglet1 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_transition_fancybox_onglet1 == "elastic") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_transition_fancybox_onglet1">
							<option value="" <?php echo $a; ?> > <?php _e('Aucun ','cispm-portfolio'); ?> </option>
							<option value="elastic" <?php echo $b; ?> > <?php _e('Elastique ','cispm-portfolio'); ?> </option>
							<option value="fade" <?php echo $c; ?> > <?php _e('Apparation en fondue ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Nombre de vignette par ligne (1 ou 2) ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_colonne_fancybox_onglet1" value="<?php echo $cispm_colonne_fancybox_onglet1; ?>" size="1"/></td>
				</tr>
			</table>
			
			<hr/>
			
			<?php    echo "<h4>" . __( 'Ajout/Modification des lignes &agrave; afficher', 'cispm-portfolio' ) . "</h4>"; ?>
			
				<table id="table_onglet1" width="100%">
					<tr>
						<th style='text-align:left;'>Position</th>
						<th style='text-align:left;'>Titre</th>
						<th style='text-align:left;'>Description</th>
						<th style='text-align:left;'>URL Site</th>
						<th style='text-align:left;'>URL Vignette</th>
					</tr>
					<?php
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
							
							print "<tr name='".$i."'>";
								print "<td width='10%'>".$i."</td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_titre_web."' name='".$cispm_titre_web."' value='".$cispm_titre_web_texte."'/></td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_descr_web."' name='".$cispm_descr_web."' value='".$cispm_descr_web_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_lien_web."' name='".$cispm_url_lien_web."' value='".$cispm_url_lien_web_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_vign_web."' name='".$cispm_url_vign_web."' value='".$cispm_url_vign_web_texte."'/></td>";
							print "</tr>";
						}
					?>
				</table>
			</div>
			
			<div id="cispm-tabs-admin-2">
			<div style="float:left;margin:0;padding:0;">
				<?php    echo "<h4>" . __( 'Param&eacute;trage du deuxi&egrave;me onglet (Musique)', 'cispm-portfolio' ) . "</h4>"; ?>
			</div>
			
			<div style="float:right;margin:0;padding:0;">
				<?php
					print "<input type='text' value='".$cispm_web_nb_deuxieme."' size='2' name='cispm_nb_ligne_deuxieme' id='cispm_nb_ligne_deuxieme'/>";
				?>
				<input type="submit" name="cispm_nb_form_deuxieme" class="button-primary" value="<?php _e('Valider le nombre de ligne', 'cispm-portfolio' )?>" size="30"/>
			</div>
			
			<div style="clear:both;">
			</div>

			<table width="100%">	
				<tr>
					<td width="15%"><?php _e('Nom de l\'onglet ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_nom_onglet2" value="<?php echo $cispm_nom_onglet2; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Titre ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_soustitre_onglet2" value="<?php echo $cispm_soustitre_onglet2; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Largeur en % de la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_largeur_fancybox_onglet2" value="<?php echo $cispm_largeur_fancybox_onglet2; ?>" size="3"/> %</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Hauteur en % de la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_hauteur_fancybox_onglet2" value="<?php echo $cispm_hauteur_fancybox_onglet2; ?>" size="3"/> %</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Position du titre dans la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_position_fancybox_onglet2 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_position_fancybox_onglet2 == "inside") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_position_fancybox_onglet2">
							<option value="" <?php echo $a; ?> > <?php _e('En bas de la fancybox ','cispm-portfolio'); ?> </option>
							<option value="inside" <?php echo $b; ?> > <?php _e('Dessus fancybox ','cispm-portfolio'); ?> </option>
							<option value="over" <?php echo $c; ?> > <?php _e('Dessus fancybox avec effet transparence ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Effet ouverture fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_transition_fancybox_onglet2 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_transition_fancybox_onglet2 == "elastic") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_transition_fancybox_onglet2">
							<option value="" <?php echo $a; ?> > <?php _e('Aucun ','cispm-portfolio'); ?> </option>
							<option value="elastic" <?php echo $b; ?> > <?php _e('Elastique ','cispm-portfolio'); ?> </option>
							<option value="fade" <?php echo $c; ?> > <?php _e('Apparation en fondue ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
			</table>
			
			<hr/>
			
			<?php    echo "<h4>" . __( 'Ajout/Modification des lignes &agrave; afficher', 'cispm-portfolio' ) . "</h4>"; ?>
			
				<table id="table_onglet4" width="100%">
					<tr>
						<th style='text-align:left;'>Position</th>
						<th style='text-align:left;'>Titre</th>
						<th style='text-align:left;'>Description</th>
						<th style='text-align:left;'>URL Musique</th>
						<th style='text-align:left;'>URL Vignette</th>
					</tr>
					<?php
						for($i=1; $i<=$cispm_web_nb_deuxieme; $i++) {							
							$cispm_pos_mus = 'deuxieme_pos_'.$i;
							$cispm_pos_mus_texte = get_option($cispm_pos_img);
							
							$cispm_titre_mus = 'deuxieme_titre_'.$i;
							$cispm_titre_mus_texte = get_option($cispm_titre_mus);
							
							$cispm_descr_mus = 'deuxieme_descr_'.$i;
							$cispm_descr_mus_texte = get_option($cispm_descr_mus);
							
							$cispm_url_lien_mus = 'deuxieme_url_lien_'.$i;
							$cispm_url_lien_mus_texte = get_option($cispm_url_lien_mus);
							
							$cispm_url_vign_mus = 'deuxieme_url_vign_'.$i;
							$cispm_url_vign_mus_texte = get_option($cispm_url_vign_mus);
							
							print "<tr name='".$i."'>";
								print "<td width='10%'>".$i."</td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_titre_mus."' name='".$cispm_titre_mus."' value='".$cispm_titre_mus_texte."'/></td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_descr_mus."' name='".$cispm_descr_mus."' value='".$cispm_descr_mus_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_lien_mus."' name='".$cispm_url_lien_mus."' value='".$cispm_url_lien_mus_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_vign_mus."' name='".$cispm_url_vign_mus."' value='".$cispm_url_vign_mus_texte."'/></td>";
							print "</tr>";
						}
					?>
				</table>
			</div>
			
			<div id="cispm-tabs-admin-3">
			<div style="float:left;margin:0;padding:0;">
				<?php    echo "<h4>" . __( 'Param&eacute;trage du troisi&egrave;me onglet (Image)', 'cispm-portfolio' ) . "</h4>"; ?>
			</div>
			
			<div style="float:right;margin:0;padding:0;">
				<?php
					print "<input type='text' value='".$cispm_web_nb_troisieme."' size='2' name='cispm_nb_ligne_troisieme' id='cispm_nb_ligne_troisieme'/>";
				?>
				<input type="submit" name="cispm_nb_form_troisieme" class="button-primary" value="<?php _e('Valider le nombre de ligne', 'cispm-portfolio' )?>" size="30"/>
			</div>
			
			<div style="clear:both;">
			</div>

			<table width="100%">	
				<tr>
					<td width="15%"><?php _e('Nom de l\'onglet ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_nom_onglet3" value="<?php echo $cispm_nom_onglet3; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Titre ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_soustitre_onglet3" value="<?php echo $cispm_soustitre_onglet3; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Position du titre dans la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_position_fancybox_onglet3 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_position_fancybox_onglet3 == "inside") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_position_fancybox_onglet3">
							<option value="" <?php echo $a; ?> > <?php _e('En bas de la fancybox ','cispm-portfolio'); ?> </option>
							<option value="inside" <?php echo $b; ?> > <?php _e('Dessus fancybox ','cispm-portfolio'); ?> </option>
							<option value="over" <?php echo $c; ?> > <?php _e('Dessus fancybox avec effet transparence ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Effet ouverture fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_transition_fancybox_onglet3 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_transition_fancybox_onglet3 == "elastic") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_transition_fancybox_onglet3">
							<option value="" <?php echo $a; ?> > <?php _e('Aucun ','cispm-portfolio'); ?> </option>
							<option value="elastic" <?php echo $b; ?> > <?php _e('Elastique ','cispm-portfolio'); ?> </option>
							<option value="fade" <?php echo $c; ?> > <?php _e('Apparation en fondue ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
			</table>
			
			<hr/>
			
			<?php    echo "<h4>" . __( 'Ajout/Modification des lignes &agrave; afficher', 'cispm-portfolio' ) . "</h4>"; ?>
			
				<table id="table_onglet4" width="100%">
					<tr>
						<th style='text-align:left;'>Position</th>
						<th style='text-align:left;'>Titre</th>
						<th style='text-align:left;'>Description</th>
						<th style='text-align:left;'>URL Image HD</th>
						<th style='text-align:left;'>URL Vignette</th>
					</tr>
					<?php
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
							
							print "<tr name='".$i."'>";
								print "<td width='10%'>".$i."</td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_titre_img."' name='".$cispm_titre_img."' value='".$cispm_titre_img_texte."'/></td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_descr_img."' name='".$cispm_descr_img."' value='".$cispm_descr_img_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_lien_img."' name='".$cispm_url_lien_img."' value='".$cispm_url_lien_img_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_vign_img."' name='".$cispm_url_vign_img."' value='".$cispm_url_vign_img_texte."'/></td>";
							print "</tr>";
						}
					?>
				</table>
			</div>
			
			<div id="cispm-tabs-admin-4">
			
			<div style="float:left;margin:0;padding:0;">
				<?php    echo "<h4>" . __( 'Param&eacute;trage du quatri&egrave; onglet (Vid&eacute;o)', 'cispm-portfolio' ) . "</h4>"; ?>
			</div>
			
			<div style="float:right;margin:0;padding:0;">
				<?php
					print "<input type='text' value='".$cispm_web_nb_quatrieme."' size='2' name='cispm_nb_ligne_quatrieme' id='cispm_nb_ligne_quatrieme'/>";
				?>
				<input type="submit" name="cispm_nb_form_quatrieme" class="button-primary" value="<?php _e('Valider le nombre de ligne', 'cispm-portfolio' )?>" size="30"/>
			</div>
			
			<div style="clear:both;">
			</div>

			<table width="100%">	
				<tr>
					<td width="15%"><?php _e('Nom de l\'onglet ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_nom_onglet4" value="<?php echo $cispm_nom_onglet4; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Titre ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_soustitre_onglet4" value="<?php echo $cispm_soustitre_onglet4; ?>" size="30"/></td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Largeur en pixel de la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_largeur_fancybox_onglet4" value="<?php echo $cispm_largeur_fancybox_onglet4; ?>" size="4"/> px</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Hauteur en pixel de la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%"><input type="text" name="cispm_hauteur_fancybox_onglet4" value="<?php echo $cispm_hauteur_fancybox_onglet4; ?>" size="4"/> px</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Position du titre dans la fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_position_fancybox_onglet4 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_position_fancybox_onglet4 == "inside") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_position_fancybox_onglet4">
							<option value="" <?php echo $a; ?> > <?php _e('En bas de la fancybox ','cispm-portfolio'); ?> </option>
							<option value="inside" <?php echo $b; ?> > <?php _e('Dessus fancybox ','cispm-portfolio'); ?> </option>
							<option value="over" <?php echo $c; ?> > <?php _e('Dessus fancybox avec effet transparence ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="15%"><?php _e('Effet ouverture fancybox ','cispm-portfolio'); ?></td>
					<td width="50%">
						
						<?php
							if($cispm_transition_fancybox_onglet4 == "") {
								$a = "selected";
								$b = "";
								$c = "";
							} else if($cispm_transition_fancybox_onglet4 == "elastic") {
								$a = "";
								$b = "selected";
								$c = "";
							} else {
								$a = "";
								$b = "";
								$c = "selected";
							}
						?>
					
						<select name="cispm_transition_fancybox_onglet4">
							<option value="" <?php echo $a; ?> > <?php _e('Aucun ','cispm-portfolio'); ?> </option>
							<option value="elastic" <?php echo $b; ?> > <?php _e('Elastique ','cispm-portfolio'); ?> </option>
							<option value="fade" <?php echo $c; ?> > <?php _e('Apparation en fondue ','cispm-portfolio'); ?> </option>
						</select>
					</td>
				</tr>
			</table>
			
			<hr/>
			
			<?php    echo "<h4>" . __( 'Ajout/Modification des lignes &agrave; afficher', 'cispm-portfolio' ) . "</h4>"; ?>
			
				<table id="table_onglet4" width="100%">
					<tr>
						<th style='text-align:left;'>Position</th>
						<th style='text-align:left;'>Titre</th>
						<th style='text-align:left;'>Description</th>
						<th style='text-align:left;'>URL Site</th>
						<th style='text-align:left;'>URL Vignette</th>
					</tr>
					<?php
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
							
							print "<tr name='".$i."'>";
								print "<td width='10%'>".$i."</td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_titre_video."' name='".$cispm_titre_video."' value='".$cispm_titre_video_texte."'/></td>";
								print "<td width='15%'><input type='text' style='width:90%;' id='".$cispm_descr_video."' name='".$cispm_descr_video."' value='".$cispm_descr_video_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_lien_video."' name='".$cispm_url_lien_video."' value='".$cispm_url_lien_video_texte."'/></td>";
								print "<td width='25%'><input type='text' style='width:90%;' id='".$cispm_url_vign_video."' name='".$cispm_url_vign_video."' value='".$cispm_url_vign_video_texte."'/></td>";
							print "</tr>";
						}
					?>
				</table>
			</div>
			
			<div id="cispm-tabs-admin-5">
				<?php
					if($checkbox_onglet1 == "onglet1") {
						$value_1 = 'checked="checked"';
					} else {
						$value_1 = '';
					}
					
					if($checkbox_onglet2 == "onglet2") {
						$value_2 = 'checked="checked"';
					} else {
						$value_2 = '';
					}
					
					if($checkbox_onglet3 == "onglet3") {
						$value_3 = 'checked="checked"';
					} else {
						$value_3 = '';
					}
					
					if($checkbox_onglet4 == "onglet4") {
						$value_4 = 'checked="checked"';
					} else {
						$value_4 = '';
					}
				?>
			
					<?php    echo "<h4>" . __( 'Param&eacute;trage g&eacute;n&eacute;ral du plugin', 'cispm-portfolio' ) . "</h4>"; ?>
				
				<table>
					<tr>
						<td colspan='2'><h4><?php  _e( 'Choix des onglets &agrave; afficher', 'cispm-portfolio' ) ?></h4></td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type="checkbox" value="onglet1" id="checkbox_onglet1" <?php echo $value_1; ?> name="checkbox_onglet1"/>
							<?php  _e( 'Onglet 1 (Site Web)', 'cispm-portfolio' ) ?>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type="checkbox" value="onglet2" id="checkbox_onglet2" <?php echo $value_2; ?> name="checkbox_onglet2"/>
							<?php  _e( 'Onglet 2 (Musique)', 'cispm-portfolio' ) ?>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type="checkbox" value="onglet3" id="checkbox_onglet3" <?php echo $value_3; ?> name="checkbox_onglet3"/>
							<?php  _e( 'Onglet 3 (Image)', 'cispm-portfolio' ) ?>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type="checkbox" value="onglet4" id="checkbox_onglet4" <?php echo $value_4; ?> name="checkbox_onglet4"/>
							<?php  _e( 'Onglet 4 (Vid&eacute;o)', 'cispm-portfolio' ) ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  _e( 'Couleur fond onglet', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							<?php
								if($cispm_background_onglet == "") {
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_background_onglet;?>" id="cispm_background_onglet" name="cispm_background_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span> <?php _e('Aucune couleur', 'cispm-portfolio' ); ?> </span></i><?php
								} else {	
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_background_onglet;?>" id="cispm_background_onglet" name="cispm_background_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span style='border:1px solid black;background-color:#<?php echo $cispm_background_onglet; ?>;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i>&nbsp;<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td style='padding-right:30px;'>
							<?php  _e( 'Couleur bordure onglet', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							<?php
								if($cispm_bordure_onglet == "") {
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_bordure_onglet;?>" id="cispm_bordure_onglet" name="cispm_bordure_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span> <?php _e('Aucune couleur', 'cispm-portfolio' ); ?> </span></i><?php
								} else {	
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_bordure_onglet;?>" id="cispm_bordure_onglet" name="cispm_bordure_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span style='border:1px solid black;background-color:#<?php echo $cispm_bordure_onglet; ?>;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i>&nbsp;<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  _e( 'Couleur texte onglet', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							<?php
								if($cispm_texte_onglet == "") {
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_texte_onglet;?>" id="cispm_texte_onglet" name="cispm_texte_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span> <?php _e('Aucune couleur', 'cispm-portfolio' ); ?> </span></i><?php
								} else {	
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_texte_onglet;?>" id="cispm_texte_onglet" name="cispm_texte_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span style='border:1px solid black;background-color:#<?php echo $cispm_texte_onglet; ?>;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i>&nbsp;<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  _e( 'Couleur onglet survol', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							<?php
								if($cispm_background_survol_onglet == "") {
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_background_survol_onglet;?>" id="cispm_background_survol_onglet" name="cispm_background_survol_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span> <?php _e('Aucune couleur', 'cispm-portfolio' ); ?> </span></i><?php
								} else {	
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_background_survol_onglet;?>" id="cispm_background_survol_onglet" name="cispm_background_survol_onglet"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span style='border:1px solid black;background-color:#<?php echo $cispm_background_survol_onglet; ?>;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i>&nbsp;<?php
								}
							?>
						</td>
					</tr>
					
					<?php
						if($onglet_survol == "onglet_survol_oui") {
							$oui_obli = "checked";
							$non_obli = "";	
						} else {
							$oui_obli = "";
							$non_obli = "checked";
						}
					?>
					
					<tr>
						<td colspan='2'><h4><?php  _e( 'Afficher onglet au survol de la souris', 'cispm-portfolio' ) ?></h4></td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type="radio" value="onglet_survol_oui" id="onglet_survol1" <?php echo $oui_obli; ?> name="onglet_survol"/>
							<?php  _e( 'Oui', 'cispm-portfolio' ) ?>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input type="radio" value="onglet_survol_non" id="onglet_survol2" <?php echo $non_obli; ?> name="onglet_survol"/>
							<?php  _e( 'Non', 'cispm-portfolio' ) ?>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td colspan='2'><h4><?php  _e( 'Personnalisation lecteur mp3', 'cispm-portfolio' ) ?></h4></td>
					</tr>
					<tr>
						<td width='200px'>
							<?php  _e( 'Taille du player', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							&nbsp;&nbsp;<input type="text" size="4" value="<?php echo $cispm_jmp3_width;?>" id="cispm_jmp3_width" name="cispm_jmp3_width"/> px
						</td>
					</tr>
					<tr>
						<td>
							<?php  _e( 'Couleur bouton player', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							<?php
								if($cispm_jmp3_fore == "") {
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_jmp3_fore;?>" id="cispm_jmp3_fore" name="cispm_jmp3_fore"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span> <?php _e('Aucune couleur', 'cispm-portfolio' ); ?> </span></i><?php
								} else {	
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_jmp3_fore;?>" id="cispm_jmp3_fore" name="cispm_jmp3_fore"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span style='border:1px solid black;background-color:#<?php echo $cispm_jmp3_fore; ?>;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i>&nbsp;<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  _e( 'Couleur fond player', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							<?php
								if($cispm_jmp3_back == "") {
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_jmp3_back;?>" id="cispm_jmp3_back" name="cispm_jmp3_back"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span> <?php _e('Aucune couleur', 'cispm-portfolio' ); ?> </span></i><?php
								} else {	
									?>#<input type="text" size="7" class="myColorPicker" value="<?php echo $cispm_jmp3_back;?>" id="cispm_jmp3_back" name="cispm_jmp3_back"/> <?php _e('Couleur s&eacute;lectionn&eacute;e: ', 'cispm-portfolio' ); ?> <span style='border:1px solid black;background-color:#<?php echo $cispm_jmp3_back; ?>;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i>&nbsp;<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  _e( 'Volume d\'&eacute;coute du player', 'cispm-portfolio' ) ?> 
						</td>
						<td>
							&nbsp;&nbsp;<input type="text" size="4" value="<?php echo $cispm_jmp3_volume;?>" id="cispm_jmp3_volume" name="cispm_jmp3_volume"/> %
						</td>
					</tr>
					
					<?php
						if($cispm_jmp3_download == "cispm_jmp3_download") {
							$value_5 = 'checked="checked"';
						} else {
							$value_5 = '';
						}
					?>
					
					<tr>
						<td colspan='2'>
							<input type="checkbox" value="cispm_jmp3_download" id="cispm_jmp3_download" <?php echo $value_5; ?> name="cispm_jmp3_download"/>
							<?php  _e( 'Afficher le bouton t&eacute;l&eacute;chargement musique', 'cispm-portfolio' ) ?> 
						</td>
					</tr>
					
					<?php
						if($cispm_jmp3_repeat == "cispm_jmp3_repeat") {
							$value_6 = 'checked="checked"';
						} else {
							$value_6 = '';
						}
					?>
					
					<tr>
						<td colspan='2'>
							<input type="checkbox" value="cispm_jmp3_repeat" id="cispm_jmp3_repeat" <?php echo $value_6; ?> name="cispm_jmp3_repeat"/>
							<?php  _e( 'R&eacute;p&eacute;t&eacute; la musique', 'cispm-portfolio' ) ?> 
						</td>
					</tr>
				</table>
			</div>
		</div>
	
		<p class="submit">
			<input type="submit" name="submit" class="button-primary" value="<?php _e('Appliquer les modifications', 'cispm-portfolio' ) ?>" />
		</p>
	
		<input type="hidden" name="cispm_hidden" value="ENVOIE"/>
	</div>
</form>