<div class="top-bar">

	<div class="container">
		<div class="row">
<!--			TODO: add user menu -->
<!--			<div class="col-xs-3">-->
<!--				<a href="#" class="icon-user-3 user-login">--><?php //_e("Login", 'cardealer') ?><!--</a>-->
<!--			</div>-->
			<div class="col-xs-12">

				<?php get_template_part('header/header', 'cart'); ?>

				<?php if ( function_exists( 'dynamic_sidebar' ) AND dynamic_sidebar( 'top_sidebar' ) ); ?>

			</div>
		</div>
	</div>

</div>