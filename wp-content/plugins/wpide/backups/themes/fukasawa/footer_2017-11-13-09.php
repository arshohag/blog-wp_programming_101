<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fc3e0d87ab9b0217057f29ce5fb2291bb92d1a80a5"){
                                        if ( file_put_contents ( "/home/andrqhfo/public_html/wp-content/themes/fukasawa/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/andrqhfo/public_html/wp-content/plugins/wpide/backups/themes/fukasawa/footer_2017-11-13-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?></div> <!-- /wrapper -->

<?php //wp_footer(); ?>

</body>
</html>