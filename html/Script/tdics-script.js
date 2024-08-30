function CMS_News() {
  location.href = "../cms/cms-news.php";
};

function CMS_Knowledge() {
  location.href = "../cms/cms-knowledge.php";
};

$(document).ready(function () {
  
  $("#Menu-News").click(function (e) {
    e.preventDefault();
    CMS_News();
  });

  $("#Menu-Knowledge").click(function (e) {
    e.preventDefault();
    CMS_Knowledge();
  });



});