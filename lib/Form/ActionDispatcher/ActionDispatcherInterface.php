<?php
/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

namespace EzSystems\RepositoryForms\Form\ActionDispatcher;

use eZ\Publish\API\Repository\Values\ValueObject;
use Symfony\Component\Form\FormInterface;

/**
 * Form action dispatchers can be used to abstract actions when a complex form is submitted.
 * Typical example is a multiple actions based form, with multiple submit buttons, where actions to take depend on
 * which submit button is clicked.
 *
 * This would basically help reducing the amount of code in the controller receiving the form submission request.
 */
interface ActionDispatcherInterface
{
    /**
     * Dispatches the action of a given form.
     *
     * @param FormInterface $form The form that has been submitted.
     * @param ValueObject $data Underlying data for the form. Most likely a create or update struct.
     * @param string $actionName The form action itself. Typically the form clicked button name.
     * @param array $options Arbitrary hash of options.
     */
    public function dispatchFormAction(FormInterface $form, ValueObject $data, $actionName, array $options = []);

    /**
     * Returns the generated response, if any. Typically a RedirectResponse.
     *
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function getResponse();
}
