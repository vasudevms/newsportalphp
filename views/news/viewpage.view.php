<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main><div><a href="/" style="color:red">Back</a> </div>

    <div class="flow-root">
       <div class="float-left"> 
    <h2 class="text-xl font-bold">Category</h2>
    <?php foreach ($news as $newses) : ?>
                <li><div>
                    <a href="/news" class="text-blue-500 hover:underline">
                        <?=($newses['category']) ?></li></a>
                        <?php endforeach; ?>

    </div>
    <h2 class="flex justify-center text-xl font-bold">News Highlights</h2>


<table class="table align item justify-center" >
<tbody>
<?php foreach($news as $newses):?>  
  <div class="flex justify-center bg-blue shadow">
<div class="" style="width: 30rem;">
    <tr>
    <td style="width:250px; height:250px;"><a href="/viewpage?id=<?= $newses['id'] ?>"> <?='<img src="data:image/jpeg;base64,'.base64_encode($newses['image']).'" width="1000px" height="1000px" />'?> </a></td>

      <td><?=$newses['title'];?></td>
      
      <td><?=$newses['content'];?></td>
      <td> <form method="GET" action=/comment>
    </form></td>
  
      </tr>
    <?php endforeach ;?>     
   </div>
  
  </tbody>
</table>        
    </div>
    <div>
        
    <h2 class="flex justify-left text-xl font-bold">Comments</h2>

    <table class="table align item justify-center" >
       
<thead>

<tr>
<th scope="col">Sl.no</th>
     <th scope="col">Name</th>
     <th scope="col">Email</th>
     <th scope="col">Comments</th>
         
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
      </tr>
    <?php endforeach ;?>
    </tbody>
</table>

<form method="GET" action="/comment">

<input type="hidden" name="id" value="<?=$news_id?>" ></input>
<button
    type="submit"   
    class=" justify center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
     >Comments
    </button>
   </form>
</main>

<?php require base_path('views/partials/footer.php') ?>



