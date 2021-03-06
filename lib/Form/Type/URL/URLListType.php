<?php

/**
 * This file is part of the eZ RepositoryForms package.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\RepositoryForms\Form\Type\URL;

use EzSystems\RepositoryForms\Data\URL\URLListData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * URL list form.
 */
class URLListType extends AbstractType
{
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    private $translator;

    /**
     * URLListType constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('status', ChoiceType::class, [
            'choices' => [
                $this->translator->trans('url.status.invalid', [], 'ezrepoforms_url') => false,
                $this->translator->trans('url.status.valid', [], 'ezrepoforms_url') => true,
            ],
            'placeholder' => $this->translator->trans('url.status.all', [], 'ezrepoforms_url'),
            'required' => false,
        ]);

        $builder->add('searchQuery', SearchType::class, [
            'required' => false,
        ]);

        $builder->add('limit', HiddenType::class);
        $builder->add('page', HiddenType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => URLListData::class,
            'translation_domain' => 'ezrepoforms_url',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ezrepoforms_url_list';
    }
}
