<?php
class Medicine extends Controller{

    public function __construct(){
        $this->userModel = $this->model('User');
        $this->medcineModel = $this->model('MedicinePage');
        $this->url = $this->getUrl();
    }
     
    public function index(){
        $this->missingPage();
    }

    public function errorPage(){
        $c = count($this->url);
        $url = $this->url;
        $allMed = $this->medcineModel->getMedicineByTag($url[$c-1]);
        if($c !== 4)
        $this->missingPage();
        if(!empty($allMed)){   
            $categoryP = $this->getMedicineByTag($allMed[0]->categories);
            $data = [
            'title' => $allMed[0]->name,
            'termname'=> 'Medicine One',
            'count'=> '250',
            'categoryList' => $this->medcineModel->getCategories(),
            'medicine' => $allMed[0],
            'related' => $categoryP,
            'url' => $url[$c-1],
            ];
            
            $this->view('Medicine',$data);
        }
        else
        $this->missingPage();
    }

    public function missingPage(){
        $this->view('404');
    }
    
    public function getMedicineByTag($slug){
        $medicine = $this->medcineModel->getMedicine();
        $resultMed = [];
        foreach($medicine as $med){
            $getTag = explode(',',$med->categories);
            $getTag2 = explode(',',$slug);
            foreach($getTag as $tag){
                if($getTag === $getTag2){
                    $resultMed[] = $med;
                }
            }
        }
        return $resultMed;
    }
    
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_SERVER['REQUEST_URI'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        else{
            return [];
        }
      }
} 
?>