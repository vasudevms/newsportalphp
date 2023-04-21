<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
<a href="/admin" style="color:red">Back</a>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
<table class="table" >
<thead>
    <tr>
     <th scope="col">Sl.no</th>
     <th scope="col">Name</th>
     <th scope="col">Email</th>
     <th scope="col">Comment</th>
     <th scope="col">Verification</th>
   
    </tr>
  </thead>
  <tbody>
   
   <?php foreach($comments as $comment):?>  
    <?php $no+=1 ?> 
    <tr>
      <th><?= $no ?></th>
      <td><?=$comment['name'];?></td>
      <td><?=$comment['email'];?></td>
      <td><?=$comment['comments'];?></td>
      <td><?=$comment['verify'];?></td>     
      <td><a href="/verify?id=<?=$comment['id']?>"><button type="submit"class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-1 px-2 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">verify</button></a></td>
    </tr>
    <?php endforeach ;?> 
  
  </tbody>
</table> 
  
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>












