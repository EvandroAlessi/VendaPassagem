<?php 
    require_once('Context.php');
    require('C:\xampp\htdocs\VendaPassagem\Models\PassageiroVoo.php');

    class PassageiroVooDAO {
        public function popularPassageiroVoo($row){
            $passageiroVoo = new PassageiroVoo(
                $row['VooID'],
                $row['PassageiroID'],
                $row['Solicitacoes'],
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
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function inserir(PassageiroVoo $passageiroVoo) {
            $context = new Context();

            try {
                $sql = "INSERT INTO PassageiroVoo (    
                        VooID,
                        PassageiroID,
                        Solicitacoes,
                        TipoAssento,
                        FormaPagamento,
                        ValorPagamento
                    )
                    VALUES (
                        :vooID,
                        :passageiroID,
                        :solicitacoes,
                        :tipoAssento,
                        :formaPagamento,
                        :valorPagamento
                    )";
       
                $sql->bindValue(":vooID", $passageiroVoo->getVooID());
                $sql->bindValue(":passageiroID", $passageiroVoo->getPassageiroID());
                $sql->bindValue(":solicitacoes", $passageiroVoo->getSolicitacoes());
                $sql->bindValue(":tipoAssento", $passageiroVoo->getTipoAssento());
                $sql->bindValue(":formaPagamento", $passageiroVoo->getFormaPagamento());
                $sql->bindValue(":valorPagamento", $passageiroVoo->getValorPagamento());
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function editar(PassageiroVoo $passageiroVoo){
            $context = new Context();

             try {
                $sql = "UPDATE PassageiroVoo SET VooID = ". $passageiroVoo->getVooID() .", PassageiroID = ". $passageiroVoo->getPassageiroID() .", Solicitacoes = ". $passageiroVoo->getSolicitacoes() .", TipoAssento = ". $passageiroVoo->getTipoAssento() .", FormaPagamento = ". $passageiroVoo->getFormaPagamento() .", ValorPagamento = ". $passageiroVoo->getValorPagamento() ." WHERE ID = ". $passageiroVoo->getID() .";";
       
                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }

        public function excluir($id){
            $context = new Context();
            
            try {
                $sql = "DELETE FROM PassageiroVoo WHERE ID = ${id}";

                return $context->execute($sql);
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde.";
            }
        }
    }
?>