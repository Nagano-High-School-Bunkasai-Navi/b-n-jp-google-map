<?php
/**
 * Plugin Name: 長野県高等学校文化祭Navi Google Map 管理
 * Plugin URI: https://github.com/smasato/b-n-jp-google-map
 * Description: 長野県高等学校文化祭Naviの Google Map 管理を行います
 * Version: 0.1
 * Author: Masato Sugiyama
 * Author URI: https://github.com/smasato
 * License: GPL2
 */

/**
 * GoogleMap埋め込みURLを取得する
 *
 * @since 0.1
 * @param string $school_name 高校名.
 *
 * @return string GoogleMap埋め込みURL
 */
function bunj_get_gmap_url( $school_name ) {

	$base           = 'https://www.google.com/maps/embed/v1/place?';
	$google_api_key = 'AIzaSyBfgN4KnKmCL5-Wv3hS-LbQPtsxi_xXdRE';

	$url = $base . 'key=' . $google_api_key . '&q=' . rawurlencode( $school_name );
	return  $url;
}

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

