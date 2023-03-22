<?php $this->load->view('header');?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Product Update Forms
                        </header>
                        <div class="panel-body">
                          <?php
                          $i=1;
                          foreach($data as $row)
                          {
                           ?>
                            <div class="position-center">
                                <form role="form" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" value="<?php echo $row->name; ?>" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand</label>
                                    <input type="text" name="brand" value="<?php echo $row->brand;  ?>" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Notes</label>
                                    <input type="text" name="notes" value="<?php echo $row->notes;  ?>" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Items in stock</label>
                                    <input type="text" name="stock" value="<?php echo $row->items_in_stock;  ?>" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Items in ordered</label>
                                    <input type="text" name="ordered" value="<?php echo $row->items_in_ordered;  ?>" class="form-control" >
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <button type="submit" name="update" value="updatedata" class="btn btn-info">Update</button>
                            </form>
                            </div>
                             <?php } ?>
                        </div>
                    </section>

            </div>
    
           </div>
                         
        </div>
</section>
</section>
 <?php $this->load->view('footer');?>