<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ThemeBundle\Form\Type;

use Sylius\Bundle\ThemeBundle\Model\ThemeInterface;
use Sylius\Bundle\ThemeBundle\Repository\ThemeRepositoryInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ThemeChoiceType extends AbstractType
{
    private ThemeRepositoryInterface $themeRepository;

    public function __construct(ThemeRepositoryInterface $themeRepository)
    {
        $this->themeRepository = $themeRepository;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => function (Options $options): array {
                return $this->themeRepository->findAll();
            },
            'choice_label' => function (ThemeInterface $theme): string {
                $title = $theme->getTitle();

                return $title !== null ? $title : $theme->getName();
            },
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }

    public function getBlockPrefix(): string
    {
        return 'sylius_theme_choice';
    }
}
