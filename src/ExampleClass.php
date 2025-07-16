<?php

namespace App;

use JsonSerializable;

final class ExampleClass implements JsonSerializable
{
    /*
     * Note: This class should define a return-type but doesn't.
     */
    public function jsonSerialize()
    {
        return [
            'foo' => 'bar'
        ];
    }
}
