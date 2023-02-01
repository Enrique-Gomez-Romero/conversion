<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>   
</head>
<body>

<form action="calcular.php" method="POST" name="Fomulario">
    <div class="container mt-5">
        <div class="text-center mb-5">
            <em class="fs-3">Calculadora de conversion de numeros</em>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4">
                <em class="text-center fs-5"> Desde: </em>
                    <select class="form-select mt-4" aria-label="Default select example" name="op1" id="base">
                        <option value="bin">Binario</option>
                        <option value="dec">Decimal</option>
                        <option value="oct">Octal</option>
                        <option value="hexa">Hexadecimal</option>
                    </select>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4">
                <em class="text-center fs-5"> Para: </em>
                    <select class="form-select mt-4" aria-label="Default select example" name="op2" id="remove">
                        <option value="bin" disabled>Binario</option>
                        <option value="dec">Decimal</option>
                        <option value="oct">Octal</option>
                        <option value="hexa">Hexadecimal</option>
                    </select>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4">
                <input type="text" class="form-control mt-5" placeholder="Ingrese el numero" name="entrada1" required>
            </div>
        </div>

        <div class=" text-center mt-5"> 
            <input type="submit" class="btn btn-primary" value="Convertir"> 
        </div>
    </div>
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

