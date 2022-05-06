$path = ROOTPATH . 'public/uploads/';
        $path = $file->move($path);
        $filename = $file->getName();

        $user = new \App\Entities\user($this->request->getPost());
        $user->pwd = password_hash($user->pwd, PASSWORD_DEFAULT);
        $user->referraldoc =  'uploads/' . $filename;