<?php namespace BelicSlavko\BootstrapRender;

use Illuminate\Support\ServiceProvider;

class BootstrapRenderServicesProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/Views', 'BootstrapRender');
		include __DIR__.'/routes.php';
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
