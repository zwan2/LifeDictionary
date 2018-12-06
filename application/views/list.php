<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" id="dynamic-content">
			
    </div>
  </div>
</div>


<div class="container">

	<h6 class="text-secondary list-header">Computer</h6>
	<ul class="list-group">
		<a href="" data-toggle="modal" data-target="#detailModal" data-id="1" id="detailModalToggle">
			<li class="list-group-item">
				
					<i class="material-icons icon1">account_circle</i>
					<h5 class="icon-title1">Login in & Join</h5>
			</li>
		</a>
		<a href="" data-toggle="modal" data-target="#detailModal" data-id="1" id="detailModalToggle">
		<li class="list-group-item">
			<i class="material-icons icon2">settings_input_hdmi</i>
			<h5 class="icon-title2">Connect PC to TV with HDMI</h5>
		</li>
		</a>
		<a href="" data-toggle="modal" data-target="#detailModal" data-id="2" id="detailModalToggle">
			<li class="list-group-item">
				<i class="material-icons icon3">wifi</i>
				<h5 class="icon-title3">How to Use Internet via Wifi</h5>
			</li>
		</a>
		
		<a href="" data-toggle="modal" data-target="#detailModal" data-id="3" id="detailModalToggle">
			<li class="list-group-item">
				<i class="material-icons icon4">undo</i>
				<h5 class="icon-title4">How to Wipe Clean a PC</h5>
			</li>
		</a>
		<a href="" data-toggle="modal" data-target="#detailModal" data-id="4" id="detailModalToggle">
			<li class="list-group-item	">
				<i class="material-icons icon5">format_paint</i>
				<h5 class="icon-title5">How to Format a Write?</h5>
			</li>
		</a>
		<a href="">
			<li class="list-group-item">
				<i class="material-icons icon6">more_horiz</i>
				<h5 class="icon-title6">etc</h5>
			</li>
		</a>
	</ul>

	

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

