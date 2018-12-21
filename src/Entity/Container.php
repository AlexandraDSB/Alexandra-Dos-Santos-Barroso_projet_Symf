<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 21/12/2018
 * Time: 13:41
 */

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
    private $container_model_id ;

    /**
     * @var int
     *
     * @ORM\Column(name="CONTAINERSHIP_ID", type="integer", nullable=false)
     */
    private $containership_id;

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
        return $this->container_model_id;
    }

    /**
     * @param int $container_model_id
     */
    public function setContainerModelId(int $container_model_id)
    {
        $this->container_model_id = $container_model_id;
    }

    /**
     * @return int
     */
    public function getContainershipId(): int
    {
        return $this->containership_id;
    }

    /**
     * @param int $containership_id
     */
    public function setContainershipId(int $containership_id)
    {
        $this->containership_id = $containership_id;
    }

    public function __toString()
    {
        if($this->id) {
            return 'Container n°' . $this->id;
        }
        return 'Container without id';
    }





}