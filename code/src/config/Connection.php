<?php


class Connection extends PDO
{
    private $stmt;
public function __construct($dsn, $username = null, $password = null, $options = null)
{
    parent::__construct($dsn, $username, $password, $options);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

public function executeQuery(string $query, array $parameters=[]): bool {
    $this->stmt = parent::prepare($query);
    foreach ($parameters as $name => $value){
        $this->stmt->bindValue($name, $value[0], $value[1]);
    }
    return $this->stmt->execute();
}

public function getResults() : array {
    return $this->stmt->fetchall();
}

}