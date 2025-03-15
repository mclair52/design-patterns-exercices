<?php

namespace App;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class MusicBand 
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    private $observers;
    public function __construct(private string $name,private array $concerts = []) {
        $this->observers = new SplObjectStorage();
    }

    public function addNewConcertDate(string $date, string $location):void
    {
        $this->concert = [
            'date' =>  $date,
            'location' => $location
        ];
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function attach(SplObserver $observer): void 
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void 
    {
        $this->observers->detach($observer);
    }
}