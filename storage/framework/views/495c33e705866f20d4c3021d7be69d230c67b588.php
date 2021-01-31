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
<?php if(session()->has('cart')): ?>
  <?php $__currentLoopData = $data['carts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($cart['id']); ?></th>
      <td><?php echo e($cart['name']); ?></td>
      <td><?php echo e($cart['amount']); ?></td>
      <td>
      <?php echo e($cart['qty']); ?>

      </td>
      <td><?php echo e($cart['qty']*$cart['amount']); ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a  href="<?php echo e(route('one.add',$cart['id'])); ?>">
            <button type="button" class="btn btn-success">+</button>
        </a>
        <a  href="<?php echo e(route('one.reduce',$cart['id'])); ?>">
        <button type="button" class="btn btn-primary">-</button>
        </a>    
        <a  href="<?php echo e(route('one.delete',$cart['id'])); ?>">   
            <button type="button" class="btn btn-danger">刪除</button>
            </a>
        </div>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    沒有商品
    <?php endif; ?>
  </tbody>
</table>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-8">
        
      </div>
      <div class="col-md-4">
        <h3>總計：<?php echo e($data['totalPrice']); ?></h3>
        
        <a class="btn btn-primary" href="#">前往結帳
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="btn btn-primary" href="/">繼續購物
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="btn btn-danger" href="/car/destroy">清空購物車
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