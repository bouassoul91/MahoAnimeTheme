<?php get_header(); ?>


<div class="content">
	<div class="eng-warp">
		<div class="posts-block">
			<div class="top-con">
				<h2>مضاف حديثا</h2>
				<div class="search">
					<form method="GET" action="https://ww8.anyanime.com/">
						<input type="text" name="s" placeholder="ابحث هنا"></i>
						<button type="submit">
							<i class="fa fa-search"> </i>
						</button>
					</form>
				</div>
			</div>

			<?php get_template_part( 'include/section', 'archive' ); ?>

		</div>
	</div>
</div>
﻿ <div class="news_os"
	style="direction: ltr; text-align: left; margin: 5px 10px;background: rgba(19, 144, 17, 0.38);">
	Copyrights and Trademarks for Anime, and other promotional materials are held by their respective owners and
	their use is allowed under the fair use clause of the Copyright Law. This site does not store any files on its
	server. All contents are provided by non-affiliated third parties.
</div>

<!-- ?php get_sidebar(); ? -->
<?php get_footer(); ?>