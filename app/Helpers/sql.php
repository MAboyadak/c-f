<?php

namespace App\Helpers;

use Conf\DB;

class SQL
{
    private static $conn;

    public static function findById($tableName, $id)
    {
        $query = 'SELECT * FROM ' . $tableName . ' where id = :id';
        $sth = self::prepareStmt($query);
        self::$conn->execute([':id' => $id]);
        return $sth->fetchAll();
    }

    public static function getAll($tableName)
    {
        $query = 'SELECT * FROM ' . $tableName;
        $sth = self::prepareStmt($query);
        $sth->execute();
        return $sth->fetchAll();
    }

    public static function queryWithParams($query, $params)
    {
        $sth = self::prepareStmt($query);
        $sth->execute([$params[0],$params[1],$params[2],$params[3]]);
        return $sth->fetchAll();
    }

    private static function prepareStmt($query)
    {
        self::$conn = DB::connect();
        $sth = self::$conn->prepare($query);
        return $sth;
    }



}


?>