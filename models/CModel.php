<?php

class Cmodel {
    public function GetData(){
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VoldeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'

        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel comque culpa.'       
        // );
        $host = '127.0.0.1';
        $db = 'blog';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE               =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES       =>false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        $result = $pdo -> query('SELECT * From news');
        $arrayResult = $result->fetchAll();
        return $arrayResult;
    }
}