<?php include 'header.php'; ?>
                          <div class="container-fluid">
                        <h1 class="mt-4">Delete Courses</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Delete a course</li>
                        </ol>
            
                        <form method = "post" enctype="multipart/form-data">
						<p class='error'><?php echo $error; ?></p>
										<input type='hidden' name='course_id' value='<?php echo $_GET['course_id']; ?>' />
										Enter the Vpcode:
										<input class='form-control' type='password' name='course_del_vpcode' placeholder='Please enter your vpcode'/>
										
										<div class="form-group mt-4 mb-0"><button type='btn btn-primary' name='submit'>Submit</button></div>
                                        </form>
                       
                    </div>
                
 <?php include 'footer.php'; ?>