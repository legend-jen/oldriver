<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
 
  <!-- Page Content -->
  <div class="container">

  
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">單價</th>
      <th scope="col">數量</th>
      <th scope="col">小計</th>
      <th scope="col">動作</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      
      </td>
      <td>Mark</td>
      <td><div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-success">+</button>
  <button type="button" class="btn btn-primary">-</button>
  <button type="button" class="btn btn-danger">刪除</button>
</div></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      
      </td>
      <td>Mark</td>
      <td><div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-success">+</button>
  <button type="button" class="btn btn-primary">-</button>
  <button type="button" class="btn btn-danger">刪除</button>
</div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
          
      </td>
      <td>Mark</td>
      <td><div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-success">+</button>
  <button type="button" class="btn btn-primary">-</button>
  <button type="button" class="btn btn-danger">刪除</button>
</div></td>
    </tr>
  </tbody>
</table>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-9">
        
      </div>
      <div class="col-md-3">
        <h3>總計：1450</h3>
        
        <a class="btn btn-primary" href="#">前往結帳
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="btn btn-primary" href="/">繼續購物
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>


  </div>
  <!-- /.container -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/car/oldriver/resources/views/count.blade.php ENDPATH**/ ?>