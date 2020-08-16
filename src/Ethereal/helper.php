<?php

//* Ethereal Framework Default Helper Functions File

if (! function_exists('env')) {
  function env($name, $default = null)
  {
    return $_ENV[$name] ?? getenv($name) ?: $default;
  }
}

if (! function_exists('app')) {
  function app()
  {
    return \Ethereal\Foundation\Application::getInstance();
  }
}