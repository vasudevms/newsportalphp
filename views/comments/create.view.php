<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Your Company">

                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Add comments</h2>
            </div>


            <?php if (isset($errors['name'])): ?>
                <p class="text-red-500 text-xs mt-2">
                    <?= $errors['name'] ?>
                </p>
            <?php endif; ?>

            <?php if (isset($errors['email'])): ?>
                <p class="text-red-500 text-xs mt-2">
                    <?= $errors['email'] ?>
                </p>
            <?php endif; ?>
            <?php if (isset($errors['comments'])): ?>
                <p class="text-red-500 text-xs mt-2">
                    <?= $errors['comments'] ?>
                </p>
            <?php endif; ?>


            <form class="mt-8 space-y-6" action="/comment" method="POST">
                <input type="hidden" name="news_id" value="<?= $news_id ?>">

                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Name">
                    </div>


                    <div>

                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Email">
                    </div>

                    <div>
                        <label for="comments" class="sr-only">Comments</label>

                        <textarea id="comments" name="comments" rows="3" placeholder="comments"
                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>

                    </div>

                </div>


                <div>
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        submit
                    </button>
                </div>


            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>