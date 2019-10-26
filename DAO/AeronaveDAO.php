<?php 

    namespace VendaPassagem\DAO;

    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\Aeronave;
    use PDO;

    class AeronaveDAO {

        public function popularAeronave($row){
            $aeronave = new Aeronave(
                $row['DestinoID'],
                $row['Modelo'],
                $row['QntAssentos'],
                $row['QntAssentosEspecial']
            );
            $aeronave->setID($row['ID']);
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
                
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);

                $aeronave = false;

                if(count($lista) > 0){
                    $aeronave = $this->popularAeronave($lista[0]);
                }
       
                return $aeronave;
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
                        QntAssentos,
                        QntAssentosEspecial
                    )
                    VALUES (
                        ':destinoID',
                        ':modelo',
                        ':qtdAssentos',
                        ':qntAssentosEspecial'
                    )";

                return $context->execute($sql, array(
                    "destinoID" => $aeronave->getDestinoID(),
                    "modelo" => $aeronave->getModelo(),
                    "qtdAssentos" => $aeronave->getQntAssentos(),
                    "qntAssentosEspecial" => $aeronave->getQntAssentosEspecial()
                ));
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar($aeronave){
            $context = new Context();

             try {
                $sql = "UPDATE Aeronave SET DestinoID = '". $aeronave->getDestinoID() ."', Modelo = '". $aeronave->getModelo() ."', QndAssentos = '". $aeronave->setQntAssentos() ."', QndAssentosEspecial = '". $aeronave->getQntAssentosEspecial() ."' WHERE ID = ". $aeronave->getID() .";";
       
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