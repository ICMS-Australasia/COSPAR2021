<?php
$cospark = true;
$title = 'Paint the Sky Student Art Gallery';
include('include/header.php');
include('include/cospark.php');
?>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="row py-5">
                    <div class="col stem-page" id="top">
                      <h1 class="mt-3 mb-5">Paint the Sky Student Art Gallery</h1>
                      <h2>Click each Artwork to view a description by the artist</h2>


                      <div class="stem-news mt-5" id="submissions">
                      </div>
                      <div class="row" id="submission-buttons"></div>

                      <script type="text/javascript" src="./competition-submissions.js"></script>
                      <script type="text/javascript" src="./pagination.js"></script>

                      <script type="text/javascript">
                        // submissions = submissions.map((sub, index) =>
                        //   `
                        //   <a href="#submission-${index}" data-toggle="modal" target="_blank" class="col-4 col-sm-4 col-md-2 archive-item">
                        //     <div class="archive-image">
                        //       <img src="${sub.img}?text=${sub.title}" class="img-fluid" width="100%" loading="lazy">
                        //     </div>
                        //     <div class="archive-title">
                        //         ${sub.title}
                        //     </div>
                        //   </a>
                        //   <div class="submission-popups">
                        //     <div class="modal fade" id="submission-${index}">
                        //       <div class="modal-dialog modal-dialog-centered">
                        //         <div class="modal-content">
                        //           <!-- modal content -->
                        //           <div class="row p-0 m-0">
                        //             <div class="col-md p-0 m-0">
                        //               <img src="${sub.img}" class="img-fluid" loading="lazy">
                        //             </div>
                        //             <div class="col-md-3 p-5 m-0 d-flex align-items-center">
                        //               <div>
                        //                 <a type="button" class="close" data-dismiss="modal">&times;</a>
                        //                 <span class="pop-title">${sub.title}</span>
                        //                 <p class="pop-description">${sub.desc}</p>
                        //               </div>
                        //             </div>
                        //           </div>
                        //         </div>
                        //         <!-- end modal content -->
                        //       </div>
                        //     </div>
                        //   </div>
                        //   `
                        // );

                        //Create groups of submissions
                        // let pageArr = [];
                        // for (let i = 0; i < submissions.length; i += 20) {
                        //   pageArr.push(submissions.slice(i, i + 20));
                        // }
                        // pageArr = pageArr.map(p => p.join(``));
                        // pageArr.forEach((p, index) => {
                        //   document.getElementById(`submissions`).innerHTML +=
                        //     `
                        //       <div id="page-${index}" class="page">
                        //         <div class="row mb-4">
                        //           ${p}
                        //         </div>
                        //       </div>
                        //     `
                        // });
                        //
                        // let btns = ``;
                        // btns = pageArr.map((page, index) =>
                        // `<button type="button" name="button${index+1}" data-page="${index}" id="button${index+1}" class='col-3' onclick="pagination(this); location.href='#top'">${index+1}</button>`
                        //   `<a href='/stem-competition-submissions.php?page=${index+1}' data-page="${index+1}" id="button${index+1}" class='col-3 button'>${index+1}</a>`
                        // ).join(``);
                        // document.getElementById('submission-buttons').innerHTML = btns;
                        //
                        // function pagination(e) {
                        //   document.querySelectorAll(`div.page`).forEach(b => { b.classList.add(`d-none`); b.classList.remove(`d-block`); } );
                        //   document.getElementById(`page-${e.innerHTML-1}`).classList.add(`d-block`);
                        //   document.getElementById(`page-${e.innerHTML-1}`).classList.remove(`d-none`);
                        //   document.querySelectorAll(`button`).forEach(b => { b.classList.remove(`active`); } );
                        //   e.classList.add(`active`);
                        //   window.scrollTo(0, 0);
                        // }
                        //
                        // pagination(document.getElementById("button1"));
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
