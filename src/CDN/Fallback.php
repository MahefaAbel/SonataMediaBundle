<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\CDN;

final class Fallback implements CDNInterface
{
    /**
     * @var CDNInterface
     */
    private $cdn;

    /**
     * @var CDNInterface
     */
    private $fallback;

    public function __construct(CDNInterface $cdn, CDNInterface $fallback)
    {
        $this->cdn = $cdn;
        $this->fallback = $fallback;
    }

    public function getPath($relativePath, $isFlushable)
    {
        if ($isFlushable) {
            return $this->fallback->getPath($relativePath, $isFlushable);
        }

        return $this->cdn->getPath($relativePath, $isFlushable);
    }

    public function flushByString($string)
    {
        return $this->cdn->flushByString($string);
    }

    public function flush($string)
    {
        return $this->cdn->flush($string);
    }

    public function flushPaths(array $paths)
    {
        return $this->cdn->flushPaths($paths);
    }

    public function getFlushStatus($identifier)
    {
        return $this->cdn->getFlushStatus($identifier);
    }
}
