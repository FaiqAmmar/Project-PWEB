<?php

//Getting Started
Router::url('/', 'get', function () {
  header('Location: homepage');
});
Router::url('homepage','get', 'C_Public::ToLanding');
Router::url('login','get', 'C_Public::ToLogin');
Router::url('login','post', 'C_Public::Login');
Router::url('register','get', 'C_Public::ToRegister');
Router::url('register-user','post', 'C_Public::RegisterUser');
Router::url('register-mitra','post', 'C_Public::RegisterMitra');
Router::url('logout','get', 'C_Public::logout');

//Dashboard Page
Router::url('dashboard','get', 'C_Dashboard::ToDashboard');

//Loker Page
Router::url('loker','get', 'C_Loker::ToLoker');
Router::url('add-loker','get', 'C_Loker::ToAddLoker');
Router::url('add-loker','post', 'C_Loker::AddLoker');
Router::url('edit-loker','get', 'C_Loker::ToEditLoker');
Router::url('update-loker', 'post', 'C_Loker::updateLoker');
Router::url('delete-loker', 'get', 'C_Loker::deleteLoker');
Router::url('detail-loker','get', 'C_Loker::DetailLoker');
Router::url('apply-loker', 'post', 'C_Loker::ApplyLoker');

//ELearning Page
Router::url('elearning','get', 'C_Elearning::ToELearning');
Router::url('add-elearning','get', 'C_Elearning::ToAddELearning');
Router::url('add-elearning','post', 'C_Elearning::AddELearning');
Router::url('edit-elearning','get', 'C_Elearning::ToEditELearning');
Router::url('update-elearning', 'post', 'C_Elearning::updateELearning');
Router::url('delete-elearning', 'get', 'C_Elearning::deleteELearning');
Router::url('detail-elearning','get', 'C_Elearning::DetailELearning');