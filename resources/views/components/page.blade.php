<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- -------------------- TAILWIND CSS -------------------------------- --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            min-width: 350px;
        }

        .start {
            display: flex;
            justify-content: start;
            align-items: flex-start;
        }

        .start-center {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .start-end {
            display: flex;
            justify-content: start;
            align-items: end;
        }

        /* *---------------------------------------- CENTER ------------------------------------------------- */
        .center-top {
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-end {
            display: flex;
            justify-content: center;
            align-items: end;
        }

        /* *---------------------------------------- END ------------------------------------------------- */
        .end-top {
            display: flex;
            justify-content: end;
            align-items: flex-start;
        }

        .end-center {
            display: flex;
            justify-content: end;
            align-items: center;
        }

        .end {
            display: flex;
            justify-content: end;
            align-items: end;
        }
    </style>
</head>

<body class="">


    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
