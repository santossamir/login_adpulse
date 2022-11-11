<?php
     class UseService{

        private $conexao;
        private $id_user;
        private $name_user;
        private $email_user;
        private $password_user;

        public function __construct(Conexao $conexao, User $name_user){
            $this->conexao = $conexao->conectar();
            $this->name_user = $name_user;
            $this->email_user = $email_user;
            $this->password_use = $password_use;
        }

        public function login(){ //read
            $query_consultar = '
                select 
                   id_user,
                   name_user,
                   email_user,
                   password_user
                from
                   tb_user
            ';
            $stmt = $this->conexao->prepare($query_consultar);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function user_id($id){ //read
            
            $query_consultar = '
                select
                   name_user, 
                   email_user,
                   password_user
                from
                   tb_user
                where
                    id_user = :id
            ';
            $stmt = $this->conexao->prepare($query_consultar);
            $stmt->execute(['id'=> $id]);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

    }
?>