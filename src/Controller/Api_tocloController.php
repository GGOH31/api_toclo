<?php
namespace App\Controller;

use App\Controller\AppController;


class Api_tocloController extends AppController{
    public function initialize() {
        parent::initialize();

        /*$this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Api_toclo',
                'action' => 'index',
                'plugin' => 'Clients'
            ],
            //'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Clients',
                    'fields' => ['telephone' => 'telephone', 'password' => 'password']
                ]
            ],
            'storage' => 'Session'
        ]);*/

        $this->loadModel('AtelierClients');
        $this->loadModel('Groups');
        $this->loadModel('Clients');
        $this->loadModel('Users');
        $this->loadModel('Collectionateliers');
        $this->loadModel('Collectionclients');
        $this->loadModel('Parametres');
        $this->loadModel('Partagecollections');
        $this->loadModel('Mesures');
        $this->loadModel('Coutures');

        $this->loadModel('Posts');
   
    }
   

    //upload image


    public function uploadImage(){
        $this->autoRender=false;
        $this->viewBuilder()->layout("ajax");

        $test=$this->request->getData('test');
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
        
            # code...
            $phone=$this->request->getData('test');
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            if(isset($_FILES["image"]["name"])) {
           
               
                // Make sure you have created this directory already
                $target_dir = "webroot/files/";
                $post->Imagedir=$target_dir;
                $post['ImageName']= md5(time()) . '_' . $_FILES["image"]["name"];
                $id_all=$this->Clients->find('all')
                             ->where(['telephone'=>$phone])->toArray();
                $id=$id_all[0]['id'];
                $post->client_id=$id;
                // Generate a random name 
                $target_file = $target_dir . md5(time()) . '_' . $_FILES["image"]["name"];
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        if ($this->Posts->save($post)) {
                  echo json_encode(['response' => "The image has been uploaded."]);
                        }
                   }else {
                  echo json_encode(["error" => "Sorry, there was an error uploading your file."]); 
                }
                } else {
                    echo json_encode(["error" => "File is not an image."]);
                   
                }
            }
             else {
                 echo json_encode(["error" => "Please provide a image to upload"]);
            }
        }else {
            echo json_encode(["error" => "Please provide a image to upload"]);
       }
        
        
    }

        //add
        public function addClient()
    {   
        $this->autoRender=false;
        $this->viewBuilder()->layout("ajax");
        $client = $this->Clients->newEntity();
        //$test=$this->request->getData();
       $sudonim=$this->request->getData('sudonim');
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if(isset($sudonim)){
                $client['group_id']=2; 
            }
            if ($this->Clients->save($client)) {
             
                $this->__makeJason(1,"success",$client);
               
            }else{
                $this->__makeJason(2,"errors",$client->errors());
            }
        
            //$this->Flash->error(__('The user could not be saved. Please, try again.'));
        }else{
            $clients = $this->Clients->find('list', ['limit' => 200]);
            $this->__makeJason(1,"success",$clients);
           
        }
        
         //$this->set(compact('client', 'users'));
    }

public function search(){
    $this->autoRender=false;
    $this->viewBuilder()->layout("ajax");
    if($this->request->is('post')){
        $key=$this->request->getData('nom');
        $clients=$this->Clients->find('all')
         ->where(['nom LIKE'=>'%'.$key.'%']);
         $this->__makeJason(1,"success",$clients);
    }


}


public function priseMesure(){
    $this->autoRender=false;
    $this->viewBuilder()->layout("ajax");
    $mesure = $this->Mesures->newEntity();
        if ($this->request->is('post')) {
            $conntactCouturier=$this->request->getData('telephoneCouture');
            $couturiertable=$this->Clients->find()
                                        ->where(['telephone'=>$conntactCouturier]);
                          
      $conntactClient=$this->request->getData('telephoneClient');
     $conntactClientable=$this->Clients->find('all')
     ->where(['telephone'=>$conntactClient]);
    
    $client=$conntactClientable->toArray();
                                                      
                                       
//$this->__makeJason(1,"success",$couturier);

          $mesure = $this->Mesures->patchEntity($mesure, $this->request->getData());
          if (!($client)) {
            $client = $this->Clients->newEntity();
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            $client['nom']=$this->request->getData('nomClient');
            $client['telephone']=$this->request->getData('telephoneClient');
            $client['group1']=3;
            if ($this->Clients->save($client)) {
                $conntactNewClientable=$this->Clients->find('all')
                ->where(['telephone'=>$this->request->getData('telephoneClient')]);
                $newclient=$conntactNewClientable->toArray();
                //$this->__makeJason(1,"success",$client);
                foreach ($newclient as $key => $client1) {
                    # code...
          $mesure['atelier_client_id']=$client1['id'];
      
                }
            }
          
    
             # code...
         }else{ 
            foreach ($client as $key => $client1) {
                # code...
      $mesure['client_id']=$client1['id'];
  
            }
         }
          
          foreach ($couturiertable as $key => $value) {
              # code...
    $mesure['coutureid']=$value['id'];

          }
          $mesure['coutureclient']=$value['id'].$client1['id'];
          /*debug($this->Mesures->save($mesure));
          die();*/
          $keys=$this->Mesures->find('all')
          ->where(['coutureclient'=>$mesure['coutureclient']]);
          $key=$keys->toArray();
        if (!($key)) {
            if ($this->Mesures->save($mesure)) {
                $this->__makeJason(1,"success",$mesure);

             //   $this->Flash->success(__('The mesure has been saved.'));

               // return $this->redirect(['action' => 'index']);
            }else{
               

                $this->__makeJason(2,"Error",$mesure);

            }
            # code...
        }else {
            $this->__makeJason(3,"vous avez déjà enregistrez les mesures de ce client",$mesure);
            # code...
        }
         
          
            
          //  $this->Flash->error(__('The mesure could not be saved. Please, try again.'));
        }
}



    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients'],
        ];
        $posts = $this->paginate($this->Posts);

        //$this->set(compact('posts'));
    }

    public function login(){
        $this->autoRender = false;
        //Set the layout;
        $this->viewBuilder()->layout("ajax");
        $current_time = Time::now();
  
        if ($this->request->is('post')) {
  
            $client = $this->Auth->identify();
  
            if ($client) {
                $this->__makeJason(1,"success",$client);
                
                $this->Auth->setUser($client);
            }else{
                $this->__makeJason(2,"errors",$client->errors());
            }
           // $this->Flash->error(__('Invalid username or password, try again'));
        }
    }




    private function __makeJason($result,$message,$data)
    {
        $resultJ= \json_encode(array('result'=>$result,'message'=>$message,'data'=>$data));
          $this->response->type('json');
            $this->response->body($resultJ);
                return $this->response;
    }
    

}