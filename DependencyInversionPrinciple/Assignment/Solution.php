<?php

namespace DIP;

/**
 * Interface Workerable implemented by classes that can work.
 */
interface Workerable
{
    public function work(): void;
}

class Worker implements Workerable
{
    /**
     * Work something
     */
    public function work(): void
    {
        // ....working
    }
}

class SuperWorker implements Workerable
{
    public function work(): void
    {
        //.... working much more
    }
}

class Manager
{
    /** @var Workerable */
    protected $worker;

    /**
     * Set Worker
     *
     * @param Workerable $w
     */
    public function setWorker(Workerable $w): void
    {
        $this->worker = $w;
    }

    public function manage()
    {
        $this->worker->work();
    }
}
