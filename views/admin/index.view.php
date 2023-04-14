<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="flow-root">
       <div class="float-left"> 
    <h2 class="text-xl font-bold">Categories</h2>
    <?php foreach ($news as $newses) : ?>
                <li><div>
                    <a href="/news" class="text-blue-500 hover:underline">
                        <?=($newses['category']) ?></li></a>
                        <?php endforeach; ?>

    </div>

    <form method="POST" action="/add" >
    
    <button
    type="submit"   
    class="float-right rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
     >Add
    </button> </form>
    <h2 class="flex justify-center text-xl font-bold">News Highlights</h2>
<div class="flex justify-center bg-blue shadow">
  
<div class="" style="width: 30rem;">





<!-- <table class="table" >

<thead>

  </thead>
  <tbody>
 
    
   <?php foreach($news as $newses):?>  
    <tr>
       
   
      
      <?php echo "<td>" . $newses['title'] . "</td>";
            echo "<td>" . $newses['authorname'] . "</td>";
            echo "<td>" . $newses['category'] . "</td>";
            echo "<td>" ."<img src=".$newses['image'].' width=100px height="100px" class="card-img-top">' . "</td>";
            echo "</tr>";  
          ?>
    <?php endforeach ;?> 
  
  </tbody>
</table> -->
 </form>    

  
                    


  <img src="https://drop.ndtv.com/albums/SPORTS/ipl-2023no-ball_638162126656973699/638162129010709159.png" class="card-img-top" alt="">
  <div class="card-body">
    <p class="card-text">Chennai Super Kings defeated Lucknow Super Giants by 12 runs in their IPL 2023 clash on Monday. However, pacer Tushar Deshpande bowled 3 no-balls and 4 wides during the match, which nearly took CSK on the verge of defeat</p>
  </div>
  <form method="GET" action=/edit>
  <button
    type="submit"   
    class="float-right rounded-md border border-transparent bg-gray-400 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
     >Edit
    </button></form>
    <form method="GET" action=/comment>
    <button
    type="submit"   
    class="float-right rounded-md border border-transparent bg-gray-400 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
     >Comments
    </button>  </form>
</div>

</div>


<div class="flex justify-center bg-blue shadow">
<div class="" style="width: 30rem;">
  <img src="https://drop.ndtv.com/albums/SPORTS/ipl-2023no-ball_638162126656973699/638162129010709159.png" class="card-img-top" alt="">
  <div class="card-body">
    <p class="card-text">Chennai Super Kings defeated Lucknow Super Giants by 12 runs in their IPL 2023 clash on Monday. However, pacer Tushar Deshpande bowled 3 no-balls and 4 wides during the match, which nearly took CSK on the verge of defeat</p>
  </div>
</div>
</div>

<div class="flex justify-center bg-blue shadow">
<div class="" style="width: 30rem;">
  <img src="https://drop.ndtv.com/albums/SPORTS/ipl-2023no-ball_638162126656973699/638162129010709159.png" class="card-img-top" alt="">
  <div class="card-body">
    <p class="card-text">Chennai Super Kings defeated Lucknow Super Giants by 12 runs in their IPL 2023 clash on Monday. However, pacer Tushar Deshpande bowled 3 no-balls and 4 wides during the match, which nearly took CSK on the verge of defeat</p>
  </div>
</div>
</div>

        
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