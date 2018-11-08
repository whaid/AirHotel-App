<?php
/**
 * Created by PhpStorm.
 * User: Romaric
 * Date: 08/11/2018
 * Time: 11:48
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="room_type")
 */
class TicketsValides
{
    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\Column(type="string")
     */
    private $numero_ticket;

    /**
     * @return string
     */
    public function getNumeroTicket(): string
    {
        return $this->numero_ticket;
    }

    /**
     * @param string $numero_ticket
     */
    public function setNumeroTicket(string $numero_ticket): void
    {
        $this->numero_ticket = $numero_ticket;
    }
}