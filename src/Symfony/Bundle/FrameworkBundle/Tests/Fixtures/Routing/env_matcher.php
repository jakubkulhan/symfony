<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' . preg_quote(getenv('FOO')) . '' => array(array(array('_route' => 'foo'), null, null, null, null)),
            '/' . preg_quote(getenv('FOO')) . '/bar' => array(array(array('_route' => 'bar'), null, null, null, null)),
            '/baz/' . preg_quote(getenv('FOO')) . '' => array(array(array('_route' => 'baz'), null, null, null, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/' . preg_quote(getenv('FOO')) . '/(?'
                        .'|foo/([^/]++)(*:107)'
                        .'|bar/([^/]++)(*:127)'
                    .')'
                    .'|/baz/' . preg_quote(getenv('FOO')) . '/([^/]++)(*:233)'
                .')$}sD',
        );
        $this->dynamicRoutes = array(
            107 => array(array(array('_route' => 'dynamic_foo'), array('id'), null, null, null)),
            127 => array(array(array('_route' => 'dynamic_bar'), array('id'), null, null, null)),
            233 => array(array(array('_route' => 'dynamic_baz'), array('id'), null, null, null)),
        );
    }
}
