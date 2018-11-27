<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->model('home_model');
		$resultHome = $this->home_model->getHome();
		 	
		$this->load->view('templates/header');
		$this->load->view('index', array('resultHome'=>$resultHome));
		$this->load->view('templates/footer');
	}

	public function list() {
		$this->load->model('list_model');
		$resultList = $this->list_model->getList(1);

		$this->load->view('templates/header');
		$this->load->view('list', array('resultList'=>$resultList));
		$this->load->view('templates/footer');
	}


	public function getDetail() {
    	$information_id = $_GET['information_id'];
    	//$information_id = parse_str($_SERVER['information_id'], $_GET);
    	if(isset($information_id)) {
    		$sql = "SELECT id, title, content, image, (SELECT count(*) FROM comment WHERE info_id = $information_id) AS comment_count FROM information WHERE id = $information_id";
	        $sql2 = "SELECT comment, input_time FROM comment WHERE info_id = $information_id";

	        $query = $this -> db -> query($sql);
	        $query2 = $this -> db -> query($sql2);
	   

			if ($query->num_rows() > 0) {
		        $row = $query->row();
		    };

	        $imageArray = explode(",",$row->image);
	        $count = count($imageArray);



	        ?>



	        <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel"><?=$row->title?></h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="modal-body">

		        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				  	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

				  	<?
				  		for($i=1; $i<$count; $i++) {
				  			?><li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>"></li><?
				  		}
				  	?>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active"><img class="d-block w-100" src="<?=$imageArray[0]?>">
					</div>
				  	
				  	<?
			  		for($i=1; $i<$count; $i++) {
			  			?><div class="carousel-item"><img class="d-block w-100" src="<?=$imageArray[$i]?>"></div><?
			  		}
				  	?>
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
				<p class="text-muted"><?=$row->content?></p>
			
			</div>
			<div class="collapse" id="collapseComment">
		  
				<div class="card card-body">
					<h5 class="card-title">Comment</h5>
					<form method="post" action="makeComment" onsubmit="return comment_check();" name="comment">
						<div class="input-group">
							<textarea class="form-control" aria-label="With textarea" name="comment"></textarea>
							<input type="hidden" name="info_id" value="<?=$row->id?>">
							
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Write</button>
							</div>
						</div>
					</form>
					<br>
					<?
					    foreach ($query2->result() as $row2) {
					    	echo "<small> $row2->comment $row2->input_time </small><br/>";
					    };
				       
					?>
				
				</div>
			</div>

			<div class="modal-footer">
		      	<a data-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
		      		<?=$row->comment_count?><i class="material-icons">comment</i>
		        </a>

		        <a id="kakao-link-btn" href="javascript:sendLink()">
			       <span class="fs-13 text-gray-soft" id="clip_target">친구에게 공유</span>
			      <img id='kakao_share_img' src="//developers.kakao.com/assets/img/about/logos/kakaolink/kakaolink_btn_small.png"/>
			    </a>
		   
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			<?
			

    	}   
    }

    public function makeComment() {
    	$info_id = $_POST['info_id'];
		$comment = $_POST['comment'];
		$user_ip = (string)$_SERVER['REMOTE_ADDR'];
		$input_time = date("y-m-d H:i:s");

    	$sql = "INSERT INTO comment (info_id, comment, user_ip, input_time) VALUES ('$info_id', '$comment', '$user_ip', '$input_time')";
        $query = $this -> db -> query($sql);

        if ($query) {
		   
	        echo "<script>
	        	alert('코멘트가 등록되었습니다.');
	        	window.location.href='/list/1'
	        	</script>";	
	    };
    }


}
