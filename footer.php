<div class="footer section large-padding bg-dark">
    <?php if (is_active_sidebar('footer-a')) { ?>
        <div class="column column-1">
            <div class="widgets">
                <?php dynamic_sidebar('footer-a'); ?>
            </div>
        </div>
    <?php }?>
    <?php if (is_active_sidebar('footer-b')) { ?>
        <div class="column column-2">
            <div class="widgets">
                <?php dynamic_sidebar('footer-b'); ?>
            </div>
            <!-- /widgets -->
        </div>
    <?php } ?>
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
