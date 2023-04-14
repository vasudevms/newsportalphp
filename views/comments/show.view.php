<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p> -->


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
         
<table class="table" >

<thead>

<tr>
     <th scope="col">Id</th>
     <th scope="col">Name</th>
     <th scope="col">Email</th>
     <th scope="col">Comment</th>
     
     <th scope="col">Verify</th>
    
    </tr>
  </thead>
  <tbody>
 
    
   <?php foreach($comments as $comment):?>  
    <tr>
      <th scope="row"><?=$comment['id'];?></th>
      <td><?=$comment['name'];?></td>
      <td><?=$comment['email'];?></td>
      <td><?=$comment['comments'];?></td>
      <td><?=$comment['verify'];?></td>

          </tr>
    <?php endforeach ;?> 
  
  </tbody>
</table> 
        

        <!-- <footer class="mt-6">
            <a href="/note/edit?id=" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>
        </footer> -->
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>