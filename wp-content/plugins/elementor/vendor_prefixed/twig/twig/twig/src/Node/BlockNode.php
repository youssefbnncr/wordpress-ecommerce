<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ElementorDeps\Twig\Node;

use ElementorDeps\Twig\Attribute\YieldReady;
use ElementorDeps\Twig\Compiler;
/**
 * Represents a block node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[YieldReady]
class BlockNode extends Node
{
    public function __construct(string $name, Node $body, int $lineno, ?string $tag = null)
    {
        parent::__construct(['body' => $body], ['name' => $name], $lineno, $tag);
    }
    public function compile(Compiler $compiler) : void
    {
        $compiler->addDebugInfo($this)->write(\sprintf("public function block_%s(\$context, array \$blocks = [])\n", $this->getAttribute('name')), "{\n")->indent()->write("\$macros = \$this->macros;\n");
        $compiler->subcompile($this->getNode('body'))->write("return; yield '';\n")->outdent()->write("}\n\n");
    }
}
