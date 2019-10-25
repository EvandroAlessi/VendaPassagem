<?php 
    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\Passageiro;
    use PDO;

    class PassageiroDAO {
        public function popularPassageiro($row){
            $passageiro = new Passageiro(
                $row['ID'],
                $row['CPF'],
                $row['RG'],
                $row['Nome'],
                $row['DataNascimento']
            );
            return $passageiro;
        }

        public function buscarTodos(){
            $context = new Context();

            try {
                $sql = "SELECT * FROM Passageiro;";
                
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
        
                foreach ($lista as $row)
                    $f_lista[] = $this->popularPassageiro($row);

                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function buscar($id){
            $context = new Context();
            
            try {
                $sql = "SELECT * FROM Passageiro WHERE ID = ${id};";
       
                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir(Passageiro $passageiro) {
            $context = new Context();

            try {
                $sql = "INSERT INTO Passageiro (    
                        CPF,
                        RG,
                        Nome,
                        DataNascimento
                    )
                    VALUES (
                        :cpf,
                        :rg,
                        :nome,
                        :dataNascimento
                    )";
       
                return $context->execute($sql, array(
                    "cpf", $passageiro->getCPF(),
                    "rg", $passageiro->getRG(),
                    "nome", $passageiro->getNome(),
                    "dataNascimento", $passageiro->getDataNascimento()
                ));
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar($passageiro){
            $context = new Context();

             try {
                $sql = "UPDATE Passageiro SET CPF = ". $passageiro->getCPF() .", RG = ". $passageiro->getRG() .", Nome = ". $passageiro->getNome() .", DataNascimento = ". $passageiro->getDataNascimento() ." WHERE ID = ". $passageiro->getID() .";";
       
                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM Passageiro WHERE ID = ${id}";

                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>