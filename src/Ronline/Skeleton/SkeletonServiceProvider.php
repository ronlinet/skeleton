<?php namespace Ronline\Hello;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['Skeleton'] = $this->app->share(function($app){
			return new Skeleton;
		});

		$this->app->booting(function(){
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Skeleton', 'Ronline\Skeleton\Facades\Skeleton');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
