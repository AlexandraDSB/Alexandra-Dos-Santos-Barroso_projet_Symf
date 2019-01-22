<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainerShipRepository")
 * @ORM\Table(name="CONTAINERSHIP")
 */
class ContainerShip
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NAME", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CAPTAIN_NAME", type="string", length=255, nullable=true)
     */
    private $captainName;

    /**
     * @var int
     *
     * @ORM\Column(name="CONTAINER_LIMIT", type="integer", nullable=false)
     */
    private $containerLimit;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getCaptainName()
    {
        return $this->captainName;
    }

    /**
     * @param null|string $captainName
     */
    public function setCaptainName($captainName)
    {
        $this->captainName = $captainName;
    }

    /**
     * @return string
     */
    public function getContainerLimit(): string
    {
        return $this->containerLimit;
    }

    /**
     * @param int $containerLimit
     */
    public function setContainerLimit(int $containerLimit)
    {
        $this->containerLimit = $containerLimit;
    }


}
