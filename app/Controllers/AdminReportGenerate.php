<!-- <?php

namespace App\Controllers;
use App\Models\doctorModel;
use \Mpdf\Mpdf;

class AdminReportGenerate extends BaseController
{
    public function index()
    {
        if (session()->get('admin_id') == null) {
            return redirect()->to('login/index')->with('fail', 'You must be logged in..');
          }


          
        $mpdf = new \Mpdf\Mpdf();

        $mpdf->SetHeader('Channeldoc.lk|Report|{PAGENO}');

        $mpdf->WriteHTML('Document text');
        $mpdf->WriteHTML('Document text');

        
        return redirect()->to($mpdf->Output('filename.pdf','I'));

        
    } 

}

?> -->