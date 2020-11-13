$(document).ready(function(){
    // alert("xin chao");
   $(".delete").click(function(){
       alert("Bạn thực sự muốn xóa dữ liệu? ");
   })
//    $(document).ready(function(){

   $("#department").change(function(){
    //    Lấy giá trị:
     $("#txtbutton").click(function(){     
    var depart_id = $("#department").val();
        
        // $("#txtbutton").click(function(){
            alert("xin chao");
            $.ajax({
            //Xu ly truyen
            url:'getUsers.php',
            type:'POST',
             data:{id:depart_id},
            dataType:'json',
            //Xy ly gia tri tra ve
            success:function(res){
                // var obj = $.parseJSON(res);
                $("#staff").empty();
               
                for(var i=0;i<res.length;i++){
                    var id = res[i]['id'];// bangr users 
                    var username = res[i]['username'];  // bang users 
                    var displayname= res[i]['displayname'];
                    var email =res[i]['email'];
                    // var designation =res[i]['designation'];
                    // var age = res[i]["age"];
                    
                    //  $("#staff").append("<option value='"+id+"'>"+name+address+"</option>");
                    //   $("#staff").append("<td></td> <td value='"+id+"'> "+name+address+"</td>");
                        $("#staff").append("<td></td> <td></td> <td></td> <td  value='"+id+"' >"+username+"</td><td  value='"+id+"'>"+displayname+"</td><td  value='"+id+"' >"+email+"</td>");
                        
                }
            }
        })


        })
    // Xử lý truyền -- nhận bằng Ajax
        
    
   });





})