<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // studentresults
        if (0 === strpos($pathinfo, '/studentresults') && preg_match('#^/studentresults/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'studentresults')), array (  '_controller' => 'AppBundle\\Controller\\AnswerUserController::studentResultsAction',));
        }

        // sessionadduser
        if ('/sessionadduser' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SessionController::addUserAction',  '_route' => 'sessionadduser',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // addquestion
        if ('/addquestion' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\QuestionController::addAction',  '_route' => 'addquestion',);
        }

        // administration
        if ('/administration' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::adminAction',  '_route' => 'administration',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            // displayquestions
            if ('/displayquestions' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\QuestionController::displayQuestionsAction',  '_route' => 'displayquestions',);
            }

            // deletequestion
            if (0 === strpos($pathinfo, '/deletequestion') && preg_match('#^/deletequestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletequestion')), array (  '_controller' => 'AppBundle\\Controller\\QuestionController::deleteAction',));
            }

            // deletequiz
            if (0 === strpos($pathinfo, '/deletequiz') && preg_match('#^/deletequiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletequiz')), array (  '_controller' => 'AppBundle\\Controller\\QuizController::deleteQuizAction',));
            }

        }

        // createquiz
        if ('/createquiz' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\QuizController::createQuizAction',  '_route' => 'createquiz',);
        }

        // createsession
        if (0 === strpos($pathinfo, '/createsession') && preg_match('#^/createsession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'createsession')), array (  '_controller' => 'AppBundle\\Controller\\SessionController::createSessionAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/lo')) {
                // loadquiz
                if (0 === strpos($pathinfo, '/loadquiz') && preg_match('#^/loadquiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'loadquiz')), array (  '_controller' => 'AppBundle\\Controller\\QuizController::loadQuizAction',));
                }

                // login
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // logout
                if ('/logout' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
                }

            }

            // listquiz
            if ('/listquiz' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\QuizController::listQuizAction',  '_route' => 'listquiz',);
            }

            // listusers
            if ('/listusers' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::listUserAction',  '_route' => 'listusers',);
            }

        }

        // viewquiz
        if (0 === strpos($pathinfo, '/viewquiz') && preg_match('#^/viewquiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewquiz')), array (  '_controller' => 'AppBundle\\Controller\\QuizController::quizAction',));
        }

        // editquiz
        if (0 === strpos($pathinfo, '/editquiz') && preg_match('#^/editquiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editquiz')), array (  '_controller' => 'AppBundle\\Controller\\QuizController::editQuizAction',));
        }

        // edituser
        if (0 === strpos($pathinfo, '/edituser') && preg_match('#^/edituser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edituser')), array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::editAction',));
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
