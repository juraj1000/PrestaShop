<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

use PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Class TranslationTypeByNameChoiceProvider provides translation type choices.
 */
final class TranslationTypeChoiceProvider implements FormChoiceProviderInterface
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
        return [
            $this->translator->trans('Back office translations', [], 'Admin.International.Feature') => 'back',
            $this->translator->trans('Front office Translations', [], 'Admin.International.Feature') => 'themes',
            $this->translator->trans('Installed modules translations', [], 'Admin.International.Feature') => 'modules',
            $this->translator->trans('Email translations', [], 'Admin.International.Feature') => 'mails',
            $this->translator->trans('Other translations', [], 'Admin.International.Feature') => 'others',
        ];
    }

    /**
     * Get Main choices export translations form.
     */
    public function getExportMainChoices(): array
    {
        return [
            $this->translator->trans('PrestaShop translations', [], 'Admin.International.Feature') => 'core',
            $this->translator->trans('Theme translations', [], 'Admin.International.Feature') => 'themes',
            $this->translator->trans('Installed modules translations', [], 'Admin.International.Feature') => 'modules',
        ];
    }

    public function getExportCoreChoices()
    {
        return [
            $this->translator->trans('Back office translations', [], 'Admin.International.Feature') => 'back',
            $this->translator->trans('Front office Translations', [], 'Admin.International.Feature') => 'front',
            $this->translator->trans('Email translations', [], 'Admin.International.Feature') => 'mails',
            $this->translator->trans('Other translations', [], 'Admin.International.Feature') => 'others',
        ];
    }
}
