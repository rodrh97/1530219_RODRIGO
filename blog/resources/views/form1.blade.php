<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - Forms Validation</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
    <div class="page">
    <div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h1 class="page-header-title">FORM 1</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
    <a href="home"><button class="btn btn-success">Volver al inicio</button></a>
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Completa el siguiente formulario para registrar un cliente</h4>
            </div>
            <div class="widget-body">
                <br>
                <form class="form-horizontal" method="post">
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Nombre(s):</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Ingresar nombre" class="form-control" name="nombre" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Apellido Paterno:</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Ingresar apellido paterno" class="form-control" name="paterno" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Apellido Materno:</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Ingresar apellido materno" class="form-control" name="materno" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">E-mail:</label>
                        <div class="col-lg-9">
                            <input type="email" placeholder="Ingresar e-mail" class="form-control" name="email" required>
                        </div>
                    </div><br>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Nickname:</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Ingresar nickname" class="form-control" name="usuario" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Contraseña:</label>
                        <div class="col-lg-9">
                            <input type="password" placeholder="Ingresar contraseña" class="form-control" name="contraseña" required>
                        </div>
                    </div><br>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary col-lg-9" value="Guardar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
</div>



    </div>
    
    
    
    
    <!-- Begin Vendor Js -->
            <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/components/validation/validation.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>