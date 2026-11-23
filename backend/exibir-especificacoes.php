
<?php
header("Content-Type: application/json; charset=utf-8");

require_once __DIR__ . "/config/conexao.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    http_response_code(400);
    echo json_encode(["erro" => "ID inválido"]);
    exit;
}

$sql = "SELECT
            motor,
            cambio,
            CONCAT(quilometragem_km, ' Km') AS quilometragem,
            CASE
                WHEN donos_ant = 1 THEN 'Único dono'
                ELSE CONCAT(donos_ant, ' donos')
            END AS donos_ant,
            CASE
                WHEN capacidade = 1 THEN 'Um assento'
                ELSE CONCAT(capacidade, ' lugares')
            END AS capacidade,
            combustivel,
            cor,
            CONCAT(modelo, ' - ', ano) AS modelo_ano,
            preco
        FROM veiculos
        WHERE id_cadastro = ?";

$stmt = $conexao->prepare($sql);

$stmt->execute([$id]);

$veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($veiculo, JSON_UNESCAPED_UNICODE);
?>