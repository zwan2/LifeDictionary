<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" id="dynamic-content">

    </div>
  </div>
</div>



<div class="container">
	<h1 class="display-2">
		<i class="material-icons list-header-icon">devices_other</i>
		Computers
	</h1>

<?
	$count =0;
	foreach($resultList as $result) {
	
		if($count%2 == 0 ) {
			?>
			<div class="card-deck text-center">

				<div class="card card-detail" data-toggle="modal" data-target="#detailModal" data-id ="<?=$result->id?>" id="detailModalToggle">
				  <img class="card-img" src="<?=$result->main_image?>" alt="Card image cap">
				  <div class="card-body card-img-overlay">
				    <h1 class="card-text"><?=$result->title?></h1>
				  </div>
				</div>
			<?
			} else {
			?>
				<div class="card card-detail" data-toggle="modal" data-target="#detailModal" data-id = "<?=$result->id?>" id="detailModalToggle">
				  <img class="card-img" src="<?=$result->main_image?>" alt="Card image cap">
				  <div class="card-body card-img-overlay">
				    <h1 class="card-text"><?=$result->title?></h1>
				  </div>
				</div>

			</div>
			<?
		}

		$count++;
	
	}
?>


</div>

<script>


function comment_check() {
  var form = document.comment;

  //코멘트
  if(form.comment.value == "") {
    form.comment.focus();
    return false;
  }

}

$(document).ready(function(){
	$('.modal').modal('show');
	//detailModal
	$(document).on('click', '#detailModalToggle', function(e){

		e.preventDefault();
		var information_id = $(this).data('id'); // get id of clicked row
		//document.write(information_id+ "aa");
		$('#dynamic-content').html(''); // leave this div blank

		$.ajax({
			url: './list/getDetail',
			type: 'GET',
			data: 'information_id='+information_id,
			dataType: 'html'
		})
		.done(function(data){
			//console.log(data);
			//document.write(data); 
			$('#dynamic-content').html(''); // blank before load.
			$('#dynamic-content').html(data); // load here
		})
		.fail(function(){
			$('#dynamic-content').html('Something went wrong, Please try again...');
		});

	});

})
</script>

