<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comoodo - Login</title>
</head>
<body>
    <img src="ui/img/logo.jpg" alt="Logo Comoodo" />
    <form action="<?= (Base::instance()->alias('login_autenticazione_verificapin')) ?>" method="POST">
        <input type="password" name="password" id="password" placeholder="Inserisci password">
        <input type="submit" value="ENTRA">
    </form>
</body>
</html>