

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php include 'dash/header.php'; ?>

           


<div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-bar-chart"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Monthly Income</h6>
                                <h3 class="card-title text-warning bold">74,502</h3>
                            </div>
                            <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>0</small></span>
                                <span class="float-right"><small>100,000</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-receipt"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Monthly Project</h6>
                                <h3 class="card-title text-primary bold">5</h3>
                            </div>
                            <div class="progress progress-bar-sm">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>Total Monthly Project</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-wallet"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Monthly Expenses</h6>
                                <h3 class="card-title text-bubblegum bold">60,942</h3>
                        </div>
                            <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-bubblegum" role="progressbar" style="width: 30%" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>0%</small></span>
                                <span class="float-right"><small>100%</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i> Manage Users & Admins
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover init-datatable" id="">
                                    <thead class="thead-light">
                                       
                                        <tr>
                                        <th>S.No:</th>
                          <th>User Name:</th>
                          <th>Admin Name</th>
                          
                          <th>Action:</th>
                                        </tr>
                                    </thead>



                                    <tbody>
                                        
           <?php
      $conn=new mysqli('localhost','root','','harsh01',);
      if($conn->connect_error)
      {
          echo"unable to connect";
          echo 'br';
      }
      else{
         
          $query=mysqli_query($conn,"SELECT * FROM users");
          if(mysqli_num_rows($query)>0)
          {
              while($rowdata=mysqli_fetch_assoc($query))
              {
               echo" <tr>";
               echo "<td>{$rowdata['id']}</td>";
               echo "<td>{$rowdata['user_name']}</td>";
               echo "<td>{$rowdata['name']}</td>";
              
             
             echo "<td>  <a href='user_delete.php?del={$rowdata['id']}'>Delete</a> </td>";
               echo "</tr>";
      
              }
          }
      }
      ?>
           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF Datatable Complex Headers -->
            <!-- BOF Datatable Row Selection -->
            
            <!-- EOF Datatable Row Selection -->
            <!-- BOF Datatable Events -->
            
            <!-- EOF Datatable Events -->
            <!-- BOF Datatable Show/Hide Columns -->
            
            <!-- EOF MAIN-BODY -->

        </div>

            
               
            
        <?php include 'dash/footer.php'; ?>
      

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>