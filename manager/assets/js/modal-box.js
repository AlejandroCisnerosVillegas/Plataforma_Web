$('.openBtn').on('click',function(){
    $('.modal-body').load('reg.php',function(){
        $('#register').modal({show:true});
    });
});
$('.openBtn2').on('click',function(){
	var view = $(this).data('id');
    $('.modal-body').load('vdt.php?id=' + view,function(){
        $('#view').modal({show:true});
    });
});
$('.openBtn3').on('click',function(){
	var modify = $(this).data('id');
    $('.modal-body').load('mod.php?id=' + modify,function(){
        $('#modify').modal({show:true});
    });
});
$('.openBtn4').on('click',function(){
	var remove = $(this).data('id');
    $('.modal-body').load('rem.php?id=' + remove,function(){
        $('#remove').modal({show:true});
    });
});