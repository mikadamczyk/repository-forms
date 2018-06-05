<?php
/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RepositoryForms\User;

use EzSystems\EzPlatformUser\ConfigResolver\ConfigurableRegistrationGroupLoader as BaseConfigurableRegistrationGroupLoader;

/**
 * Loads the registration user group from a configured, injected group ID.
 * @deprecated Deprecated in 1.1 and will be removed in 2.0. Please use \EzSystems\EzPlatformUser\ConfigResolver\ConfigurableRegistrationGroupLoader instead.
 */
class ConfigurableRegistrationGroupLoader extends BaseConfigurableRegistrationGroupLoader
{
}
