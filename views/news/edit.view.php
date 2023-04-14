<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
   <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form action="/add/news" method="POST">
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Edit News</h2>
            </div>


           
                


            <form class="mt-8 space-y-6" action="/add/news<?=$news['id']?>" method="POST">
            <input type="hidden" name="_method" value="POST">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="title" class="sr-only">Title</label>
                        <input id="title" name="title" type="text" autocomplete="title" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="<?=$news['title']?>">
                    </div>
                    <div>
                        <label for="authorname" class="sr-only">Authorname</label>
                        <input id="authorname" name="authorname" type="text" autocomplete="authorname" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="<?=$news['authorname']?>">
                    </div>
                    <div>
                        <label for="date" class="sr-only">Date</label>
                        <input id="date" name="date" type="date" autocomplete="date" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="<?=$news['date']?>">
                    </div>
                    <div>
                        <label for="category" class="sr-only">Category</label>
                        <input id="category" name="category" type="text" autocomplete="category" required
                               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                               placeholder="<?=$news['category']?>">
                    </div>
                    
      
        <div class="col-span-full">
         
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" placeholder="<?=$news['content']?>" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

       
        <form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
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