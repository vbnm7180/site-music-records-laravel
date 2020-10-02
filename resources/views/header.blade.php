<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    <title>Music</title>
    
    @if(request()->route()->getName()=='main')
    <link rel="stylesheet" href="/css/app.css">
    @endif
    @if(request()->route()->getName()=='login')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">
    @endif
    @if(request()->route()->getName()=='register')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/register.css">
    @endif

</head>

<body>

<div class="body__wrapper">

    <header class="header">
    
        <div class="header__container">
            <a href="/" class="header__logo-link"><img src="/images/logo.svg" alt="" class="header__logo"></a>
            <a href="/login" class="header__login-btn">Вход</a>
            <a href="/register" class="header__register-btn">Регистрация</a>
        </div>
    </header>