<?php
use PHPUnit\Framework\TestCase;
class KeyGeneratorTest extends TestCase{
    
    public function testGenKey()
    {
        $keyGen = new KeyGenerator();
        $keyString = $keyGen->genKey();
        
        //測試字串長度是否為8碼
        $this->assertEquals(8, strlen($keyString));
    }

    /**
     * @test
     * @dataProvider keyProvider
     */
    public function checkKeyTest($key)
    {
        $keyGen = new KeyGenerator();
        $status = $keyGen->checkKey($key);

        //測試是否符合格式
        $this->assertTrue($status);
    }

    public function keyProvider()
    {
        return [['IJKL1234']];
    }
}