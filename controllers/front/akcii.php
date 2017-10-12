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

    public static function getItems() {
        if (file_exists(dirname(__FILE__) . '/views/templates/front/links.xml'))
            if ($xml = simplexml_load_file(dirname(__FILE__) . '/views/templates/front/links.xml')) {
                $arr = Array();

                foreach ($xml->link as $key => $value) {
                    if ($value->turnoff)
                        continue;
                    $arr[] = $value;
                }
                return $arr;
            }
        return false;
    }

}
}
