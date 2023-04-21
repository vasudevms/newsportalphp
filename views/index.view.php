<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="flow-root">
       <div class="float-left"> 
    <h2 class="text-xl font-bold">Categories</h2>
    <?php foreach ($category as $categories) : ?>
                <li><div>
                    <a href="/<?=($categories['category']) ?>" class="text-blue-500 hover:underline">
                        <?=($categories['category']) ?></li></a>
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
  
  </tbody>
</table>       
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>




















<!-- <ul>
<?php foreach ($notes as $note) : ?>
                <li><div>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?></li></a>
                    
                   <form method="POST" action="/notes?id=<?=$note['id'] ?>" >
                    <input type="hidden"name="_method" value="DELETE">
                    <input type="hidden"name="id" value="<?=$note['id']?>">
                    <button type="submit" class="text-red-500 mr-auto">Delete</button>
                   
            
            </form>
         <?php endforeach; ?>

        </ul> -->

        <!-- <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p> -->