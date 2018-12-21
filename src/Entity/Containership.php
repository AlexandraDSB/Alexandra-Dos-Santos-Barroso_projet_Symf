<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Container
 *
 * @ORM\Table(name="CONTAINER", indexes={@ORM\Index(name="ID", columns={"ID"})})
 * @ORM\Entity
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
     * @var int
     *
     * @ORM\Column(name="CAPTAIN_NAME", type="integer", nullable=false)
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
    }/**
     * @return null|string
    */
    public function getName()
    {
        return $this->name;
    }/**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }/**
     * @return int
     */
    public function getCaptainName(): int
    {
        return $this->captain_name;
    }/**
 * @param int $captain_name
 */
    public function setCaptainName(int $captain_name)
    {
        $this->captain_name = $captain_name;
    }/**
 * @return int
 */
    public function getContainersLimit(): int
    {
        return $this->containers_limit;
    }/**
 * @param int $containers_limit
 */
    public function setContainersLimit(int $containers_limit)
    {
        $this->containers_limit = $containers_limit;
    }





}
