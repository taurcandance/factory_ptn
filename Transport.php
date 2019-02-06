<?php

namespace Transport;


interface Transport
{
    public function deliver(): array;

    public function download(): array;

    public function unload(): array;
}