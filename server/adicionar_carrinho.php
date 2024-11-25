<?php
session_start();

// Função para adicionar produto ao carrinho
function adicionarAoCarrinho($id, $nome, $preco, $quantidade, $imagem_url) {
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    $produtoExistente = false;
    foreach ($_SESSION['carrinho'] as &$item) {
        if ($item['id'] == $id) {
            $item['quantidade'] += $quantidade; // Adiciona quantidade se o produto já estiver no carrinho
            $produtoExistente = true;
            break;
        }
    }

    if (!$produtoExistente) {
        $_SESSION['carrinho'][] = [
            'id' => $id,
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => $quantidade,
            'imagem_url' => $imagem_url
        ];
    }
}

// Função para remover produto do carrinho
function removerDoCarrinho($id) {
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['carrinho'][$key]);
                break;
            }
        }
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']); // Reorganiza os índices
    }
}

// Função para atualizar a quantidade de um produto
function atualizarQuantidade($id, $quantidade) {
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as &$item) {
            if ($item['id'] == $id) {
                $item['quantidade'] = $quantidade;
                break;
            }
        }
    }
}

// Adiciona produto ao carrinho
if (isset($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['quantidade'], $_POST['imagem_url'])) {
    adicionarAoCarrinho($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['quantidade'], $_POST['imagem_url']);
    header('Location: ../cart.php');
    exit();
}

// Remover produto do carrinho
if (isset($_GET['action']) && $_GET['action'] == 'remover' && isset($_GET['id'])) {
    removerDoCarrinho($_GET['id']);
    header('Location: ../cart.php');
    exit();
}

// Atualizar a quantidade de um produto
if (isset($_POST['action']) && $_POST['action'] == 'atualizar' && isset($_POST['id'])) {
    atualizarQuantidade($_POST['id'], $_POST['quantidade']);
    header('Location: ../cart.php');
    exit();
}

?>