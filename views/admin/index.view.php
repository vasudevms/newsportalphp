<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="h-full bg-gray-200">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <div class="flow-root">
       
   <form method="POST" action="/add" >
    
    <button
    type="submit"  
    class="float-right rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
     >Add
    </button> </form>
    <h2 class="flex justify-center text-xl font-bold">News Highlights</h2>
<div class="flex justify-center bg-blue shadow">
  
<div class="" style="width: 30rem;">

    <form class="mt-8 space-y-6" action="/store" method="POST"> 
    <div class="space-y-px">
    <div class="float-center">
  
<table class="table align item justify-center" >

<thead>

<tr>
     <th scope="col">Sl.no</th>
      <th scope="col">Title</th>
      <th scope="col">Authorname</th>
      <th scope="col">Date</th>
      <th scope="col">Category</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Comments</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
 
    
   <?php foreach($news as $newses):?> 
    <?php $no+=1 ?> 
    <tr>
      <td><?=$no ?></th>
      <td><?=$newses['title'];?></td>
      <td><?=$newses['authorname'];?></td>
      <td><?=$newses['date'];?></td>
      
      <td><?=$newses['category'];?></td>
      <td><?=$newses['content'];?></td>
      <td style="width:250px; height:250px;"> <?='<img src="data:images/jpeg;base64,'.base64_encode($newses['image']).'" width="1000px" height="1000px" />'?> </a></td>     
      <td> <a href="/edit?id=<?=$newses['id']?>" class="bg-gray-400 text-gray-800 border border-current px-3 py-1 rounded">Edit</a></td>
   
     <td> <a href="/commentverify?id=<?=$newses['id']?>" class="bg-gray-400 text-gray-800 border border-current px-3 py-1 rounded">Comments</a></td><br>

     <td ><a href="/destroy?id=<?=$newses['id']?>"  onclick="if (!confirm('Are you sure?')) { return false }">DELETE</a></td>
    
    </tr>
    <?php endforeach ;?> 
  
  </tbody>
</table> 
  </form>   
  
  </tbody>
</table>
 </form>    

<?php require base_path('views/partials/footer.php') ?>




