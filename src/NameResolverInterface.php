<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\Types\Context;

interface NameResolverInterface
{
    /** @var string Definition of the NAMESPACE operator in PHP */
    const OPERATOR_NAMESPACE = '\\';

    /**
     * resolves a possible classname
     *
     * @param  string $name
     *         the possible classname to resolve
     * @param  Context|null $context
     *         information to help us resolve $name
     * @return ClassLikeName
     *         the (possibly) resolved name
     */
    public function resolve($text, Context $context = null);
}
