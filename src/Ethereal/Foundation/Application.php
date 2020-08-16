<?php

namespace Ethereal\Foundation;

class Application
{
  private static $_instance;
  
  protected $basePath;
  
  protected $appPath;
  
  protected $configPath;
  
  protected $databasePath;
  
  protected $environmentPath;
  
  protected $publicPath;
  
  protected $resourcesPath;
  
  protected $routesPath;
  
  protected $storagePath;
  
  public function __construct(string $basePath)
  {
    $this->basePath = realpath($basePath) ?: $basePath;
    
  }
}