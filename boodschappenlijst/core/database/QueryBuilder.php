<?php 
class QueryBuilder{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo =$pdo;
        
    }


     public function selectAll($table, $intoclass){
    
        $statment = $this->pdo->prepare("select * from {$table}");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_CLASS, $intoclass);
    }
    public function insert($table, $parameters){
        $sql = sprintf(
            "insert into %s (%s) values (%s)",
            $table, 
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))
        );

        try{
            $statment = $this->pdo->prepare($sql);
            $statment->execute($parameters);
        } catch(Exeption $e) {
            die("Somthing went wrong.");
        }

        
    }
}