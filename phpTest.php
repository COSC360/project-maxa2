<?php
    use PHPUnit\Framework\TestCase;

    //Test checks if page loads properly
    class Test extends PHPUnit_Framework_TestCase{
        public function test(){
            $content = file_get_contents("homepage.php");
            $this->assertNotEmpty($content);

            
        }
    }

?>