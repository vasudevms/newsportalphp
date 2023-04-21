<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>

  <a href="/admin" style="color:red">Back</a>
  <form action="/add/news" method="POST" enctype="multipart/form-data">
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
      <div class="w-full max-w-md space-y-8">
        <div>
          <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
            alt="Your Company">
          <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Add News</h2>
        </div>

        <?php if (isset($errors['title'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['title'] ?>
          </li>
        <?php endif; ?>

        <?php if (isset($errors['authorname'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['password'] ?>
          </li>
        <?php endif; ?>
        <?php if (isset($errors['authorname'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['authorname'] ?>
          </li>
        <?php endif; ?>
        <?php if (isset($errors['date'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['date'] ?>
          </li>
        <?php endif; ?>
        <?php if (isset($errors['category'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['category'] ?>
          </li>
        <?php endif; ?>
        <?php if (isset($errors['content'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['content'] ?>
          </li>
        <?php endif; ?>
        <?php if (isset($errors['image'])): ?>
          <li class="text-red-500 text-xs mt-2">
            <?= $errors['image'] ?>
          </li>
        <?php endif; ?>



        <form class="mt-8 space-y-6" action="/add/news" method="POST">
          <input type="hidden" name="_method" value="POST">
          <div class="-space-y-px rounded-md shadow-sm">
            <div>
              <label for="title" class="sr-only">Title</label>
              <input id="title" name="title" type="text" autocomplete="title" required
                class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                placeholder="Title">
            </div>
            <div>
              <label for="authorname" class="sr-only">Authorname</label>
              <input id="authorname" name="authorname" type="text" autocomplete="authorname" required
                class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                placeholder="Authorname">
            </div>
            <div>
              <label for="date" class="sr-only">Date</label>
              <input id="date" name="date" type="date" autocomplete="date" required
                class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                placeholder="Date">
            </div>
            <div>
              <label for="verify" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
              <div class="mt-2">
                <select id="category" name="category" autocomplete="e" required
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option></option>
                  <option>Sports</option>
                  <option>Politics</option>
                  <option>Movie</option>
                  <option>Others</option>
                </select>
              </div>


              <div class="col-span-full">

                <div class="mt-2">
                  <textarea id="content" name="content" rows="3" placeholder="Content"
                    class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                </div>
              </div>




              <form action="/add/news" id="image" name="image" method="post" enctype="multipart/form-data">
                Select Image to Upload:
                <input type="file" name="image">
                <input type="submit" name="submit" value="Upload">
              </form>



            </div>
            <div>
              <button type="submit"
                class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                submit
              </button>
            </div>
          </div>


        </form>
</main>

<?php require base_path('views/partials/footer.php') ?>