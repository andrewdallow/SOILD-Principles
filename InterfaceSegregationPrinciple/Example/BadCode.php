<?php

interface WorkerInterface
{
    public function work(): void;

    public function eat(): void;
}

/**
 * A worker that eats and works.
 */
class Worker implements WorkerInterface
{

    public function work(): void
    {
        // ...WORKING
    }

    public function eat(): void
    {
        // ... EATING
    }
}

class Robot implements WorkerInterface
{
    public function work(): void
    {
        // ...WORKING
    }

    public function eat(): void
    {
        // ... I don't eat!
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