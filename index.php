<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suduko Solver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="container">
        <div class="card h2 text-center mt-2 p-1 pb-2">Suduko Solver</div>
    </header>
    <main class="container">
        <table class="table table-bordered border-dark lw-50 mx-auto suduko-layout">
            <form action="">
                <tbody class="">
                    <?php
                    for ($i = 0; $i < 9; $i++) {
                    ?>
                        <tr scope="row g-1" class="row">
                            <?php
                            for ($j = 0; $j < 9; $j++) {
                            ?>
                                <td scope="col" class="col p-2" id="grid_<?= $i . $j ?>">
                                    <input type="text" class="form-input form-number-input text-center" name="position_<?= $i . $j ?>" maxlength="1">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </form>
        </table>
    </main>
    <footer>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
