<?php

namespace ColdTrick\AnyHome;

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap {

	/**
	 * {@inheritDoc}
	 */
	function boot() {
		if (current_page_url() !== elgg_get_site_url()) {
			return;
		}
		
		$name = elgg_is_logged_in() ? 'redirect_logged_in': 'redirect_logged_out';
		$setting = elgg_get_plugin_setting($name, 'any_home');
		if (empty($setting)) {
			return;
		}
		
		$response = elgg_redirect_response(elgg_normalize_url($setting));
		_elgg_services()->responseFactory->respond($response);
	}
}
