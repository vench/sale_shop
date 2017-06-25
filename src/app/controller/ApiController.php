<?php
 

namespace app\controller;

use vssaleconstructor\action\UpdateAction;
use vssaleconstructor\Cart;
use vssaleconstructor\condition\EqualityCondition;
use vssaleconstructor\Path;
use vssaleconstructor\Promo;
use vssaleconstructor\PromoAction;
use vssaleconstructor\PromoCondition;

/**
 * Description of ApiController
 *
 * @author vench
 */
class ApiController implements  \vsapp\proxy\AnnotationInterface  {
    
     /**
     * @proxy_exec \vsapp\proxy\filters\controller\Access
     * @proxy_exec \vsapp\proxy\filters\controller\JSONResult
     */
    public function actionIndex() {
       echo 12;
    }   
    
    /**
     * 
     * 
     */
    public function actionTest() {
        var_dump(__METHOD__); 
    }
    
    
 
    /**
     * @proxy_exec \vsapp\proxy\filters\controller\JSONResult 
     * @proxy_exec \vsapp\proxy\filters\controller\RequestMethod {"types": ["GET"]}
     */
    public function actionSome() {
     
        return [1,2,3];
    }
    
    
    /**
     * @proxy_exec \vsapp\proxy\filters\controller\JSONResult 
     * @proxy_exec \vsapp\proxy\filters\controller\RequestMethod {"types": ["GET"]}
     */
    public function actionFac($n) {
        
        $n = (int)$n;
        
        
        $f  = function($v) use(&$f){
            if($v <= 0) {
                return 1;
            } 
            return $v -- * $f(  $v  );
        };
        
        return [$n, $f($n)];
    }
    
     
    /**
     * @proxy_exec \vsapp\proxy\filters\controller\JSONResult 
     * @proxy_exec \vsapp\proxy\filters\controller\JSONQuery
     * @proxy_exec \vsapp\proxy\filters\controller\RequestMethod {"types": ["POST"]}
     */
    public function actionCalk($input = null) {
         
        return [1,2,3, $input];
    }
    
     
    /**
     * @proxy_exec \app\Server
     * @proxy_exec \vsapp\proxy\filters\controller\JSONResult 
     * @proxy_exec \vsapp\proxy\filters\controller\RequestMethod {"types": ["GET"]}
     */
    public function actionServer() {
     
        $result = [1,2,3,4,5,6,7];
        return $result;
    }


    /**
     *
     */
    public function actionPromoTest() {


        $plainCart = new \stdClass();
        $plainCart->total = isset($_GET['total']) ? $_GET['total'] : 100;
        $plainCart->value = 0;

        $cart = new Cart($plainCart);

        $promo = new Promo();
        $promo->setPromoCondition( new PromoCondition(
            new EqualityCondition(),
            new Path('total'),
            100
        ) );
        $promo->setPromoAction( new PromoAction(
            new Path('value'),
            1000,
            new UpdateAction()
        ) );

        $result = $promo->processCart(  $cart );

        var_dump($plainCart, $result);
    }
     
}
