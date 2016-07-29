    <div id="footer_wrap">    
        <footer class="clearfix">
            <div id="footer_left">
	           <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fedd.jedi&amp;send=false&amp;layout=standard&amp;width=370&amp;show_faces=false&amp;font=arial&amp;colorscheme=dark&amp;action=like&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:370px; height:20px; color: #fff; margin-top: 3px;" allowTransparency="true"></iframe>
            </div>
            <div id="footer_right">
                <ul>
                    <li><a class="bluepeak" href="http://www.bluepeak.co.uk" title="Website by Blue Peak | &copy; <?php echo date('Y'); ?> DJ Jedi" target="_blank">Blue Peak</a></li>
		    <li><a class="mixcloud" href="https://www.mixcloud.com/edd_jedi/" title="DJ Jedi MixCloud" target="_blank">MixCloud</a></li>
                    <li><a class="twitter" href="https://twitter.com/eddjedi" title="DJ Jedi Twitter" target="_blank">Twitter</a></li>
                    <li><a class="discogs" href="https://www.discogs.com/label/358112-Jedi-Recordings" title="Jedi Recordings Discogs" target="_blank">Discogs</a></li>
                    <li><a class="soundcloud" href="https://soundcloud.com/edd-jedi" title="DJ Jedi SoundCloud" target="_blank">SoundCloud</a></li>
                    <li><a class="facebook" href="https://www.facebook.com/edd.jedi/" title="DJ Jedi Facebook" target="_blank">Facebook</a></li>
                    <li><a class="bandcamp" href="https://djjedi.bandcamp.com/" title="DJ Jedi Bandcamp" target="_blank">Bandcamp</a></li>
                </ul>
            </div>
        </footer>
    </div>
<script>
    jQuery(document).ready(function($) {
        $(".menu_icon").click(function () {
            $("ul.menu").slideToggle("slow");
        });

    });
</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>