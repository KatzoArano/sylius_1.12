<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\Phpdoc;

use PhpCsFixer\AbstractProxyFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
/**
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class PhpdocNoPackageFixer extends AbstractProxyFixer
{
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('`@package` and `@subpackage` annotations must be removed from PHPDoc.', [new CodeSample('<?php
/**
 * @internal
 * @package Foo
 * subpackage Bar
 */
class Baz
{
}
')]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before NoEmptyPhpdocFixer, PhpdocAlignFixer, PhpdocSeparationFixer, PhpdocTrimFixer.
     * Must run after AlignMultilineCommentFixer, CommentToPhpdocFixer, PhpdocIndentFixer, PhpdocScalarFixer, PhpdocToCommentFixer, PhpdocTypesFixer.
     */
    public function getPriority() : int
    {
        return parent::getPriority();
    }
    protected function createProxyFixers() : array
    {
        $fixer = new \PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer();
        $fixer->configure(['annotations' => ['package', 'subpackage'], 'case_sensitive' => \true]);
        return [$fixer];
    }
}
