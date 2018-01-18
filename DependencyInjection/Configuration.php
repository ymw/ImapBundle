<?php

/*
 * This file is part of the Ivory CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ymw\ImapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
	    $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ymw_imap');

	    $rootNode
		    ->children()
	            ->arrayNode('imap')
					    ->children()
						    ->scalarNode('server')->end()
						    ->scalarNode('port')->defaultValue(143)->end()
						    ->scalarNode('options_mail_box')->end()
						    ->scalarNode('folder')->defaultValue('INBOX')->end()
						    ->scalarNode('username')->end()
						    ->scalarNode('password')->end()
						    ->scalarNode('n_tries')->defaultValue(0)->end()
						    ->scalarNode('options')->end()
						    ->scalarNode('params')->end()
					    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
