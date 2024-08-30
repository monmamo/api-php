<?php

namespace App\Methods\Dump;

trait DumpInnerValue
{
    /**
     * NOTE Does not implement \App\Contracts\Dumps::dump, which does not allow for additional arguments.
     *
     * @group variadic
     * @group fluent
     *
     * @uses \App\Dumping\dumpLabeled
     * @uses \App\Options\unwrap
     */
    public function dump(array $additional_arguments = []): static
    {
        $context = ['value' => \App\Options\unwrap($this)];

        foreach ($additional_arguments as $key => $value) {
            $context['context:' . $key] = $value;
        }
        \App\Dumping\dumpLabeled($context); // dumps depending on environment and verbosity

        return $this;
    }
}
