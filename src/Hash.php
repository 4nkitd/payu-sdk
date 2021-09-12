<?php

namespace PayU\Sdk;

class Hash extends Api
{

    public string $reverseHashString = "";
    public string $HashString = "";

    protected Array $vars;

    public function setVars(Array $vars) {
        $this->vars = $vars;
        $this->cleanVars();
    }

    public function createHashString()
    {
        $this->HashString = implode("|", $this->vars);
        return $this->createHash($this->HashString);
    }

    public function createHashReverseString()
    {
        $this->reverseHashString = implode(
            "|",
            array_reverse($this->vars)
        );
        return $this->createHash($this->HashString);

    }

    private function createHash(string $status)
    {
        return strtolower(
            hash(
                'sha512',
                $this->salt
                . '|' .
                $status
                . '|' .
                $this->reverseKeyString
            )
        );
    }

    private function cleanVars()
    {
        if (isset($this->vars['salt'])) {
            unset($this->vars['salt']);
        }
        if (isset($this->vars['status'])) {
            unset($this->vars['status']);
        }
        if (isset($this->vars['hash'])) {
            unset($this->vars['hash']);
        }
    }
}
