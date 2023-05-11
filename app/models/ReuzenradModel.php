<?php


class ReuzenradModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReuzenrad()
    {
        $sql = 'SELECT  Naam
                       ,Hoogte
                       ,Land
                       ,Kosten
                       ,AantalPassagiers
                FROM   Reuzenrad
                ORDER BY Id DESC;';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
