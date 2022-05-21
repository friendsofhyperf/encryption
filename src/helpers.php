<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/2.x/README.md
 * @contact  huangdijia@gmail.com
 */
if (! function_exists('decrypt')) {
    /**
     * Decrypt the given value.
     *
     * @param string $value
     * @param bool $unserialize
     * @return mixed
     */
    function decrypt($value, $unserialize = true)
    {
        return \Hyperf\Utils\ApplicationContext::getContainer()
            ->get(\Friendsofhyperf\Encryption\Encrypter::class)
            ->decrypt($value, $unserialize);
    }
}

if (! function_exists('encrypt')) {
    /**
     * Encrypt the given value.
     *
     * @param mixed $value
     * @param bool $serialize
     * @return string
     */
    function encrypt($value, $serialize = true)
    {
        return \Hyperf\Utils\ApplicationContext::getContainer()
            ->get(\Friendsofhyperf\Encryption\Encrypter::class)
            ->encrypt($value, $serialize);
    }
}
