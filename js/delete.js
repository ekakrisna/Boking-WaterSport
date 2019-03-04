$(".link-delete").click(function(){
  var r = confirm("Apakah Anda Yakin Ingin Menghapus?");
  var GetAttr = $(this).attr("data-id");
  if (r == true) {
      window.location = "../pandan/akun.php?option=delete&id="+GetAttr;
  } else {
      return false;
  }
});
$(document).ready(function(){
  $("#search_form").submit(function(e){
    e.preventDefault();
    var q = $("#query_search").val();
    window.location = "../pandan/akun.php?q=" + q;
  });
});
