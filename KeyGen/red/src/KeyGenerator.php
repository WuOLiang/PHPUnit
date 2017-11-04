<?php

/**
 * Key gen & check
 * 
 * @author Liang <liang@twix.idv.tw>
 * @since 2017/11/04 Create
 */
class KeyGenerator{

    
    /**
     * @var string self::tokens 序號組成符號
     */
    const tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';

    /**
     * @var int $tokenLen 符號組長度
     */
    private $tokensLen = 0;
    
    /**
     * @var int $segmentChars 每段序號的長度
     */
    private $segmentChars = 0;

    /**
     * @var int $segmentsLen 本組序號共有幾段
     */
    private $segmentsLen = 0;

    /**
     * @var string $keyString 序號
     */
    private $keyString = '';

    /**
     * initial
     */
    public function __construct()
    {
        $this->tokensLen = strlen(SELF::tokens)-1;
        $this->segmentChars = 8;
        $this->segmentsLen = 1;
    }

    /**
     * 產生序號。
     * @author Liang <liang@twix.idv.tw>
     * @since 2017/11/04 Create
     */
    public function genKey()
    {
        return $this->keyString;
    }

    /**
     * checkKey：檢查輸入序號是否符合指定規則
     * 
     * @author Liang <liang@twix.idv.tw>
     * @since 2017/11/04 Create
     */
    public function checkKey($str)
    {
        $status = fasle;
        return $status;
    }
}

