<div class="message successfully"></div>
<a href="?c=blog&a=new" class="add-new-blog">Add new</a>
<?php 
$colection = new Blog();

$blog = $colection->getBlog();
?>

<table>
	<tr class="label">
		<td>Id</td>
		<td>Name</td>
		<td>Delete</td>
		<td>Edit</td>
	</tr>

<?php 
foreach ($blog as $item):?>
	<tr class="blog_item">
		<td class="id_blog"><?= $item['id']; ?></td>
		<td class="name_blog"><?= $item['name']; ?></td>
		<td class="delete"><button class="blog_delete" id="<?= $item['id']; ?>">Delete</button></td>
		<td class="edit"><a class="edit_blog" href="?c=blog&a=edit&id=<?= $item['id'];?>">Edit</a></td>
	</tr>
<?php endforeach;?>
</table>


