<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainershipRepository")
 * @ORM\Table(name="CONTAINERSHIP")
 */

class Containership
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
    private $captain_name;

    /**
     * @var int
     *
     * @ORM\Column(name="CONTAINER_LIMIT", type="integer", nullable=false)
     */
    private $containers_limit;

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
        return $this->captain_name;
    }

    /**
     * @param null|string $captain_name
     */
    public function setCaptainName($captain_name)
    {
        $this->captain_name = $captain_name;
    }

    /**
     * @return string
     */
    public function getContainersLimit(): string
    {
        return $this->containers_limit;
    }

    /**
     * @param int $containers_limit
     */
    public function setContainersLimit(int $containers_limit)
    {
        $this->containers_limit = $containers_limit;
    }














}
