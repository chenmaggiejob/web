<?php
// 1.連sql
// 2.整理data

// 1.連sql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test0722";
$dsn = "mysql:host=localhost;charset=utf8;dbname=$dbname";
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname); 只能連mysql
$pdo = new PDO($dsn, $username, $password); // 可以連各個資料庫系統,也是目前比較主流的用法

$sql = "SELECT * FROM  students";
// $data = $conn->query($sql)->fetch_all();
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// dd($data);

// 2.整理data

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// 建立Class

class DB
{
    public $name;
    protected $table;
    protected $pdo;

    public function __construct($table)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test0722";

        $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
        $this->pdo = new PDO($dsn, $username, $password);
        $this->table = $table;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM  $this->table";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setRank()
    {
        $data = $this->getAll();
        $tmp = $data;
        foreach ($data as $key => $value) {
            // $tmp[$key]['rank'] = 1;
            if ($value['id'] >= 5) {
                $tmp[$key]['rank'] = 2;
            } else {
                $tmp[$key]['rank'] = 1;
            }
        }
        return $tmp;
    }

    //add
    public function store($data)
    {
        $sql = "INSERT INTO `$this->table` (`id`, `name`, `mobile`) VALUES (NULL, '{$data['name']}', '{$data['mobile']}');";
        $this->pdo->query($sql);
        // echo $sql;
        header('Location: http://localhost');
        exit();
    }
}
$Student = new DB('students');
// $Student->getAll();
