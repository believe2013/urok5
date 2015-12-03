<?php

class DB
{
    private $dbh;
    private $className = 'stdClass';

	public function __construct()
	{
        // Подключение к базе данных
        $this->dbh = new PDO('mysql:host=localhost;dbname=wader', 'root', 'ererer');
	}

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function query($sql, $params = [])
    {
        //Подготовка запроса
        $sth = $this->dbh->prepare($sql);
        //Выполнение запроса с подстановкой
        $sth->execute($params);
        //Получение результата запроса
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function execute($sql, $params = [])
    {
        //Подготовка запроса
        $sth = $this->dbh->prepare($sql);
        //Выполнение запроса с подстановкой
        return $sth->execute($params);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

}
