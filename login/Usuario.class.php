<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function checkUser($email , $senha){
        #criar a varial com a consulta sql
        $sql = "SELECT email FROM usuarios WHERE email = :e AND senha = :s";

        #chamar o metodo prepare passando a consulta
        $stmt = $this->pdo->prepare($sql);

        #para cada apelido um bindValue:
        $stmt->bindValue(":e" , $email);
        $stmt->bindValue(":s" , $senha);

        #execultar o comando 
        $stmt->execute();

        #SELECT
        return $stmt->rowCount() > 0;                                                       

    }

    public function checkPass ( $email, $senha ){

    }

    public function conn() {
        $dns = "mysql:dbname=banco;host=localhost";
        $user = "root";
        $pass = "";


        try {
            $this->pdo = new PDO($dns, $user, $pass);
            return true;
        } catch (\Throwable $th){
            return false;
        }

       }

}
?>