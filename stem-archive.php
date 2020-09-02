<?php
$title = 'COSPAR-K Channel Catalogue';
include('include/header.php');
?>

        <!-- animation -->
        <!-- title -->
        <div class="title">
            <div class="container">
                <div class="row py-5">
                    <div class="col py-4">
                        <h1><?php echo $title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col">
                        <!-- Article Template -->
                        <!-- <script id="news" type="text/x-handlebars-template">
                            {{#each items}}
                                <a href="{{this.link}}" target="_blank" class="col-md-3 archive-item">
                                  <div class="archive-date">
                                    {{this.date}}
                                  </div>
                                  <div class="archive-image">
                                    <span>{{this.type}}</span>
                                    <img src="img/cospark/news/{{this.image}}" class="img-fluid">
                                  </div>
                                  <div class="archive-title">
                                      {{this.title}}
                                  </div>
                                </a>
                            {{/each}}
                        </script> -->
                      <!-- archive -->
                      <div class="stem-news">
                        <div class="row mb-4" id="archive">
                        </div>
                      </div>
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
                      <!-- end archive -->
                      <div class="row">
                        <div class="col-md-12">
                          <a href="stem"><strong>Go back to COSPAR-K main page</strong></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->

<?php
include('include/footer.php');
?>
