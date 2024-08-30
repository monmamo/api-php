<?php

namespace App\Strings;

use App\Concerns\AlwaysDefined;
use App\Concerns\SerializesValueProperty;
use App\Contracts\Emptyable;
use App\Exceptions\Handler;
use App\Exceptions\InvalidEmailAddressException;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Stringable;
use Spatie\Html\Elements;

class EmailAddress extends Stringable implements Emptyable, Htmlable
{
    use AlwaysDefined;
    use SerializesValueProperty;

    public const DEVELOPMENT_DESTINATION_DOMAIN = 'netshapers.net';

    private string $_domain;

    private string $_user;

    /**
     * @group nonary
     *
     * @uses \App\Dumping\dump
     * @uses \App\Exceptions\InvalidEmailAddressException::__construct
     * @uses \explode
     * @uses \is_string (native) Returns whether a variable is a string.
     * @uses \strpos (native) Returns the position of the first occurrence of a substring in a string.
     * @uses \trim (native) Strips whitespace from the beginning and end of a string.
     *
     * @throws \App\Exceptions\InvalidEmailAddressException
     */
    public function check(): void
    {
        \assert(\is_string($this->value));

        $value_proxy = \trim($this->value);

        if ($value_proxy === '') {
            throw new InvalidEmailAddressException(message: 'blank email address');
        }

        if (\strpos($value_proxy, '@') === false) {
            \App\Dumping\dump($this->value); // 🔒
            throw new InvalidEmailAddressException(address: $this->value);
        }

        [$this->_user, $this->_domain] = \explode('@', $value_proxy, 2);
        $this->_user = \trim($this->_user);
        $this->_domain = \trim($this->_domain);

        if ($this->_user === '') {
            \App\Dumping\dump($this->value); // 🔒
            throw new InvalidEmailAddressException(
                address: $this->value,
                message: 'blank user',
            );
        }

        if ($this->_domain === '') {
            \App\Dumping\dump($this->value); // 🔒
            throw new InvalidEmailAddressException(
                address: $this->value,
                message: 'blank domain',
            );
        }

        // Checks DNS records for the domain.
        // if (!checkdnsrr($this->_domain)) {
        //     Handler::dump($this->value); // 🔒
        //     throw new InvalidEmailAddressException(
        //         address: $this->value,
        //         message: "domain '$this->_domain' not valid according to DNS"
        //     );
        // }
    }

    /**
     * @group nonary
     */
    public function domain(): string
    {
        return $this->_domain;
    }

    /**
     * Returns content as a string of HTML.
     *
     * @implements \Illuminate\Contracts\Support\Htmlable::toHtml (which DOES NOT declare a return type)
     * @group nonary
     *
     * @uses \Spatie\Html\Elements\A::href
     * @uses \Spatie\Html\Elements\A::text
     * @uses self::isEmpty
     *
     * @return string
     */
    public function toHtml()
    {
        if ($this->isEmpty()) {
            return '';
        }

        $element = new Elements\A();

        return $element->href('email:' . $this)->text($this);
    }

    /**
     * @group nonary
     */
    public function user(): string
    {
        return $this->_user;
    }
}
