<!--

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How to login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://www.wikihow.com/images/thumb/3/39/Log-In-Step-1-Version-2.jpg/aid5601461-v4-728px-Log-In-Step-1-Version-2.jpg.webp" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://www.wikihow.com/images/thumb/5/57/Log-In-Step-2-Version-2.jpg/aid5601461-v4-728px-Log-In-Step-2-Version-2.jpg.webp" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://www.wikihow.com/images/thumb/4/4e/Log-In-Step-3-Version-2.jpg/aid5601461-v4-728px-Log-In-Step-3-Version-2.jpg.webp" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		

		<p class="text-muted">This teaches you how to log into any website on your computer or app on your smartphone, as well as how to log into specific services such as Gmail and Facebook.</p>
		<div class="collapse" id="collapseComment">
		  
		  <div class="card card-body">
		    <h5 class="card-title">Comment</h5>
				<div class="input-group">
					<textarea class="form-control" aria-label="With textarea"></textarea>
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button" id="button-addon2">Write</button>
					</div>
				</div>
				<br>						
				<small>* Lorem ipsum dolor sit amet, consectetur adipiscing elit, </small>
				<small>* sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </small>
				<small>* Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, </small>
		  </div>
		</div>
      </div>
      <div class="modal-footer">
		
      
      	<inline><em>244 VIEWS</em></inline>
      	<a data-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
      		32<i class="material-icons">comment</i>
        </a>
        24<i class="material-icons">share</i> 
   
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>

    </div>
  </div>
</div>
-->

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" id="dynamic-content">

    </div>
  </div>
</div>



<div class="container">
	<h1>
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
				  <img class="card-img-top" src="<?=$result->main_image?>" alt="Card image cap">
				  <div class="card-body">
				    <h1 class="card-text"><?=$result->title?></h1>
				  </div>
				</div>
			<?
			} else {
			?>
				<div class="card card-detail" data-toggle="modal" data-target="#detailModal" data-id = "<?=$result->id?>" id="detailModalToggle">
				  <img class="card-img-top" src="<?=$result->main_image?>" alt="Card image cap">
				  <div class="card-body">
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
	//detailModal
	$(document).on('click', '#detailModalToggle', function(e){

		e.preventDefault();
		var information_id = $(this).data('id'); // get id of clicked row
		//document.write(information_id+ "aa");
		$('#dynamic-content').html(''); // leave this div blank

		$.ajax({
			url: 'getDetail',
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

