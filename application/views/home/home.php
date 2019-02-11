<?php 

if ($this->session->userdata('login') == TRUE) {
	echo "string";
}else{
	redirect(base_url()."home/sign_in");
}


?>


<a href="<?php echo base_url(); ?>home/logout">Salir</a>