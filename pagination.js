let pageArr = [];
for (let i = 0; i < submissions.length; i += 20) {
  pageArr.push(submissions.slice(i, i + 20));
}

let queries = window.location.search;
let parameters = new URLSearchParams(queries);

let pageNum = parseInt(parameters.get('page'));
let range = 5;
console.log(`Page Number: ${pageNum}`);

let pageButtons = ``;
if (pageNum - Math.ceil(range/2) < 0) {
  console.log("Case 1");
  for (let i = 0; i < range; i ++) {
    pageButtons += `<a href='./stem-competition-submissions.php?page=${i+1}' data-page="${i+1}" id="button${i+1}" class='col button'>${i+1}</a>`
  }
  pageButtons += `<a href='./stem-competition-submissions.php?page=${pageNum + 1}' data-page="${pageNum + 1}" id="button${pageNum + 1}" class='col button'><i class="fas fa-chevron-right"></i></a>`
} else if (pageNum + Math.ceil(range/2) > pageArr.length) {
  console.log("Case 2");
  pageButtons += `<a href='./stem-competition-submissions.php?page=${pageNum - 1}' data-page="${pageNum - 1}" id="button${pageNum - 1}" class='col button'><i class="fas fa-chevron-left"></i></a>`
  for (let i = pageArr.length - 5; i < pageArr.length; i ++) {
    pageButtons += `<a href='./stem-competition-submissions.php?page=${i+1}' data-page="${i+1}" id="button${i+1}" class='col button'>${i+1}</a>`
  }
} else {
  console.log("Case 3");
  pageButtons += `<a href='./stem-competition-submissions.php?page=${pageNum - 1}' data-page="${pageNum - 1}" id="button${pageNum - 1}" class='col button'><i class="fas fa-chevron-left"></i></a>`
  for (let i = pageNum - 3; i < pageNum + 2; i ++) {
    pageButtons += `<a href='./stem-competition-submissions.php?page=${i+1}' data-page="${i+1}" id="button${i+1}" class='col button'>${i+1}</a>`
  }
  pageButtons += `<a href='./stem-competition-submissions.php?page=${pageNum + 1}' data-page="${pageNum + 1}" id="button${pageNum + 1}" class='col button'><i class="fas fa-chevron-right"></i></a>`
}

document.getElementById('submission-buttons').innerHTML = pageButtons;
