<nav class="navbar navbar-fixed-top navbar-custom">
	<div class="container-fluid">
		<div id="logo"></div>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar icon-color"></span>
				<span class="icon-bar icon-color"></span>
				<span class="icon-bar icon-color"></span> 
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
			<?php
				$post = get_post();
				$slug = $post->post_name;
				$cat_blog = get_category_by_slug('blog');
				$cats = wp_get_post_categories( $post->ID );
				echo "<!--";
				echo "-->";
			?>
				<li class="<?php if( $slug === 'strona-glowna' ) echo "active"; ?>">
					<a href="<?php echo home_url(); ?>">Strona Główna</a>
				</li>
				<li class="<?php if( $slug === 'metody-zarabiania' ) echo "active"; ?>">
					<a href="<?php echo home_url('metody-zarabiania'); ?>">Metody Zarabiania</a>
				</li>
				<li class="<?php if( $slug === 'gdzie-zarabiam' ) echo "active"; ?>">
					<a href="<?php echo home_url('gdzie-zarabiam'); ?>">Gdzie Zarabiam</a>
				</li>
				<li class="<?php if( $slug === 'blog' || in_array( $cat_blog->cat_ID, $cats ) ) echo "active"; ?>">
					<a href="<?php echo home_url('blog'); ?>">Blog</a>
				</li>
				<li class="<?php if( $slug === 'jooble' ) echo "active"; ?>">
					<a href="<?php echo home_url('jooble'); ?>">Jooble</a>
				</li>
				<li class="<?php if( $slug === 'kontakt' ) echo "active"; ?>">
					<a href="<?php echo home_url('kontakt'); ?>">Kontakt</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
</nav>