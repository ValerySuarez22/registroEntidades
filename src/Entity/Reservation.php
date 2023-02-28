<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?Clientes $Cliente = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $TipoHabitacion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCliente(): ?Clientes
    {
        return $this->Cliente;
    }

    public function setCliente(?Clientes $Cliente): self
    {
        $this->Cliente = $Cliente;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->Fecha;
    }

    public function setFecha(\DateTimeInterface $Fecha): self
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    public function getTipoHabitacion(): ?string
    {
        return $this->TipoHabitacion;
    }

    public function setTipoHabitacion(string $TipoHabitacion): self
    {
        $this->TipoHabitacion = $TipoHabitacion;

        return $this;
    }
}
