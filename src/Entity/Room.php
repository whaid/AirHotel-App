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
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
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