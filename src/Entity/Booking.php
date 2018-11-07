<?php
/**
 * Created by PhpStorm.
 * User: Romaric
 * Date: 07/11/2018
 * Time: 12:36
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

class Booking
{

    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $numero_billet;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Room")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room;

    /**
     * @ORM\Column(type="Date")
     * @ORM\Column(type="string")
     */
    private $date_arrival;

    /**
     * @ORM\Column(type="Date")
     */
    private $date_departure;

    /**
     * @return string
     */
    public function getNumeroBillet(): string
    {
        return $this->numero_billet;
    }

    /**
     * @param string $numero_billet
     */
    public function setNumeroBillet(string $numero_billet): void
    {
        $this->numero_billet = $numero_billet;
    }

    /**
     * @return int
     */
    public function getRoom(): int
    {
        return $this->room;
    }

    /**
     * @param int $room
     */
    public function setRoom(int $room): void
    {
        $this->room = $room;
    }

    /**
     * @return mixed
     */
    public function getDateArrival()
    {
        return $this->date_arrival;
    }

    /**
     * @param mixed $date_arrival
     */
    public function setDateArrival($date_arrival): void
    {
        $this->date_arrival = $date_arrival;
    }

    /**
     * @return mixed
     */
    public function getDateDeparture()
    {
        return $this->date_departure;
    }

    /**
     * @param mixed $date_departure
     */
    public function setDateDeparture($date_departure): void
    {
        $this->date_departure = $date_departure;
    }


}