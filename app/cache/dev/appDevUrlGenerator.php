<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_assetic_82e4982' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '82e4982',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/82e4982.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_82e4982_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '82e4982',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/82e4982_jquery-1.11.1_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_82e4982_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '82e4982',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/82e4982_bootstrap.min_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1820aaf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1820aaf',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1820aaf.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1820aaf_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1820aaf',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1820aaf_part_1_bootstrap.min_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1820aaf_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1820aaf',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/1820aaf_part_1_style_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fc97b69' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fc97b69',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/fc97b69.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fc97b69_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fc97b69',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/fc97b69_logo_1.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_c82c251' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c82c251',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c82c251.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_c82c251_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'c82c251',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/c82c251_news_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_50e4156' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '50e4156',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/50e4156.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_50e4156_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '50e4156',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/50e4156_repeatPassword_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mainpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mainpage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'current_news' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::currentNewsItemAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/mainpage/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_news' => array (  0 =>   array (    0 => 'category',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\MainpageController::ajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/mainpage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subscribe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::updateUserSubscribeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subscribe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\RegistrationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_activation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\RegistrationController::activationAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/activate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_all_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_all_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/news/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_all_categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_passwordrecovery_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/passwordrecovery/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'password_recovery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\UserController::recoveryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/passwordrecovery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\PasswordRecoveryController::newPasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/updatepassword',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/news/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/news/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/news/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\NewsController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/news/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::createAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
