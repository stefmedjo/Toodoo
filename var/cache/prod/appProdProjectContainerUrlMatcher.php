<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MainBundle\\Controller\\TodoController::listAction',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        if (0 === strpos($pathinfo, '/todo')) {
            // todo_create
            if ('/todo/create' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\TodoController::createAction',  '_route' => 'todo_create',);
            }

            // todo_check
            if ('/todo/check' === $pathinfo) {
                $ret = array (  '_controller' => 'MainBundle\\Controller\\TodoController::checkAction',  '_route' => 'todo_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_todo_check;
                }

                return $ret;
            }
            not_todo_check:

            // todo_read
            if (0 === strpos($pathinfo, '/todo/view') && preg_match('#^/todo/view/(?P<id>\\d*)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'todo_read']), array (  '_controller' => 'MainBundle\\Controller\\TodoController::readAction',));
            }

            // todo_update
            if (0 === strpos($pathinfo, '/todo/update') && preg_match('#^/todo/update/(?P<id>\\d*)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'todo_update']), array (  '_controller' => 'MainBundle\\Controller\\TodoController::updateAction',));
            }

            // todo_delete
            if ('/todo/delete' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\TodoController::deleteAction',  '_route' => 'todo_delete',);
            }

            // todo_list
            if ('/todos' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\TodoController::listAction',  '_route' => 'todo_list',);
            }

        }

        elseif (0 === strpos($pathinfo, '/category')) {
            // category_create
            if ('/category/create' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }

            // category_read
            if (0 === strpos($pathinfo, '/category/view') && preg_match('#^/category/view/(?P<id>\\d*)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_read']), array (  '_controller' => 'MainBundle\\Controller\\CategoryController::readAction',));
            }

            // category_update
            if (0 === strpos($pathinfo, '/category/update') && preg_match('#^/category/update/(?P<id>\\d*)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_update']), array (  '_controller' => 'MainBundle\\Controller\\CategoryController::updateAction',));
            }

            // category_delete
            if ('/category/delete' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\CategoryController::deleteAction',  '_route' => 'category_delete',);
            }

        }

        // category_list
        if ('/categories' === $pathinfo) {
            return array (  '_controller' => 'MainBundle\\Controller\\CategoryController::listAction',  '_route' => 'category_list',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
