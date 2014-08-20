<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
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
        'category_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITR\\NewsBundle\\Controller\\CategoryController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
