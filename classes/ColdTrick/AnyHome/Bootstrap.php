<?php

namespace ColdTrick\AnyHome;

use Elgg\DefaultPluginBootstrap;

/**
 * Bootstraps the plugin
 */
class Bootstrap extends DefaultPluginBootstrap {

	/**
	 * {@inheritDoc}
	 */
	public function boot() {
		if (elgg_get_current_url() !== elgg_get_site_url()) {
			return;
		}
		
		$name = elgg_is_logged_in() ? 'redirect_logged_in' : 'redirect_logged_out';
		$setting = elgg_get_plugin_setting($name, 'any_home');
		if (empty($setting)) {
			return;
		}
		
		$url = elgg_normalize_site_url($setting);
		if (empty($url)) {
			return;
		}
		
		$response = elgg_redirect_response($url);
		_elgg_services()->responseFactory->respond($response);
		exit();
	}
}
