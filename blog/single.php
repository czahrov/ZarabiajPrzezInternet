<?php
	/*
	Template Name: Single
	*/
	get_header();
	the_post();
	$img = wp_get_attachment_image_url( get_post_thumbnail_id( the_ID() ), 'full' );
?>
	<body class='regular'>
		<div id='single'>
			<header class="header-blog bgimg cover" style="background-image: url(<?php echo $img; ?>);">
				<?php get_template_part("template/menu"); ?>
			</header>


	<div class="container container-blog">


		<div class="row">
			<div class="col-md-12">

				<div class="post-promo-single text-center promo-post">
					
					  <div>
						<h2 class='bold'>
							<?php the_title(); ?>
						</h2>
						<p class="big-post-title">Zarabianie przez internet</p>
					  </div>
				  
				</div>
			</div>
		</div>
	</div>






			
	 <div class="container container-blog">

		<div class="row">
		 
			<div class="col-md-8">

				<div class="single-intro-bar">
				   <div class="comment-box">
					<div class='bold'>Komentarze</div>
					<div class="comment-counter">5</div>
				   </div>
				   <div class="share-box bold">


				   <div>Udostępnij</div>
				   <a href="#">
					<div class="circle-div"> 
					  <i class="fa fa-facebook social-inner-icon"></i>
					</div>
				   </a>
				   <a href="#">
				  <div class="circle-div"> 
					  <i class="fa fa-twitter social-inner-icon"></i>
				   </div>
				   </a>
				   <a href="#">
					 <div class="circle-div"> 
					  <i class="fa fa-google-plus social-inner-icon"></i>
				   </div>
				   </a>
				   </div>
				</div>


			</div>
			<div class="clearfix"></div>

		</div>
	  <div class="row">


			<!--SINGLE CONTENT -->

		 <div class="col-md-8">
		 
		 <div class="single-blog-post-content">
			 <?php the_content(); ?>
		 </div>
			<div class="single-post-infos">

				<div class="single-date">31 stycznia 2017</div>
				<div class="author">Dodane przez: <a href="#" class="author_name">Adam</a></div>

			 
			</div>  

				<!-- COMENTS COMENTS COMENTS  -->
	 

		   <div class="comments-container">
			
			   <div class="single-comment" id="user_1">
				  <img class="img-circle img-center img-responsive user_avatar" src="http://placehold.it/87x87" alt="">
				  <div class="single-comment-area">
					  <div class="single-comment-info">
						  <div class="user_name">Mariusz Nowak</div>
						  <div class="comment-date">Styczeń 17,2017, o 14:39</div>
						  <div class="comment-text">lectus sed augue rutrum vehicula a sed ante. Nunc et mauris ullamcorper, venenatis lorem sit amet, dignissim mauris. </div>


						</div>
						 <button class="btn respond-button">odpowiedz</button>

				  </div>


			   </div>

			   <!-- SECOND COMMENT-->
			   <div class="single-comment">
				  <img class="img-circle img-center img-responsive user_avatar" src="http://placehold.it/87x87" alt="">
				  <div class="single-comment-area">
					  <div class="single-comment-info">
						  <div class="user_name">Maria Nowak</div>
						  <div class="comment-date">Styczeń 21,2017, o 21:31</div>
						  <div class="comment-text">lectus sed augue rutrum vehicula a sed ante. Nunc et mauris ullamcorper, venenatis lorem sit amet, dignissim mauris. </div>
					  </div>
					  <button class="btn respond-button">odpowiedz</button>

				  </div>


			   </div>

			   <!-- RESPOND COMENT -->

			   <div class="single-comment respond-comment">
				  <img class="img-circle img-center img-responsive user_avatar" src="http://placehold.it/87x87" alt="">
				  <div class="single-comment-area">
					  <div class="single-comment-info">
						  <div class="user_name">Beata Nowak</div>
						  <div class="comment-date">Styczeń 22,2017, o 10:00</div>
						  <div class="comment-text">Dziękuję za odpowiedź!</div>
					  </div>
					  <button class="btn respond-button">odpowiedz</button>

				  </div>
					

			   </div>
			   <!-- THIRD COMMENT -->
			  
				<div class="single-comment">
				  <img class="img-circle img-center img-responsive user_avatar" src="http://placehold.it/87x87" alt="">
				  <div class="single-comment-area">
					  <div class="single-comment-info">
						  <div class="user_name">Maria Nowak</div>
						  <div class="comment-date">Luty 12,2017, o 15:03</div>
						  <div class="comment-text">lectus sed augue rutrum vehicula a sed ante. Nunc et mauris ullamcorper, venenatis lorem sit amet, dignissim mauris. </div>
					  </div>
					  <button class="btn respond-button">odpowiedz</button>

				  </div>
			   </div>

			   <!-- END OF COMENTS -->
		</div>


		<!-- COMENTS FORM -->

		<div class="comments-form-container">
			<div class="comment-form-title bold">Napisz komentarz</div>
			<form class="comments-form">
			<div class="form-row">

			<input class="name-input" id="full-name" name="full-name" type="text" placeholder="Podpis:"/>

			<input id="email"
			   name="email"
			   type="email"
			   placeholder="Adres e-mail:"/>

			</div>

			<div class="form-row">
			 <textarea id="comment-textarea" name="comment-textarea" placeholder="Twój komentarz:" ></textarea>
			</div>

		</form>
			<div class="form-com-button-holder">
			  <button class="btn form-com-button">napisz komentarz</button>
			  <div class="clearfix"></div>
			</div>
		</div>

					<!--END OF COL-MD-8 RIGHT SECTION -->
		 </div>
			  



				<!-- Blog Sidebar Widgets Column -->
				<div class="col-md-4 blog-side-bar">

					<!-- ABOUT ME -->
					<div class="well blog-sidebar-element">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\aboutme.jpg" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Mam 25 lat. Od 5 lat pracuje w dom przez internet i jestem związany z marketingiem internetowym. Założyłem ten blog aby podzielić się skutecznymi i prostymi sposobami na zarabianie przez internet.</div>
						</div>
						</div>
					  
						<!-- /.input-group -->
					</div>

					   <!-- LATEST POSTS -->
					  <button class="btn blog-sidebar-button bold">ostatnie posty</button>

					 <div class="well blog-sidebar-element border-top0">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\news_1.png" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Praca w domu - 11 sprawdzonych sposobów dla każdego</div>
						</div>
						</div>
					  
					</div>

					 <div class="well blog-sidebar-element border-top0">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\news_1.png" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Praca w domu - 11 sprawdzonych sposobów dla każdego</div>
						</div>
						</div>
					  
					</div>

					 <div class="well blog-sidebar-element border-top0">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\news_1.png" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Praca w domu - 11 sprawdzonych sposobów dla każdego</div>
						</div>
						</div>
					  
					</div>
					<div class="white-space"></div>

					<!--METODY ZAROBKOWANIA -->
						<button class="btn blog-sidebar-button bold">Metody zarobkowania</button>
					   <div class="well blog-sidebar-element border-top0 zero-padding" style="padding: 0;">
						<div class="row">
						<div class="col-xs-12 blog-sidebar-list">
						 <ul>
							 <li><a href="#">Opcje binarne</a></li>
							 <li><a href="#">System gry w ruletkę</a></li>
							 <li><a href="#">Twoje opinie</a></li>
							 <li><a href="#">Testowanie produktów</a></li>
							 <li><a href="#">Marketing Afiliacyjny</a></li>
							 <li><a href="#">Youtube</a></li>
							 <li><a href="#">Facebook</a></li>
							 <li><a href="#">Tłumaczenia</a></li>
							 <li><a href="#">Fiver</a></li>
							 <li><a href="#">Instagram</a></li>
							 <li><a href="#">YouNow</a></li>
							 <li><a href="#">Wirtualny pomocnik</a></li>
							 <li><a href="#">Blogowanie</a></li>
							 <li><a href="#">Twoja własna aplikacja</a></li>
							 <li><a href="#">Praca jako Freelancer</a></li>
						 </ul>

						</div>
					  
						</div>
						</div>

						<div class="white-space"></div>

						<!-- PROGRAMY W KTORYCH ZARABIAM -->

							   <button class="btn blog-sidebar-button bold">Programy w których zarabiam</button>

					 <div class="well blog-sidebar-element border-top0">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\news_1.png" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Lorem Ipsum 1</div>
						</div>
						</div>
					  
					</div>

					 <div class="well blog-sidebar-element border-top0">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\news_1.png" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Lorem Ipsum 2</div>
						</div>
						</div>
					  
					</div>

					 <div class="well blog-sidebar-element border-top0">
						<div class="row">
						<div class="col-xs-4">
							<img class="img-responsive blog-sidebar-image" src="<?php echo get_template_directory_uri(); ?>\images\news_1.png" alt="">
						</div>
						<div class="col-xs-8">
							<div class="blog-sidebar-text">Lorem Ipsum 3</div>
						</div>
						</div>
					  
					</div>

					 <div class="white-space"></div>
				
							<!-- /.col-lg-6 -->
						</div>
						<!-- /.row -->
					</div>

					<!-- Side Widget Well -->
				  
				</div>

			</div>
			<!-- /.row -->



			<!-- FOOTER -->

	<?php get_footer(); ?>