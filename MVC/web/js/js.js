$(document).ready(function(){

	//delete category
	$(".delete-category").click(function(){
		
		var id = $(this).attr("id");

		$.post("View/category/request_ajax.php",{category_id: id},
			 function(data){
    		$("p.ajax").text(data);
    	})

		$(this).parent().remove();

		setTimeout(function(){
			$('span.message.successfully').hide();
		},5000)

	})

	//add new blog
	$(".submit_blog").click(function(e){
		e.preventDefault();

		var edit_id = $(this).attr('id');
		var name_blog = $(".name_blog").val();
		var image_blog = $(".image_blog").prop('files')[0].name;
		var category_blog = $(".category_blog").val();
		var content_blog = $(".content_blog").val();
		var author_blog = $(".author_blog").val();

		$(".input-blog").each(function(){
			if(!$(this).val()){
				$(this).next().show();
			}
			else{
				$(this).next().hide();
			}
		})
		
		if(name_blog && image_blog && category_blog && content_blog && author_blog){
			$.post("View/category/request_ajax.php",
			{
				name_blog: name_blog,
				image_blog:image_blog,
				category_blog:category_blog,
				content_blog:content_blog,
				author_blog:author_blog

			},
			 function(data){
    			$(".message.successfully").text(data)
    		})
		}
		
		setTimeout(function(){
			$('span.message.successfully').hide();
		},5000)

	})

	//edit blog
	$(".edit_blog_submit").click(function(e){
		e.preventDefault();
		$(".input-blog").each(function(){
			if(!$(this).val()){
				$(this).next().show();
			}
			else{
				$(this).next().hide();
			}
		})
		var id = $(this).attr('id');
		var name = $(".edit_name_blog").val();
		var image = $(".edit_image_blog").prop('files')[0].name;
		var category = $(".edit_category_blog").val();
		var content = $(".edit_content_blog").val();
		var author = $(".edit_author_blog").val();

			console.log('a');
			$.post("View/category/request_ajax.php",
			{
				edit_blog_name:name,
				edit_blog_image:image,
				edit_blog_category:category,
				edit_blog_content:content,
				edit_author_blog:author,
				edit_blog_id:id
			},
			function(data){
				$(".message.successfully").text(data)
			}
			)

		setTimeout(function(){
		$('span.message.successfully').hide();
	},5000)
		
	})

	//delete blog

	$(".blog_delete").click(function(){
		var id = $(this).attr('id');
		$.post("View/category/request_ajax.php",
			{
				delete_blog_id:id
			},
			function(data){
				$(".message.successfully").text('Xoá Blog thành công');
			}
			)

		$(this).parents('.blog_item').remove();
	})

})