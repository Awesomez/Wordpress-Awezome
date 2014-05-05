<div class="footer section large-padding bg-dark">
    <?php if (is_active_sidebar('footer-a')) : ?>
        <div class="column column-1 left">
            <div class="widgets">
                <?php dynamic_sidebar('footer-a'); ?>
            </div>
        </div>
    <?php else : ?>
        <div class="column column-1 left">
            <div class="widgets">
                <div id="search" class="widget widget_search">
                    <div class="widget-content">
                        <h3 class="widget-title"><?php _e('Search form', 'wilson'); ?></h3>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?> <!-- /footer-a -->

    <?php if (is_active_sidebar('footer-b')) : ?>
        <div class="column column-2 left">
            <div class="widgets">
                <?php dynamic_sidebar('footer-b'); ?>
            </div>
            <!-- /widgets -->
        </div>

    <?php else : ?>
        <div class="column column-2 left">
            <div class="widgets">
                <div class="widget widget_recent_entries">
                    <div class="widget-content">
                        <h3 class="widget-title"><?php _e('Latest posts', 'wilson'); ?></h3>
                        <ul>
                            <?php
                            $args = array('numberposts' => '5');
                            $recent_posts = wp_get_recent_posts($args);
                            foreach ($recent_posts as $recent) {
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="' . esc_attr($recent["post_title"]) . '" >' . $recent["post_title"] . '</a> </li> ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /widgets -->

        </div>
    <?php endif; ?> <!-- /footer-b -->
    <div class="clear"></div>
</div> <!-- /footer -->

<div class="credits">
    <div class="credits-inner">
        <p class="credits-left">
            &copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>"
                                              title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>&nbsp;<script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb37656ab0ce23707530ac5fd19db48c9' type='text/javascript'%3E%3C/script%3E"));
            </script>
        </p>
        <p class="credits-right">
            <span>Theme by <a href="http://www.andersnoren.se">Anders Noren</a></span> &mdash; <a title="To the top"
                                                                                                  class="tothetop">Up &uarr;</a>
        </p>
        <div class="clear"></div>
    </div>
    <!-- /credits-inner -->
</div> <!-- /credits -->
</div> <!-- /content -->
<div class="clear"></div>
</div> <!-- /wrapper -->
<?php wp_footer(); ?>
</body>
</html>
