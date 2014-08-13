<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/82e4982')) {
            // _assetic_82e4982
            if ($pathinfo === '/js/82e4982.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '82e4982',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_82e4982',);
            }

            if (0 === strpos($pathinfo, '/js/82e4982_')) {
                // _assetic_82e4982_0
                if ($pathinfo === '/js/82e4982_jquery-1.11.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '82e4982',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_82e4982_0',);
                }

                // _assetic_82e4982_1
                if ($pathinfo === '/js/82e4982_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '82e4982',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_82e4982_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/1820aaf')) {
            // _assetic_1820aaf
            if ($pathinfo === '/css/1820aaf.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1820aaf',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1820aaf',);
            }

            // _assetic_1820aaf_0
            if ($pathinfo === '/css/1820aaf_part_1_bootstrap.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1820aaf',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1820aaf_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/fc97b69')) {
            // _assetic_fc97b69
            if ($pathinfo === '/images/fc97b69.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc97b69',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_fc97b69',);
            }

            // _assetic_fc97b69_0
            if ($pathinfo === '/images/fc97b69_logo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc97b69',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_fc97b69_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/50e4156')) {
            // _assetic_50e4156
            if ($pathinfo === '/js/50e4156.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '50e4156',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_50e4156',);
            }

            // _assetic_50e4156_0
            if ($pathinfo === '/js/50e4156_repeatPassword_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '50e4156',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_50e4156_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // mainpage
        if ($pathinfo === '/mainpage') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::indexAction',  '_route' => 'mainpage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/dispatch')) {
                // dispatch
                if (rtrim($pathinfo, '/') === '/admin/dispatch') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dispatch');
                    }

                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::indexAction',  '_route' => 'dispatch',);
                }

                // dispatch_show
                if (preg_match('#^/admin/dispatch/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispatch_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::showAction',));
                }

                // dispatch_new
                if ($pathinfo === '/admin/dispatch/new') {
                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::newAction',  '_route' => 'dispatch_new',);
                }

                // dispatch_create
                if ($pathinfo === '/admin/dispatch/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dispatch_create;
                    }

                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::createAction',  '_route' => 'dispatch_create',);
                }
                not_dispatch_create:

                // dispatch_edit
                if (preg_match('#^/admin/dispatch/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispatch_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::editAction',));
                }

                // dispatch_update
                if (preg_match('#^/admin/dispatch/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_dispatch_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispatch_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::updateAction',));
                }
                not_dispatch_update:

                // dispatch_delete
                if (preg_match('#^/admin/dispatch/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_dispatch_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dispatch_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\DispatchController::deleteAction',));
                }
                not_dispatch_delete:

            }

        }

        // _login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
        }

        // _registration
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\RegistrationController::indexAction',  '_route' => '_registration',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // _admin
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\AdminController::indexAction',  '_route' => '_admin',);
            }

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

            if (0 === strpos($pathinfo, '/admin/passwordrecovery')) {
                // admin_passwordrecovery
                if (rtrim($pathinfo, '/') === '/admin/passwordrecovery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_passwordrecovery');
                    }

                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::indexAction',  '_route' => 'admin_passwordrecovery',);
                }

                // admin_passwordrecovery_show
                if (preg_match('#^/admin/passwordrecovery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::showAction',));
                }

                // admin_passwordrecovery_new
                if ($pathinfo === '/admin/passwordrecovery/new') {
                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::newAction',  '_route' => 'admin_passwordrecovery_new',);
                }

                // admin_passwordrecovery_create
                if ($pathinfo === '/admin/passwordrecovery/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_passwordrecovery_create;
                    }

                    return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::createAction',  '_route' => 'admin_passwordrecovery_create',);
                }
                not_admin_passwordrecovery_create:

                // admin_passwordrecovery_edit
                if (preg_match('#^/admin/passwordrecovery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::editAction',));
                }

                // admin_passwordrecovery_update
                if (preg_match('#^/admin/passwordrecovery/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_passwordrecovery_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::updateAction',));
                }
                not_admin_passwordrecovery_update:

                // admin_passwordrecovery_delete
                if (preg_match('#^/admin/passwordrecovery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_passwordrecovery_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_passwordrecovery_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::deleteAction',));
                }
                not_admin_passwordrecovery_delete:

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

        if (0 === strpos($pathinfo, '/news')) {
            // news
            if (rtrim($pathinfo, '/') === '/news') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'news');
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
            }

            // news_show
            if (preg_match('#^/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::showAction',));
            }

            // news_new
            if ($pathinfo === '/news/new') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::newAction',  '_route' => 'news_new',);
            }

            // news_create
            if ($pathinfo === '/news/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_news_create;
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::createAction',  '_route' => 'news_create',);
            }
            not_news_create:

            // news_edit
            if (preg_match('#^/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::editAction',));
            }

            // news_update
            if (preg_match('#^/news/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_news_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::updateAction',));
            }
            not_news_update:

            // news_delete
            if (preg_match('#^/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_news_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_delete')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::deleteAction',));
            }
            not_news_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::showAction',));
            }

            // category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::editAction',));
            }

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
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
