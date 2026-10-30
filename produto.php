<?php 
$conexao = new mysqli("localhost", "root", "","papelaria_db");
$metodo = $_SERVER['REQUEST_METHOD'];

echo "Método: " . $metodo . "\n";
$r = $conexao->query('SELECT * FROM produtos');
while ($linha = $r->fetch_assoc()) {
    echo $linha['id'].'-'.$linha['nome'].'-'.$linha['preco']."\n";
}

if ($metodo == 'GET') {
    
}

if ($metodo == 'POST') {
    $conexao->query("INSERT INTO produtos (nome,preco) VALUES ('caneta','2.50')");
}

if ($metodo == 'PUT') {
    $conexao->query("UPDATE produtos SET nome = 'muchila',preco = '89.90' where id = 1 ");
}

if ($metodo == 'PATCH') {
    $conexao->query("UPDATE produtos SET preco = '3.00' where id = 6 ");
}

if ($metodo == 'DELETE') {
    $conexao->query('DELETE from produtos WHERE id = 3');
}

if ($metodo == 'OPTIONS') {
    echo "Aceito: GET, POST, PUT, PATCH, DELETE, OPTIONS\n";
}


?>
