<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'todo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/todo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'todo_read' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::readAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/todo/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'todo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::updateAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/todo/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'todo_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/todo/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'todo_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/todos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'todo_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\TodoController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/todo/check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategoryController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_read' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategoryController::readAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategoryController::updateAction',  ),  2 =>   array (    'id' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\CategoryController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
