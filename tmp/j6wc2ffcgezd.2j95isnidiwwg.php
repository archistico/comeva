<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comoodo - Login</title>
</head>
<body>
    <img src="<?= ($BASE) ?>/ui/img/logo.jpg" alt="Logo Comoodo" />
    <form action="<?= ($BASE) ?><?= (Base::instance()->alias('login_autenticazione_verificapin')) ?>" method="POST">
        <input type="password" name="password" id="password" placeholder="Inserisci password" onkeydown="if (event.keyCode == 13) { formhash(this.form, this.form.password); this.form.submit(); return false;}">
        <input type="submit" value="ENTRA" onclick="formhash(this.form, this.form.password);">
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