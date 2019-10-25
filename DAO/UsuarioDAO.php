<?php 
    namespace VendaPassagem\DAO;

    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\Usuario;
    use PDO;

    class UsuarioDAO {

        public function buscar($email, $senha){
            $context = new Context();
            
            try {
                $sql = "SELECT * FROM Usuario WHERE Email = '${email}' AND Senha = '${senha}';";
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);

                return count($lista);
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