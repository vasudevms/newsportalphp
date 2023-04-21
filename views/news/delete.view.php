<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="flow-root">
    <div class="float-left">
      <h2 class="text-xl font-bold">Categories</h2>
      <?php foreach ($news as $newses): ?>
        <li>
          <div>
            <a href="/news" class="text-blue-500 hover:underline">
              <?= ($newses['category']) ?>
        </li></a>
      <?php endforeach; ?>

    </div>
    <h2 class="flex justify-center text-xl font-bold">News Highlights</h2>

    <table class="table align item justify-center">
      <tbody>
        <?php foreach ($news as $newses): ?>
          <div class="flex justify-center bg-blue shadow">
            <div class="" style="width: 30rem;">
              <tr>
                <td style="width:250px; height:250px;"><a href="/viewpage?id=<?= $newses['id'] ?>"> <?= '<img src="data:image/jpeg;base64,' . base64_encode($newses['image']) . '" width="1000px" height="1000px" />' ?>
                  </a></td>

                <td>
                  <?= $newses['title']; ?>
                </td>
               
                <td>
                  <?= $newses['content']; ?>
                </td>
                <td>
                  <form method="GET" action=/comment>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </div>

      </tbody>
    </table>

  </div>
  <div>
    <h2 class="flex justify-left text-xl font-bold">Comments</h2>

    <table class="table align item justify-center">

      <thead>

        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Comments</th>

        </tr>
      </thead>


      <tbody>
        <?php foreach ($comments as $comment): ?>
          <tr>
            <th scope="row">
              <?= $comment['id']; ?>
            </th>
            <td>
              <?= $comment['name']; ?>
            </td>
            <td>
              <?= $comment['email']; ?>
            </td>
            <td>
              <?= $comment['comments']; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

</main>

<?php require base_path('views/partials/footer.php') ?>