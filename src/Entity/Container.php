<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContainerRepository")
 * @ORM\Table(name="CONTAINER")
 */
class Container
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
     * @ORM\Column(name="COLOR", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var int
     *
     * @ORM\Column(name="CONTAINER_MODEL_ID", type="integer", nullable=false)
     */
    private $containerModelId;

    /**
     * @var int
     *
     * @ORM\Column(name="CONTAINERSHIP_ID", type="integer", nullable=false)
     */
    private $containerShipId;

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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param null|string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getContainerModelId(): int
    {
        return $this->containerModelId;
    }

    /**
     * @param int $containerModelId
     */
    public function setContainerModelId(int $containerModelId)
    {
        $this->containerModelId = $containerModelId;
    }

    /**
     * @return int
     */
    public function getContainerShipId(): int
    {
        return $this->containerShipId;
    }

    /**
     * @param int $containerShipId
     */
    public function setContainerShipId(int $containerShipId)
    {
        $this->containerShipId = $containerShipId;
    }

    public function __toString()
    {
        if ($this->id) {
            return 'Container n°' . $this->id;
        }
        return 'Container without id';
    }


}