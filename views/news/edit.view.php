<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
<a href="/admin" style="color:red">Back</a>  

<form action="/updatenews" method="POST"  enctype="multipart/form-data">
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Edit News</h2>
            </div>

            <?php if (isset($errors['title'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['title'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['authorname'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['authorname'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['authorname'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['date'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['date'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['category'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['category'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['content'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['content'] ?></li>
                    <?php endif; ?>
                    <?php if (isset($errors['image'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['image'] ?></li>
                    <?php endif; ?>
           
                <?php foreach($news as $newses) ?>

            <form class="mt-8 space-y-6" action="/updatenews<?=$newses['id']?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="POST">
                <div class="-space-y-px rounded-md shadow-sm">
               
                
                <input type="hidden" name="_method" value="POST">
                      <input type="hidden" name="id" value="<?=$newses['id']?>">
                      <input type="hidden" name="_method" value="POST">
                      <input type="hidden" name="date" value="<?=$newses['date']?>">
               
                      <div>
                     
                        <label for="title" class="sr-only">Title</label>
                        <input id="title" name="title" type="text" autocomplete="title" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               value="<?=$newses['title']?>" placeholder="<?=$newses['title']?>">
                    </div>
                    <div>
                        <label for="authorname" class="sr-only">Authorname</label>
                        <input id="authorname" name="authorname" type="text" autocomplete="authorname" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               value="<?=$newses['authorname']?>" placeholder="<?=$newses['authorname']?>">
                    </div>
                    
                    <div>
                        <label for="category" class="sr-only">Category</label>
                        <input id="category" name="category" type="text" autocomplete="category" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               value="<?=$newses['category']?>" placeholder="<?=$newses['category']?>">
                    </div>
                    
      
        <div class="col-span-full">
         
          <div class="mt-2">
            <textarea id="content" name="content" rows="3"   placeholder="<?=$newses['content']?>" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"><?php
  echo $newses['content'];
?></textarea>
          </div>
        </div>
       
        <form action="/updatenews" id="image" name="image" method="POST"  enctype="multipart/form-data" >
    Select Image to Upload:
    <input type="file" name="image">
    <input type="submit" name="submit" value="<?=$newses['category']?>"placeholder="">
</form>
        
      </div>
      <div>
                    <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        submit
                    </button>

                </div>
    </div>

</main>

<?php require base_path('views/partials/footer.php') ?>