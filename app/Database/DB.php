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
    public function __construct(
        $servername = null,
        $port = null,
        $dbname = null,
        $username = null,
        $password = null
    ) {
        $this->servername = is_null($servername) ? getenv('DB_HOST') : $servername;
        $this->port = is_null($port) ? getenv('DB_PORT') : $port;
        $this->dbname = is_null($dbname) ? getenv('DB_DATABASE') : $dbname;
        $this->username = is_null($username) ? getenv('DB_USERNAME') : $username;
        $this->password = is_null($password) ? getenv('DB_PASSWORD') : $password;

        $this->connect();
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;port:$this->port;dbname=$this->dbname", $this->username,
                $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $conn;
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }

    public function getAllPosts($order = 'ASC')
    {
        $stmt = $this->conn->prepare("SELECT * FROM `$this->dbname`.posts ORDER BY id $order");
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