<?php

namespace Hagedon\GreekIntro;

class Word
{
    protected $word;
    protected $translation;
    protected $image;
    protected $file;
    protected $startTime;
    protected $endTime;
    
    protected $transcriptions = array(
        'α' => 'ah'
    );
    
    public function __construct($word)
    {
        $this->word = $word;
    }
    
    public function transcribePhonetically()
    {
        $word = normalizer_normalize($this->word, \Normalizer::FORM_C);
        return mb_eregi_replace('α', 'ah', $word);
        //return mb_convert_case($word, MB_CASE_TITLE, "UTF-8");
    }
    
    public function translate()
    {
        
    }
    
    public function showImage()
    {
        return $this->image;
    }
}
