<?php
/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

namespace EzSystems\RepositoryForms\Form\ActionDispatcher;

use EzSystems\RepositoryForms\Event\RepositoryFormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentTypeDispatcher extends AbstractActionDispatcher
{
    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired('languageCode');
    }

    protected function getActionEventBaseName()
    {
        return RepositoryFormEvents::CONTENT_TYPE_UPDATE;
    }
}
