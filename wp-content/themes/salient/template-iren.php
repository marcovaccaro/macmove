<?php
/*template name: PDF - Iren*/
get_header(); ?>
<? // fornitore
$fornitore = 'iren';
$fornitore_rag_soc = 'Iren S.p.A.';

$fornitore_categ_offerte = $fornitore.'_upload_offerte';
$fornitore_categ_modulistica = $fornitore.'_upload_modulistica';
$fornitore_categ_documentazione = $fornitore.'_upload_documentazione';
?>

<?php nectar_page_header($post->ID);  ?>

<?php
$options = get_nectar_theme_options();


//wp_enqueue_script('nectarMap', get_template_directory_uri() . '/js/map.js', array('jquery'), '1.0', TRUE);


?>

<div class="container-wrap">

	<div class="container main-content">

		<div class="row">
			<?php if( !post_password_required( $post )): ?>

<!-- #################################################################### -->

<?php include_once('doc-fornitori.php'); ?>

<!-- ####################################################################/copiato -->

			<?php endif; ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>


		</div><!--/row-->

	</div><!--/container-->

</div>
<?php get_footer(); ?>
