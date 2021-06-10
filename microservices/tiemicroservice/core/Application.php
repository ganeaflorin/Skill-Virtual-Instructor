<?php
namespace tie\core;
class Application {
    public Database $db;
    public static Application $app;
    public function __construct(array $config) {
        $this->db = new Database($config['db']);
        self::$app = $this;
    }
}
?>