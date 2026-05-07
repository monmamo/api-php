<?php
/*
* File: Config.php
* Category: -
* Author: M.Goldenbaum
* Created: 10.04.24 15:42
* Updated: -
*
* Description:
*  -
*/

namespace App\Email;

use App\Email\Decoder\DecoderInterface;
use App\Email\Exceptions\DecoderNotFoundException;

/**
 * Class Config
 *
 * @package Email
 */
class Config {

    /**
     * Configuration array
     * @var array $config
     */
    protected array $config = [];

    /**
     * Config constructor.
     * @param array $config
     */
    public function __construct(array $config = []) {
        $this->config = $config;
    }

    /**
     * Get a dotted config parameter
     * @param string $key
     * @param null $default
     *
     * @return mixed|null
     */
    public function get(string $key, $default = null): mixed {
       
        return config('imap.' . $key, $default);
    }

    /**
     * Set a dotted config parameter
     * @param string $key
     * @param string|array|mixed$value
     *
     * @return void
     */
    public function set(string $key, mixed $value): void {
        $parts = explode('.', $key);
        $config = &$this->config;

        foreach ($parts as $part) {
            if (!isset($config[$part])) {
                $config[$part] = [];
            }
            $config = &$config[$part];
        }

        if(is_array($config) && is_array($value)){
            $config = array_merge($config, $value);
        }else{
            $config = $value;
        }
    }

    /**
     * Get the decoder for a given name
     * @param $name string Decoder name
     *
     * @return DecoderInterface
     * @throws DecoderNotFoundException
     */
    public function getDecoder(string $name): DecoderInterface {
        $default_decoders = $this->get('decoding.decoder', [
            'header' => \App\Email\Decoder\HeaderDecoder::class,
            'message' => \App\Email\Decoder\MessageDecoder::class,
            'attachment' => \App\Email\Decoder\AttachmentDecoder::class
        ]);
        $options = $this->get('decoding.options', [
            'header' => 'utf-8',
            'message' => 'utf-8',
            'attachment' => 'utf-8',
        ]);
        if (isset($default_decoders[$name])) {
            if (class_exists($default_decoders[$name])) {
                return new $default_decoders[$name]($options);
            }
        }
        throw new DecoderNotFoundException();
    }

    /**
     * Get the mask for a given section
     * @param string $section section name such as "message" or "attachment"
     *
     * @return string|null
     */
    public function getMask(string $section): ?string {
        $default_masks = $this->get('masks', []);
        if (isset($default_masks[$section])) {
            if (class_exists($default_masks[$section])) {
                return $default_masks[$section];
            }
        }
        return null;
    }

    /**
     * Get the account configuration.
     * @param string|null $name
     *
     * @return self
     */
    public function getClientConfig(?string $name): self {
        $config = $this->all();
        $defaultName = $this->getDefaultAccount();
        $defaultAccount = $this->get('accounts.'.$defaultName, []);

        if ($name === null || $name === 'null' || $name === "") {
            $account = $defaultAccount;
            $name = $defaultName;
        }else{
            $account = $this->get('accounts.'.$name, $defaultAccount);
        }

        $config["default"] = $name;
        $config["accounts"] = [
            $name => $account
        ];

        return new self($config);
    }

    /**
     * Get the name of the default account.
     *
     * @return string
     */
    public function getDefaultAccount(): string {
        return $this->get('default', 'default');
    }

    /**
     * Set the name of the default account.
     * @param string $name
     *
     * @return void
     */
    public function setDefaultAccount(string $name): void {
        $this->set('default', $name);
    }

    /**
     * Create a new instance of the Config class
     * @param array|string $config
     * @return Config
     */
    public static function make(array|string $config = []): Config {

        return new self(config('imap'));
    }


    /**
     * Get all configuration values
     * @return array
     */
    public function all(): array {
        return $this->config;
    }

    /**
     * Check if a configuration value exists
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool {
        return $this->get($key) !== null;
    }

    /**
     * Remove all configuration values
     * @return $this
     */
    public function clear(): static {
        $this->config = [];
        return $this;
    }
}