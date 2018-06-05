<?php
/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RepositoryForms\User;

use EzSystems\EzPlatformUser\ConfigResolver\ConfigurableRegistrationContentTypeLoader as BaseConfigurableRegistrationContentTypeLoader;

/**
 * Loads the registration content type from a configured, injected content type identifier.
 * @deprecated Deprecated in 1.1 and will be removed in 2.0. Please use \EzSystems\EzPlatformUser\ConfigResolver\ConfigurableRegistrationContentTypeLoader instead.
 */
class ConfigurableRegistrationContentTypeLoader extends BaseConfigurableRegistrationContentTypeLoader
{
}
