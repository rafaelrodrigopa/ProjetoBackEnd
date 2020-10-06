<?php

    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null; //Tipo de usuário se for igual a 1 admin senão comum

    $lista_usuarios = array(
        array('id' => 1, 'email' => 'rafael@teste.com','senha' => '123', 'perfil' => 1),
        array('id' => 2, 'email' => 'admin2@teste.com','senha' => '123', 'perfil' => 1),
        array('id' => 3, 'email' => 'comum@teste.com','senha' => '123', 'perfil' => 2),
        array('id' => 4, 'email' => 'comum2@teste.com','senha' => '123', 'perfil' => 2)
    );

    foreach($lista_usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil'];
            break;
        }
    }

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }
?>