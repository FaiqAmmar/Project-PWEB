<?php

// Getting Started
Router::url('/', 'get', function () {
  view('V_Homepage');
});