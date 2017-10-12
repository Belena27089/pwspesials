if (!defined('_PS_VERSION_'))
    exit;

class PwspesialsAkciiModuleFrontController extends ModuleFrontController {

   
    public $page_name = 'akcii';
    public $ssl = true;

    public function initContent() {
        global $smarty;
        parent :: initContent();
        
            $this->setTemplate('akcii.tpl');
        
    }
}
