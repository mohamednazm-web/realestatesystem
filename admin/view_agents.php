<?php include('include/header.php');?>
      
<script type="text/javascript">

</script>
    
    <section>
       
<?php include('include/sidebar.php');?>
        <section class="content">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                             View Agent
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            <th>S.no</th>
                                            <th>Agent Name</th>
                                            <th>House Name</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=1;
                                            include("../connection/config.php");

                                            $query=mysqli_query($con,"select * from property");
                                            while($res=mysqli_fetch_array($query))
                                            {
                                            $id=$res['id'];
                                            $img=$res['image'];
                                            ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $res['property_owner'];?></td>
                                            <td><?php echo $res['title'];?></td>
                                            <td><?php echo $res['property_owner_number'];?></td>
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php include'include/footer.php';?>


                                