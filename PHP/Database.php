<?php
class Database {
    public $connection;

    const DATABASE_SERVER = 'localhost';

    const DATABASE_USER = 'root';

    const DATABASE_PASSWORD = '';

    const DATABASE_NAME = 'db_intro_company';

    public function __construct()
    {
        $this->connection = $this->ConnectDatabase();
    }

    public function ConnectDatabase() {
        $connection = mysqli_connect(
            self::DATABASE_SERVER,
            self::DATABASE_USER,
            self::DATABASE_PASSWORD,
            self::DATABASE_NAME
        );
        mysqli_set_charset($connection,'utf8');
        return $connection;
    }

    public function RunQuery($sql) {
        $data = array();
        $result = mysqli_query($this->connection,$sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function NumRow($sql) {
        $result = mysqli_query($this->connection,$sql);
        $count = mysqli_num_rows($result);
        return $count;
    }
}