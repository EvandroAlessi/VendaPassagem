<?php 
    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\Aeronave;
    use PDO;

    class AeronaveDAO {
        public function popularAeronave($row){
            $aeronave = new Aeronave(
                $row['ID'],
                $row['DestinoID'],
                $row['Modelo'],
                $row['QntAssentos'],
                $row['QntAssentosEspecial']
            );
            return $aeronave;
        }

        public function buscarTodos(){
            $context = new Context();

            try {
                $sql = "SELECT * FROM Aeronave;";
                
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
        
                foreach ($lista as $row)
                    $f_lista[] = $this->popularAeronave($row);

                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function buscar($id){
            $context = new Context();
            
            try {
                $sql = "SELECT * FROM Aeronave WHERE ID = ${id};";
       
                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir($aeronave) {
            $context = new Context();

            try {
                $sql = "INSERT INTO Aeronave (    
                        DestinoID,
                        Modelo,
                        QndAssentos,
                        QndAssentosEspecial
                    )
                    VALUES (
                        :destinoID,
                        :modelo,
                        :qtdAssentos,
                        :qtdAssentosEspecial
                    )";
                    
                return $context->execute($sql, array(
                    "destinoID", $aeronave->getDestinoID(),
                    "modelo", $aeronave->getModelo(),
                    "qtdAssentos", $aeronave->getQtdAssentos(),
                    "qtdAssentosEspecial", $aeronave->getQtdAssentosEspecial()
                ));
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar($aeronave){
            $context = new Context();

             try {
                $sql = "UPDATE Aeronave SET DestinoID = ". $aeronave->getDestinoID() .", Modelo = ". $aeronave->getModelo() .", QndAssentos = ". $aeronave->getQndAssentos() .", QndAssentosEspecial = ". $aeronave->getQndAssentosEspecial() ." WHERE ID = ". $aeronave->getID() .";";
       
                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM Aeronave WHERE ID = ${id}";

                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>