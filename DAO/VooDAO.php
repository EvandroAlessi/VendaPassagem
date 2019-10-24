<?php 
    require_once('Context.php');
    require('C:\xampp\htdocs\VendaPassagem\Models\Voo.php');

    class VooDAO {
        public function popularVoo($row){
            $voo = new Voo(
                $row['ID'],
                $row['DataPartida'],
                $row['ValorPassagem']
            );
            return $voo;
        }

        public function buscarTodos(){
            $context = new Context();

            try {
                $sql = "SELECT * FROM Voo;";
                
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
        
                foreach ($lista as $row)
                    $f_lista[] = $this->popularVoo($row);

                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function buscar($id){
            $context = new Context();
            
            try {
                $sql = "SELECT * FROM Voo WHERE ID = ${id};";
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir(Voo $voo) {
            $context = new Context();

            try {
                $sql = "INSERT INTO Voo (    
                        DataPartida,
                        ValorPassagem
                    )
                    VALUES (
                        :dataPartida,
                        :valorPassagem
                    )";
       
                $sql->bindValue(":dataPartida", $voo->getDataPartida());
                $sql->bindValue(":valorPassagem", $voo->getValorPassagem());
       
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar(Voo $voo){
            $context = new Context();

             try {
                $sql = "UPDATE Voo SET DataPartida = ". $voo->getDataPartida() .", ValorPassagem = ". $voo->getValorPassagem() ." WHERE ID = ". $voo->getID() .";";
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM Voo WHERE ID = ${id}";

                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>