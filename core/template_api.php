<?php
# MantisBT - A PHP based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Template API
 *
 * @package CoreAPI
 * @subpackage UserAPI
 * @copyright Copyright 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright 2002  MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 *
 * @uses config_api.php
 */

require_once __DIR__ . '/../vendor/autoload.php';

require_api( 'access_api.php' );
require_api( 'authentication_api.php' );

function template_render( $p_template, $p_args ) {
	$loader = new Twig_Loader_Filesystem( __DIR__ . '/../templates/' );
	$twig = new Twig_Environment($loader, array(
		# 'cache' => '/path/to/compilation_cache',
	));

	$t_template = $p_template . '.twig';

	echo $twig->render( $t_template, $p_args );
}
