<?php 
    namespace VendaPassagem\DAO;
    
    use VendaPassagem\DAO\Context;
    use VendaPassagem\Models\PassageiroVoo;
    use PDO;

    class PassageiroVooDAO {
        public function popularPassageiroVoo($row){
            $passageiroVoo = new PassageiroVoo(
                $row['VooID'],
                $row['PassageiroID'],
                $row['Solicitacoes'],
                $row['NumAssento'],
                $row['TipoAssento'],
                $row['FormaPagamento'],
                $row['ValorPagamento']
            );
            return $passageiroVoo;
        }

        public function buscarTodos(){
            $context = new Context();

            try {
                $sql = "SELECT * FROM PassageiroVoo;";
                
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
        
                foreach ($lista as $row)
                    $f_lista[] = $this->popularPassageiroVoo($row);

                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function buscar($id){
            $context = new Context();
            
            try {
                $sql = "SELECT * FROM PassageiroVoo WHERE ID = ${id};";
       
                $result = $context->query($sql);

                $lista = $result->fetchAll(PDO::FETCH_ASSOC);

                $passageiroVoo = false;

                if(count($lista) > 0){
                    $passageiroVoo = $this->popularPassageiroVoo($lista[0]);
                }
                
                return $passageiroVoo;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir($passageiroVoo) {
            $context = new Context();

            try {
                $sql = "INSERT INTO PassageiroVoo (    
                        VooID,
                        PassageiroID,
                        Solicitacoes,
                        NumAssento,
                        TipoAssento,
                        FormaPagamento,
                        ValorPagamento
                    )
                    VALUES (
                        :vooID,
                        :passageiroID,
                        :solicitacoes,
                        :numAssento,
                        :tipoAssento,
                        :formaPagamento,
                        :valorPagamento
                    )";
       
       
                return $context->execute($sql, array(
                    "vooID", $passageiroVoo->getVooID(),
                    "passageiroID", $passageiroVoo->getPassageiroID(),
                    "solicitacoes", $passageiroVoo->getSolicitacoes(),
                    "numAssento", $passageiroVoo->getTipoAssento(),
                    "tipoAssento", $passageiroVoo->getTipoAssento(),
                    "formaPagamento", $passageiroVoo->getFormaPagamento(),
                    "valorPagamento", $passageiroVoo->getValorPagamento()
                ));
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar($passageiroVoo){
            $context = new Context();

             try {
                $sql = "UPDATE PassageiroVoo SET VooID = ". $passageiroVoo->getVooID() .", PassageiroID = ". $passageiroVoo->getPassageiroID() .", Solicitacoes = ". $passageiroVoo->getSolicitacoes() .", TipoAssento = ". $passageiroVoo->getTipoAssento() .", FormaPagamento = ". $passageiroVoo->getFormaPagamento() .", ValorPagamento = ". $passageiroVoo->getValorPagamento() ." WHERE ID = ". $passageiroVoo->getID() .";";
       
                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM PassageiroVoo WHERE ID = ${id}";

                return $context->execute($sql, null);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>