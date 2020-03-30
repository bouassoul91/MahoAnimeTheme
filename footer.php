<div class="footer">
		<div class="MASs">
			<div class="alignright">
				جميع الحقوق محفوظة &copy; <a href="index.html" title="انمي اون لاين اني انمي">انمي اون لاين اني انمي</a>
			</div>
			<div class="alignleft">
				تصميم و برمجة <a href="http://www.engsupport.net/" rel="index">مهندس الدعم | Engsupport.net</a>
			</div>
		</div>
	</div>
	<script>
		jQuery(document).ready(function () { jQuery(".thewidgets").hover(function () { jQuery(this).stop().animate({ right: "0" }, "medium"); }, function () { jQuery(this).stop().animate({ right: "-250" }, "medium"); }, 500); });
	</script>

	<style>
		.thewidgets {
			background: url("<?php bloginfo('template_directory'); ?>/assets/img/facebook_widget.png") no-repeat scroll left center transparent !important;
			float: right;
			height: 550px;
			padding: 0 5px 0 46px;
			width: 245px;
			z-index: 99999;
			position: fixed;
			right: -250px;
			top: 15%;
		}

		.thewidgets div {
			padding: 0;
			margin-right: -8px;
			border: 4px solid #3b5998;
			background: #fafafa;
		}

		.thewidgets span {
			bottom: 4px;
			font: 8px "lucida grande", tahoma, verdana, arial, sans-serif;
			position: absolute;
			right: 6px;
			text-align: right;
			z-index: 99999;
		}

		.thewidgets span a {
			color: gray;
			text-decoration: none;
		}

		.thewidgets span a:hover {
			text-decoration: underline;
		}
	</style>
	<div class="thewidgets">
		<div>
			<iframe
				src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2Fanyanimeonline&amp;width=245&amp;colorscheme=light&amp;show_posts=true&amp;show_faces=true&amp;border_color=white&amp;connections=9&amp;stream=false&amp;header=false&amp;height=550"
				frameborder="0" scrolling="no"
				style="border: white; overflow: hidden; height: 550px; width: 245px;background:#fafafa;color:000;">
			</iframe>
		</div>
	</div>
	<script>var countVars = { "disqusShortname": "anyanime" };</script>
	<script>	
		var embedVars = {
			"disqusConfig": { "integration": "wordpress 3.0.17" },
			"disqusIdentifier": "179 http:\/\/anyanime.com\/?page_id=179",
			"disqusShortname": "anyanime",
			"disqusTitle": "\u0627\u0644\u0631\u0626\u064a\u0633\u064a\u0629",
			"disqusUrl": "https:\/\/ww8.anyanime.com\/",
			"postId": "179"
		};
	</script>
	<?php wp_footer(); ?>
</body>

</html>