<?php 

namespace App\Controller;

use App\Core\Application;
use App\Core\Request;
use App\Core\Controller;
use App\Core\Response;
use App\Models\TestForm;

class SiteController extends Controller
{
    public function test(Request $request, Response $response)
    {
        $contact = new TestForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->save()){
                Application::$app->session->setFlash('success', 'Thanks for your testing.');
                return $response->redirect('/test');
            }
        }

        return $this->render('test', [
            'model' => $contact
        ]);
    }

    public function home()
    {

        $params = [
            'name' => "TestingName"
        ];
        
        return $this->render('home', $params);
    }
}
