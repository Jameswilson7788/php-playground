<?php
    namespace Framework {
        class Hello {
            public function world(){
                echo "<h1>Hello World</h1>";
            }
        }
    }

    namespace Foo {

        use Framework\Hello as Hello;

        class Bar {
            public function __construct() {
                $hello = new Hello();
                $hello-> world();
            }
            public function bar() {
                echo "Bar";
            }
        }
    }
    
    namespace {
        $hello = new Framework\Hello();
        $hello->world();

        $foo = new Foo\Bar();
        $foo->bar();
    }