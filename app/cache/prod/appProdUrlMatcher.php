<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/mainpage')) {
            // mainpage
            if ($pathinfo === '/mainpage') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::indexAction',  '_route' => 'mainpage',);
            }

            // current_news
            if (0 === strpos($pathinfo, '/mainpage/news') && preg_match('#^/mainpage/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'current_news')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::currentNewsItemAction',));
            }

            // category_news
            if (preg_match('#^/mainpage/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_news')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::ajaxAction',));
            }

        }

        // subscribe
        if ($pathinfo === '/subscribe') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::updateUserSubscribeAction',  '_route' => 'subscribe',);
        }

        if (0 === strpos($pathinfo, '/admin/user/admin')) {
            // user
            if (rtrim($pathinfo, '/') === '/admin/user/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/admin/user/admin/new') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/admin/user/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/admin/user/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // _login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
        }

        // _registration
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\RegistrationController::indexAction',  '_route' => '_registration',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // _activation
            if ($pathinfo === '/activate') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__activation;
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\RegistrationController::activationAction',  '_route' => '_activation',);
            }
            not__activation:

            if (0 === strpos($pathinfo, '/admin')) {
                // _all_users
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::indexAction',  '_route' => '_all_users',);
                }

                if (0 === strpos($pathinfo, '/admin/news')) {
                    // _all_news
                    if ($pathinfo === '/admin/news') {
                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::indexAction',  '_route' => '_all_news',);
                    }

                    // _add_news
                    if ($pathinfo === '/admin/news/new') {
                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::newAction',  '_route' => '_add_news',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/category')) {
                    // _all_categories
                    if ($pathinfo === '/admin/category') {
                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::indexAction',  '_route' => '_all_categories',);
                    }

                    // _add_category
                    if ($pathinfo === '/admin/category/new') {
                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::newAction',  '_route' => '_add_category',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/passwordrecovery/admin')) {
                    // admin_passwordrecovery
                    if (rtrim($pathinfo, '/') === '/admin/passwordrecovery/admin') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_passwordrecovery');
                        }

                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::indexAction',  '_route' => 'admin_passwordrecovery',);
                    }

                    // admin_passwordrecovery_show
                    if (preg_match('#^/admin/passwordrecovery/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::showAction',));
                    }

                    // admin_passwordrecovery_new
                    if ($pathinfo === '/admin/passwordrecovery/admin/new') {
                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::newAction',  '_route' => 'admin_passwordrecovery_new',);
                    }

                    // admin_passwordrecovery_create
                    if ($pathinfo === '/admin/passwordrecovery/admin/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_passwordrecovery_create;
                        }

                        return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::createAction',  '_route' => 'admin_passwordrecovery_create',);
                    }
                    not_admin_passwordrecovery_create:

                    // admin_passwordrecovery_edit
                    if (preg_match('#^/admin/passwordrecovery/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::editAction',));
                    }

                    // admin_passwordrecovery_update
                    if (preg_match('#^/admin/passwordrecovery/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_passwordrecovery_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::updateAction',));
                    }
                    not_admin_passwordrecovery_update:

                    // admin_passwordrecovery_delete
                    if (preg_match('#^/admin/passwordrecovery/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_passwordrecovery_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::deleteAction',));
                    }
                    not_admin_passwordrecovery_delete:

                }

            }

        }

        // password_recovery
        if ($pathinfo === '/passwordrecovery') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::recoveryAction',  '_route' => 'password_recovery',);
        }

        // _new_password
        if ($pathinfo === '/updatepassword') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__new_password;
            }

            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::newPasswordAction',  '_route' => '_new_password',);
        }
        not__new_password:

        if (0 === strpos($pathinfo, '/news/admin')) {
            // news
            if (rtrim($pathinfo, '/') === '/news/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'news');
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
            }

            // news_show
            if (preg_match('#^/news/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::showAction',));
            }

            // news_new
            if ($pathinfo === '/news/admin/new') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::newAction',  '_route' => 'news_new',);
            }

            // news_create
            if ($pathinfo === '/news/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_news_create;
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::createAction',  '_route' => 'news_create',);
            }
            not_news_create:

            // news_edit
            if (preg_match('#^/news/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::editAction',));
            }

            // news_update
            if (preg_match('#^/news/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_news_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::updateAction',));
            }
            not_news_update:

            // news_delete
            if (preg_match('#^/news/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_news_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::deleteAction',));
            }
            not_news_delete:

        }

        if (0 === strpos($pathinfo, '/category/admin')) {
            // category
            if (rtrim($pathinfo, '/') === '/category/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }

            // category_show
            if (preg_match('#^/category/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::showAction',));
            }

            // category_new
            if ($pathinfo === '/category/admin/new') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_create
            if ($pathinfo === '/category/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_edit
            if (preg_match('#^/category/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::editAction',));
            }

            // category_update
            if (preg_match('#^/category/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\SecuredController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
