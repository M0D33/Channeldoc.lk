<?php

namespace App\Controllers;

class DocUpload extends BaseController
{
    private $model;
    public function __construct()
    {
        
        $this->pracDocModel = new \App\Models\pracDocModel;
    }


  public function index()
  {
    if (session()->get('doctor_id') == null) {
      return redirect()->to('doctorlogin/index')->with('fail', 'You must be logged in..');
    }
    
    return view('DocUpload/index');
  }

  public function upload($id)
  {
    //     $appointments = new \App\Models\Appointments();

    // session();
    
    // session()->set('appointmentid', $id); 

    return view('DocUpload/index.php', ["id" => $id]);
  }
 

  public function submitPracDoc() 
    {
        $postID = $this->request->getPost('appointmentid');
        $file = $this->request->getFile('doc');

        if (!$file->isValid()) {
            $error_code = $file->getError()();
            if ($error_code == UPLOAD_ERR_NO_FILE) {
                return redirect()->back()->with('warning', 'No File Selected');
            }
            throw new \RuntimeException(($file->getErrorString()));
        }
        $size = $file->getSizeByUnit('mb');
        if ($size > 5) {
            return redirect()->back()->with('warning', 'File Size is More Than 5MB');
        }

        $path = ROOTPATH . 'public/uploads/practitionerDocs/';
        $path = $file->move($path);
        $filename = $file->getName();
        $filename2 = 'uploads/practitionerDocs/' . $filename;

        $this->pracDocModel->addPracDoc($postID, $filename2);
        // $this->appointmentModel->updatePractitionerDocAvailabilityValue($postID);

        return redirect()->to("/AppointmentsPractitioners/index");
    }
}