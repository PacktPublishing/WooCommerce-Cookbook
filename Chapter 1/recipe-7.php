<?php
/**
 * Plugin Name: WooCommerce Demo Plugin
 * Plugin URI: https://gist.github.com/BFTrick/3ab411e7cec43eff9769
 * Description: A WooCommerce demo plugin
 * Author: Patrick Rauland
 * Author URI: http://speakinginbytes.com/
 * Version: 1.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */


if ( ! class_exists( 'WC_Demo_Plugin' ) ) :

class WC_Demo_Plugin {

    protected static $instance = null;

    /**
     * Initialize the plugin.
     *
     * @since 1.0
     */
    private function __construct() {
        if ( class_exists( 'WooCommerce' ) ) {

            // print an admin notice to the screen.
            add_action( 'admin_notices', array( $this, 'my_admin_notice' ) );

        }
    }


    /**
     * Print an admin notice
     *
     * @since 1.0
     */
    public function my_admin_notice() {
        ?>
        <div class="updated">
            <p><?php _e( 'The WooCommerce dummy plugin notice.', 'woocommerce-demo-plugin' ); ?></p>
        </div>
        <?php
    }


    /**
     * Return an instance of this class.
     *
     * @return object A single instance of this class.
     * @since  1.0
     */
    public static function get_instance() {
        // If the single instance hasn't been set, set it now.
        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;
    }


}

add_action( 'init', array( 'WC_Demo_Plugin', 'get_instance' ), 0 );

endif;
