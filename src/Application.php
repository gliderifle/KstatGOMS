<?php

namespace KstatGOMS;

use KstatGOMS\Support\ServiceProvider;

class Application
{
  private $providers = [];

  public function __construct($providers = [])
  {
    $this->providers = $providers;
    //array_walk($this->providers, fn ($provider) => $provider->register());
    array_walk($this->providers, function($provider){
      return $provider::register();
    });
  }

  public function boot()
  {
    //array_walk($this->providers, fn($provider)=>$provider->boot());
    array_walk($this->providers, function($provider){
      return $provider::boot();
    });
  }
}
