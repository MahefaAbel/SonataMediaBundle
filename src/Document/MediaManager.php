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

namespace Mahefa\Sonata\MediaBundle\Document;

use Sonata\Doctrine\Document\BaseDocumentManager;
use Mahefa\Sonata\MediaBundle\Model\MediaInterface;
use Mahefa\Sonata\MediaBundle\Model\MediaManagerInterface;

/**
 * @phpstan-extends BaseDocumentManager<MediaInterface>
 */
final class MediaManager extends BaseDocumentManager implements MediaManagerInterface
{
}
