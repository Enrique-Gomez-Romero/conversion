<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
</head>
<body>

<form action="calcular.php" method="POST" name="Fomulario">
    Desde
    <select class="form-select" aria-label="Default select example" name="op1" id="base">
        <option value="bin">Binario</option>
        <option value="dec">Decimal</option>
        <option value="oct">Octal</option>
        <option value="hexa">Hexadecimal</option>
    </select>
    Para
    <select class="form-select" aria-label="Default select example" name="op2" id="remove">
        <option value="bin" disabled>Binario</option>
        <option value="dec">Decimal</option>
        <option value="oct">Octal</option>
        <option value="hexa">Hexadecimal</option>
    </select>
        <input type="text" class="form-control" placeholder="Ingrese el numero" name="entrada1" required>
        <input type="submit" class="btn btn-primary" value="Convertir">
</form>
<script>
    const selectBase = document.getElementById('base');
    const selectRemove = document.getElementById('remove');
    selectBase.addEventListener("change", (e) => {
        for(option in selectRemove.children)
            selectRemove.children[option].disabled = false;
        selectRemove.children[selectBase.selectedIndex].disabled = true;
    });
</script>
</body>
</html>

