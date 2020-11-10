<?php
$cospark = true;
$title = 'Media';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page">


                      <h1 class="mt-3 mb-5">Media</h1>

                      <p>Catch up on all the stories here or <a href="https://icmsaust.eventsair.com/cospar-2021/cospar-k-eoi/Site/Register" target="_blank">join our mailing list</a> to receive these updates direct from space! </p>

                      <div class="stem-news mt-5">
                        <div class="row mb-4" id="archive">
                        </div>
                      </div>

                      <script src="articles.js" type="text/javascript"></script>
                      <script type="text/javascript" async>
                        let compiledHtml = ``;
                            compiledHtml = latestNews.items.map(items =>
                                `
                                <a href="${items.link}" target="_blank" class="col-md-3 archive-item">
                                  <div class="archive-date">
                                    ${items.date}
                                  </div>
                                  <div class="archive-image">
                                    <span>${items.type}</span>
                                    <img src="img/cospark/news/${items.image}" class="img-fluid">
                                  </div>
                                  <div class="archive-title">
                                      ${items.title}
                                  </div>
                                </a>
                                `
                            ).join(``);
                        document.getElementById('archive').innerHTML = compiledHtml;
                      </script>



                      <?php
                      include('include/cospark-footer.php');
                      ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- content -->

<?php
include('include/footer.php');
?>
