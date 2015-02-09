<?php get_header()?>
	<body <?php body_class('lemming'); ?>>
	<div class="container">
		<div class="col-md-3 sidebar">
			<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory')?>/images/lemming.jpg" class="logo"></a>
			<a href="<?php bloginfo('url');?>"><h2>Bulletproof Lemming Solutions</h2></a>
			<?php
				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults );
				?>
		</div>
		<div class="col-md-9 main-content">
			<div class="row title-row">
			  <div class="col-md-12">
				<h2 class="interior-page-title">
					<?php
						single_post_title();
					?>
				</h2>
			 </div>
			</div>
			<div class="row content-row">
				<div class="col-md-12">
					<?php
						while ( have_posts() ) : the_post();
							echo('<article class="post">');
							the_title('<span class="post-title">','</span>');
							the_content('<div class="post-body">','</div>');
							echo('</article>');
						endwhile;
					?>
				</div>
			</div>
			<div class="row footer-row">
				<footer class="col-md-12">Footer Filler</footer>
			</div>
		</div>
	</div>
<?php get_footer()?>