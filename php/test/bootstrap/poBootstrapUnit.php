<?php

class poBootstrapUnit
{
    private $_testDir = null;
    private $_testTrashDir = null;

    public function __construct()
    {
        $this->_setTestDir();
        $this->_setTestTrashDir();
    }

    private function _setTestDir()
    {
        $this->_testDir = realpath(dirname(__FILE__).'/..');
    }

    public function getTestDir()
    {
        return $this->_testDir;
    }

    private function _setTestTrashDir()
    {
        $this->_testTrashDir = sprintf('%s/%s', $this->getTestDir(), 'trash');
    }

    public function getTestTrashDir()
    {
        return $this->_testTrashDir;
    }

}