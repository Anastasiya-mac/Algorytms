<?php

namespace Observer;
use SplSubject;
use SplObserver;
use SplObjectStorage;

class Vacancy implements SplSubject
{
    private $vacancy;
    
    public function __construct(string $vacancy)
    {
        $this->vacancy = $vacancy;
        $this->observers = new SplObjectStorage();
    }
 
    public function getVacancy()
    {
        return $this->vacancy;
    }
    
    
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
 
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function newVacancy(string $vacancy)
    {
        $this->vacancy = $vacancy;
        $this->notify();
    }

}
