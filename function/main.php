<?php

function view($page, $data = [])
{
    extract($data);
    include 'resources/views/' . $page . '.php';
}

class Router
{
  public static $urls = [];

  function __construct()
  {
    $url = implode(
      "/",
      array_filter(
        explode(
          "/",
          str_replace(
            $_ENV['BASEDIR'],
            "",
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
          )
        ),
        'strlen'
      )
    );

    if (!in_array($url, self::$urls['routes'])) {
        header('Location: ' . BASEURL);
    }

    $call = self::$urls[$_SERVER['REQUEST_METHOD']][$url];
    $call();
  }
  public static function url($url, $method, $callback)
  {
    if ($url == '/') {
      $url = '';
    }
    self::$urls[strtoupper($method)][$url] = $callback;
    self::$urls['routes'][] = $url;
    self::$urls['routes'] = array_unique(self::$urls['routes']);
  }
}

function urlpath($path)
{
  require_once 'config/static.php';
  return BASEURL . $path;
}

function setFlashMessage( $type, $message )
{
  if ( !isset( $_SESSION[ 'user' ] ) ) {
      $_SESSION[ 'guest_' . $type ] = $message;
  } else {
      $_SESSION[ $type . '_' . $_SESSION[ 'user' ][ 'id' ] ] = $message;
  }
}

function displayFlashMessages( $type )
{
  if (!isset($_SESSION['user'])) {
    $messageKey = 'guest_' . $type;
    if (isset($_SESSION[$messageKey])) {
        echo '<div class="alert alert-' . $type . ' fixed inset-x-0 top-0 flex items-center justify-center pt-10 z-50 transition-opacity duration-200">';
        echo '<div class="px-4 py-3 rounded shadow-md bg-' . ($type === 'success' ? 'green-100' : 'red-100') . ' border border-' . ($type === 'success' ? 'green-200' : 'red-200') . '">';
        echo '<div class="flex items-center">';
        echo '<div class="flex-1">';
        echo $_SESSION[$messageKey];
        echo '</div>';
        echo '<button type="button" class="ml-4 text-' . ($type === 'success' ? 'green-700' : 'red-700') . ' hover:text-' . ($type === 'success' ? 'green-900' : 'red-900') . '" data-dismiss-target="alert" aria-label="Close">';
        echo '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>';
        echo '</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        unset($_SESSION[$messageKey]);
    }
  } else {
    $messageKey = $type . '_' . $_SESSION['user']['id'];
    if (isset($_SESSION[$messageKey])) {
        echo '<div class="alert alert-' . $type . ' fixed inset-x-0 top-0 flex items-center justify-center pt-10 z-50 transition-opacity duration-200">';
        echo '<div class="px-4 py-3 rounded shadow-md bg-' . ($type === 'success' ? 'green-100' : 'red-100') . ' border border-' . ($type === 'success' ? 'green-200' : 'red-200') . '">';
        echo '<div class="flex items-center">';
        echo '<div class="flex-1">';
        echo $_SESSION[$messageKey];
        echo '</div>';
        echo '<button type="button" class="ml-4 text-' . ($type === 'success' ? 'green-700' : 'red-700') . ' hover:text-' . ($type === 'success' ? 'green-900' : 'red-900') . '" data-dismiss-target="alert" aria-label="Close">';
        echo '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>';
        echo '</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        unset($_SESSION[$messageKey]);
    }
  }
}