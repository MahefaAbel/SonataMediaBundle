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

namespace Mahefa\Sonata\MediaBundle\Generator;

use Mahefa\Sonata\MediaBundle\Model\MediaInterface;

interface GeneratorInterface
{
    /**
     * @throws \InvalidArgumentException if path cannot be generated for $media
     */
    public function generatePath(MediaInterface $media): string;
}
