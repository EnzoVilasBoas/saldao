<?php

class AutUser extends Dbasis
{
    public function verificaCookie()
    {
        if (isset($_COOKIE['Enzo'])) {
            $dadosUsuario = json_decode($_COOKIE['Enzo'], true);
            $verifica = Dbasis::read('usuarios','email = "'.$dadosUsuario['email'].'"');
            if ($verifica->num_rows) {
                foreach ($verifica as $v);
                unset($v['senha']);
                $_SESSION['AutUser'] = $v;
                return 1;
            }else {
                setcookie('Enzo', '', time() - 3600, '/');
                return 2;
            }
        }
    }

    /**
     * Método responsável por logar os usuarios
     * @param array $dados
     * @return int
     * **/
    public function login($dados)
    {
        $verifica = Dbasis::read('usuarios','email = "'.$dados['email'].'" AND senha = "'.md5($dados['senha']).'"');
        if ($verifica->num_rows) {
            foreach ($verifica as $dadosUsuario);
            unset($dadosUsuario['senha']);
                if ($dados['persistente']??null) {
                    $json = json_encode($dadosUsuario);
                    $tempoExpiracao = time() + (30 * 24 * 60 * 60); // 30 dias em segundos
                    setcookie('Enzo', $json, $tempoExpiracao, '/');
                }
                $_SESSION['AutUser'] = $dadosUsuario;
                return 1;
        }else {
            setcookie('Enzo', '', time() - 3600, '/');
            return 2;
        }
    }

}