<?php

/**
 * ownCloud - Template Editor
 *
 * @author Jörn Dreyer
 * @copyright 2014 Jörn Dreyer <jfd@owncloud.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

$app = new \OCA\TemplateEditor\App\TemplateEditor();

$app->registerRoutes($this, array('routes' => array(

	// mailTemplate settings
	array('name' => 'admin_settings#render', 'url' => '/settings/mailtemplate', 'verb' => 'GET'),

	array('name' => 'admin_settings#update', 'url' => '/settings/mailtemplate', 'verb' => 'POST'),

	array('name' => 'admin_settings#reset', 'url' => '/settings/mailtemplate', 'verb' => 'DELETE')

)));
