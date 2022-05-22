<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title>
        <?php if (isset($title)) : ?>
            GRAFIKA | <?= $title; ?>
        <?php else : ?>
            GRAFIKA
        <?php endif; ?>
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a2309adc07.js" crossorigin="anonymous"></script>

    <?php

    if (isset($css_add) && is_array($css_add)) {
        foreach ($css_add as $js) {
            echo $js;
        }
    } else {
        echo (isset($css_add) && ($css_add != "") ? $css_add : "");
    }

    ?>
</head>

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                    <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                        <div class="symbol symbol-50px">
                            <img src="<?= base_url(); ?>assets/media/avatars/150-26.jpg" alt="" />
                        </div>
                        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                            <div class="d-flex">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-white text-hover-primary fs-6 fw-bold">Paul Melone</a>
                                    <span class="text-gray-600 fw-bold d-block fs-8 mb-1">Python Dev</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>