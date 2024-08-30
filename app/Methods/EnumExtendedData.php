<?php

namespace App\Methods;

trait EnumExtendedData
{
    /**
     * @group nonary
     */
    abstract protected function generateSpecs(): \Traversable;

    /**
     * Retrieves the instance as an array.
     *
     * @implements \Illuminate\Contracts\Support\Arrayable::toArray
     * @group caching
     * @group nonary
     *
     * @uses \iterator_to_array (native) Copies the output of an iterator into an array.
     * @uses \App\Methods\EnumExtendedData::generateSpecs
     *
     * @return array<TKey, TValue>
     */
    public function toArray()
    {
        $generate = function (): \Traversable {
            foreach ($this->generateSpecs() as $enum => $spec) {
                $array = [
                    'id' => $enum->value,
                    'name' => $enum->name,
                ];

                foreach ($spec as $key => $value) {
                    $array[$key] = $value;
                }
                yield $enum->value => $array;
            }
        };

        static $specs;
        $specs ??= \iterator_to_array($generate());
        return $specs[$this->value];
    }
}
