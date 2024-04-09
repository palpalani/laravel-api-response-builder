<?php

declare(strict_types=1);

namespace MarcinOrlowski\ResponseBuilder\Tests\Models;

/**
 * Laravel API Response Builder
 *
 * @author    Marcin Orlowski <mail (#) marcinOrlowski (.) com>
 * @copyright 2016-2023 Marcin Orlowski
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 *
 * @link      https://github.com/MarcinOrlowski/laravel-api-response-builder
 */

/**
 * Class TestModel to verify auto-conversion feature
 */
class TestModelJsonSerializable implements \JsonSerializable
{
    /**
     * TestModelJsonSerializable constructor.
     *
     * @noinspection PhpMissingParamTypeInspection
     */
    public function __construct(protected mixed $val)
    {
    }

    public function getVal(): string
    {
        return $this->val;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return $this->val;
    }
} // end of class
