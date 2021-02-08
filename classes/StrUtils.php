<?php

class StrUtils
{
    private string $str;
    private string $strReset;

    /**
     * StrUtils constructor.
     * @param string $str
     */
    public function __construct(string $str)
    {
        $this->str = $str;
        $this->strReset = $str;
    }

    public function bold(){
        $this->str = "<strong>" . $this->str . "</strong>";
    }

    public function italic(){
        $this->str = "<i>" . $this->str . "</i>";
    }

    public function underline(){
        $this->str = "<u>" . $this->str . "</u>";
    }

    public function capitalize(){
        $this->str = "<span style='text-transform: capitalize'>" . $this->str . "</span>";
    }

    public function uglify(){
        $this->bold();
        $this->italic();
        $this->capitalize();
    }

    public function reset(){
        $this->str = $this->strReset;
    }

    public function __toString()
    {
        return $this->str . "<br>";
    }
}