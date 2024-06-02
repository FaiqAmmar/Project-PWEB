<?php


Router::url("/","get", function () {
  return view("public/V_Homepage");
});
// // Getting Started
// Router::url('/', 'get', function () {
//   header('Location: Dashboard');
// });

// //Dashboard Page
// Router::url('Dashboard','get', 'C_Dashboard::index');