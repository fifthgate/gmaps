<?php

namespace Fifthgate\GMaps;

use Illuminate\Support\ServiceProvider;

class GMapsServiceProvider extends ServiceProvider {
	/**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
    }

     /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
    }
}