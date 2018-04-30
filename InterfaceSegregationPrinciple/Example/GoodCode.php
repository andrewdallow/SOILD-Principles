<?php

interface WorkableInterface
{
    public function work(): void;
}

interface FeedableInterface
{
    public function eat(): void;
}


/**
 * A worker that eats and works.
 */
class Worker implements WorkerInterface, FeedableInterface
{

    public function work(): void
    {
        // ...WORKING
    }

    public function eat(): void
    {
        // ... Eating in lunch break
    }
}

class Robot implements WorkableInterface
{

    public function work(): void
    {
        //  ... always working.
    }
}

class SuperWorker implements WorkableInterface, FeedableInterface
{
    public function work(): void
    {
        // ...working much more
    }

    public function eat(): void
    {
        // ... Eating in lunch break
    }
}

/**
 * Manage the workers.
 */
class Manager
{
    /** @var WorkerInterface */
    private $_worker;

    public function setWorker(WorkerInterface $worker): void
    {
        $this->_worker = $worker;
    }

    public function manage(): void
    {
        $this->_worker->work();
    }
}