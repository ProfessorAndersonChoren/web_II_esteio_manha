<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas online</h1>
        <section>
            <form action="convert.php" method="post">
                <article>
                    <div>
                        <label for="value">Valor</label>
                        <input type="number" id="value" name="value" required>
                    </div>
                    <div>
                        <label for="origin_coin">Moeda origem</label>
                        <select id="origin_coin" name="origin_coin">
                            <option value="real">Real</option>
                            <option value="dollar">Dólar</option>
                            <option value="euro">Euro</option>
                        </select>
                    </div>
                    <div>
                        <label for="destiny_coin">Moeda destino</label>
                        <select name="destiny_coin" id="destiny_coin">
                            <option value="real">Real</option>
                            <option value="dollar" selected>Dólar</option>
                            <option value="euro">Euro</option>
                        </select>
                    </div>
                </article>
                <article>
                    <button type="submit">Converter</button>
                </article>
            </form>
            <article>
                <?php
                if (!empty($_SESSION['result'])) :
                ?>
                    <p>Resultado: <?= $_SESSION['result'] ?></p>
                <?php
                endif;
                unset($_SESSION['result']);
                ?>
            </article>
        </section>
    </main>
</body>

</html>