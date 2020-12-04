<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_ID_billets-ID", columns={"ID_billet"})})
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


}
