<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Comments
 * @ApiResource(
 *      collectionOperations={
 *           "GET", 
 *           "POST", 
 *      },
 *      itemOperations={
 *          "DELETE",
 *          "PUT"
 *      }
 * )
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_ID_billets_ID", columns={"ID_billet"})})
 * @ORM\Entity
 */
class Comments
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
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="User is required")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="contentsDb", type="text", length=16777215, nullable=false)
     * @Assert\NotBlank(message="Content is required")
     */
    private $contentsdb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDb", type="datetime", nullable=true)
     */
    private $datedb;

    /**
     * @var \Billets
     *
     * @ORM\ManyToOne(targetEntity="Billets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_billet", referencedColumnName="ID")
     * })
     * @Assert\NotBlank(message="Billet is required")
     */
    private $idBillet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getContentsdb(): ?string
    {
        return $this->contentsdb;
    }

    public function setContentsdb(string $contentsdb): self
    {
        $this->contentsdb = $contentsdb;

        return $this;
    }

    public function getDatedb(): ?\DateTimeInterface
    {
        return $this->datedb;
    }

    public function setDatedb(?\DateTimeInterface $datedb): self
    {
        $this->datedb = $datedb;

        return $this;
    }

    public function getIdBillet()
    {
        return $this->idBillet;
    }

    public function setIdBillet(?Billets $idBillet): self
    {
        $this->idBillet = $idBillet;

        return $this;
    }


}
