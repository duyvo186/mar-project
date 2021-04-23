//kiem tra noi dung html load xong chua
$(function(){
    //xu ly cho su kien click vào nut test
    $('#duyne').click(function(){

        var url= 'http://localhost/banhang/update-cart';
        var token= $('#csrf').val();
        var data= {_token:token};
        $.post(url,data)
        .done(function(dulieune){
            //alert(dulieune)
            $('#slmua').val(dulieune.i);
        // })
    })

    .fail(function(dulieune){
        console.log(dulieune);
    })
// //alert(123456);
//         //.css: dinh dang style
//         //.html: lay ra va ghi vao noi dung html
//         //.text: lay ra va ghi vào noi dung la text
//         //.val: lay ra va ghi vao value cho input
//         // $('.title').css('color','red');
//         // $('#ten').val('chao text');
//         // GOI XU LY O SERVER VER THONG QUA AJAX
//         //ROUTE, METHOD, PARAMS
// //         var url = 'http://localhost/banhang/form2';
// //         var token = $('#csrf').val();
// //        // alert(token);
// //         var data = {_token:token};
// //         $.post(url,data)
// //         .done(function(dulieu){ //chi nhan duy nhat 1 trang thai 200
// //             //alert(dulieu)
// //             $('#kq').val(dulieu.so);
// //             $('#ten').val(dulieu.str);
// //             // $('.title').css('color',dulieu.color);
// //         })
// //         })
// //         // .fail(function(dulieu){
// //         //     console.log(dulieu);
// //         // })
// //         // $.ajax({
// //         //     'url':url,
// //         //     'method':'POST'

})
})



// //{} : object
// //[]: mang

// $(function(){
//     //xu ly cho su kien click vào nut test
//     $('#btntest').submit(function(){
//         //.css: dinh dang style
//         //.html: lay ra va ghi vao noi dung html
//         //.text: lay ra va ghi vào noi dung la text
//         //.val: lay ra va ghi vao value cho input
//         // $('.title').css('color','red');
//         // $('#ten').val('chao text');
//         // GOI XU LY O SERVER VER THONG QUA AJAX
//         //ROUTE, METHOD, PARAMS
//         var url = 'http://localhost/banhang/form2';
//         var token = $('#csrf').val();
//        // alert(token);
//         var data = {_token:token};
//         $.post(url,data)
//         .done(function(dulieu){ //chi nhan duy nhat 1 trang thai 200
//             $('#kq').val(dulieu.day);
//             $('#ten').val(dulieu.str);
//             $('.title').css('color',dulieu.color);
//         })
//         .fail(function(dulieu){
//             console.log(dulieu);
//         })
//         // $.ajax({
//         //     'url':url,
//         //     'method':'POST'
//         // });
//     })
// })
$(function(){
    //xu ly cho su kien click vào nut test
    $('#1').click(function(){

        var url= 'http://localhost/banhang/add-to-cart';
        var token= $('#csrf').val();
        var data= {_token:token};
        $.post(url,data)
        .done(function(dulieune){
            //alert(dulieune)
            $('#name').val(dulieune.ten);
            $('#ma').val(dulieune.ma);
            $('#hinh').val(dulieune.hinh);
            $('#gia').val(dulieune.gia);
            $('#slg').val(dulieune.slg);
            $('#slm').val(dulieune.slm);
                 // })
    })

    .fail(function(dulieune){
        console.log(dulieune);
    })

})
})
