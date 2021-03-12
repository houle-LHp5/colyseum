<?php

class ShowTypes extends DataBase
{
    public function getALLShowsTypes(){

        $query = 'SELECT * FROM colyseum.`showtypes`';

        $queryShow = $this->dataBase->query($query);

        $result = $queryShow->fetchALL();

        return $result;
}

}