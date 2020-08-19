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
    self::$_instance = $this;
    $this->basePath = realpath($basePath) ?: $basePath;
	$this->appPath  = $this->basePath('app');
	$this->configPath = $this->basePath('config');
	$this->databasePath = $this->basePath('database');
	$this->environmentPath = $this->basePath();
	$this->publicPath = $this->basePath('public');
	$this->resourcesPath = $this->basePath('resources');
	$this->routesPath = $this->basePath('routes');
	$this->storagePath = $this->basePath('storage');
  }

  public function joinPath(string $basePath, string ...$path)
  {
    $path = implode(DIRECTORY_SEPARATOR, $path);

    return $basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
  }

  public function basePath(string $path = '')
  {
    return $this->joinPath($this->basePath, $path);
  }
  
  public function appPath(string $path = '')
  {
    return $this->joinPath($this->appPath, $path);
  }
  
  public function configPath(string $path = '')
  {
    return $this->joinPath($this->configPath, $path);
  }

  public function databasePath(string $path = '')
  {
    return $this->joinPath($this->databasePath, $path);
  }

  public function environmentPath(string $path = '')
  {
    return $this->joinPath($this->environmentPath, $path);
  }

  public function publicPath(string $path = '')
  {
    return $this->joinPath($this->publicPath, $path);
  }

  public function resourcesPath(string $path = '')
  {
    return $this->joinPath($this->resourcesPath, $path);
  }

  public function routesPath(string $path = '')
  {
    return $this->joinPath($this->routesPath, $path);
  }

  public function storagePath(string $path = '')
  {
    return $this->joinPath($this->storagePath, $path);
  }

}
