<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user_frontend.index');
});

Route::get('/nous-contacter', function () {
    return view('user_frontend.contact');
});

Route::get('/abonnement', function () {
    return view('user_frontend.subscribe');
});

Route::get('/a-propos', function () {
    return view('user_frontend.about');
});

Route::get('/demande-collecte', function () {
    return view('user_frontend.collecte');
});

Route::get('/signalement-probleme', function () {
    return view('user_frontend.probleme');
});

Route::get('/calendrier-de-collecte', function () {
    return view('user_frontend.collection-calendar');
});

Route::get('/suivi-des-demandes', function () {
    return view('user_frontend.tracking-subscription');
});

Route::get('/presentation-generale', function () {
    return view('user_frontend.presentation');
});

Route::get('/nos-services', function () {
    return view('user_frontend.services');
});

Route::get('/notre-equipe', function () {
    return view('user_frontend.page-team');
});

Route::get('/blog', function () {
    return view('user_frontend.blog');
});

Route::get('/videos', function () {
    return view('user_frontend.videos');
});

Route::get('/details', function () {
    return view('user_frontend.blog-details');
});