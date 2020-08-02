
  $(function() {
    $(".s").on('click',function() {
      $("#mform").submit();
    });
    $(".m").on('click',function() {
      $(location).attr('href',"./member.php" );
    });

    $("#chk").on('click',function(){
      var id = $("#uid").val();
      if(id){
        id = "check.php?userid="+id;
        window.open(id,"_blank","width=300,height=100");
        }else{
          alert("아이디를 입력세요");
        }
    });

    $(".r").on('click',function() {
      $("#mform").submit();
    });

    $(".re").on('click',function() {
      $(location).attr('href',"./member.php" );
    });

    $(".b").on('click',function() {
      $(location).attr('href',"./index.php" );
    });

  });
