<?php

 namespace app\controller; 
 
 use \vsapp\util\View;
 
 
/**
 * Description of SiteController
 *
 * @author vench
 */
class SiteController implements  \vsapp\proxy\AnnotationInterface {

    
    /**
     * @#proxy_exec \vsapp\proxy\filters\controller\Access
     */
    public function actionIndex() {
        
        View::renderPhp('site/index', [ ]); 
    }
}
