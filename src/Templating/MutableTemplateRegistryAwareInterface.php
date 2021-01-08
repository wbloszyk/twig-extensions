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

namespace Sonata\Twig\Templating;

/**
 * @author Wojciech Błoszyk <wbloszyk@gmail.com>
 *
 * @method MutableTemplateRegistryInterface getTemplateRegistry()
 * @method bool                             hasTemplateRegistry()
 * @method void                             setTemplateRegistry(MutableTemplateRegistryInterface $templateRegistry)
 */
interface MutableTemplateRegistryAwareInterface
{
    // NEXT_MAJOR: uncomment this method
    //public function getTemplateRegistry(): MutableTemplateRegistryInterface;

    // NEXT_MAJOR: uncomment this method
    //public function hasTemplateRegistry(): bool;

    // NEXT_MAJOR: uncomment this method
    //public function setTemplateRegistry(MutableTemplateRegistryInterface $templateRegistry): void;
}
