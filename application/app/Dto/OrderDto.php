<?php

namespace App\Dto;

class OrderDto
{
    private string $name;
    private string $type;
    private string $order_date;
    private string $job_time;
    private string $start_date;
    private string $finish_date;
    private float $coordinate_x;
    private float $coordinate_y;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getOrderDate(): string
    {
        return $this->order_date;
    }

    public function setOrderDate(string $order_date): void
    {
        $this->order_date = $order_date;
    }

    public function getJobTime(): string
    {
        return $this->job_time;
    }

    public function setJobTime(string $job_time): void
    {
        $this->job_time = $job_time;
    }

    public function getStartDate(): string
    {
        return $this->start_date;
    }

    public function setStartDate(string $start_date): void
    {
        $this->start_date = $start_date;
    }

    public function getFinishDate(): string
    {
        return $this->finish_date;
    }

    public function setFinishDate(string $finish_date): void
    {
        $this->finish_date = $finish_date;
    }

    public function getCoordinateX(): float
    {
        return $this->coordinate_x;
    }

    public function setCoordinateX(float $coordinate_x): void
    {
        $this->coordinate_x = $coordinate_x;
    }

    public function getCoordinateY(): float
    {
        return $this->coordinate_y;
    }

    public function setCoordinateY(float $coordinate_y): void
    {
        $this->coordinate_y = $coordinate_y;
    }

}
