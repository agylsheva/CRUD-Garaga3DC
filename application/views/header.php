<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>" media="screen,projection"/>
        <title>Garaga 3DC</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <script type="text/javascript" src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>
        
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper red darken-4">
                    
                    <a href="<?= site_url(); ?>" class="brand-logo" style="font-family: Impact; margin-left: 10px">Garaga 3DC</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                        <button class ="btn black" style="margin-right: 10px; border-radius:8px";>
                        <a href="<?= base_url('Welcome/create'); ?>">Tambah</a></li>

                        <li>
                        <button onclick="ConfirmDelete()" class ="btn black" style="margin-right: 5px; border-radius:8px";>
                        <a href="<?= base_url('Welcome/deleteall'); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus Semua</a>
                        
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            
            <li class="divider"></li>
            <li><a href="<?= site_url('welcome/create'); ?>">Create</a></li>

            <li class="divider"></li>
            <li><a href="<?= site_url('welcome/deleteall'); ?>">DELETE ALL</a></li>
            
        </ul>

        

        <main class="container">