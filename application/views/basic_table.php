<?php $this->load->view('header');?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Product Details
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th data-breakpoints="xs">Notes</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Items in stock</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Items in ordered</th>
          </tr>
        </thead>
        <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->brand."</td>";
  echo "<td>".$row->notes."</td>";
  echo "<td>".$row->items_in_stock."</td>";
  echo "<td>".$row->items_in_ordered."</td>";
  echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
      </table>
    </div>
  </div>
</div>
</section>
 <?php $this->load->view('footer');?>
