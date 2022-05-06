<div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style = "background-color:#28a745;color:#FFFFFF" >
                                <tr>
                                    <th>Time</th>
                                    <th>Location</th>
                                    
                                </tr>
                            </thead>
</div>
<div class="row">
              <?php
              session();

              $doctorID = session()->get('doctor_id');
              $doctorModel = new \App\Models\appointmentdoc;
              $query = $doctorModel->query("SELECT * FROM appointmentdoc WHERE doctor_id = $doctorID");
              foreach ($query->getResult() as $row) {

              ?>

                <div class="profile">

                  <ul>

                    <li>Time <b><?php echo $row->time ?></b></li>
                    <li>Location <b><?php echo $row->location ?></b></li>
                    <a class="nav-link btn logoutbtn" href=<?php echo site_url('Doctordetials/book/' . $row->doctor_id. $row->time. $row->location) ?> style="text-decoration:none">Book</a>



                  </ul>
                <?php } ?>  





