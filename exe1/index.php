<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php?order=nota">Ordenar pelas 3 maiores notas </a><br />
        <a href="index.php">Ordenar por nome</a><br /><br /><br />
        <?php
        $host = "localhost";
        $dbname = "pdo";
        $user = "root";
        $pass = "";
        $tabela = "alunos";

        if (filter_input(INPUT_GET, "order")) {

            $criterio = "ORDER BY " . filter_input(INPUT_GET, "order") . " DESC LIMIT 3";
        } else {
            $criterio = "ORDER BY nome ASC";
        }
        try {
            $conexao = new \PDO("mysql:host=$host; dbname=$dbname", "$user", "$pass");
            $query = "SELECT * FROM $tabela $criterio";
            $stmt = $conexao->prepare($query);
            //$stmt->bindValue(1,1);//também pode ser assim: exemplo bindValue = (":id",1)
            $stmt->execute();

            $resultado = $stmt->fetchAll(PDO::FETCH_CLASS); //fetchAll lista o resultado e o paramelho FETCH_CLASS retorna um obejeto
            foreach ($resultado as $lista) {
                echo $lista->nome . " - nota: " . $lista->nota . "<br />";
            }
        } catch (\PDOException $e) {
            echo "Não foi possóvel estebelacer a conexão com o banco e dados: <br /> Erro Código :" . $e->getCode(); // Emite o código de erro de conexao com o banco. Poeria ser getMessage() neste caso emitiria o erro, não o cógigo
        }
        ?>
    </body>
</html>
