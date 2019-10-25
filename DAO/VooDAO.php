<?php 
    namespace VendaPassagem\DAO;

    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\Voo;
    use PDO;

    class VooDAO {
        public function popularVoo($row){
            $voo = new Voo(
                $row['AeronaveID'],
                $row['DataPartida'],
                $row['ValorPassagem']
            );
            $voo->setID($row['ID']);
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

                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);

                $voo = false;

                if(count($lista) > 0){
                    $voo = $this->popularVoo($lista[0]);
                }
       
                return $voo;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir($voo) {
            $context = new Context();

            try {
                $sql = "INSERT INTO Voo ( 
                        AeronaveID,   
                        DataPartida,
                        ValorPassagem
                    )
                    VALUES (
                        :aeronaveID,
                        :dataPartida,
                        :valorPassagem
                    )";
       
                return $context->execute($sql, array(
                    'dataPartida' => $voo->getDataPartida(),
                    'valorPassagem' => $voo->getvalorPassagem(),
                    'aeronaveID' => $voo->getAeronaveID()
                ));

            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar($voo){
            $context = new Context();

             try {
                $sql = "UPDATE Voo SET DataPartida = '". $voo->getDataPartida() ."', ValorPassagem = ". $voo->getValorPassagem() ." WHERE ID = ". $voo->getID() .";";
       
                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM Voo WHERE ID = ${id}";

                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>