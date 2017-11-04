<?php

/**
 * Key gen & check
 * 
 * @author Liang <liang@twix.idv.tw>
 * @since 2017/11/04 Liang Create
 */
class KeyGenerator{

    const tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
    private $tokensLen = 0;
    private $segmentChars = 0;//每段序號的長度
    private $segmentsLen = 0;//本組序號共有幾段
    private $keyString = '';//序號

    public function __construct($segmentChars = 8,$segmentsLen = 1)
    {
        $this->tokensLen = strlen(tokens);
        $this->segmentChars = $segmentChars;
        $this->segmentsLen = $segmentsLen;
    }

    public function genKey()
    {
        return $this->keyString;
    }

    public function checkKey($str)
    {
        $status = fasle;
        return $status;
    }
}

