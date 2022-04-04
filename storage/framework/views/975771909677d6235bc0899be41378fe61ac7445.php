<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Software de Servicios</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,100;0,300;1,200;1,900&display=swap" rel="stylesheet">
    <!-- HTML -->
    <!-- Styles -->
    <script src=" asset('js/app.js') " defer></script>


    <link href=" asset('css/app.css') " rel="stylesheet">
</head>

<body class="container">
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 container-fluid">

        <div class="container-fluid">
            <div class="row text-center">
                <div class="col max-auto">
                    <h1>Software de Servicios</h1>
                    <h2>Mi Informe Close Up</h2>

                </div>
            </div>
        </div>

        <h1><i class="fa-solid fa-link mt-2"></i>Domains</h1>

        <div class="container-fluid">
            <div class="row">
         
               

            </div>
        </div>


    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\miinformecloseupapp\resources\views/welcome.blade.php ENDPATH**/ ?>