$(function(){
var page = $("#file").attr("data-path");
var table = $("#file").attr("data-table");
var column = $("#file").attr("data-column");
$('body').on('click','.slider_remove',function(e){
	
	var path = $(this).attr('href');
	var id = $(this).attr('id');
	
	e.preventDefault();
	 var ctx = $(this);
		$.ajax({
		  url:'/'+page+'/remove',
		  data:{path:path,id:id,table:table,column:column },
		  type:'POST',
		  datatype:'JSON',
		    beforeSend: function() {
			ctx.replaceWith('<span  class="replace" style="color:"#000">выполняется..</span>');
           
          },
		  headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
		  success: function(html) {
			 
			  $(this).remove();
			  var r = $('.replace');
	          r.replaceWith('<span style="color:red">удалено</span>');
		  },
		});
})


    var myDropzone = new Dropzone("div#file", {
        url: "/drobsone-send" + "-" + page,
        maxFiles: 500,
        //maxFilesize: 2,

        dictFileTooBig: "Максимальный размер файла - 1 Мб",
        dictMaxFilesExceeded:
            "Достигнут лимит загрузки файлов, разрешено {{maxFiles}}",
        init: function () {
            $(this.element).html(this.options.dictDefaultMessage);
        },
        dictDefaultMessage:
            '<div class="dz-message">Нажмите здесь или перетащите сюда файлы для загрузки</div>',
        acceptedFiles: ".jpg, .jpeg, .png, .gif",
        dictInvalidFileType:
            "Разрешены к загрузке файлы: .jpg, .jpeg, .png, .gif",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (file, responce) {
            $('#drobzone-photo').html(responce);
           
        },
    });

});