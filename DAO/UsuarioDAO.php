<?php 
    namespace VendaPassagem\DAO;

    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\Usuario;
    use PDO;

    class UsuarioDAO {

        public function buscar($email, $senha){
            $context = new Context();
            
            try {
                $sql = "SELECT Nome FROM Usuario WHERE Email = '${email}' AND Senha = '${senha}';";
                $result = $context->query($sql);

                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);

                $nome = false;

                if(count($lista) > 0){
                    $nome = $lista[0]['Nome'];
                }
       
                return $nome;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir(Usuario $usuario) {
            $context = new Context();

            // var_dump($usuario->getNome());
            // var_dump($usuario->getEmail());
            // var_dump($usuario->getSenha());die();

            try {
                $sql = "INSERT INTO Usuario (    
                        Nome,
                        Email,
                        Senha
                    )
                    VALUES (
                        :nome,
                        :email,
                        :senha
                    )";

                return $context->execute($sql, array(
                    'nome' => $usuario->getNome(),
                    'email' => $usuario->getEmail(),
                    'senha' => $usuario->getSenha()
                ));
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>