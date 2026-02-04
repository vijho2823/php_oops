<?php
class First{
    const Example = "This is Constant Variable";


    public static function test(){
        echo self::Example;
    }
}
// $obj = new First();
// $obj->testing();
?>