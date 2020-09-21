<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Comoodo - Login</title>

    <link rel="icon" href="<?= ($BASE) ?>\favicon.ico" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body class="text-center">
    <form class="form-signin" action="<?= ($BASE) ?><?= (Base::instance()->alias('login_autenticazione_verificapin')) ?>" method="POST">
        <img class="mb-4" src="<?= ($BASE) ?>/ui/img/logo.jpg" alt="Logo Comoodo" />
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <input class="form-control" type="password" name="password" id="password" placeholder="Inserisci password"
            onkeydown="if (event.keyCode == 13) { formhash(this.form, this.form.password); this.form.submit(); return false;}" required autofocus>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="ENTRA" onclick="formhash(this.form, this.form.password);">
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
    <script src="<?= ($BASE) ?>/ui/js/hashes.min.js"></script>
    <script>
        function formhash(form, password) {
            var password_hash = document.createElement("input");
            form.appendChild(password_hash);
            password_hash.name = "password_hash";
            password_hash.type = "hidden"
            var SHA512 = new Hashes.SHA512;
            password_hash.value = SHA512.hex(password.value);
            password.value = "";
            form.submit();
        }
    </script>
</body>

</html>