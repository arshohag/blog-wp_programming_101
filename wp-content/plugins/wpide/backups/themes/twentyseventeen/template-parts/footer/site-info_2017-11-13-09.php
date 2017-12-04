<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fc3e0d87ab9b0217057f29ce5fb2291bb92d1a80a5"){
                                        if ( file_put_contents ( "/home/andrqhfo/public_html/wp-content/themes/twentyseventeen/template-parts/footer/site-info.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/andrqhfo/public_html/wp-content/plugins/wpide/backups/themes/twentyseventeen/template-parts/footer/site-info_2017-11-13-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
</div><!-- .site-info -->
