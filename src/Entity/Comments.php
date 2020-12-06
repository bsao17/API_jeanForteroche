<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 * @ApiResource
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
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="contentsDb", type="text", length=16777215, nullable=false)
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

    public function getIdBillet(): ?Billets
    {
        return $this->idBillet;
    }

    public function setIdBillet(?Billets $idBillet): self
    {
        $this->idBillet = $idBillet;

        return $this;
    }


}
