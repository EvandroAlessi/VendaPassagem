<?php 
    require_once('Context.php');
    require('C:\xampp\htdocs\VendaPassagem\Models\Destino.php');

    class DestinoDAO {
        public function popularDestino($row){
            $destino = new Destino(
                $row['ID'],
                $row['NomeAeroporto'],
                $row['TaxaEmbarque']
            );
            return $destino;
        }

        public function buscarTodos(){
            $context = new Context();

            try {
                $sql = "SELECT * FROM Destino;";
                
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
        
                foreach ($lista as $row)
                    $f_lista[] = $this->popularDestino($row);

                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function buscar($id){
            $context = new Context();
            
            try {
                $sql = "SELECT * FROM Destino WHERE ID = ${id};";
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir(Destino $destino) {
            $context = new Context();

            try {
                $sql = "INSERT INTO Destino (    
                        NomeAeroporto,
                        TaxaEmbarque
                    )
                    VALUES (
                        :nomeAeroporto,
                        :taxaEmbarque
                    )";
       
                $sql->bindValue(":nomeAeroporto", $destino->getNomeAeroporto());
                $sql->bindValue(":taxaEmbarque", $destino->getTaxaEmbarque());
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar(Destino $destino){
            $context = new Context();

             try {
                $sql = "UPDATE Destino SET NomeAeroporto = ". $destino->getNomeAeroporto() .", TaxaEmbarque = ". $destino->getTaxaEmbarque() ." WHERE ID = ". $destino->getID() .";";
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM Destino WHERE ID = ${id}";

                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>