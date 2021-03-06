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
        for ($i = 0; $i < $this->segmentsLen; $i++) {
            
            $segment = '';
            
            //以亂數產生指定段落長度的序號
            for ($j = 0; $j < $this->segmentChars; $j++) {
                    $segment .= SELF::tokens[rand(0, $this->tokensLen)];
            }
    
            $this->keyString .= $segment;
            
            //段與段之間的分隔符號
            if ($i < ($this->segmentsLen - 1)) {
                    $this->keyString .= '-';
            }
    
        }
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
        //預設檢查不符合
        $status = fasle;
        
        //序號總長度為(每段字數 * 幾個段落) + (幾個段落 - 1)
        $keyLen = ($this->segmentChars * $this->segmentsLen) + ($this->segmentsLen - 1);
        
        //比較序號長度是否符合
        if(strlen($str) == $keyLen){
            $status = true;
        }
        return $status;
    }
}

