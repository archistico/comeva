<h1>Come stai?</h1>
<form id="form-dati">
    <div class="form-group">
        <label for="data">Data</label>
        <input class="form-control" type="date" id="data" required>
    </div>
    <div class="form-group">
        <label for="periodo">Periodo</label>
        <select class="form-control" name="" id="periodo" required>
            <option value="1" selected>Tutto il giorno</option>
            <option value="2">Mattina</option>
            <option value="3">Pomeriggio</option>
            <option value="4">Sera</option>
            <option value="5">Notte</option>
        </select>
    </div>
</form>

<input type="button" value="Indietro" onclick="indietro();">

<form action="<?= (Base::instance()->alias('comoodo_nuovo_datigenerali_registra')) ?>" method="POST">
    <input type="button" value="Avanti" onclick="avanti(this.form);">
</form>

<script>
    function indietro() {
        console.log("indietro");
    }

    function avanti(form) {
        console.log("avanti");

        let data = document.getElementById("data").value;
        let data_input = document.createElement("input");
        data_input.name = "data";
        data_input.type = "hidden";
        data_input.value = data;
        form.appendChild(data_input);

        //console.log(form);
        form.submit();
    }
</script>