<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Powerclub Lite
 */
?>


	
<header>
  <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'powerclub-lite' ); ?></h1>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

 <p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'powerclub-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

  <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'powerclub-lite' ); ?></p>
<?php get_search_form(); ?>

<?php else : ?>

<p><?php esc_html_e( 'It seems we can not find what you are looking for. Perhaps searching can help.', 'powerclub-lite' ); ?></p>
<?php get_search_form(); ?>

<?php endif; ?>