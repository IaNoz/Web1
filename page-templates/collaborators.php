<?php /* Template Name: Collaborators */
get_header(); ?>

<section id="collaborators">
<?php

$args = array(
    'role__in' => [ 'editor', 'administrator', 'author' ],
    'orderby' => 'user_nicename',
    'order'   => 'ASC'
);
$users = get_users( $args );?>

	<ul id="collaborators-list">

	<?php foreach ( $users as $user ) {?>
		<li>
			<?php $get_author_id = get_the_author_meta('ID');
			$get_author_gravatar = get_avatar_url($get_author_id, array('size' => 300));

			if(has_post_thumbnail()){
	 	   		the_post_thumbnail();
			} else {
	    		echo '<img src="'.$get_author_gravatar.'" alt="'.get_the_title().'" />';
			}?>
			<div>		
				<h1> <?php echo esc_html( $user->nickname );?> </h1>
				<?php echo esc_html( $user->user_email ); ?>
		    	
		    	<?php $roles = $user->roles;
		    	foreach ( $roles as $role ){?>
		    		<h2><?php echo $role.", "; ?></h2>
		    	<?php }?>
			</div>
		</li>
	<?php } ?>
	</ul>
</section>

<?php get_footer(); ?>
<style>
#collaborators{
	width: 60%;
	margin: 0 auto;
}
#collaborators-list{

}
#collaborators-list li{
	display: grid;
	grid-template-columns: 40% 60%;
}
</style>