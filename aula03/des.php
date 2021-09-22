<?php
class A {
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
        echo "construct {$this->id} foi criado<br>";
    }

    public function __destruct()
    {
        echo "destruct {$this->id}<br>";
    }
}

$a = new A(1);
echo "-------------<br>";
$aa = new A(2);
echo "=============<br>";
?>