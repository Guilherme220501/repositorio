<?php
// Configuração do Banco de Dados
$host = '127.0.0.1';
$dbname = 'formulario-guilherme';
$username = 'formulario-guilheme'; // ou outro usuário que você esteja usando

// Conexão com o banco de dados
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbname,);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}

// Captura dos dados do formulário (por exemplo, via POST)
$nome = $_POST['Nome'] ?? null;
$idade = $_POST['Idade'] ?? null;
$email = $_POST['Email'] ?? null;
$telefone = $_POST['Telefone'] ?? null;
$endereco = $_POST['Endereço'] ?? null;
$cpf = $_POST['CPF'] ?? null;
$rg = $_POST['RG'] ?? null;
$cep = $_POST['CEP'] ?? null;
$data_nascimento = $_POST['Data de Nascimento'] ?? null;
$data_hora = $_POST['Data e Hora'] ?? null;
$sua_cor = $_POST['Sua Cor'] ?? null;
$nivel = $_POST['Seu Nível'] ?? null;
$estado_civil = implode(', ', $_POST['civil?'] ?? []);
$conhecimento = $_POST['conhecimento?'] ?? null;
$experiencia = implode(', ', $_POST['experiência?'] ?? []);
$classe_social = $_POST['social?'] ?? null;
$nivel_social = implode(', ', $_POST['social?'] ?? []);
$signo = $_POST['signo?'] ?? null;
$experiencia_text = $_POST['experiência'] ?? null;

// Inserção no banco de dados
$sql = "INSERT INTO usuarios (
    nome, idade, email, telefone, endereco, cpf, rg, cep, data_nascimento, data_hora, 
    sua_cor, nivel, estado_civil, conhecimento, experiencia, classe_social, nivel_social, 
    signo, experiencia_text
) VALUES (
    :nome, :idade, :email, :telefone, :endereco, :cpf, :rg, :cep, :data_nascimento, 
    :data_hora, :sua_cor, :nivel, :estado_civil, :conhecimento, :experiencia, 
    :classe_social, :nivel_social, :signo, :experiencia_text
)";

$stmt = $conn->prepare($sql);

// Vinculando os parâmetros
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':idade', $idade);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':endereco', $endereco);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':rg', $rg);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':data_nascimento', $data_nascimento);
$stmt->bindParam(':data_hora', $data_hora);
$stmt->bindParam(':sua_cor', $sua_cor);
$stmt->bindParam(':nivel', $nivel);
$stmt->bindParam(':estado_civil', $estado_civil);
$stmt->bindParam(':conhecimento', $conhecimento);
$stmt->bindParam(':experiencia', $experiencia);
$stmt->bindParam(':classe_social', $classe_social);
$stmt->bindParam(':nivel_social', $nivel_social);
$stmt->bindParam(':signo', $signo);
$stmt->bindParam(':experiencia_text', $experiencia_text);

// Executando a inserção
try {
    $stmt->execute();
    echo "Dados inseridos com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>