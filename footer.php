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
            <span>&copy; 2013-<?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="Awezome">Awezome</a></span> |
            <span>Theme by <a target="_blank" href="http://www.andersnoren.se">AndersNoren</a></span> |
            <span>Powered by <a target="_blank" href="http://wordpress.org">Wordpress</a></span>
            &nbsp;<script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb37656ab0ce23707530ac5fd19db48c9' type='text/javascript'%3E%3C/script%3E"));
            </script>
        </p>
        <p class="credits-right"><a title="To the top" class="tothetop">Up &uarr;</a></p>
        <div class="clear"></div>
    </div>
    <div class="credits-inner">
        <p class="credits-left">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a>
            Awezome.Net is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
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
