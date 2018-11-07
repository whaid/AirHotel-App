<?php
/**
 * This file is a part of AirHotel-App
 *
 * Room.php
 *
 * @author      Vincent CLAVEAU <vinc.claveau@gmail.com>
 * @copyright   2018 Vincent CLAVEAU
 * @date        06/11/2018
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="room")
 */
class Room
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var RoomType
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\RoomType")
     * @ORM\JoinColumn(referencedColumnName="name", nullable=false)
     */
    private $roomType;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $state;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $smokingAllowed;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $animalAllowed;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $handicappedAccess;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return RoomType
     */
    public function getRoomType(): RoomType
    {
        return $this->roomType;
    }

    /**
     * @param RoomType $roomType
     */
    public function setRoomType(RoomType $roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function getState(): bool
    {
        return $this->state;
    }

    /**
     * @param bool $state
     */
    public function setState(bool $state): void
    {
        $this->state = $state;
    }

    /**
     * @return bool
     */
    public function isSmokingAllowed(): bool
    {
        return $this->smokingAllowed;
    }

    /**
     * @param bool $smokingAllowed
     */
    public function setSmokingAllowed(bool $smokingAllowed): void
    {
        $this->smokingAllowed = $smokingAllowed;
    }

    /**
     * @return bool
     */
    public function isAnimalAllowed(): bool
    {
        return $this->animalAllowed;
    }

    /**
     * @param bool $animalAllowed
     */
    public function setAnimalAllowed(bool $animalAllowed): void
    {
        $this->animalAllowed = $animalAllowed;
    }

    /**
     * @return bool
     */
    public function isHandicappedAccess(): bool
    {
        return $this->handicappedAccess;
    }

    /**
     * @param bool $handicappedAccess
     */
    public function setHandicappedAccess(bool $handicappedAccess): void
    {
        $this->handicappedAccess = $handicappedAccess;
    }
}