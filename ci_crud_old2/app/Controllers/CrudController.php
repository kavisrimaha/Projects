<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class CrudController extends Controller
{

 //login 

 public function login()
    {
        //echo view('/template/header'); 
        echo view('login'); 
        //echo view('/template/footer'); // Pass data to the view
    }
    public function register()
    {
        $data = []; // Always initialize
        helper(['form']);  
        if ($this->request->getMethod() == 'post') {
            
            $rules = [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required',
                'confirmPassword' => 'matches[password]',
            ];
    
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator; // If validation fails
            } else {
                // else store user in db
                $model = new UserModel();
                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/');
            }
        }
    
        echo view('register', $data);
    }
    
       

















    public function index()
    {
        $model = new UserModel(); // Instantiate your model
        $data['alldbvalues'] = $model->findAll(); // Fetch all data

        return view('crudview', $data); // Pass data to the view
    }

    public function add()
    {
        return view('add');
    }

    // The edit method accepts the user ID as a parameter
    public function edit($id)
    {
        $model = new UserModel();

        // Fetch the user data based on the given ID
        $data['user'] = $model->find($id); // Finds user by ID

        if (!$data['user']) {
            // If no user is found, redirect or show an error
            //print_r("error");
            return redirect()->to(base_url('crudview'));
        }

        // Pass the user data to the edit view
        return view('edit', $data);
    }

    public function store()
    {
        $model = new UserModel(); 
        $data = [
            'name' => $this->request->getPost('name'),
            'mobile' => $this->request->getPost('mobile'),
            'email' => $this->request->getPost('email')
        ];
        $model->save($data);

        return redirect()->to(base_url('crudview')); // Redirect after store
    }

    // The update method handles updating user data
    public function update($id)
    {
        $model = new UserModel();

        // Gather POST data from the form
        $data = [
            'name' => $this->request->getPost('name'),
            'mobile' => $this->request->getPost('mobile'),
            'email' => $this->request->getPost('email')
        ];

        // Update the user data in the database
        $model->update($id, $data);

        return redirect()->to(base_url('crudview')); // Redirect after update
    }

    //delete 
    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to(base_url('crudview'));
    }
}
