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

        if (0 === strpos($pathinfo, '/a')) {
            // tracker_ajax_capture_getLastMinute
            if (0 === strpos($pathinfo, '/ajax/capture/getLastSeconds') && preg_match('#^/ajax/capture/getLastSeconds/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_ajax_capture_getLastMinute')), array (  '_controller' => 'Tracker\\AjaxBundle\\Controller\\CaptureController::getLastSecondsAction',));
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/user')) {
                    // tracker_admin_user_index
                    if (rtrim($pathinfo, '/') === '/admin/user') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tracker_admin_user_index');
                        }

                        return array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'tracker_admin_user_index',);
                    }

                    // tracker_admin_user_add
                    if ($pathinfo === '/admin/user/add') {
                        return array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\UserController::addAction',  '_route' => 'tracker_admin_user_add',);
                    }

                    // tracker_admin_user_view
                    if (0 === strpos($pathinfo, '/admin/user/view') && preg_match('#^/admin/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_user_view')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\UserController::viewAction',));
                    }

                    // tracker_admin_user_edit
                    if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_user_edit')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\UserController::editAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ticket')) {
                    // tracker_admin_ticket_index
                    if (rtrim($pathinfo, '/') === '/admin/ticket') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tracker_admin_ticket_index');
                        }

                        return array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\TicketController::indexAction',  '_route' => 'tracker_admin_ticket_index',);
                    }

                    // tracker_admin_ticket_view
                    if (0 === strpos($pathinfo, '/admin/ticket/view') && preg_match('#^/admin/ticket/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_ticket_view')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\TicketController::viewAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/place')) {
                    if (0 === strpos($pathinfo, '/admin/place/test-editor')) {
                        // tracker_admin_place_testEditor
                        if ($pathinfo === '/admin/place/test-editor') {
                            return array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::testEditorAction',  '_route' => 'tracker_admin_place_testEditor',);
                        }

                        // tracker_admin_place_testEditorIFrame
                        if ($pathinfo === '/admin/place/test-editor-iframe') {
                            return array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::testEditorIFrameAction',  '_route' => 'tracker_admin_place_testEditorIFrame',);
                        }

                    }

                    // tracker_admin_place_add
                    if (0 === strpos($pathinfo, '/admin/place/add') && preg_match('#^/admin/place/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_place_add')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::addAction',));
                    }

                    // tracker_admin_place_edit
                    if (0 === strpos($pathinfo, '/admin/place/edit') && preg_match('#^/admin/place/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_place_edit')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::editAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/place/box')) {
                        // tracker_admin_box_add
                        if (0 === strpos($pathinfo, '/admin/place/box/add') && preg_match('#^/admin/place/box/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_box_add')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::addBoxAction',));
                        }

                        // tracker_admin_box_edit
                        if (0 === strpos($pathinfo, '/admin/place/box/edit') && preg_match('#^/admin/place/box/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_box_edit')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::editBoxAction',));
                        }

                    }

                    // tracker_admin_place_addConfiguration
                    if (0 === strpos($pathinfo, '/admin/place/addConfiguration') && preg_match('#^/admin/place/addConfiguration/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_place_addConfiguration')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::addConfigurationAction',));
                    }

                    // tracker_admin_place_deleteConfiguration
                    if (0 === strpos($pathinfo, '/admin/place/deleteConfiguration') && preg_match('#^/admin/place/deleteConfiguration/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_admin_place_deleteConfiguration')), array (  '_controller' => 'Tracker\\AdminBundle\\Controller\\PlaceController::deleteConfigurationAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // tracker_ticket_ticket_add
            if ($pathinfo === '/ticket/add') {
                return array (  '_controller' => 'Tracker\\TicketBundle\\Controller\\TicketController::addAction',  '_route' => 'tracker_ticket_ticket_add',);
            }

            // tracker_ticket_ticket_index
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tracker_ticket_ticket_index');
                }

                return array (  '_controller' => 'Tracker\\TicketBundle\\Controller\\TicketController::indexAction',  '_route' => 'tracker_ticket_ticket_index',);
            }

            // tracker_ticket_ticket_view
            if (0 === strpos($pathinfo, '/ticket/view') && preg_match('#^/ticket/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_ticket_ticket_view')), array (  '_controller' => 'Tracker\\TicketBundle\\Controller\\TicketController::viewAction',));
            }

            // tracker_ticket_message_add
            if (0 === strpos($pathinfo, '/ticket/message/add') && preg_match('#^/ticket/message/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_ticket_message_add')), array (  '_controller' => 'Tracker\\TicketBundle\\Controller\\MessageController::addAction',));
            }

        }

        // tracker_oui_homepage
        if (0 === strpos($pathinfo, '/oui/hello') && preg_match('#^/oui/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_oui_homepage')), array (  '_controller' => 'Tracker\\OuiBundle\\Controller\\DefaultController::indexAction',));
        }

        // tracker_capture_homepage
        if (0 === strpos($pathinfo, '/capture/hello') && preg_match('#^/capture/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_capture_homepage')), array (  '_controller' => 'Tracker\\CaptureBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/analysis')) {
            // tracker_page_analysis_analyze
            if ($pathinfo === '/analysis/analyze') {
                return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\AnalysisController::analyzeAction',  '_route' => 'tracker_page_analysis_analyze',);
            }

            if (0 === strpos($pathinfo, '/analysis/compare')) {
                // tracker_page_analysis_compare2
                if ($pathinfo === '/analysis/compare2') {
                    return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\AnalysisController::analyzeAction',  '_route' => 'tracker_page_analysis_compare2',);
                }

                // tracker_page_analysis_compare3
                if ($pathinfo === '/analysis/compare3') {
                    return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\AnalysisController::analyzeAction',  '_route' => 'tracker_page_analysis_compare3',);
                }

                // tracker_page_analysis_compare4
                if ($pathinfo === '/analysis/compare4') {
                    return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\AnalysisController::analyzeAction',  '_route' => 'tracker_page_analysis_compare4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/payment')) {
            // tracker_page_payment_main
            if (rtrim($pathinfo, '/') === '/payment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tracker_page_payment_main;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tracker_page_payment_main');
                }

                return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\PaymentController::mainAction',  '_route' => 'tracker_page_payment_main',);
            }
            not_tracker_page_payment_main:

            // tracker_page_payment_mainProcess
            if ($pathinfo === '/payment/process') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tracker_page_payment_mainProcess;
                }

                return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\PaymentController::mainProcessAction',  '_route' => 'tracker_page_payment_mainProcess',);
            }
            not_tracker_page_payment_mainProcess:

        }

        // tracker_page_exportation_export
        if ($pathinfo === '/exportation/export') {
            return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\ExportationController::exportAction',  '_route' => 'tracker_page_exportation_export',);
        }

        // tracker_page_realtime_index
        if (rtrim($pathinfo, '/') === '/realtime') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tracker_page_realtime_index');
            }

            return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\RealtimeController::indexAction',  '_route' => 'tracker_page_realtime_index',);
        }

        // tracker_page_dashboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tracker_page_dashboard');
            }

            return array (  '_controller' => 'Tracker\\PageBundle\\Controller\\DashboardController::indexAction',  '_route' => 'tracker_page_dashboard',);
        }

        // tracker_place_place_change
        if (0 === strpos($pathinfo, '/place/change') && preg_match('#^/place/change/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_place_place_change')), array (  '_controller' => 'Tracker\\PlaceBundle\\Controller\\PlaceController::changeAction',));
        }

        // tracker_station_homepage
        if (0 === strpos($pathinfo, '/station/hello') && preg_match('#^/station/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_station_homepage')), array (  '_controller' => 'Tracker\\StationBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/api/v1')) {
            // tracker_api_v1_api_addCapture
            if ($pathinfo === '/api/v1/captures') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tracker_api_v1_api_addCapture;
                }

                return array (  '_controller' => 'Tracker\\ApiBundle\\Controller\\ApiController::addCaptureAction',  '_route' => 'tracker_api_v1_api_addCapture',);
            }
            not_tracker_api_v1_api_addCapture:

            // tracker_api_v1_api_getSession
            if (0 === strpos($pathinfo, '/api/v1/session') && preg_match('#^/api/v1/session/(?P<serialNumber>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tracker_api_v1_api_getSession;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tracker_api_v1_api_getSession')), array (  '_controller' => 'Tracker\\ApiBundle\\Controller\\ApiController::getSessionAction',));
            }
            not_tracker_api_v1_api_getSession:

        }

        // rar_x_user_homepage
        if (0 === strpos($pathinfo, '/user/hello') && preg_match('#^/user/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rar_x_user_homepage')), array (  '_controller' => 'RarXUserBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
