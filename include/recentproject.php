<section class="text-gray-600 body-font">
          <h1 align="center" class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900" style="font-size: 2em">RECENT PROJECT</h1>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 justify-center">
    <?php 
         $query=mysqli_query($con,"SELECT * FROM project");
         while($row=mysqli_fetch_assoc($query))
         {
             ?>
      <div class="lg:w-1/4 md:w-1/2 p-0 w-full shadow-lg m-3 mt-4">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images/banner/<?php echo $row['image'];?>">
        </a>
        <div class="mt-4 p-3">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo $row['cid'];?></h3>
          <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $row['title'];?></h2>
          <div class="flex flex-row justify-between">
            <p class="mt-1">Rs: <?php echo $row['price'];?></p>
            <Button class="rounded-sm" style="color: #fff;background: #6366F1; padding: 1px 20px;">Buy</Button>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
</section>