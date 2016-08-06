<?php
namespace Burrow\Database;

use PDO;
use PDOException;

class DB
{
    protected $servername;
    protected $port;
    protected $dbname;
    protected $username;
    protected $password;
    protected $conn;

    /**
     * DB constructor. By default connect to Homestead virtual DB server and to the 'company-web-app' database schema.
     * @param string $servername
     * @param string $port
     * @param string $dbname
     * @param string $username
     * @param string $password
     */
    public function __construct($servername = "127.0.0.1", $port = "3306", $dbname = "company-web-app", $username = "root", $password = "thisisfun0007")
    {
        $this->servername = $servername;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;port:$this->port;dbname=$this->servername", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $conn;
//            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getAllPosts()
    {
        $dbname = $this->dbname;

        $stmt = $this->conn->prepare("SELECT * FROM `$this->dbname`.posts");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();

        return $result;
    }

    public function updatePost($data)
    {
        $id = $data['theID'];
        $author = $data['author'];
        $title = $data['title'];
        $content = $data['content'];

        $stmt = $this->conn->prepare("UPDATE `$this->dbname`.posts
SET `$this->dbname`.posts.author='$author', `$this->dbname`.posts.title='$title', `$this->dbname`.posts.content='$content'
WHERE `$this->dbname`.posts.id='$id';");
        $stmt->execute();

        //Check if UPDATE was successful
        $count = $stmt->rowCount();

        return $count;
    }

}