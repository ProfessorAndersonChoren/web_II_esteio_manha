<?php

namespace APP\Model;

class Client
{
    private string $cpf;
    private string $fullname;
    private string $phone;
    private bool $status;

    private array $fillable;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
        $this->fillable = ['fullname', 'phone', 'status'];
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value): void
    {
        if (in_array($attribute, $this->fillable))
            $this->$attribute = $value;
    }
}
