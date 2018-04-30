<?php

class Worker
{
    /**
     * Work something
     */
    public function work()
    {
        // ....working
    }
}

class SuperWorker
{
    public function work()
    {
        //.... working much more
    }
}

class Manager
{
    protected $worker;

    /**
     * Set Worker
     *
     * @param Worker $w
     */
    public function setWorker(Worker $w)
    {
        $this->worker = $w;
    }

    public function manage()
    {
        $this->worker->work();
    }
}