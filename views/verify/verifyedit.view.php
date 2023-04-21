<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            


           
                <?php foreach($comments as $comment) ?>

                <form action="/verifyupdate?id=<?=$comment['id']?>" method="POST" >

            <input type="hidden" name="_method" value="POST">
                <div class="-space-y-px rounded-md shadow-sm">
               
                
                <input type="hidden" name="_method" value="POST">
                      <input type="hidden" name="id" value="<?=$comment['id']?>">
                      <input type="hidden" name="_method" value="POST">
                      <input type="hidden" name="name" value="<?=$comment['name']?>">
                      <input type="hidden" name="email" value="<?=$comment['email']?>">
                      <input type="hidden" name="comments" value="<?=$comment['comments']?>">
                      <input type="hidden" name="news_id" value="<?=$comment['news_id']?>">
               
                      <div>
                      <div class="sm:col-span-3">
                                    <label for="verify"
                                        class="block text-sm font-medium leading-6 text-gray-900">verify</label>
                                    <div class="mt-2">
                                        <select id="verify" name="verify" autocomplete="" required
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            
                                            <option>verify</option>
                                            <option>notverify</option>

                                        </select>
                                    </div>
                                </div>

</form>
        
      </div>
      <div>
                    <button type="submit"
                            class=" justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        submit
                    </button>

                </div>
    </div>

    

</main>

<?php require base_path('views/partials/footer.php') ?>