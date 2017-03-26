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
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_assetic_dff4dbb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'dff4dbb',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/dff4dbb.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_dff4dbb_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'dff4dbb',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/dff4dbb_front_page_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1f81795' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1f81795',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/1f81795.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1f81795_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1f81795',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/1f81795_app_search_central_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fc7accb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fc7accb',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/fc7accb.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fc7accb_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fc7accb',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/fc7accb_front_result_equipement_access_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_454a49e' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '454a49e',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/454a49e.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_454a49e_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '454a49e',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/454a49e_front_result_doc_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_af4783f' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'af4783f',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/af4783f.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_af4783f_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'af4783f',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/af4783f_front_result_equipement_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a5be7e7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a5be7e7',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a5be7e7.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a5be7e7_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a5be7e7',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a5be7e7_front_result_central_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_da82b2d' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'da82b2d',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/da82b2d.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_da82b2d_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'da82b2d',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/da82b2d_front_search_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_66960f5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '66960f5',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/66960f5.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_66960f5_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '66960f5',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/66960f5_setUp_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_4158b03' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '4158b03',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/4158b03.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_4158b03_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '4158b03',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/4158b03_front_centrale_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_cae2646' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'cae2646',    'pos' => NULL,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/cae2646.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_cae2646_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'cae2646',    'pos' => 0,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/cae2646_btn_modif_1.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_aef7376' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aef7376',    'pos' => NULL,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/aef7376.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_aef7376_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'aef7376',    'pos' => 0,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/aef7376_btn_valider_1.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_02f85ee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '02f85ee',    'pos' => NULL,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/02f85ee.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_02f85ee_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '02f85ee',    'pos' => 0,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/02f85ee_btn_annuler_1.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a935514' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a935514',    'pos' => NULL,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/a935514.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a935514_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a935514',    'pos' => 0,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/a935514_btn_ajout_1.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_34537ea' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '34537ea',    'pos' => NULL,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/34537ea.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_34537ea_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '34537ea',    'pos' => 0,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/34537ea_droite_1.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_67d988a' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '67d988a',    'pos' => NULL,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/67d988a.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_67d988a_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '67d988a',    'pos' => 0,    '_format' => 'jpeg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/67d988a_btn_gauche_1.jpeg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_e4453c8' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'e4453c8',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/e4453c8.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_e4453c8_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'e4453c8',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/e4453c8_front_equipement_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_81f969e' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '81f969e',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/81f969e.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_81f969e_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '81f969e',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/81f969e_quadranStyle_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2db1e5c' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2db1e5c',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/2db1e5c.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2db1e5c_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2db1e5c',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/2db1e5c_jquery-ui_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a750637' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a750637',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a750637.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a750637_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a750637',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a750637_jquery_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2994d72' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2994d72',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/2994d72.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_2994d72_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '2994d72',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/2994d72_jquery-ui_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d4574a7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd4574a7',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/d4574a7.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d4574a7_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd4574a7',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/d4574a7_angular_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_584d851' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '584d851',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/584d851.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_584d851_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '584d851',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/584d851_app_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_3649b80' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '3649b80',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/3649b80.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_3649b80_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '3649b80',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/3649b80_quadranStyle_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_3eb98b1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '3eb98b1',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/3eb98b1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_3eb98b1_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '3eb98b1',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/3eb98b1_formCentral_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_516a1e4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '516a1e4',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/516a1e4.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_516a1e4_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '516a1e4',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/516a1e4_btn_supr_1.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d1b9655' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd1b9655',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/d1b9655.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d1b9655_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd1b9655',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/d1b9655_front_acces_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_documents_by_id_central' => array (  0 =>   array (    0 => 'id_central',  ),  1 =>   array (    '_controller' => 'SIE\\DocumentBundle\\Controller\\AdminController::getDocumentsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_central',    ),    1 =>     array (      0 => 'text',      1 => '/document/getDocuments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_document' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\DocumentBundle\\Controller\\AdminController::add_documentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/document/add_document',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_document_central' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\DocumentBundle\\Controller\\AdminController::add_document_centralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/document/add_document_central',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sie_contrat_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_contrat' => array (  0 =>   array (    0 => 'id_contrat',  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::getEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_contrat',    ),    2 =>     array (      0 => 'text',      1 => '/contrat/getContrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_contrats' => array (  0 =>   array (    0 => 'id_central',  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::getContratByIdCentralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_central',    ),    2 =>     array (      0 => 'text',      1 => '/contrat/getContrats',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_contrats' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/getAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_contrat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::addContratAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/addContrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'del_contrat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::delContratAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/delContrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_contrat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\ContratBundle\\Controller\\AdminController::updateContratAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/updateContrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sie_access_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/access/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_accesss' => array (  0 =>   array (    0 => 'id_equipement',  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::getAccessByIdEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_equipement',    ),    2 =>     array (      0 => 'text',      1 => '/access/getAccesss',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_access' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::addAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/access/addAccess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'del_access' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::delAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/access/delAccess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_access' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::updateAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/access/modifAccess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_protocol' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::getProtocolsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/access/getProtocols',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test_access' => array (  0 =>   array (    0 => 'adresse',    1 => 'port',  ),  1 =>   array (    '_controller' => 'SIE\\AccessBundle\\Controller\\AdminController::testAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'port',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'adresse',    ),    2 =>     array (      0 => 'text',      1 => '/access/testAccess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sie_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CoreBundle\\Controller\\AcceuilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sie_direction_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\DirectionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/direction/direction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sie_equipement_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_cons' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::getAllConstructeurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/getAllConstructeur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_type' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::getTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/getAllType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sie_get_equipements' => array (  0 =>   array (    0 => 'id_central',  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getEquipementsByIdCentralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_central',    ),    1 =>     array (      0 => 'text',      1 => '/equipement/getEquipements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_equipement' => array (  0 =>   array (    0 => 'id_equipement',  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_equipement',    ),    1 =>     array (      0 => 'text',      1 => '/equipement/getEquipement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_equipement_etendu' => array (  0 =>   array (    0 => 'id_equipement',  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getDetailEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_equipement',    ),    1 =>     array (      0 => 'text',      1 => '/equipement/getDetailEquipement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_equipement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/getAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_access' => array (  0 =>   array (    0 => 'id_equipement',  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\DefaultController::getAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_equipement',    ),    1 =>     array (      0 => 'text',      1 => '/equipement/getAccess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_equipement_etendue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getAllEtendueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/getAllEtendue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_equipement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::addEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/addEquipement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'del_equipement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::getEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/delEquipement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_equipement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\EquipementBundle\\Controller\\AdminController::updateEquipementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipement/updateEquipement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_access' => array (  0 =>   array (    0 => 'id_equipement',  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::getAccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_equipement',    ),    2 =>     array (      0 => 'text',      1 => '/equipement/getAccess',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_societe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::get_societeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/getSociete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_all_json' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::json_getAll_centralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/getAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_central' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::renvoi_details_centralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/central/getDetailsCentral',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_allEtendue_json' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::json_getAllEtendue_centralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/getAllEtendue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_modif_central' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::modifCentralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/modifCentral',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_all_societe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::get_all_societeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/getAllSociete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_details_central' => array (  0 =>   array (    0 => 'id_central',  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::renvoi_apercusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_central',    ),    2 =>     array (      0 => 'text',      1 => '/central/getApercus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_societe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SIECentralBundle:ORM:getSociete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/central/getSociete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'central_get_equipement' => array (  0 =>   array (    0 => 'id_central',  ),  1 =>   array (    '_controller' => 'SIE\\CentralBundle\\Controller\\AdminController::renvoi_equipement_par_id_centralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_central',    ),    2 =>     array (      0 => 'text',      1 => '/central/getEquipements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
